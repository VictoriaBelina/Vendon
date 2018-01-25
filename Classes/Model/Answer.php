<?php

class Answer extends Model
{
    public function getById($id)
    {
        $db = $this->db->prepare("SELECT * FROM `tests_answers` WHERE `answer_id`= :id");
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetch();
    }
    
    public function getByQuestionId($id)
    {
        $db = $this->db->prepare("SELECT * FROM `tests_answers` WHERE `question_id`= :qid");
        $db->bindValue(':qid', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetchAll();
    }
}