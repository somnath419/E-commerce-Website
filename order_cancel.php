<?php
require 'includes/common.php';

$item_id= $_GET['id'];
$idd1=$_GET['idd'];

$user_id=$_SESSION['u_id'];

$usersa_check="delete from users_items where item_id='$item_id' AND user_id='$user_id' AND status='Confirmed' AND id='$idd1'";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));
header('location:orders.php');
