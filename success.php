 <?php 
require 'includes/common.php';
?>
<?php
 if (!isset($_SESSION['email']))
{ header('location:index.php'); 

}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>  
    </head>
    <body>
        <?php
        require  'includes/header.php';
        ?>
        <?php
       
$user_id=$_SESSION['u_id'];

$usersa_check="update users_items set status='Confirmed' where  user_id='$user_id'";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));


        ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="orders.php">here</a> to see your orders.</p>
                </div>
            </div>
        </div>
        <?php require'includes/footer.php'; ?>
    </body>
</html>