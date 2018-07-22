<?php
$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : $count;
$count++;
setcookie('count', $count, time() +3600*10, '/');
setcookie('last', date('Y-m-d'), time()+3600*10, '/');
include 'independent_session.php';
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

<p>Задача 1:</br>Создайте переменную $name и присвойте ей строковое значение содержащее ваше имя
    Создайте переменную $age и присвойте ей числовое значение
    Выведите: Меня зовут: "ваше имя"
    Выведите: Мой "ваш возраст" лет

    P.S. Каждая фраза должна начинаться с новой строки</p>
<?php
$name='Дарья';
$age=27;
echo 'Меня зовут: '.$name.'</br>';
echo 'Мне '.$age.' лет';
?>
<p>Задача 2:</br> Создайте константу и присвойте ей значение
    Проверьте существует ли константа.
    Выведите значение константы
    Попытайтесь изменить ее значение.</p>
<?php
define('MY_CONST', '1991');         //Объявляем константу
$is=defined('MY_CONST');     //
echo 'Проверка: '.$is.'</br>';
echo 'Значение: '.constant("MY_CONST");
const MY_CONST = '1990';
?>
<p>Задача 3:</br>Создайте переменную $age и присвойте ей значение
    - Напишите конструкцию if, которая выводит фразу:
    "Вам еще работать и работать" при условии что $age попадает в диапазон чисел от 18 до 59 (включительно)
    - Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что $age больше 59
    - Если $age от 1 до 17 то выводите вам еще рано работать
</p>
<?php
$age3=60;
if(59>=$age3 && $age3>=18){
    echo 'Вам еще работать и работать. </br>';
}elseif ($age3>59){
    echo 'Вам пора на пенсию. </br>';
}else
    echo 'Вам еще рано работать.';
?>
<p>Задача 4:</br>Создайте переменную $day и присвойте ей числовое значение
    С помощью конструкции switch выведите фразу "Это рабочий день если $day от 1-5
    Если 6-7 "Это выходной день"
    Если переменная $day не попадает в диапазон выводить неизвестный день</p>
<?php
$day=5;
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день"; break;
    case 6:
    case 7:
        echo "Это выходной день"; break;
    default: echo "Неизвестный день"; break;
}
?>
<p>Задача 5:</br>Вывести все числа, меньшие 10000,
    у которых есть хотя бы одна цифра 3 и которые не делятся на 5</p>
<?php

/*for($i = 0;$i < 10000; $i++){
    if(strpos ($i , '3') !== false && $i % 5 !== 0 ){
        echo $i . "</br>";
    }
}*/
?>
<p>Задача 6:</br>Использую куки выводите информацию о количестве посещений и дате последнего посещения.</p>
<?php
//$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : $count;
//$count++;
//setcookie('count', $count, time() +3600*10, '/');
echo 'Вы посетили эту страницу: '.$count.' раз </br>';

$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'никогда';
//setcookie('last', date('Y-m-d'), time()+3600*10, '/');
echo 'Последний раз вы заходили: '.$last;
?>
<p>Задача 7:</br>Создайте в сессии массив для хранения всех посещенных страниц.
    Выведите в цикле список всех посещенных страниц.</p>
<?php
var_dump($_SESSION);
?>
<p><a href="independ1.php">Страница 1</a></p>
<p>Задача 8:</br>Создайте файл 'test.txt' и запишите в него массив ['name' =>
    'Your name', 'age' => 'Your age'].
    Считайте данные из файла 'test.txt' и выведите их на экран.</p>
<?php
$array = ['name' => 'Дарья', 'age' => '27'];
file_put_contents('independent.txt',serialize($array));
var_dump(unserialize(file_get_contents('independent.txt')));
?>
<p>Задача 9:</br>Даны два упорядоченных по возрастанию массива. Образовать из
    этих двух массивов единый упорядоченный по возрастанию массив.</p>
<?php
$first = [7,3,5,1,9];
$second = [2,10,6,8,4];
asort($first);
asort($second);
print_r($first);
echo '</br>';
print_r($second);
echo '</br>';
$result = array_merge($first, $second);
asort($result);
print_r($result);
?>
<p>Задача 10:</p>
    Написать функцию сортировки пузырьком, с возможностью доп. фильтрации результатов с помощью callback функции
(для дополнительной фильтрации использована проверка на четность)</br>
<?php
/*Суть сортировки массивов методом пузырька сводится к тому,
что просто перебирается массив до тех пор пока все элементы не будут стоять от меньшего к большему,
а так же при сортировке можно менять только два рядом стоящих элемента.*/

$array=[1, 0, 6, 9, 4,-4, 5, 2, 3, 8, 7,20];
echo '<pre>';
$bubbles=getBubbles($array, function ($items){
    $result=[];
    //формируем массив с четными
    foreach ($items as $item){
        if(!( $item % 2)){
            $result[]=$item;
        }
    }
    return $result;
});
var_dump($bubbles);die;

function getBubbles(array $array, callable $callback=NULL){
    $result=[];
    //сортировка пузырьком
    for ($j = 0; $j < count($array) - 1; $j++){
        for ($i = 0; $i < count($array) - $j - 1; $i++){
            // если текущий элемент больше следующего
            if ($array[$i] > $array[$i + 1]){
                // меняем местами элементы
                $tmp_var = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $tmp_var;
                $result=$array;
            }
        }
    }
    //проверяем наличие функции обратного вызова
    if($callback) {
        $result=call_user_func($callback, $result);
        //получаем результат из колбэка
    }
    return $result;
}
?>
</body>
</html>
