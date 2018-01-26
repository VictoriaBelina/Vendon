<?php
require_once'config.php';                           //Require once to include all classes
require_once'functions.php';                         
                                                       
require_once 'Classes/Session.php';                     
require_once 'Classes/Model/Model.php';
require_once 'Classes/Model/Test.php';
require_once 'Classes/Model/Question.php';
require_once 'Classes/Model/Answer.php';
require_once 'Classes/Model/User.php';
require_once 'Classes/Model/Result.php';
require_once 'Classes/Model/End.php';

$testModel = new Test(getDb());                       
$questionModel = new Question(getDb());
$answerModel = new Answer(getDb());
$userModel = new User(getDb());
$resultModel = new Result(getDb());
$endModel = new End(getDb(), $questionModel);
$session = new Session();
