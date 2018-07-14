<!DOCTYPE html>
<br lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>
    </title>
</head>
<body>

<p>Задача 1:</br>
    Дана строка 'HelloWorld'. Сделайте из нее строку 'HELLOWORLD'.
</p>
<?php
$str='HelloWorld';
$str=strtoupper($str);
echo $str;
?>

<p>
Задача 2:</br>
В переменной $date лежит дата в формате '23-11-2035'. Преобразуйте эту дату в формат '2035.11.'.
</p>
<?php
$data='23-11-2035';
echo date('Y.m',strtotime($data));
?>

<p>Задача 3:</br>
    Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
</p>
<?php

echo $html=substr('html css php',0,4).'</br>';
echo $css=substr('html css php',5,3).'</br>';
echo $php=substr('html css php',9,3).'</br>';

?>
<p>Задача 4:</br>
    Дана строка '30.11.2016'. Замените все точки на дефисы
</p>
<?php
 $str='30.11.2016';
 $newStr=str_replace('.','-',$str);
 echo $newStr;
?>
<p>Задача 5:</br>
    Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть.
    Сделайте так, чтобы в конце этой строки гарантировано стояла точка.
    То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
    Задачу решите без всяких ифов.
     </p>
<?php
$str= 'слова слова слова';
$str=rtrim($str, '.').'.';
echo $str;
?>

<p>Задача 6:</br>
    Создайте массив, заполненный числами от 1 до 100.
    Найдите сумму элементов данного массива.
    (Повторяю использовать функции)
     </p>
<?php
$array = range(1, 100);
$total = array_sum($array);
echo $total;
?>
<p>Задача 7:</br>
    Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
    </p>
<?php
$array = range(1, 100);
if(in_array(3,$array,true)){
    echo 'Значение найденно';
}else{
    echo 'Значение не найденно';
};
?>

<p>Задача 8:</br> Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'.
    Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
     </p>
<?php
$arrayNumber=[1,2,3];
$arrayLet=['a','b','c'];
$result=array_merge($arrayNumber,$arrayLet);
print_r($result);
?>

<p>Задача 9:</br>
    Дан массив 'a'=>1, 'b'=>2, 'c'=>3'.
    Запишите в массив $keys ключи из этого массива, а в $values – значения.
     </p>
<?php
$array = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($array);
$values = array_values($array);
print_r($keys);
print_r($values);
?>

<p>Задача 10:</br>
    Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы. </p>
<?php
$array=['a','b','c','b','a'];
$result= array_unique($array);
print_r($result);
?>
</body>
</html>
