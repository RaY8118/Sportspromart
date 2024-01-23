<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <style>
        .container {
            margin-top: 20px;
        }

        .card {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .card-header {
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .card-body {
            padding: 10px;
        }

        .alert {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Admin Dashboard - Display/Remove Product</h2>
        <a href="admin_dashboard.php"><button class="btn btn-primary">Back</button></a>

        <!-- Form to display product details by entering item ID -->
        <form action="remove_product.php" method="post">
            <div class="form-group">
                <label for="display_id">Enter Item ID to Display:</label>
                <input type="text" class="form-control" id="display_id" name="display_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Display Product</button>
        </form>

        <!-- Display product details or error message -->
        <?php if (isset($display_error)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $display_error; ?>
            </div>
        <?php elseif (isset($product_details)) : ?>
            <div class="card">
                <div class="card-header">
                    Product Details
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product_details['item_name']; ?></h5>
                    <p class="card-text">
                        Category: <?php echo $product_details['category']; ?><br>
                        Gender: <?php echo $product_details['gender']; ?><br>
                        Size: <?php echo $product_details['size']; ?><br>
                        Price: Rs. <?php echo $product_details['price']; ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>

        <!-- Display removal success or error message -->
        <?php if (isset($remove_success)) : ?>
            <div class="alert alert-success mt-2" role="alert">
                <?php echo $remove_success; ?>
            </div>
        <?php elseif (isset($remove_error)) : ?>
            <div class="alert alert-danger mt-2" role="alert">
                <?php echo $remove_error; ?>
            </div>
        <?php endif; ?>

        <!-- Additional logic for removing the displayed product -->
        <?php if (isset($product_details)) : ?>
            <form action="remove_product.php" method="post">
                <input type="hidden" name="remove_id" value="<?php echo $product_details['id']; ?>">
                <button type="submit" class="btn btn-danger mt-2">Remove Product</button>
            </form>
        <?php endif; ?>
    </div>
</body>

</html>
