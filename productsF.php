<?php
session_start();
require 'connection.php';
require 'check_if_added.php';

// Retrieve category and gender from the query parameters
$category = isset($_GET['category']) ? $_GET['category'] : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
// Fetch unique categories from the database
$categoryQuery = "SELECT DISTINCT category FROM items";
$categoryResult = mysqli_query($con, $categoryQuery);
$categories = [];
while ($row = mysqli_fetch_assoc($categoryResult)) {
    $categories[] = $row['category'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Sport's Pro Mart - Female Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>

        <div class="container">
            <div class="jumbotron">
                <h2>Female Sports Products</h2>
                <p>Explore our collection of Female sports products.</p>
                <div>
                    <!-- Display buttons/links for each category -->
                    <?php foreach ($categories as $cat) : ?>
                        <a href="?category=<?php echo $cat; ?>" class="btn btn-primary"><?php echo $cat; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                // Order items by category
                if ($category == 'Accessories') {
                    // For Accessories, include both male and female
                    $query = "SELECT * FROM items WHERE category = '$category'";
                } else {
                    // For other categories, filter by gender
                    $query = "SELECT * FROM items WHERE gender = 'Female' AND category = '$category'";
                }
                $result = mysqli_query($con, $query);

                $counter = 0; // Counter to keep track of items in each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $productID = $row['id'];
                    $productName = $row['item_name'];
                    $productPrice = $row['price'];
                    $productsize = $row['size'];
                    $imagePath = $row['image_path']; // Fetch image path from the database
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

                    <?php
                    $counter++;
                    // If 4 items are displayed in the current row, start a new row
                    if ($counter % 4 == 0) {
                        echo '</div><div class="row">';
                    }
                    ?>
                <?php } ?>
            </div>
        </div>

        <br><br><br><br><br>
        <footer class="footer">
            <div class="container">
            </div>
        </footer>
    </div>
</body>

</html>
