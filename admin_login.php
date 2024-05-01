<?php
require 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));

    $admin_authentication_query = "SELECT id, email FROM users WHERE email='$email' AND password='$password' AND role='admin'";
    $admin_authentication_result = mysqli_query($con, $admin_authentication_query) or die(mysqli_error($con));
    $rows_fetched = mysqli_num_rows($admin_authentication_result);

    if ($rows_fetched == 1) {
        $row = mysqli_fetch_array($admin_authentication_result);
        $_SESSION['admin'] = $email;
        $_SESSION['id'] = $row['id']; // admin id
        header('location: admin_dashboard.php');
    } else {
        echo "Invalid admin credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Lifestyle Store - Admin Login</title>
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
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>ADMIN LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <p>Login as an admin.</p>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </div>
</body>

</html>
