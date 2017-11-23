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
        
        <nav  class="navbar navbar-inverse navbar-fixed-top"  style="background:#44EC34;">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php"  style="font-size:20px; color:white;" ><span class="glyphicon glyphicon-home"></span>  SomKart</a>
                    </div>
                        
                        
                        
                    <div class="col-sm-6 a">
                        <input type="text" class="form-control"  placeholder="Search" >
                            
                    </div>
                    <div class="col-sm-1 a">
                        <button id="search">    
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                        
                        
                        
                        
                        
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right link-effect">
                            
                            
                <?php 
                if (isset($_SESSION['email'])) {
                    ?>
                            <li><a href = "cart.php" id="my_id" ><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                                
                                
                                
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
                                
                            <li><a href = "logout_script.php"  id="my_id"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                                
                    <?php
                } else {
                    ?>
                            <li><a href="signup.php" id="my_id"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="login.php" id="my_id" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                
                                
					   <?php
                    }
                    ?>
                        </ul>			
                    </div>
                </div>
            </div>
                
            <div id="she" class="row navig">
                <div class="container">
                    
                    <div class="collapse navbar-collapse" id="myNavbar">
                        
                        <ul class="nav navbar-nav link-effect">
                            
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Men's Fashion<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row"   >
                                        <div class="col-sm-3 a" >
                                            <li><a href="formalshirts.php">Formal Shirts</a></li>
                                            <li><a href="jeans.php">Jeans</a></li>
                                            <li><a href="trousers.php">Trousers</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Formal Shoes</a></li>
                                            <li><a href="#">Sports Shoes</a></li>
                                                
                                        </div>
                                            
                                        <div class="col-sm-3 a">
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 9</a></li>
                                            <li><a href="jeans.php">Product 10</a></li>
                                            <li><a href="trousers.php">Product 11</a></li>
                                            <li><a href="#">Product 12</a></li>
                                            <li><a href="#">Product 13</a></li>
                                            <li><a href="#">Product 14</a></li>
                                        </div>
                                        <div class="col-sm-3 a"> 
                                            <li><a href="shirts.php">Shirts</a></li>
                                            <li><a href="jeans.php">Jeans</a></li>
                                            <li><a href="trousers.php">Trousers</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Formal Shoes</a></li>
                                            <li><a href="#">Sports Shoes</a></li>	
                                        </div>
                                    </div>
                                        
                                </ul> 
                            </li>
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Women's Fashion<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row" >
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            
                                        </div>
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>    
                                        </div>
                                        <div class="col-sm-3 a" > 
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>	
                                        </div>
                                    </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Kids<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row" >
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>	
                                        </div>
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                        <div class="col-sm-3 a" > 
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                          
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>	
                                        </div>
                                    </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Home Needs<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row" >
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>	
                                        </div>
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                        <div class="col-sm-3 a" > 
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                    </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                                
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Dailly Needs<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row" >
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>
                                        </div>
                                        <div class="col-sm-3 a" > 
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="#">Product 6</a></li>
                                            <li><a href="#">Product 7</a></li>
                                            <li><a href="#">Product 8</a></li>	
                                        </div>
                                    </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Electronics<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row" >
                                        <div class="col-sm-3 a" >
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                                
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                        <div class="col-sm-3 a" > 
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                    </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Accessories<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" style="background-image: lightblue;">
                                    
                                        <div class="col-sm-3 a" >
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                        <div class="col-sm-3 a" >
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                        <div class="col-sm-3 a" > 
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>	
                                        </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                                
                            <li class="dropdown" style="position:initial;">
                                <a href="#" id="my_id" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Others<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu m" >
                                    
                                    <div class="row" >
                                        <div class="col-sm-3 a" >
                                           <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                            
                                        <div class="col-sm-3 a" >
                                            <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>	
                                        </div>
                                        <div class="col-sm-3 a" >
                                           
                                         <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>
                                        </div>
                                        <div class="col-sm-3 a" > 
                                             <li><a href="shirts.php">Product 1</a></li>
                                            <li><a href="jeans.php">Product 2</a></li>
                                            <li><a href="trousers.php">Product 3</a></li>
                                            <li><a href="#">Product 4</a></li>
                                            <li><a href="#">Product 5</a></li>	
                                        </div>
                                    </div>
                                        
                                </ul> 
                                    
                                    
                            </li>
                       </ul>
                    </div>
                        
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
            
            
            // Hide Header on on scroll down
            var didScroll;
            var lastScrollTop = 0;
            var delta = 5;
            var navbarHeight = $('#she').outerHeight();
            
            $(window).scroll(function(event){
                didScroll = true;
            });
            
            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);
            
            function hasScrolled() {
                var st = $(this).scrollTop();
                
                // Make sure they scroll more than delta
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;
                
                // If they scrolled down and are past the navbar, add class .nav-up.
                // This is necessary so you never see what is "behind" the navbar.
                if (st > lastScrollTop && st > navbarHeight){
                    // Scroll Down
                    $('#she').removeClass('navig').addClass('nav-up');
                } else {
                    // Scroll Up
                    if(st + $(window).height() < $(document).height()) {
                        $('#she').removeClass('nav-up').addClass('navig');
                    }
                }
                
                lastScrollTop = st;}
            
        </script>
    </body>
        
</html>