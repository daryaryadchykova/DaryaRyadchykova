
<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    </title>
</head>
<body>



<?php
echo ('<p>'.'Задача 1'.'</p>'). '</br>';

$products=array(
        ['name'=>'Телевизор','price'=>'400','quantity'=>1],
        ['name'=>'Телефон','price'=>'300','quantity'=>3],
        ['name'=>'Ноутбук','price'=>'150','quantity'=>2]);

function basket($products){
    $totalPrice = 0;
    $totalQuantity = 0;
        foreach ($products as $product) {
            $totalPrice += $product['price']*$product['quantity'];
            $totalQuantity += $product['quantity'];
        }
    $basket = array($totalQuantity,$totalPrice);
    return  $basket;
}

$basket = basket($products);
echo ('Количество покупок: ').$basket[0].'</br>';
echo 'Сумма Вашего заказа: '.$basket[1].'</br>';



echo ('<p>'.'Задача 2'.'</p>'). '</br>';
echo ('10x^2 + 21x - 10 = 0;'). '</br>';

$a = 10;
$b = 21;
$c = -10;

function equation ($a, $b, $c){
    $d = ($b ** 2) - (4 * $a * $c);

    if ($d > 0){
        $x1 = ((-1 * $b) - sqrt($d)) / (2 * $a);
        $x2 = ((-1 * $b) + sqrt($d)) / (2 * $a);
        return [$x1, $x2];
    } elseif ($d == 0) {
        $x3= (-1 * $b) / (2*$a);
        return [$x3];
    } else {
        return false;
    }
}

$answer= equation ($a,$b,$c);
//echo count($answer);
$count=count($answer);
if($count=2){
    echo ('x1=').$answer[0] . '</br>';
    echo ('x2=').$answer[1] . '</br>';
}
elseif($count=1){
    echo ('Уравнение имеет 1 действительный корень x =').$answer[0] . '</br>';
}
else{
    echo('Уравнение не имеет корней');
}


echo ('<p>'.'Задача 3'.'</p>'). '</br>';

$digits=array(2,-10,-2,4,5,1,6,200,1.6,95);
function deleteNegtives($digits){

    foreach ($digits as $key =>$negtiv){
        if($negtiv < 0) {
            unset($digits[$key]);

        }
    }
    return $digits;
}
$digits=deleteNegtives($digits);
print_r($digits);
















//$i2=1;
//echo '<table>';
//while($i2<=3) {
    //echo '<tr>';
    //$n = 1;
    //while ($n <= 3) {
      //  echo '<td>aaaa</td>';
        //$n++;
    //}
    //echo '</tr>';
    //$i2++;
//}
//echo '</table>'
 ?>

</body>
</html>
