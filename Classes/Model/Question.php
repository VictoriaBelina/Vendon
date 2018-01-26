<?php

class Question extends Model
{
    public function getById($id)
    {
        $db = $this->db->prepare("SELECT * FROM `tests_questions` WHERE `question_id`= :id");    //Get question by ID from DB
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetch();
    }

    public function getCountByTestId($testId)
    {
        $db = $this->db->prepare("SELECT COUNT(*) FROM `tests_questions` WHERE `id_test`= :test");    
        $db->bindValue(':test', $testId, PDO::PARAM_INT);
        $db->execute();

        return $db->fetchColumn();
    }

    public function getByTestIdAndOffset($testId, $qnum)
    {
        $db = $this->db->prepare("SELECT * FROM `tests_questions` WHERE `id_test`= :test ORDER BY `question_id` DESC LIMIT :qnum, 1");  //Get question by test id , order by question ID and get by question number one record
        $db->bindValue(':test', $testId, PDO::PARAM_INT);
        $db->bindValue(':qnum', $qnum, PDO::PARAM_INT);
        $db->execute();

        return $db->fetch();
    }
}