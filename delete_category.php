<?php
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


$query = "DELETE FROM category where id = ".$_GET["id"];

   $res = mysqli_query($con, $query);

   if($res){
        header("Location: category.php");

       echo "User updated.";

   }else{
       echo "Not updated. please try again.";
   }



?>