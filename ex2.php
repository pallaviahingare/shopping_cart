<?php
session_start();
echo "user".$_SESSION["user"];

echo "name".$_COOKIE["name"];
?>