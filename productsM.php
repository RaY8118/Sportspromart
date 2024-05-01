<?php
session_start();
require 'connection.php';
require 'check_if_added.php';

// Default category if none selected
$category = isset($_GET['category']) ? $_GET['category'] : 'Clothes';

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
    <title>Sport's Pro Mart - Male Products</title>
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
                <h2>Male Sports Products</h2>
                <p>Explore our collection of Male sports products.</p>
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
                $result = null; // Initialize result variable

                if ($category == 'Accessories') {
                    // For Accessories, include both male and female
                    $query = "SELECT * FROM items WHERE category = '$category'";
                    $result = mysqli_query($con, $query);
                } else {
                    // For other categories, filter by gender
                    $query = "SELECT * FROM items WHERE gender = 'Male' AND category = '$category'";
                    $result = mysqli_query($con, $query);
                }

                $counter = 0; // Counter to keep track of items in each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $productID = $row['id'];
                    $productName = $row['item_name'];
                    $productPrice = $row['price'];
                    $category = $row['category'];
                    $gender = $row['gender'];
                    $size = $row['size'];
                    $imagePath = $row['image_path']; // Fetch image path from the database

                    // Convert size for shoes
                    if ($category == 'Shoes') {
                        // Convert size from database value to display value
                        if ($size == 'S') {
                            $displaySize = '30';
                        } elseif ($size == 'M') {
                            $displaySize = '32';
                        }elseif ($size == 'L') {
                            $displaySize = '34';
                        }elseif ($size == 'XL') {
                            $displaySize = '36';
                        } else {
                            $displaySize = $size; // Use the original size if not 'S' or 'M'
                        }

                        // Update the $size variable with the converted value
                        $size = $displaySize;
                    }
                ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="<?php echo $imagePath; ?>" alt="<?php echo $productName; ?>">
                            </a>
                            <div class="caption">
                                <h3><?php echo $productName; ?></h3>
                                <p>Price: Rs. <?php echo $productPrice; ?></p>
                                <?php
                                // Display size information conditionally
                                if ($category == 'Shoes') {
                                    echo "<p>Size: $size</p>"; // Display the converted size
                                }
                                ?>
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
