<?php
require 'includes/common.php';
$name=$_SESSION['u_name'];

?>
<html>
    <head>
        <link href="../css/bootstrap.css" rel="stylesheet">
       <link href="../css/animate.min.css" rel="stylesheet">
       <link href="../css/bootstrap-dropdownhover.min.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>   
        <script src="../js/bootstrap-dropdownhover.min.js"></script>
		

    </head>
    <body>


	<nav class="navbar navbar-inverse navbar-fixed-top"  style="background:#00ff00;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
        <a class="navbar-brand" href="index.php" id="st" style="font-size:20px;" ><span class="glyphicon glyphicon-home"></span>  SomKart</a>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right link-effect">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php" id="st" ><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    
					<li>
					</li>
	    	   
			<li  class="dropdown" >
                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<?php echo $name; ?><span class="caret"></span></a>
                <ul class="dropdown-menu agile_short_dropdown">
                  <li><a href="#">My Profile</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">One more separated link</a></li>
                   <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> My Settings</a></li> 
                   <li><a href="orders.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Orders</a></li> 
                </ul>
             </li>
					
                   <li><a href = "logout_script.php"  id="st"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
					
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php" id="st"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php" id="st" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					
                       
					   <?php
                    }
                    ?>
            </ul>
			</div>
			
	 </div>
	</nav>
	


<script>
$(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});
</script>
   </body>
    
</html>