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


$query = "SELECT * FROM products ";
$res = mysqli_query($con, $query);


?>







<table>
  <tr>
    <th>Sr No</th>
    <th>Name</th>
    <th>actual_price</th>
    <th>discount_price</th>
    <th>description</th>
    <th>fabric</th>
    <th>pattern</th>
    <th>image</th>
    <th>Action</th>
  </tr>


  <?php
  $i=1;
  while($data = mysqli_fetch_assoc($res)){ 
    $n= $data['id'];
    echo $n;
    ?>admin_dashboard.php
    <tr>
     
        <td><?php echo $i++; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["actual_price"]; ?></td>
        <td><?php echo $data["discount_price"]; ?></td>
        <td><?php echo $data["description"]; ?></td>
        <td><?php echo $data["fabric"]; ?></td>
        <td><?php echo $data["pattern"]; ?></td>
        <td><?php echo $data["image"]; ?></td>
        <td><a href="edit_product.php?id=<?php echo $data["id"]?>">Edit</a> |<a href="delete_product.php?id=<?php echo $data["id"]?>"> Delete</td>
    </tr>
  <?php } ?>
</table>

</body>
</html>