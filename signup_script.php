<?php
require "includes/common.php";

$name= mysqli_escape_string($con,$_POST['name']);
$email = mysqli_escape_string($con,$_POST['e-mail']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$contact = mysqli_escape_string($con,$_POST['contact']);
$city = mysqli_escape_string($con, $_POST['city']);
$address= mysqli_escape_string($con,$_POST['address']);

$usersa_check="select u_id from users where email='$email'";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);


if($total_rows_fetched>0)
{     
  $error = "<span class='red'>You are already a user please login here:</span>";
  header("location: login.php?error=$error& id=0"); 
}
else
{
$user_registration_query = "insert into users(u_name,email,password,contact,city,address) values ('$name', '$email', '$password', '$contact','$city','$address')";
$user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
$usersa_check="select u_name,u_id from users where email='$email'";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));
$row_id= mysqli_fetch_assoc($select_query_result);
$id=$row_id['u_id'];
$name=$row_id['u_name'];

$_SESSION['email'] = $email;

$_SESSION['u_id'] = $id;
$_SESSION['u_name'] = $name;

if(isset($_SESSION['email']))
{
    header('location:products.php');
}

}
?>