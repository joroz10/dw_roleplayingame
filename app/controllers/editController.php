<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editAction();
}

function editAction() {
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $avatar = $_POST["avatar"];
    $description = $_POST["description"];
    $attack = $_POST["attack"];
    $life = $_POST["life"];
    $weapon = $_POST["weapon"];

    $creature = new Creature();
    $creature->setIdCreature($id);
    $creature->setName($name);
    $creature->setAvatar($avatar);
    $creature->setDescription($description);
    $creature->setAttack($attack);
    $creature->setLife($life);
    $creature->setWeapon($weapon);

    $creatureDAO = new CreatureDAO();
    $creatureDAO->update($creature);

    header('Location: ../../index.php');
}

?>

