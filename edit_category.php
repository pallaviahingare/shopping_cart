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

//check submit

if($_POST["submit"] == "Update"){

    //validation


   $query = "UPDATE category set name = '".$_POST["Name"]."', logo = '".$_POST["Logo"]."' where id = ".$_GET["id"];

   $res = mysqli_query($con, $query);

   if($res){
    header("Location: admin_dashboard.php");

       echo "User updated.";

   }else{
       echo "Not updated. please try again.";
   }
}


echo $query = "SELECT * FROM category where id=".$_GET['id'];
$res = mysqli_query($con, $query); 

$data = mysqli_fetch_assoc($res);

 print_r($data);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>



<div class="row">
                        <div class="col-md-6 mx-auto align-self-center">
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="">
                            
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input  type="name"  value=""<?php echo $data["Name"]?>"  name="name" id="name">
    </div>
                               
                                
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" name="submit" value="Update">
                                </div>
                            </form>
                          
                        </div>
                    </div>

</body>
</html>


?>