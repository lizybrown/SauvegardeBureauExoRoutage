<?php
require_once "controllers/ArticleController.php";
require_once "controllers/UserController.php";
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

$articleController = new ArticleController;
$userController = new UserController;
try {
    if(isset($_GET['page'])){
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    }
    // si GET page est vide on redirige vers l'accueil
    if (empty($url[0])) {
        $articleController->displayArticles();
    } else {
        //switch de GET page pour savoir vers quelle page renvoyer l'utilisateur
        switch ($url[0]) {
            case "article":
                if(empty($url[1])){
                    $articleController->displayArticles();
                }
                if($url[1]=='lire'){
                    if(!empty($url[2])){
                        $articleController->displayArticle($url[2]);    
                    }
                    else{
                        throw new Exception("Merci de selectionner un article");
                    }
                }
                elseif($_SESSION['user']->getId_role()==1){
                    if($url[1]=='delete'){
                        $articleController->deleteArticleById($url[2]);
                        break;
                    }elseif($url[1]=="ajouter"){
                        $articleController->addArticleForm();
                    }
                    elseif($url[1]=="ajouter_valid"){
                        $articleController->addArticleValid();
                    }
                }
                else{
                    throw new Exception("La page n'existe pas");
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
            default :   throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
  
    echo $e->getMessage();
    
    //  require "views/error.view.php";
}
