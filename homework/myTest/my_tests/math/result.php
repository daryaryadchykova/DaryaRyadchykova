<?php

/*if(isset($_POST['send'])){
    session_start();
    $_SESSION['answerThree']=$_POST['answer'];
    var_dump($_SESSION);
}*/

include 'logics.php';
$correctAnswers=[
    'test_4'=>[4,9,12]
];

/*$correctAnswer=[4,9,12];
if($correctAnswer[0]==$_SESSION['answerOne']
&& $correctAnswer[1]==$_SESSION['answerTwo']
&& $correctAnswer[2]==$_SESSION['answerThree']
){
    echo 'Тест пройден';
}else{
    echo 'Тест не пройден';
}
*/
$userAnswers = $_SESSION["test_{$_POST['testId']}"];

if (!array_diff($userAnswers, $correctAnswers["test_{$testId}"])) {
    echo 'Тест пройден';
} else {
    echo 'Тест не пройден';
}
?>