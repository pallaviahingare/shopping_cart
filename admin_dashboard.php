<?php
session_start();


//check session
if($_SESSION["user_name"] == ""){
//    echo "not exist";
    header("Location: admin_login.php");
    exit("Pleas Login");
}
?>
welcome <?php echo $_SESSION["user_name"];




?>

<button type="button" href="add_product.php">Add Product</button>
<a href="add_product.php">Add Product</a>


<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>
<?php

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


$query = "SELECT * FROM users where is_admin=0";
$res = mysqli_query($con, $query); ?>







<table>
  <tr>
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>


  <?php
  $i=1;
  while($data = mysqli_fetch_assoc($res)){ ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["email"]; ?></td>
        <td><a href="edit_user.php?id=<?php echo $data["id"]?>">Edit</a> | <a href="delete_user.php?id=<?php echo $data["id"]?>">Delete</a></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>