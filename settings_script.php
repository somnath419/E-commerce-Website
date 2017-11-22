<?php 
require 'includes/common.php';

 if (!isset($_SESSION['email']))
{ header('location:index.php'); 

}
$email=$_SESSION['email'];
$old_password=$_POST['old-password'];
$new_password=$_POST['password'];
$retype_password=$_POST['password1'];

if(strlen($new_password)!=strlen($retype_password))
   echo"Length of password are not equal.";
   
        
$query="select password from users where email='$email'";
$query_result= mysqli_query($con,$query) or die(mysqli_error($con));;
$row= mysqli_fetch_array($query_result);
$query_password=$row['password'];
if($query_password!=$old_password)
{
    echo"wrong old password";
}
else
{
    $query="update users set password='$new_password' where email='$email'";
$query_result= mysqli_query($con,$query);
echo"Passoword updated successfully.";
header('location:settings.php');
}






?>