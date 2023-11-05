<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '/../conf/PersistentManager.php');

class CreatureDAO {

    //Se define una constante con el nombre de la tabla
    const CREATURE_TABLE = 'creatures';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $creatures = array();
        while ($creatureBD = mysqli_fetch_array($result)) {

            $creature = new Creature();
            $creature->setIdCreature($creatureBD["idCreature"]);
            $creature->setName($creatureBD["name"]);
            $creature->setDescription($creatureBD["description"]);
            $creature->setAvatar($creatureBD["avatar"]);
            $creature->setAttack($creatureBD["attackPower"]);
            $creature->setLife($creatureBD["lifeLevel"]);
            $creature->setWeapon($creatureBD["weapon"]);
            
            array_push($creatures, $creature);
        }
        return $creatures;
    }

    public function insert($creature) {
        $query = "INSERT INTO " . CreatureDAO::CREATURE_TABLE .
                " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attack = $creature->getAttack();
        $life = $creature->getLife();
        $weapon = $creature->getWeapon();
        
        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar, $attack, $life, $weapon);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT name, description, avatar, attackPower, lifeLevel, weapon FROM " . CreatureDAO::CREATURE_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar, $attack, $life, $weapon);

        $creature = new Creature();
        while (mysqli_stmt_fetch($stmt)) {
            $creature->setIdCreature($id);
            $creature->setName($name);
            $creature->setDescription($description);
            $creature->setAvatar($avatar);
            $creature->setAttack($attack);
            $creature->setLife($life);
            $creature->setWeapon($weapon);
       }

        return $creature;
    }

    public function update($creature) {
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLE .
                " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
                . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description= $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attack = $creature->getAttack();
        $life = $creature->getLife();
        $weapon = $creature->getWeapon();
        $id = $creature->getIdCreature();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $name, $description, $avatar, $attack, $life, $weapon, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

        
}

?>
