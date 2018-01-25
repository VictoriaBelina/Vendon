<?php
require_once 'init.php';

$testId = (int)$session->get('test');
$test = $testModel->getById($testId);

$qnum = $session->get('qnum');
if(!$qnum){
    $qnum = 0;
}
$session->set('qnum', $qnum);

$question = $questionModel->getByTestIdAndOffset($testId, $qnum);
if(!$question){
    header('Location: post_result.php');
}
$answers = $answerModel->getByQuestionId($question['question_id']);



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Test "<?= $test['Name'] ?>" Question <?= $qnum+1 ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="http://nonessentials.org/wp-content/uploads/2014/01/dots-small-pattern.png">
    <div class="container back">
        <div class="row">
            <h1>Test name: "<?= $test['Name'] ?>" Question: <?= $qnum+1 ?> of <?= $session->get('count'); ?></h1>
        </div>
        <div class="row">
            <h2>Question: <?= $question['question'] ?></h2>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <form name="question" class="form-question form-group" method="post" action="post_answer.php">
                <?php foreach ($answers as $answer) { ?>
                    <div class="form-group">
                        <input class="btn btn-default btn-block" type="submit" name="answer[<?= $answer['answer_id'] ?>]" value="<?= $answer['answer'] ?>">
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>

