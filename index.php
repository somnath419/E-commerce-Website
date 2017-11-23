<?php
require 'includes/common.php';
    
$usersa_check="select * from hotdeals";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SomKart</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            
        </style>
    </head>
        
    <body>
        
		<?php
        include 'includes/header.php';
        ?>
            
        <div id="content">
            
            <!-- row stacked -->
                
            <div class="row">
                <div class="container-fluid">
                    
                    <div id="okk" class="col-md-12">
                        
                        <div id="myCarousel" class="carousel slide " data-ride="carousel" data-interval="2000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                                
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active il ">
                                    <a href="products.php"> <img src="img/222.jpg" alt="Chania" style="height:300px; width :1400px;" >
                                    </a> <div class="carousel-caption">
                                        <h3>Store</h3>
                                        <p>You will find everything</p>
                                    </div>
                                </div>
                                    
                                <div class="item il">
                                    <a href="products.php"> <img src="img/112.jpg" alt="Chicago" style="height:300px; width :1400px;">
                                    </a>
                                    <div class="carousel-caption">
                                        <h3>Lifestyle Products</h3>
                                        <p>Thank you,for shopping</p>
                                    </div>
                                </div>
                                    
                                <div class="item il">
                                    <a href="products.php"><img src="img/110.jpg" alt="New York" style="height:300px;width :1400px;">
                                    </a><div class="carousel-caption">
                                        <h3>Great Products</h3>
                                        <p>You will love it</p>
                                    </div>
                                </div>
                            </div>
                                
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                
                
            <div class="row">
                <div class="container-fluid">
                    <hr>
                    <h3 style="padding-left:12px; font-size:30px;">Hot Deals</h3> 
                        
  <?php 
        while($row_id= mysqli_fetch_array($select_query_result)) {
            
            
			$image=$row_id['p_image'];
		       $name=$row_id['name'];
	    $price=$row_id['price'];
		
		 $total_rows_fetched--;  ?>
                     
                     
                    <div class="col-sm-2 text-center">
                        
                        
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="img/<?php echo $image; ?>.jpg" alt="" style="height:174px;">
                                <div class="caption">
                                    <h3>Rs.<?php echo $price; ?> </h3>
                                    <p><?php echo $name; ?></p>
                                </div>
                            </div> 
                        </a>
                    </div>
		<?php } ?>
                    
                </div>
            </div>
                
            <!-- Start of second row--> 
                
            <div class="row">
                <div class="container-fluid">
                    <hr>
                        
                    <h3 style="padding-left:12px; font-size:30px;">Trending Products</h3> 
                        
                    <div class="col-md-2 text-center">
                        
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="img/25.jpg" alt="" style="height:135px; width:100%;">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                        <center><i>New Arrival</i><center>				
                                </div>
                                    
                                </div>
                                    
                                </div>
                                    
                                    
                                    
                                </div>
                                    
                                    
                                    
        <?php 
           include "includes/footer.php"
               
        ?>
            
            
            
            
                                </body> 
                                </html>