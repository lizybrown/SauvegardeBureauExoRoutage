<?php

class Monster {

    private $monster_id;
    private $name;
    private $life;
    private $att;
    private $def;
    private $img;
    private $score;
    private $role;


    public function __construct($monster_id,$name,$life,$att,$def,$img,$score,$role) {
        $this->monster_id = $monster_id;
        $this->name = $name;
        $this->life = $life;
        $this->att = $att;
        $this->def = $def;
        $this->img = $img;
        $this->score = $score;
        $this->role = $role;
    }

    public function getId() {
        return $this->monster_id;
    }
    public function setId($monster_id) {
        $this->id = $monster_id;
    }

    public function getName() {
        return htmlspecialchars($this->name);
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getLife() {
        return $this->life;
    }
    public function setLife($life) {
        $this->life = $life;
    }

    public function getAtt() {
        return $this->att;
    }
    public function setAtt($att) {
        $this->att = $att;
    }

    public function getDef() {
        return $this->def;
    }
    public function setDef($def) {
        $this->def = $def;
    }

    public function getImg() {
        return $this->img;
    }
    public function setImg($img) {
        $this->img = $img;
    }

    public function getScore() {
        return $this->score;
    }
    public function setScore($score) {
        $this->score = $score;
    }

    public function getRole() {
        return $this->role;
    }
    public function setRole($role) {
        $this->role = $role;
    }

}