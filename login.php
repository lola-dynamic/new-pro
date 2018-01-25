<?php
require ('db.php');
if(isset($_POST['login'])) {
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email= '$email'");
    if ($result->num_rows == 0){
        $_SESSION['message'] = "user with the email does not exist!";
//        header("location: error.php");
    }

    else{
        $user = $result->fetch_assoc();
        if(password_verify($_POST['password'], $user['password']) ){
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['active'] = $user['active'];

            $_SESSION['logged_in'] = true;
            header("location: profile.php");
        }
        else{
            $_SESSION['message'] = "Wrong password, try again!";
            header("location: error.php"); // taking user back to the login page
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
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
        <div class="login">

            <form action="login.php" method="post" autocomplete="on">
                <div class="errorMessage">
                    <?php
                    if(isset($_SESSION['message'])) {
                        echo '<p style="color: red">'. $_SESSION['message'] . '</p>';
                    }
                    ?>
                </div>
                <label for="">Email Address: </label>
                <span class="fa fa-1x fa-envelope"></span>
                <input type="text" class="form-group" name="email" required placeholder="Enter your Email">
                <br>
                <label for="">Password: </label>
                <span class="fa fa-1x fa-pencil"></span>
                <input type="password" class="form-group" name="password" required placeholder="enter your password">
                <br>
                <p><a href="forgot.php">Forget Password? </a></p>
                <br>

                <button type="submit" name="login" id="loginButton">Login</button>
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
