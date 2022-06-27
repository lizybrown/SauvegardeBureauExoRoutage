<?php
require_once "models/UserClass.php";
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
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            "id_user"=>$id
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        $user = new User($data->id_user,$data->pseudo,$data->password,$data->id_role);
        return $user;
    }
    public function FindUserByPseudoDB($pseudo){
        $sql = "SELECT * FROM user WHERE pseudo = :pseudo";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":pseudo"=>$pseudo
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($data)){
            $user = new User($data->id_user,$data->pseudo,$data->password,$data->id_role);
            return $user;
        }
        else{
            return null;
        }
    }

    public function insertUserDB($pseudo,$password){
        $sql = "INSERT INTO user (pseudo,password) VALUES (:pseudo,:password)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":pseudo"=>$pseudo,
            ":password"=>$password
        ]);
        return $result;
    }
    public function lastId(){
        $lastId = $this->getDB()->lastInsertId();
        return $lastId;
    }

}