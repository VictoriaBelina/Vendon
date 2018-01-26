<?php

class Answer extends Model
{
    public function getById($id)
    {
        $db = $this->db->prepare("SELECT * FROM `tests_answers` WHERE `answer_id`= :id");     //Get answer by ID
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetch();
    }
    
    public function getByQuestionId($id)
    {
        $db = $this->db->prepare("SELECT * FROM `tests_answers` WHERE `question_id`= :qid");    //Get question by ID
        $db->bindValue(':qid', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetchAll();
    }
}