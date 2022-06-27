<?php

require_once "Model.php";
require_once "MonsterClass.php";


class ApiManager extends Model {

    private $monsters = [];

    public function ajoutMonster($monster) {
        $this->monsters[] = $monster;
    }

    public function recupMonster() {
    $sql = "SELECT * FROM monster";
    $req = $this->getBdd()->prepare($sql);
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    foreach($data as $value) {
        $newMonsters = new Monster($value->monster_id,$value->name,$value->life,$value->att,$value->def,$value->img,$value->score,$value->role); 
        
        $this->ajoutMonster($newMonsters);
    }
}

public function getMonsterById($monster_id) {
    foreach($this->monsters as $monster) {
        if ($monster->getId() == $monster_id) {
            return $monster;
        }
    }
    return NULL;
}


    /**
     * Get the value of monsters
     */ 
    public function getMonsters()
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     *
     * @return  self
     */ 
    public function setMonsters($monsters)
    {
        $this->monsters = $monsters;

        return $this;
    }

    public function addScore($name,$score){
        $sql = "INSERT INTO monster(name,score) values (:name, :score)";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            ":name"=>$name,
            ":score"=>$score
        ]);
        return $req;
    }


    public function deleteScore($name){
        $sql = "DELETE FROM high_score WHERE name = :name";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([
            ":name"=>$name
        ]);
    }

    }


