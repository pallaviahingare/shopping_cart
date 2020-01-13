<?php
$server = "localhost";
$user = "sumit";
$password = "tapasya";
$dbname = "shopping_cart";
$con = mysqli_connect($server, $user, $password, $dbname);
if($con){
    echo "connected";

}else{
    echo "not connected";
}
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
$query="select*from products";
$result=mysqli_query($con,$query);

   while($row=mysqli_fetch_assoc($result)){
 ?>
 <tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['actual_price']?></td>
<td><?php echo $row['discount_price']?></td>
<td><?php echo $row['description']?></td>
<td><?php echo $row['fabric']?></td>
<td><?php echo $row['pattern']?></td>
<td><?php echo $row['image']?></td>
<td><a href="edit_product.php?id=<?php echo $row['id']?>">Edit</a> 
<td><a href="delete_product.php?id=<?php echo $row['id']?>">DELETE</a> 

 </tr>

<?php
   }
?>