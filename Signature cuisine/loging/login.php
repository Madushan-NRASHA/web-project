<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'userdb');

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Prepare database query
    $query = "SELECT * FROM userlogin
              WHERE name = '{$email}'
              AND password = '{$password}'
              LIMIT 1";

    $result_set = mysqli_query($connection, $query);

    if ($result_set) {
        if (mysqli_num_rows($result_set) == 1) {
            $user = mysqli_fetch_assoc($result_set);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            header('Location: user.php');
            exit(); // Important to prevent further execution after redirection
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <!-- <img src="img/bg.svg"> -->
        </div>
        <div class="login-content">
            <form action="index.php" method="post">
                <img src="img/avatar.svg">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="email" id="email" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" id="password" class="input">
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <!-- <button type="submit" name="submit">Log IN</button> -->
                <input type="submit" name="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
