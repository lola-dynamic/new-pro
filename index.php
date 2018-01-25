<?php
require 'db.php';

session_start();
?>

<!--htm line of codes below-->
<!DOCTYPE html>
<html>
<head>
    <title>TECHNOLOGY BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--<!--PHP code below-->-->
<?php
//if ($_SERVER['REQUEST_METHOD'] == 'POST')
//{
//    if (isset($_POST['login'])) { //user logging in
//
//        require 'login.php';
//
//    }
//
//    elseif (isset($_POST['register'])) { //user registering
//
//        require 'register.php';
//
//    }
//}
//?>
<body>
<div class="wrapper">
    <div class="navigation">
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


    <div class="containerWrapper">
        <div class="articles">
            <section class="left-col">
                <section>
                    <div class="section">
                        <h1>information1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate...</p>
                        <button>View more</button>
                    </div>

                    <div class="section">
                        <h1>information2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate...</p>
                        <button>View more</button>
                    </div>
                </section>

                <section>
                    <div class="section">
                        <h1>informatin3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate....</p>
                        <button>View more</button>
                    </div>

                    <div class="section">
                        <h1>information4</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate....</p>
                        <button>View more</button>
                    </div>

                </section>

                <div class="clearfix"></div>
        </div>


        <aside class="sidebar">

            <p>more information</p>
            <ul>
                <li><a href="#"><img src= "image/fb.png"></a></li>
                <li><a href="#"><img src="image/google.png"></a></li>
                <li><a href="#"><img src="image/twiter.png"></a></li>
            </ul>

            <div class="clearfix"></div>

        </aside>
        <div class="clearfix"></div>


    </div>

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