<?php
require_once "models/UserManager.php";
require_once "controllers/GlobalController.php";
class UserController
{
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager;
    }

    public function loginForm()
    {
        require "views/connexion.view.php";
    }
    public function registerForm()
    {
        require "views/register.view.php";
    }

    public function login()
    {
        try {
            if (empty($_POST['pseudo']) || empty($_POST['mdp'])) {
                throw new Exception("Renseignez tous les champs");
                header("location:".URL."connexion");
            }
            $user = $this->userManager->FindUserByPseudoDB($_POST['pseudo']);

            if (!empty($user)) {
                if (password_verify($_POST['mdp'], $user->getMdp())) {
                    $this->sessionUser($user);

                    /////////////////LOS PROBLEMOS/////////////////
                    // $_SESSION['user']['role'] = $user->getId_role();
                    //////////////////////////////////////

                    if (!empty($_POST['remember'])) {
                        // setcookie('user',$user,time()+31556926,null,null,true,true);
                        $userCookie = serialize($user);
                        setcookie('user', $userCookie, time() + 31556926, null, null, true, true);
                    }
                } else {
                    throw new Exception("Mot de passe incorrect");
                }
            } else {
                throw new Exception("L'utilisateur n'existe pas.");
            }
            $_SESSION['pseudo']=$user->GetMdp();
            $SESSION['role']=$user->getId_role();
            GlobalController::alert("success", "Bonjour " . $user->getPseudo());
            

        } catch (Exception $e) {
            GlobalController::alert("danger", $e->getMessage());
        }
        header("Location:" . URL);
    }

    public function register()
    {
        try {
            if (empty($_POST['pseudo']) || empty($_POST['mdp']) || empty($_POST['mdp_confirm'])) {
                throw new Exception("Merci de renseigner tout les champs");
            }
            if ($_POST['mdp'] == $_POST['mdp_confirm']) {
                $userExist = $this->userManager->FindUserByPseudoDB($_POST['pseudo']);
                if (!$userExist) {
                    $hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                    $mail = $_POST['mail'];
                    $this->userManager->insertUserDB($_POST['pseudo'], $hash,$mail);
                } else {
                    throw new Exception("L'utilisateur existe déjà.");
                }
            } else {
                throw new Exception("Les deux mots de passes ne sont pas identiques.");
            }
            $user = new User($this->userManager->lastId(), $_POST['pseudo'], $hash, $mail, 2);
            $this->sessionUser($user);
            GlobalController::alert("success", "Compte crée avec succès");
        } catch (Exception $e) {
            GlobalController::alert("danger", $e->getMessage());
        }
        header("Location: " . URL);
    }

    public function deconnexion()
    {
        session_destroy();
        setcookie('user', "", 1);
        header("location: " . URL);
    }

    public function sessionUser($user)
    {
        $_SESSION['user'] = $user;
    }
}
