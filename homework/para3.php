<?php
if(isset($_POST['send'])){
var_dump($_POST);
    if(isset($_FILES['myFile'])){
        move_uploaded_file($_FILES['myFile']['tmp_name'],'uploads/'.$_FILES['myFile']['name']);

var_dump($_FILES);
    }
}



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
    <form action="para3.php" method="post" enctype="multipart/form-data">
        <p>Name: <input type="text" name="name" placeholder="Введите имя"></p>
        <p>Email: <input type="email" name="email" placeholder="Введите email"></p>
        <p><input type="file" name="myFile"></p>
        <input type="submit" name="send" value="send" />

    </form>
</body>
</html>


<?php
/*
$mas1 = array(1,3,2,6,5,9,6,4,2,3,5);

echo 'Четные: ';
    foreach ($mas1 as $value) {
        if ($value % 2 == 0) {
            echo $value ;
        }
    }
echo '<br />';
    reset($mas1);

echo 'Нечетные: ';
    foreach ($mas1 as $value) {
        if ($value % 2 != 0) {
            echo $value;
        }
    }


/*setcookie('name','Dasha');
var_dump($_COOKIE);die;
?>*/

?>



