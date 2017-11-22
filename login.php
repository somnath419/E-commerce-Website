 <?php
require 'includes/common.php';

 if (isset($_SESSION['email']))
{ header('location: products.php'); 

}
$pass=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Life Style Store</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                             
                                <?php 
                               
                                if($pass)
                                {}
                                else
                                {echo $_GET['error'];
                                 echo "<br><br>";
                                
                                }?>
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                               
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php?id=1">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php require 'includes/footer.php'; ?>
    </body>
</html>