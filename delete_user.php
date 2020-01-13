<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
//  print_r($_POST);
//error_reporting(-1);
//ini_set('display_errors', 'On');
// coonect to database

$server = "localhost";
$port = 3306;
$user = "sumit";
$password = "tapasya";
$dbname = "shopping_cart";
$con = mysqli_connect($server, $user, $password, $dbname);
if($con){
    //echo "connected";

}else{
    echo "not connected";
}


$query = "DELETE FROM users  where id = ".$_GET["id"];

   $res = mysqli_query($con, $query);

   if($res){
        header("Location: admin_dashboard.php");

       echo "User updated.";

   }else{
       echo "Not updated. please try again.";
   }



?>