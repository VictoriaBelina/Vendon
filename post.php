<?php
require_once 'init.php';

$uid = $userModel->save($_GET['name']);
$session->set('uid', $uid);

$testId = (int)(isset($_GET['test']) ? $_GET['test'] : 1);
$session->set('test', $testId);

$resultId = $endModel->save($testId, $uid);
$session->set('result', $resultId);

$result = $endModel->getById($resultId);
$session->set('count', $result['total_questions']);

header('Location: post_question.php');