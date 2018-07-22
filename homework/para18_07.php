<?php
/**
 * Created by PhpStorm.
 * User: Dasha
 * Date: 18.07.2018
 * Time: 18:21
 */

/*$array=[1,2,3,-4,5,-6];
'<pre>';
$positiveNumber=getPositiveNumbers($array, function ($items){          //1ю Вызов функции
    //5 попали в кол бэк
    $result=[];
    //6 формируем массив с четными
        foreach ($items as $item){
            if(!( $item % 2)){
                $result[]=$item;
            }
        }
        //7возвращаем результат
        return $result;
    });

var_dump($positiveNumber);die;

'</pre>';
function getPositiveNumbers(array $array, callable $callback=NULL){
//2 попали сюда
    $result=[];
    //3 фильтруем только положительные
    foreach ($array as $value){
        if($value>0){
            $result[]=$value;
        }
    }
    //4 проверяем наличие функции обратного вызова
    if($callback) {
        $result=call_user_func($callback, $result);
    //8 получаем результат из колбэка
    }

    return $result;
}*/

/*$array=[1,2,3,-4,5,-6];

$result= array_filter($array,function($value,$key){

    var_dump($key, $value);die;
    if ($value>0 && !($value % 2)){

        return true;
    }

},
ARRAY_FILTER_USE_BOTH);
var_dump($result);die;*/

/*$array=[1,2,3,-4,5,-6];
$result=array_walk($array, function (&$value, $key){
    $value=$value+10;
});
var_dump($array);*/





/*$array=['Vadim', 'Max'];
$result=array_walk($array, function (&$value){
    $value='Hello '.$value;
});
var_dump($array);*/

$array=[1,5,7,8,-9,3];
$result= array_filter($array,function($value){

    if ($value>3 && ($value % 2 != 0)){
        return true;
    }

},
    ARRAY_FILTER_USE_BOTH);
var_dump($result);die;







