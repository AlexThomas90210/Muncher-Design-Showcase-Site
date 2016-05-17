<?php
session_start();
require_once('./constants.php');
$loginError = "";
if (isset($_POST[NAME_ATTR]) && isset($_POST[PASSWORD_ATTR]) ) {
    if ($_POST[NAME_ATTR] === LOGIN_NAME && $_POST[PASSWORD_ATTR] === LOGIN_PASSWORD) {
        $_SESSION['LoggedIn'] = true;
        header('Location: '.URL.FIRST_PAGE, TRUE, 302);
        exit();
    }
    $loginError = LOGIN_ERROR;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muncher</title>
    <!-- just google monster and got this image for the title image -->
    <link rel="shortcut icon" href="./images/title-image.ico" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- main -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body">

    <!-- MARK: Header -->
    <!--  putting images inside header and setting it to relative so i can stack & align the logo inside the background -->
    <div class="banner">
        <!-- putting logo inside container so its left aligned with the content on any width -->
        <div class="container">
           <a href="index.php"><img class="banner__logo img-responsive" src="./images/banner-logo.png" alt="Muncher Logo" /></a>
        </div>
        <img class="banner__background img-responsive" src="./images/banner-background.png" alt="Muncher banner Background" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!-- Login Form -->
                <form class="form-horizontal loginForm " method="post" action="#" >

                    <div class="form-group">
                        <label for="Name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="UserName" required placeholder="User Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Password" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="Password"  required placeholder="Password">
                        </div>
                    </div>
                    <!-- where the ajax response will be put -->
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <p style="color:red;"><strong><?php echo $loginError ?></strong></p>
                            <button class="btn btn--muncher" type="submit">Login !</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Main -->
    <script src="./js/main.js"></script>
</body>
</html>
