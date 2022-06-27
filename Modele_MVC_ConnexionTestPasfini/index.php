<?php
session_start();

require_once "controllers/LivreController.php";
require_once "controllers/UserController.php";
// require_once "views/template.php";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

$livreController = new LivreController;
$userController = new UserController;

try {
    if (empty($_GET['page'])) {
        require "views/accueilView.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                require "views/accueilView.php";
                break;
            case "livres":
                if (empty($url[1])) {
                    $livreController->afficherLivres();
                } else if ($url[1] === "modifier") {
                    $livreController->modifierLivre($url[2]);
                } else if ($url[1] === "modifValider") {
                    $livreController->modifierLivreValider();
                }
                else if ($url[1] === "ajouter") {
                    $livreController->ajoutLivre();
                } else if ($url[1] === "lire") {
                    $livreController->afficherLivre($url[2]);
                } else if ($url[1] === "valider") {
                    $livreController->ajoutLivreValidation();
                } elseif
                ($url[1] == 'delete') {
                    $livreController->supprimerLivre($url[2]);
                }
                else {
                    throw new Exception('Error 404, livres not found');
                }
                    break;
                    
            case "connexion":
                $userController->loginForm();
                break;
            case "connexion_valid":
                // var_dump($_POST);exit;
                $userController->login();
                break;
            case "register":
                $userController->registerForm();
                break;
            case "register_valid":
                $userController->register();
                break;
            case "deconnexion":
                $userController->deconnexion();
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "views/erreurView.php";
}
