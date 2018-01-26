<?php
require_once 'init.php';

$uid = $userModel->save($_GET['name']);
$session->set('uid', $uid);               //Set to session user name

$testId = (int)(isset($_GET['test']) ? $_GET['test'] : 1);
$session->set('test', $testId);           //Set to session test number

$resultId = $endModel->save($testId, $uid);
$session->set('result', $resultId);      //Set to session results

$result = $endModel->getById($resultId);
$session->set('count', $result['total_questions']);     //Set to session total number of questions

header('Location: post_question.php');     //Turn to choosen file