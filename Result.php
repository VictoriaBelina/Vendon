<?php

class Result extends Model
{
    public function save($testId, $questionId, $answerId, $userId, $endId)
    {
        $db = $this->db->prepare("INSERT INTO `results` (`test_id`, `question_id`, `answer_id`, `user_id`, `end_id`) VALUES (:test, :question, :answer, :uid, :endId)");
        $db->bindValue(':test', (int)$testId, PDO::PARAM_INT);
        $db->bindValue(':question', (int)$questionId, PDO::PARAM_INT);
        $db->bindValue(':answer', (int)$answerId, PDO::PARAM_INT);
        $db->bindValue(':uid', (int)$userId, PDO::PARAM_INT);
        $db->bindValue(':endId', (int)$endId, PDO::PARAM_INT);
        $db->execute();

        return $this->db->lastInsertId();         //Records insert into DB table results
    }
}