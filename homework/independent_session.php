<?php
session_start();
$independ = (isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$_SESSION["$_SERVER[REQUEST_URI]"] = $independ;
?>