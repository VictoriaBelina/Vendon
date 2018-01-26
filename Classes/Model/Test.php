<?php

class Test extends Model
{
    public function getTests()
    {
        $db= $this->db->prepare("SELECT * FROM `tests`");       //Get all tests from DB 
        $db->execute();

        return $db->fetchAll();
    }

    public function getById($id)
    {
        $db= $this->db->prepare("SELECT * FROM `tests` WHERE `id_test` = ?");    //Get test by ID from DB
        $db->execute([$id]);

        return $db->fetch();
    }
}