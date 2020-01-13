<?php
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

if(!$con){

    // create database
    $con = mysqli_connect($server, $user, $password);

    $res = mysqli_query($con, "CREATE database IF NOT EXISTS $dbname");

    if($res){
            echo "database created.";
    }else{
        echo "database not created";
        exit("Problem in db connection : ".mysqli_error($con));

    }
}

$res = mysqli_query($con, "
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

$res = mysqli_query($con, "ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);");

$res = mysqli_query($con, "
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
");

if(!$res){

    echo mysqli_error($con);
}
//INSERT INTO TABLE

$res = mysqli_query($con, "INSERT INTO users(id, name, email, password) values (null, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')");

if($res){
    //header("location : welcome.php");
    $_SESSION["user_name"] = $_POST['name'];
    header("Location: index.php");

    echo "User registered successfully.";   
}else{
    echo "Problem in user registration.".mysqli_error($con);
}


?>