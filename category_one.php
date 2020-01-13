<?php
session_start();
?>
welcome <?php echo $_SESSION["user_name"]; ?><?php
//print_r($_POST);

//1 check submit
if(isset($_POST['submit']))
{

    $server = "localhost";
$port = 3306;
$user = "sumit";
$password = "tapasya";
$dbname = "shopping_cart";
$con = mysqli_connect($server, $user, $password, $dbname);
if($con){
    echo "connected";

}else{
    echo "not connected";
}



    $name=$_POST['name'];
    echo $email;
    $Name=$_POST['Name'];
    $Logo=$_POST['Logo'];
$res = mysqli_query($con, "INSERT INTO category(id, name, actual_price, discount_price,description) values (null, '".$_POST['name']."', '".$_POST['actual_price']."', '".$_POST['discount_price']."', '".$_POST['description']."')");

    if($res){
        echo "product added success";

    }else{
        echo mysqli_error($con);
    }
}

?>



<form action="" method="post" id="usrform">
name<input type="text" name="name">
<br><br>
actual price<input type="text" name="actual_price">
<br><br>
discount price<input type="text" name="discount_price">
<br><br>
Description<textarea rows="4" cols="50" name="description" form="usrform">
Enter text here...</textarea>
<br><br>
Add product<input type="submit" name="submit" value="add product">
<br><br>

</form>