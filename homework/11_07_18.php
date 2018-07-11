<?php

$var="hello world"; ?>
<?php;?>

<?php
// Дата выполнения: 10.07.2018
/*Задание выполнила:
Рядчикова Дарья*/



;?>

<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $var; ?>
    </title>
</head>

<p>Задание 1</p>
</br>
<!-- Задание 1 -->
<h1><?php echo '<p> Доброе утро!!! </p>'; ?></h1>
</br>
<p>Задание 2</p>
</br>
<!-- Задание 2 -->

<?php
$tvChannelName='Discovery';
$manufacturerAddress='г.Краматорск, ул.Парковая, д.9';
$carColor='черный';
$waterTemperature='+25C';
$phoneModel='HUAWEI MT7-TL10';
echo ' $tvChannelName=\'Discovery\';'.'</br>';
echo '$manufacturerAddress=\'г.Краматорск, ул.Парковая, д.9\';'.'</br>';
echo '$carColor=\'черный\';'.'</br>';
echo '$waterTemperature=\'+25C\';'.'</br>';
echo '$phoneModel=\'HUAWEI MT7-TL10\';'.'</br>';
?>
</br>
<p>Задание 3</p>
</br>
<!-- Задание 3 -->

<?php
$value1=3;
$value2=5;
$value3=8;

echo 'Значение1= '.$value1.';'.'</br>';
echo 'Значение2= '.$value2.';'.'</br>';
echo 'Значение3= '.$value3.';'.'</br>';

$amount=$value1+$value2+$value3;
echo 'Сумма значений= '.$amount.';'.'</br>';

$result=2+6+(2/5)-1;
echo '2+6+2/5-1= '.$result.';'.'</br>';
?>
</br>
<p>Задание 4</p>
</br>
<!--  Задание 4 -->
<?php
$a=1;
$b=2;
echo 'Переменная a= '.$a.';'.'</br>';
echo 'Переменная b= '.$b.';'.'</br>';
$c=$a;
echo 'Переменная c= '.$c.';'.'</br>';
$d= & $b;
print ('c= '.$c.';'.'d= '.$d).'</br>';
$a=3;
$b=4;
print ('a= '.$a.';'.'b= '.$b.';'.'c= '.$c.';'.'d= '.$d ).'</br>';
/*Выводы: */
?>
</br>
<p>Задание 5</p>
</br>
<!--  Задание 5 -->
<?php
define('DISTANCE_POINT1',41);
define('DISTANCE_POINT2',33);
$totalDistances=(DISTANCE_POINT1+DISTANCE_POINT2);
echo $totalDistances;
//define('DISTANCE_POINT1',42);- константа назначена ранее.Повторное переназначение не даст эффекта.
?>
</br>
<p>Задание 6</p>
</br>

<!--  Задание 6 -->
<?php
$a = 152;
$b1 = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

echo ('$a= '.$a.' - integer').'</br>';
echo ('$b='.$b1.' - string').'</br>';
echo ('$c='.$c.' - string').'</br>';
echo ('$d=array('.$d[0].') - array').'</br>';
echo ('$e= '.$e.' - float').'</br>';
echo('$f=').$f.'    - boolean(false)'.'</br>';
echo('$g=').$g.' -boolean(true)'.'</br>';
?>
</br>
<p>Задание 7</p>
</br>

<!--  Задание 7 -->
<?php
$absentStudents=5;
$totalStudents=10;
//Вариант решения
echo ($absentStudents.' из '.$totalStudents.'ти посетили лекцию').'</br>';
//Вариант решения 2
echo ("{$absentStudents} из {$totalStudents} ти посетили лекцию").'</br>';
?>
</br>
<p>Задание 8</p>
</br>

<!--  Задание 8 -->
<?php
$goodMorning='Доброе утро';
$ladies='дамы';
$gentlemen='и господа';
echo ($goodMorning).'</br>';
echo ($ladies).'</br>';
echo ($gentlemen).'</br>';
echo($goodMorning.', '.$ladies.' '.$gentlemen.'!').'</br>';
?>
</br>
<p>Задание 9</p>
</br>
<!--  Задание 9 -->
<?php
$arrayFirst = array(1, 2, 3, 4, "element" => 5);
$arrayTwo = array(6, 7, 8, 9, 10);
unset($arrayTwo[0]);
echo $arrayFirst[2] . '</br>';
echo $arrayTwo[2] . '</br>';
foreach($arrayFirst as $total1){echo ($total1) . '</br>';};
foreach($arrayTwo as $total2){echo ($total2) . '</br>';};
echo 'Элементы 1-го массива - ' . count($arrayFirst) . '</br>';
echo 'Элементы 2-го массива - ' . count($arrayTwo) . '</br>';
?>
</br>
<p>Задание 10</p>
</br>
<!--  Задание 10 -->
<?php
define("MIN","10");
define("MAX","50");
$x=12;

if (MIN<$x && $x<MAX) {
    echo "+";
} elseif (MIN==$x||$x==MAX) {
    echo "+-";
} else {
    echo "-";
}
?>
</br>
<p>Задание 11</p>
</br>
<!--  Задание 11 -->
<?php
//10x^2 + 21x - 10 = 0;
$aa=10;
$bb=21;
$cc=-10;
$dd = (pow($bb,2))- (4 * $aa * $cc);
$s= sqrt($dd);
if ($dd > 0){
    $x1 = ((-1 * $bb) - $s)/(2 * $aa);
    $x2 = ((-1 * $bb) + $s) /(2 * $aa);
    echo 'x1 = ' . $x1 . '</br>';
    echo 'x2 = ' . $x2 . '</br>';
} elseif ($dd == 0) {
    $x3 = (-1 * $bb) / (2*$aa);
    echo 'Уравнение имеет 1 действительный корень x = ' . $x3 . '</br>';
} elseif ($dd < 0) {
    echo 'Уравнене не имеет корней' . '</br>';
}

?>
</br>

</body>
</html>
