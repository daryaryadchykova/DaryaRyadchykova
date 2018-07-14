<?php
//$str='Иванов Иван Иванович';
//$delimiter=' ';
  //  $data= explode($delimiter,$str);
    //var_dump($data);


//$trimString=trim("\t<p>Hello</p>\n\n<p>world</p>\t");
//echo strlen($trimString);//длина строки

//$str="password";
//echo md5(md5($str));//шифруем дважды


//$str ='[i]Ghbdtn[/i]!Меня зовут [B]Вася[/b]';
//str_replace()

//$str='Привет';
//echo strlen($str,'utf-8');



$str='Привет, мир!';
echo mb_substr($str, -4,3,'utf-8');
?>