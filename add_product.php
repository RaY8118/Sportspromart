<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $item_name = mysqli_real_escape_string($con, $_POST['item_name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    // Handle file upload
    $targetDir = "img/";
    $targetFile = $targetDir . basename($_FILES["productImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["productImage"]["tmp_name"]);
    if ($check === false) {
        echo "File is not a valid image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["productImage"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file and insert data into the database
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            $query = "INSERT INTO items (category, item_name, gender, size, price, quantity, image_path) 
                      VALUES ('$category', '$item_name', '$gender', '$size', $price, $quantity, '$targetFile')";
            mysqli_query($con, $query);
            echo "Product added successfully.";
            echo "<a href='admin_dashboard.php'><button>Go back</button></a>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
