<?php
session_start();
$_SESSION["user"]=10;
echo $_SESSION["user"];

echo "time: ". time();

setcookie("name", "Sumit", time() + (60 * 5));


echo $_COOKIE["name"];
?>
