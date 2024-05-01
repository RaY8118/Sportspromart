<?php
session_start();
require 'connection.php';

if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
    echo "Item ID to remove: $item_id"; 
    $user_id = $_SESSION['id'];

    // Perform the logic to remove the item with $item_id from the user's cart
    $remove_cart_query = "DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
    $remove_cart_result = mysqli_query($con, $remove_cart_query) or die(mysqli_error($con));

    // Redirect back to the same page or any other desired page
    header('location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Handle the case where 'id' is not set in the URL
    echo 'Invalid request';
}

