<?php
/*if(isset($_POST['send'])){
    session_start();
    $_SESSION['answerTwo']=$_POST['answer'];
     var_dump($_SESSION);
}*/


if (isset($_POST['answer']) && $_POST['testId'] && $_POST['questionNumber']) {
    session_start();
    $testId = $_POST['testId'];
    $questionNumber = $_POST['questionNumber'];

    $_SESSION["test_{$testId}"]["answer{$questionNumber}"] = $_POST['answer'];

}
