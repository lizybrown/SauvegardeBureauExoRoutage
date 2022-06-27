<?php

require_once "models/LivreManager.php";
require_once "controllers/GlobalController.php";

class LivreController {

    private $livreManager;

    public function __construct() {
        $this->livreManager = new LivreManager();
        $this->livreManager->chargementLivres();
    }

    public function afficherLivres() {
        $livres = $this->livreManager->getLivres();
        require "views/livresView.php";
    }

    public function afficherLivre($id) {
        if (isset($_SESSION['user'])){
      ($livre = $this->livreManager->getLivreById($id));
        require "views/afficherLivreView.php";
        }
        if (!$livre) {
            throw new Exception('Le livre que vous recherchez n\'existe pas.');
    }
    
}



    public function ajoutLivre() {
        if (isset($_SESSION['role']) && $_SESSION['role']===1){
        require "views/ajoutLivreView.php";   
    } 
    throw new Exception('Vous n\'avez pas les droits pour cette effectuer cette action.'); 
    }

    public function ajoutLivreValidation() {
        // if ($_SESSION['user']['role'] == 1){
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $image = GlobalController::ajoutImage($_POST['titre'],$file,$repertoire);
        $this->livreManager->ajoutLivreBD($_POST['titre'],$_POST['nbPages'],$image);
        header("location:".URL."livres");
        // }
        
        throw new Exception('Vous n\'avez pas les droits pour cette effectuer cette action.');
    }

    public function supprimerLivre($id) {
        if ($_SESSION['user']['role'] == 1){
        $monImage = $this->livreManager->getLivreById($id)->getImage();
        unlink("public/images/".$monImage);
        $this->livreManager->supprimerLivreBD($id);
        GlobalController::alert("success","Livre supprimé");
        header("location:".URL."livres");
    }
}

    public function modifierLivre($id) {
        $livre = $this->livreManager->getLivreById($id);
        require "views/modifierLivreView.php";
    }

    public function modifierLivreValider() {
        $imgActuelle = $this->livreManager->getLivreById($_POST['id'])->getImage();
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            unlink("public/images/".$imgActuelle);
            $repertoire = "public/images/";
            $imgToAdd = GlobalController::ajoutImage($_POST['titre'],$file,$repertoire);
        } else {
            $imgToAdd = $imgActuelle;
        }
        $this->livreManager->modifierLivreBD($_POST['id'],$_POST['titre'],$_POST['nbPages'],$imgToAdd);
        header("location:".URL."livres");
    }

}