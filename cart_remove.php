<?php
require 'includes/common.php';

$item_id= $_GET['id'];

$user_id=$_SESSION['u_id'];

$usersa_check="delete from users_items where item_id='$item_id' AND user_id='$user_id' AND status='Added to Cart'";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));
header('location:cart.php');
