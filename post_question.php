<?php
require_once 'init.php';

$testId = (int)$session->get('test');
$test = $testModel->getById($testId);

$qnum = $session->get('qnum');
if(!$qnum){
    $qnum = 1;
}
$session->set('qnum', $qnum);

$question = $questionModel->getByTestIdAndOffset($testId, $qnum);
if(!$question){
    header('Location: post_result.php');
}
$answers = $answerModel->getByQuestionId($question['question_id']);



?>

<!DOCTYPE html>
<html>
<head>
    <title>Test "<?= $test['Name'] ?>" Question <?= $qnum ?></title>
</head>
<body>
    <h1>Test name: "<?= $test['Name'] ?>" Question: <?= $qnum ?> of <?= $session->get('count'); ?></h1>
    <h2>Question: <?= $question['question'] ?></h2>
    <form name="question" method="post" action="post_answer.php">
        <?php foreach ($answers as $answer) { ?>
            <p>
                <input type="submit" name="answer[<?= $answer['answer_id'] ?>]" value="<?= $answer['answer'] ?>">
            </p>
        <?php } ?>
    </form>
</body>
</html>

