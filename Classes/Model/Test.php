<?php

class Test extends Model
{
    public function getTests()
    {
        $db= $this->db->prepare("SELECT * FROM `tests`");
        $db->execute();

        return $db->fetchAll();
    }

    public function getById($id)
    {
        $db= $this->db->prepare("SELECT * FROM `tests` WHERE `id_test` = ?");
        $db->execute([$id]);

        return $db->fetch();
    }
}