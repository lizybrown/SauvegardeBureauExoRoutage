<?php
require_once "models/managers/ArticleManager.php";

class ArticleController
{
    private $articleManager;

    public function __construct()
    {
        $this->articleManager = new ArticleManager;
        $this->articleManager->loadingArticles();
    }

    public function displayArticles()
    {
        $articles = $this->articleManager->getArticles();
        require "views/accueil.view.php";
        unset($_SESSION['alert']);
    }
    public function displayArticle($id_article)
    {
        $article = $this->articleManager->getArticleById($id_article);
        if (empty($article)) {
            throw new Exception("L'article n'existe pas");
        }
        require "views/article.view.php";
        unset($_SESSION['alert']);
    }
    public function deleteArticleById($id_article)
    {
        try {
            $response = $this->articleManager->deleteArticleByIdDB($id_article);
            if (empty($response)) {
                throw new Exception("L'article n'existe pas");
            }
            GlobalController::alert("success", "Article supprimé avec succès");
        } catch (Exception $e) {
            GlobalController::alert("danger", $e->getMessage());
        }
        // MESSAGE DERREUR A RAJOUTEr
        header("Location:" . URL);
    }
    public function addArticleForm()
    {
        require "views/add_article.view.php";
        unset($_SESSION['alert']);
    }

    public function addArticleValid()
    {
        try {
            if (isset($_POST['title']) && isset($_POST['resume']) && isset($_FILES['picture']) && isset($_POST['content'])) {
                // if (preg_replace("/\s+/", "", strip_tags($_POST['content'])) < 100) {
                    if (isset($_COOKIE['user'])) {
                        $idUser = unserialize($_COOKIE['user'])->getId_user();
                    } else {
                        $idUser = $_SESSION['user']->getId_user();
                    }
                    // addimage renvoi soit un 
                    $image = GlobalController::addImage($_POST['title'], $_FILES['picture'], "public/images/uploads/");
                    $this->articleManager->addArticleDB($_POST['title'], $_POST['resume'], $image, $_POST['content'], $idUser);
                // }
                //  else {
                //     throw new Exception("Merci de renseigner un contenu de plus de 100 caractères");
                // }
            } else {
                throw new Exception("Remplissez tout les champs");
            }
            GlobalController::alert("success", "Article ajouté avec succès");
        } catch (Exception $e) {
            GlobalController::alert("danger", $e->getMessage());
            header("Location: " . URL . "article/ajouter");
            exit;
        }

        header("Location: " . URL . "article");
    }
}
