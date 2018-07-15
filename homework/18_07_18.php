<?php
$name = 'С возвращением, дружище';
setcookie('hello',$name,time() + (3600 * 10)); //10 часов в секундах
$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : 0;
    $count++;
setcookie('last', date('Y-m-d H:i:s'), time()+3600*10, '/');
setcookie('count', $count, time() + 60 * 60 * 24 * 366, '/');
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
<p>Задача 1:</br> Время жизни cookie
    Пользователь приходит на сайт. Используя cookie сделать так, что б впервые пришедший
    пользователь видел фразу:
    "Добро пожаловать, новичек!"
    Если пользователь уже посещал сайт в течении последних 10-ти часов, выводить фразу:
    "С возвращением, дружище!"
    Подсказка: Используйте инструменты для разработчиков Вашего браузера для просмотра и
    очистки текущих значений cookie.</p>
<?php

//$name = 'С возвращением, дружище';
//setcookie('hello',$name,time() + (3600 * 10)); //10 часов в секундах
if( $_COOKIE['hello'] != '' ){
    echo $_COOKIE['hello'] . '!';
}else{
    $name='Добро пожаловать, новичек!';
    echo $name;
};
?>

<p>Задача 2:</br> Дата и время последнего посещения
    Используя cookie реализовать вывод на страницу сообщения с датой и временем последнего
    визита.</p>

<?php

$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'никогда';
//setcookie('last', date('Y-m-d H:i:s'), time()+3600*10, '/');
echo 'Последний раз вы заходили: '.$last;
?>

<p>Задача 3:</br> Счетчик посещений
    Используя cookie реализовать вывод на страницу сообщения с количеством посещений
    страницы.</p>

<?php
//$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : $count;
//$count++;
//setcookie('count', $count, time() + 60 * 60 * 24 * 366, '/');
echo 'Вы посетили эту страницу: '.$count.' раз';
?>


</body>
</html>


