<?php
require 'includes/common.php';

$email= mysqli_escape_string($con,$_POST['e-mail']);

$password=($_POST['password']);


if (strlen($password) < 6) 
{
  header('location: login.php?password_error=enter correct password');
}


$select_query = "SELECT  u_name,u_id,email FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
$row_id= mysqli_fetch_assoc($select_query_result);
$id=$row_id['u_id'];
$name=$row_id['u_name'];

$select_email="SELECT email from users where email='$email'";
$select_query_resul = mysqli_query($con, $select_email) or die(mysqli_error($con));
$total_rows_fetched_email= mysqli_num_rows($select_query_resul);



if($total_rows_fetched==0)
{ if($total_rows_fetched_email==1)
{     
  $error = "<span class='red'>Please enter correct  Password</span>";
  header("location:login.php? error= $error & id=0"); 
}
else{
    $error1 = "<span class='red'>You seems to be new, kindly signup here:</span>";
  header("location:signup.php?error1=$error1 & id=0");  
}


}
else
  { $_SESSION['email'] = $email;
    $_SESSION['u_id'] = $id;
	$_SESSION['u_name']=$name;
   if (isset($_SESSION['email']))
{  
header('location: products.php');    
}
    
}
   
    
?>