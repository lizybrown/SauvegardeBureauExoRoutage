<?php
// bdd name : tp_poo_mvc
// image, livre, nombre de pages, actions


require_once "ModelClass.php";
require_once "LivreClass.php";

class LivreManager extends Model {

    private $livres = [];

    public function ajoutLivre($livre) {
        $this->livres[] = $livre;
    }

    public function getLivres() {
        return $this->livres;
    }

    public function getLivreById($id) {
        foreach($this->livres as $livre) {
            if ($livre->getId() === $id) {
                return $livre;
            }
        }
    }

    public function chargementLivres() {
        $sql = "SELECT * FROM livre";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        foreach($data as $value) {
            $add = new Livre($value->id,$value->titre,$value->nbPages,$value->image);
            $this->ajoutLivre($add);
        }
    }


    /////////////////////////////////////////////
    public function ajoutLivreBD($titre,$nbPages,$image){
        $sql = "INSERT INTO livre (titre, nbPages, image) values (:titre,:nbPages,:image)";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            ":titre"=>$titre,
            ":nbPages"=>$nbPages,
            ":image"=>$image
        ]);
    }

    public function supprimerLivreBD($id) {
        $sql = "DELETE FROM livre WHERE id = :id";
        $req = $this->getBdd()->prepare($sql);
        $result = $req->execute([
            ":id" => $id
        ]);
        if($result){
            $bookToDelete = $this->getLivreById($id);
            unset($bookToDelete);
        }
        return "delete complete";
    }
    

    public function modifierLivreBD($id,$titre,$nbPages,$image) {
        $sql = "UPDATE livre SET titre = :titre, nbPages = :nbPages, image = :image WHERE id = :id";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            ":titre" => $titre,
            ":nbPages" => $nbPages,
            ":image" => $image,
            ":id" => $id
        ]);
    }
}
