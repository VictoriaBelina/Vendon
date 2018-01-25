<?php
require_once "init.php";

$aId = isset($_POST['answer']) ? (int)key($_POST['answer']) : null;

$answer = $answerModel->getById($aId);
$question = $questionModel->getById($answer['question_id']);

$qnum = (int)$session->get('qnum');
$session->set('qnum', $qnum + 1);

$endId = $session->get('result');

$resultModel->save(
    $question['id_test'],
    $question['question_id'],
    $aId,
    $session->get('uid'),
    $endId
);

if($answer['correct_answer']) {
    $endModel->incrementCorrect($endId);
}

header('Location: post_question.php');