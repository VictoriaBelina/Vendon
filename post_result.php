<?php
require_once 'init.php';
$user = $userModel->getById($session->get('uid'));
$endResult = $endModel->getById($session->get('result'));
$test = $testModel->getById($endResult['id_test']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Test </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Thank you <?= $user['name'] ?>!!!</h1>
        <p>You finished "<?= $test['Name'] ?>" test.</p>
        <p>You have <?= $endResult['correct_questions'] ?> correct answers from <?= $endResult['total_questions'] ?> questions.</p>
        <form method="get" action="index.php">
            <input type="submit" value="Try again">
        </form>
    </body>
</html>

