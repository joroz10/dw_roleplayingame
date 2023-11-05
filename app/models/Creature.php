<?php

class Creature {

    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attack;
    private $life;
    private $weapon;

    public function __construct() {
        
    }

    public function getIdCreature() {
        return $this->idCreature;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getLife() {
        return $this->life;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setIdCreature($idCreature): void {
        $this->idCreature = $idCreature;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setAvatar($avatar): void {
        $this->avatar = $avatar;
    }

    public function setAttack($attack): void {
        $this->attack = $attack;
    }

    public function setLife($life): void {
        $this->life = $life;
    }

    public function setWeapon($weapon): void {
        $this->weapon = $weapon;
    }



//Función para pintar cada criatura
    function creature2HTML() {
        $result = '<div class=" col-md-4 ">';
        $result .= '<div class="card ">';
        $result .= ' <img class="card-img-top rounded mx-auto d-block avatar" src=' . $this->getAvatar() . ' alt="Card image cap">';
        $result .= '<div class="card-block">';
        $result .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $result .= '<p class=" card-text description">' . $this->getDescription() . '</p>';
        $result .= '</div>';
        $result .= ' <div  class=" btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-secondary" href="app/views/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '<a type="button" class="btn btn-success" href="app/views/edit.php?id=' . $this->getIdCreature() . '">Modificar</a> ';
        $result .= '<a type="button" class="btn btn-danger" href="app/controllers/deleteController.php?id=' . $this->getIdCreature() . '">Borrar</a> ';
        $result .= ' </div>';
        $result .= '</div>';
        $result .= '</div>';

        return $result;
    }

}
