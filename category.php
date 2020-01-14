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
    <th>Logo</th>
  </tr>

<?php
$query="select*from category";
$res=mysqli_query($con,$query);

   while($data=mysqli_fetch_assoc($res)){
 ?>
 <tr>
<td><?php echo $data['id']?></td>
<td><?php echo $data['name']?></td>
<td><?php echo $data['logo']?></td>
<td><a href="edit_product.php?id=<?php echo $row['id']?>">Edit</a> 
<td><a href="delete_product.php?id=<?php echo $row['id']?>">DELETE</a> 

 </tr>

<?php
   }
?>
