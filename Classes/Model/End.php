<?php

class End extends Model
{
    private $questionModel;

    public function __construct(PDO $db, Question $questionModel)
    {
        parent::__construct($db);
        $this->questionModel = $questionModel;
    }

    public function getById($id)
    {
        $db = $this->db->prepare("SELECT * FROM `end_tests` WHERE `id`= :id");
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();

        return $db->fetch();
    }

    public function incrementCorrect($id)
    {
        $db = $this->db->prepare("UPDATE `end_tests` SET `correct_questions` = `correct_questions` + 1 WHERE `id` = :id");
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();

        return $this->db->lastInsertId();
    }

    public function save($testId, $userId)
    {
        $total = $this->questionModel->getCountByTestId($testId);

        $db = $this->db->prepare("INSERT INTO `end_tests` (`id_test`, `total_questions`, `correct_questions`, `user_id`) VALUES (:test, :total, :correct, :uid)");
        $db->bindValue(':test', $testId, PDO::PARAM_INT);
        $db->bindValue(':total', $total, PDO::PARAM_INT);
        $db->bindValue(':correct', 0, PDO::PARAM_INT);
        $db->bindValue(':uid', $userId, PDO::PARAM_INT);
        $db->execute();

        return $this->db->lastInsertId();
    }
}