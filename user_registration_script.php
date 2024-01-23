<?php
require 'connection.php';
session_start();

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";

if (!preg_match($regex_email, $email)) {
    echo "Incorrect email. Redirecting you back to the registration page...";
    ?>
    <meta http-equiv="refresh" content="2;url=signup.php" />
    <?php
}

$password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
if (strlen($password) < 6) {
    echo "Password should have at least 6 characters. Redirecting you back to the registration page...";
    ?>
    <meta http-equiv="refresh" content="2;url=signup.php" />
    <?php
}

$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$duplicate_user_query = "SELECT id FROM users WHERE email='$email'";
$duplicate_user_result = mysqli_query($con, $duplicate_user_query) or die(mysqli_error($con));
$rows_fetched = mysqli_num_rows($duplicate_user_result);

if ($rows_fetched > 0) {
    // Duplicate registration
    ?>
    <script>
        window.alert("Email already exists in our database!");
    </script>
    <meta http-equiv="refresh" content="1;url=signup.php" />
    <?php
} else {
    // Check if the email is for an admin
    $admin_emails = array('admin1@gmail.com', 'admin2@gmail.com');
    $role = in_array($email, $admin_emails) ? 'admin' : 'customer';

    $user_registration_query = "INSERT INTO users (name, email, password, contact, city, address, role) 
                               VALUES ('$name', '$email', '$password', '$contact', '$city', '$address', '$role')";
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    
    echo "User successfully registered as $role";
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);

    ?>
    <meta http-equiv="refresh" content="3;url=product.php" />
    <?php
}
?>
