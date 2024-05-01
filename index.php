<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Sport's Pro Mart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div id="bannerImage">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>We sell Sports products.</h1>
                        <!-- <p>Flat 40% OFF on all premium brands.</p> -->
                        <a href="product.php" class="btn btn-primary">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/clothes.jpg" alt="Camera">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Sports Clothes</p>
                                <p>Choose among the best available in the world.</p>
                                <a href="productsM.php?category=Clothes&gender=Male" class="btn btn-danger">Male</a>
                                <a href="productsF.php?category=Clothes&gender=Female" class="btn btn-warning">Female</a>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/shoes.jpg" alt="Watch">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Sports Shoes</p>
                                <p>Original shoes from the best brands.</p>
                                <a href="productsM.php?category=Shoes&gender=Male" class="btn btn-danger">Male</a>
                                <a href="productsF.php?category=Shoes&gender=Female" class="btn btn-warning">Female</a>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/accessories.jpg" alt="Shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Sports accessories</p>
                                <p>Our exquisite collection of accessories.</p>
                                <!-- For Accessories -->
                                <a href="productsM.php?category=Accessories"><button type="submit" class="btn btn-success">Explore</button></a>

                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>
    </div>
</body>

</html>