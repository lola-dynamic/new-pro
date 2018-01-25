<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 1/22/2018
 * Time: 6:59 PM
 */
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
        <div class="post">
            <form action="blogging.php" method="post" autocomplete="on">
                <label for=""> Title: </label>
                <input type="text" class="form-group" name="article title" required placeholder="Article title">
                <br>
                <label for="article-body"> body: </label>
                <input type="text" id="article-body" class="form-group" name="article body" required placeholder="article body">
                <br>
                <p><a href="forgot.php">Forget Password? </a></p>
                <br>

                <button type="submit" id="postButton">Submit</button>
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

