<?php
require 'connection.php';
session_start();

$item_id = $_GET['id'];
$user_id = $_SESSION['id'];

// Check if the item already exists in the user's cart
$check_cart_query = "SELECT * FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
$check_cart_result = mysqli_query($con, $check_cart_query);

if (mysqli_num_rows($check_cart_result) > 0) {
    // Item already exists, update the quantity
    $row = mysqli_fetch_assoc($check_cart_result);
    $new_quantity = $row['quantity'] + 1;

    $update_cart_query = "UPDATE users_items SET quantity='$new_quantity' WHERE user_id='$user_id' AND item_id='$item_id'";
    $update_cart_result = mysqli_query($con, $update_cart_query) or die(mysqli_error($con));
} else {
    // Item doesn't exist, insert a new record
    $item_query = "SELECT * FROM items WHERE id='$item_id'";
    $item_result = mysqli_query($con, $item_query);
    $item_row = mysqli_fetch_assoc($item_result);

    $item_price = $item_row['price'];

    $add_to_cart_query = "INSERT INTO users_items (user_id, item_id, quantity, price, status)
                          VALUES ('$user_id', '$item_id', 1, '$item_price', 'Added to cart')";
    $add_to_cart_result = mysqli_query($con, $add_to_cart_query) or die(mysqli_error($con));
}

header('location: ' . $_SERVER['HTTP_REFERER']);
?>
