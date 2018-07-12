<?php
$array=[1,2,'name'=>'Darya',4,5,6];
for($i=0;$i<count($array);$i++) {
echo $array[$i].'</br>';}


foreach ($array as $key =>$value){
    if($key === 0)
    {//если == выдаст строку т.к строка=0
        echo "Key: $key; Value:$value </br>";
        break;
    }

}
?>


<?php
$i=0;
while($i<10){
   echo $i;
    $i++;}

$i1=0;
do{
  echo $i1;
  $i1++;
}while($i1<10);

?>

<?php
$num=5;
$degree=2;

echo myPow(5,2);
/**
 * Функция для возведения числа в степень
 * @param int $num число для возведения в степень
 * @param $degree степень в которую возводим
 * @return int| строка
 *
 */
function myPow(int $num,$degree)
{
$result = $num ** $degree;
return $result;
}
echo $result;
?>



