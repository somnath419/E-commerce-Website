<?php
require 'includes/common.php';
    
$usersa_check="select * from hotdeals";
$select_query_result = mysqli_query($con, $usersa_check) or die(mysqli_error($con));

$select_query_result2 = mysqli_query($con, $usersa_check) or die(mysqli_error($con));

$total_rows_fetched = mysqli_num_rows($select_query_result);
$total_rows_fetched2 = mysqli_num_rows($select_query_result2);

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
            
            
            
        <!-- start of carousel  -->
        <div class="row" style="margin-top:20px;">
            
            
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
                            <a href="products.php"><img src="img/112.jpg" alt="New York" style="height:300px;width :1400px;">
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
            
        <!--  start of hot deals -->
            
            
            
        <div id="content">
            
            
            <hr>
            <h3 style="padding-left:12px; font-size:30px;">Reccommended For You</h3> 
                
                
                
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="carousel slide multi-item-carousel" id="theCarousel">
                            <div class="carousel-inner">
                                
                                <div class="item active">
                                    <div class="col-sm-4 text-center">
                                        <a href="products.php" >
                                            <div class="thumbnail">
                                                <img src="img/10.jpg" alt="" style="height:174px;">
                                                <div class="caption">
                                                    <h3>Rs.200 </h3>
                                                    <p>Good product</p>
                                                </div>
                                            </div> 
                                        </a>
                                    </div>                               
                                </div>
                                    
                                    
                                 <?php 
                    while($row_id= mysqli_fetch_array($select_query_result)) {
            
            
			$image=$row_id['p_image'];
		        $name=$row_id['name'];
	                $price=$row_id['price'];
                            
		        $total_rows_fetched--;  ?>
                            
                                <div class="item">
                                    <div class="col-sm-4 text-center">
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
                                        
                                </div>   
		            <?php } ?>                        
                                
                                
                                <!--  Example item end -->
                            </div>
                            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                
                
                
            <!-- Start of second row--> 
                
              <hr>
            <h3 style="padding-left:12px; font-size:30px;">Hot deals</h3> 
                
                
                
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="carousel slide multi-item-carousel" id="theCarousel2">
                            <div class="carousel-inner">
                                
                                <div class="item active">
                                    <div class="col-sm-4 text-center">
                                        <a href="products.php" >
                                            <div class="thumbnail">
                                                <img src="img/10.jpg" alt="" style="height:174px;">
                                                <div class="caption">
                                                    <h3>Rs.200 </h3>
                                                    <p>Good product</p>
                                                </div>
                                            </div> 
                                        </a>
                                    </div>                               
                                </div>
                                    
                                    
                                 <?php 
        while($row_id2= mysqli_fetch_array($select_query_result2)) {
            
            
			$image=$row_id2['p_image'];
		        $name=$row_id2['name'];
	                $price=$row_id2['price'];
                            
		        $total_rows_fetched2--;  ?>
                            
                                <div class="item">
                                    <div class="col-sm-4 text-center">
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
                                        
                                </div>   
		            <?php } ?>                        
                                
                                
                                <!--  Example item end -->
                            </div>
                            <a class="left carousel-control" href="#theCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a class="right carousel-control" href="#theCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>      
                      
            <br>
            <br>
            <br>
            <br>
            

                                <script>
                                    
                                    // Instantiate the Bootstrap carousel
                                    $('.multi-item-carousel').carousel({
                                        interval: false
                                    });
                                    
                                    // for every slide in carousel, copy the next slide's item in the slide.
                                    // Do the same for the next, next item.
                                    $('.multi-item-carousel .item').each(function(){
                                        var next = $(this).next();
                                        if (!next.length) {
                                            next = $(this).siblings(':first');
                                        }
                                        next.children(':first-child').clone().appendTo($(this));
                                        
                                        if (next.next().length>0) {
                                            next.next().children(':first-child').clone().appendTo($(this));
                                        } else {
                                            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                                        }
                                    });
                                </script>
                                    
                                    
                                    
        <?php 
           include "includes/footer.php"
               
        ?>
            
            
            
            
                                </body> 
                                </html>