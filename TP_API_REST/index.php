<?php
session_start();

require_once "controllers/ApiController.php";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

$apiController = new ApiController;

try {
    if (empty($_GET['page'])) {
        // require "views/accueilView.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                // require "views/accueilView.php";
                echo ("<p> page d'accueil </p>");
                break;
                case "monster":
                    if(!empty($url[1]))
                    {
                        $apiController->urlById($url[1]);
                    }
                    else {
                        throw new Exception('Error 404, monster not found');
                    }
                    break;
            case "monsters":
                {
                    $apiController->stockMonster();
                }
                break;
            case "delete":
                $apiController->supprScore();
                break;
            case "scores":
                if ($url[1] === "score") {
                    echo "hello score";
                }
            case "add":
                $apiController->ajoutScore();
                break;    
              
    }
}
}
 catch (Exception $e) {
    $msg = $e->getMessage();
    // require "views/erreurView.php";
}

