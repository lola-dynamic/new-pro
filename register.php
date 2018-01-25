<?php
require ('db.php');
ini_set('display_errors', true);
if(isset($_POST['register'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['user_name'] = $_POST['user_name'];
    $_SESSION['password'] = $_POST['password'];

    $user_name = $mysqli->escape_string($_POST['user_name']);
    $email = $mysqli->escape_string($_POST['email']);
    $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
    $hash = $mysqli->escape_string( md5( rand(0,1000) ) );

    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

    if ( $result->num_rows > 0 ) {

        $_SESSION['message'] = 'This email already exists!';


    }

    else {

        $sql = "INSERT INTO users (`user_name`,`email`,`password`,`hash`) VALUES ('".$user_name."','".$email."','".$password."','".$hash."')";

        if ($mysqli->query($sql)) {
//            $_SESSION['message'] = "mail has not been registered!";

                $_SESSION['message'] = "Congratulations, you have successfully registered!";
//                $mysqli->query("UPDATE users SET active='1' WHERE email='$email'") or die($mysqli->error);
                $_SESSION['active'] = 1;

        }else {
            $_SESSION['message'] = "User not saved";
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrap">
    <div id="navigation">
        <nav>
            <ul>
                <li><a href="#" id="logo">THE TECHNOLOGY</a></li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.php"><button id="login">LogIn</button></a></li>
                <li><a href="register.php"><button id="register">Register</button></a></li>
                <li><a href="blogging.php">Blogging</a></li>
            </ul>

            <div class="clearfix"></div>
        </nav>
    </div>

    <section>
        <div class="register">
            <form action="register.php" method="post" autocomplete="on">
                <div class="errorMessage">
                    <?php
                    if(isset($_SESSION['message'])) {
                        echo '<p style="color: red">'. $_SESSION['message'] . '</p>';
                    }
                    ?>
                </div>
                <label for="">UserName: </label>
                <span class="fa fa-1x fa-user"></span>
                <input type="text" class="form-group" name="user_name" required placeholder="Enter your username">
                <br>
                <label for="">Email Address: </label>
                <span class="fa fa-1x fa-envelope"></span>
                <input type="text" class="form-group" name="email" required placeholder="Enter your Email">
                <br>
                <label for="">Password: </label>
                <span class="fa fa-1x fa-pencil"></span>
                <input type="password" class="form-group" name="password" required placeholder="enter your password">
                <br>

                <button type="submit" name="register" id="registerButton">Register</button>
                <br>
            </form>
        </div>
    </section>

    <footer>
        <div class="section">
            <p>About me </p>
            <p><b> +2348065322720</b><br>
                No1, Banjoko close,<br>
                Martins bus stop.<br>
                abigailomolola1@gmail.com</p>
        </div>

        <div class="section">
            <p>Contact Us</p>
            <ul>
                <li><a href="#"><img src= "image/fb.png"></a></li>
                <li><a href="#"><img src="image/google.png"></a></li>
                <li><a href="#"><img src="image/twiter.png"></a></li>
            </ul>
        </div>

        <div class="clearfix"></div>
    </footer>

</div>

</body>
</html>
