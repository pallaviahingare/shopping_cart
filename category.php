<?php
session_start();
//print_r($_POST);
//dbconnection
$server = "localhost";
$port = 3306;
$user = "sumit";
$password = "tapasya";
$dbname = "shopping_cart";
$con = mysqli_connect($server, $user, $password, $dbname);

if($con){
   // echo "connected";

}else{
    echo "not connected";
}
$name=$_POST['name'];
//echo $email;
$name=$_POST['Name'];
$logo=$_POST['Logo'];
$res = mysqli_query($con, "INSERT INTO category(id, Name, Logo,) values (null, '".$_POST['Name']."', '".$_POST['Logo']."', '".$_POST['discount_price']."', '".$_POST['description']."')");

if($res){
    echo "product added success";

}else{
    echo mysqli_error($con);
}
}

//1 check submit

if($data){

    if($data["is_admin"]==1){
        $_SESSION["user_id"] = $data["id"];;
        $_SESSION["user_name"] = $data["name"];;
        header("Location: admin_dashboard.php");
    }else{
        echo "you are not admin";
    }
    
}else{

    echo "This user does nnot exists.";
}


exit("checking");

while($data = mysqli_fetch_assoc($res)){
    echo $data['password']."<Br>";


}


        /*
        $row=mysqli_fetch_assoc($res);
        echo "<br>";
echo $row["email"];
echo "<br>";
        print_r($row);      
        echo "<br>";
        
        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);


        print_r($row);

        */
        $count=mysqli_num_rows($res);
        
        
        
        if($count){
            header("Location: admin_dashboard.php");
            
            echo"succeess";
        }else{
            echo "this username & password does not exist";
        }
    }


}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>category</h1>
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" name="name">
    <label for="logo"><b>logo</b></label>
    <input type="file" name="fileToUpload" id="fileToUpload">
 
    <hr>

    <button type="submit" name="submit" value="submit">Submit</button>
  </div>
</form>

</body>
</html>
