<?php


$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'никогда';
setcookie('last', date('Y-m-d H:i:s'), time()+3600*24*31, '/');
echo 'Последний раз вы заходили: '.$last;
?>