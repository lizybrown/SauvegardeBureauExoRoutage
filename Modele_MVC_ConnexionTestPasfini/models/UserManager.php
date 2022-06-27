<?php
require_once "models/UsersClass.php";
require_once "models/ModelClass.php";
class UserManager extends Model{
        
    /**
     * FindUserById
     *
     * @param  mixed $id
     * @return user by id
     */
    public function FindUserByIdDB($id){
        $sql = "SELECT * FROM user WHERE id_user = :id_user";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            "id_user"=>$id
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        $user = new User($data->id_user,$data->pseudo,$data->mdp,$data->id_role,$data->mail);
        return $user;
    }
    public function FindUserByPseudoDB($pseudo){
        $sql = "SELECT * FROM user WHERE pseudo = :pseudo";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            ":pseudo"=>$pseudo
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($data)){
            $user = new User($data->id_user,$data->pseudo,$data->mdp,$data->id_role,$data->mail);
            return $user;
        }
        else{
            return null;
        }
    }

    public function insertUserDB($pseudo,$mdp){
        $sql = "INSERT INTO user (pseudo,mdp) VALUES (:pseudo,:mdp)";
        $req = $this->getBdd()->prepare($sql);
        $result = $req->execute([
            ":pseudo"=>$pseudo,
            ":mdp"=>$mdp
        ]);
        return $result;
    }
    public function lastId(){
        $lastId = $this->getBdd()->lastInsertId();
        return $lastId;
    }

}