<?php
require_once "init.php";

$aId = isset($_POST['answer']) ? (int)key($_POST['answer']) : null;

$answer = $answerModel->getById($aId);     //Call function to get answers
$question = $questionModel->getById($answer['question_id']);      //Call function 

$qnum = (int)$session->get('qnum');        //Get question numbers from session
$session->set('qnum', $qnum + 1);          //Set question number + 1

$endId = $session->get('result');

$resultModel->save(                        //Save results
    $question['id_test'],
    $question['question_id'],
    $aId,
    $session->get('uid'),
    $endId
);

if($answer['correct_answer']) {             //If answer correct, call function to increment correct questions
    $endModel->incrementCorrect($endId);
}

header('Location: post_question.php');      //Redirect to page