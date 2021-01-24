<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- PAGE TITLE -->
    <title>Canvas - Login</title>

    <!-- SITE META DATA -->
    <meta name="keywords" content="CANVAS, CODING CHALLENGE, GAME, WEB DEVELOPMENT, HTML, CSS, JAVASCRIPT">
    <meta name="description" content="A Collection of re-imagined games turned Challenges to practice Web Development.">
    <meta name="author" content="Ben Madelin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SITE RESOURCES -->
    <script src="https://kit.fontawesome.com/c642229718.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="..\img\favicon.png">

    <!-- PAGE STYLING -->
    <link rel="stylesheet" type="text/css" href="..\style\style.css">
    <script type="text/javascript" src="..\scripts\dropdown.js"></script>
    <link rel="stylesheet" type="text/css" href="..\style\form.css">
    <link rel="stylesheet" type="text/css" href="..\style\account.css">
</head>

<body>
    <!-- PAGE CONTAINER -->
    <div class="wrapper">

        <!-- NAVBAR -->
        <?php
        require('../includes/header.php');
        require('../service/account.php');
        ?>

        <!-- CONTENT -->
        <div class="content-container">

            <!-- REGISTER -->
            <div class="section form-container">

                <!-- TITLE -->
                <div class="section-title">Register</div>
                <hr>

                <!-- ERROR MESSAGE -->
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'empty') {
                        echo '<p style="float:right;color:red;">Provide a value for each Input!</p>';
                    } else if ($_GET['error'] == 'invalidemail') {
                        echo '<p style="float:right;color:red;">Email provided is Invalid!</p>';
                    } else if ($_GET['error'] == 'invaliduser') {
                        echo '<p style="float:right;color:red;">User provided is contains Invalid Characters!</p>';
                    } else if ($_GET['error'] == 'pwdcheck') {
                        echo '<p style="float:right;color:red;">Passwords provided do not match!</p>';
                    } else if ($_GET['error'] == 'accountexists') {
                        echo '<p style="float:right;color:red;">Account already exists!</p>';
                    } else if ($_GET['error'] == 'stmtfailed') {
                        echo '<p style="float:right;color:red;">Database Connection Error!</p>';
                    }
                }
                ?>

                <!-- FORM -->
                <form action="..\service\account.php" method="post" class="register-form">
                    <div class="flex-vertical">

                        <div class="account-content">
                            <div class="flex-horizontal">
                                <label for="name"><b>Username</b></label>
                                <input type="text" placeholder="ENTER USERNAME" name="name" required>
                            </div>

                            <div class="flex-horizontal">
                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="ENTER EMAIL" name="email" required>
                            </div>

                            <div class="flex-horizontal">
                                <label for="pwd"><b>Password</b></label>
                                <input type="password" placeholder="ENTER PASSWORD" name="pwd" required>
                            </div>

                            <div class="flex-horizontal">
                                <label for="pwd-repeat"><b>Confirm Password</b></label>
                                <input type="password" placeholder="CONFIRM PASSWORD" name="pwd-repeat" required>
                            </div>
                        </div>
                    </div>
                    <!--  <label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label> -->

                        <div class="account-action">
                            <button type="submit" name="submit-register" class="submit-btn">Register</button>
                </form>
                <form action="..\pages\login.php">
                    <button type="submit" class="alt-btn">Login</button>
                </form>
                        </div>
            </div>
        </div>

        <footer>
            <a href="https://github.com/madelinben/canvas-js"><i class="credit">~ Ben Madelin ~</i></a>
        </footer>
    </div>
</body>

</html>