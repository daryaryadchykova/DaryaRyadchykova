<?php
/*if(isset($_POST['send'])){
    session_start();
    $_SESSION['answerTwo']=$_POST['answer'];
    // var_dump($_SESSION);
}
*/
include 'logics.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="result.php" method="post">
    <input type="hidden" name="testId" value="4">
    <input type="hidden" name="questionNumber" value="3">
    <p>10+2=?</p>
    <input type="test" name="answer">
    <input type="submit" name="send" value="next">
</form>
</body>
</html>
