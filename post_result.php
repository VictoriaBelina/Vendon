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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="container"  background="http://nonessentials.org/wp-content/uploads/2014/01/dots-small-pattern.png">
        <h1 class="back">Thank you <?= $user['name'] ?>!!!</h1>
        <div class="back">
            <p>You finished "<?= $test['Name'] ?>" test.</p>
            <p>You have <?= $endResult['correct_questions'] ?> correct answers from <?= $endResult['total_questions'] ?> questions.</p>
        </div>
        <form method="get" action="index.php">
            <input class="btn btn-default btn-block" type="submit" value="Try again">
        </form>
    </body>
</html>

