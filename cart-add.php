<?php

$item_id=$_GET['id'];
require "includes/common.php";
$user_id=$_SESSION['u_id'];


$user_check="insert into users_items(user_id, item_id, status) values ('$user_id', '$item_id', 'Added to cart')";
$user_item_added= mysqli_query($con, $user_check) or die(mysqli_error($con));
header('location:products.php');