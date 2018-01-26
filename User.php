<?php

class User extends Model
{
    public function getById($id)
    {
        $db = $this->db->prepare("SELECT * FROM `user` WHERE `id`= :id");       //Get user id from DB
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetch();
    }

    public function save($name)
    {
        $db = $this->db->prepare("INSERT INTO `user` (`name`) VALUES (:name)");    //Save users name into DB
        $db->bindValue(':name', $name, PDO::PARAM_STR);
        $db->execute();

        return $this->db->lastInsertId();
    }
}