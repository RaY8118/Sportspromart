<?php
session_start();
require 'check_if_added.php';
require 'connection.php'; // Include file for database connection

$query = "SELECT * FROM items";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Lifestyle Store</title>
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
        <?php require 'header.php'; ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Sports Pro Mart!</h1>
                <p>We have the best equipment, accessories, and shirts for you. No need to hunt around; we have all in one place.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $productID = $row['id'];
                    $productName = $row['item_name'];
                    $productPrice = $row['price'];
                    $productsize = $row['size'];
                    $imagePath = $row['image_path'];
                ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="<?php echo $imagePath; ?>" alt="<?php echo $productName; ?>">
                            </a>
                            <div class="caption">
                                <h3><?php echo $productName; ?></h3>
                                <p>Price: Rs. <?php echo $productPrice; ?></p>
                                <p>Size: <?php echo $productsize; ?></p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else {
                                    if (check_if_added_to_cart($productID)) {
                                        echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                    } else {
                                        echo '<a href="cart_add.php?id=' . $productID . '" class="btn btn-block btn-warning">Add to cart</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>