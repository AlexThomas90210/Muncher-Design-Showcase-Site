<?php
session_start();
require_once('./constants.php');
if ( !isset($_SESSION['LoggedIn']) ){
    header('Location: '.URL.LOGIN_PAGE, TRUE, 302);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="none" />

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
           <a href="index.html"><img class="banner__logo img-responsive" src="./images/banner-logo.png" alt="Muncher Logo" /></a>
        </div>

        <!-- logout button -->
        <form class="logoutForm" action="./logout.php" method="post">
            <button class="logoutForm__submit" type="submit" name="logoutSubmit"><span class="logoutForm__submit-text">Logout</span></button>
        </form>

        <img class="banner__background img-responsive" src="./images/banner-background.png" alt="Muncher banner Background" />
    </div>

    <!-- MARK: Nav -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <!-- Hamburger Menu  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Nav -->
            <div class="collapse navbar-collapse muncher-text" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Product</a></li>
                    <li class="active"><a href="who.php">Who</a></li>
                    <li><a href="how.php">How</a></li>
                    <li><a href="design.php">Design</a></li>
                    <li><a href="links.php">Links</a></li>
                    <li><a href="#contact" data-toggle="modal">Prototype</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-10">

                <!-- Personas -->
                <section id="Personnas">
                    <h1 class="muncher-text">Personas</h1>
                    <img id="Mary" class="img-responsive" src="./images/Design-Assets/persona-mary.png" alt="Mary">
                    <img id="David" class="img-responsive" src="./images/Design-Assets/persona-david.png" alt="David">
                    <img id="Jason" class="img-responsive" src="./images/Design-Assets/persona-jason.png" alt="Jason">
                    <img id="Liam" class="img-responsive" src="./images/Design-Assets/persona-liam.png" alt="Liam">
                    <img id="Marie" class="img-responsive" src="./images/Design-Assets/persona-marie.png" alt="Marie">
                </section>

                <!-- Scenarios -->
                <section id="Scenarios">
                    <h1  class="muncher-text">Scenarios</h1>
                    <h3 id="scenario1" class="muncher-text">Scenario 1</h3>
                    <p>Mary has been using myfitnesspal for several weeks but she finds it hard to keep up with the difficult UI and checks online to see if there are any other apps that could keep her engaged. She sees that muncher offers you the ability to create your own muncher as well as personalising them. She downloads the app and follows the guided walkthrough in order to create a muncher for herself.</p>
                    <h3 id="scenario2" class="muncher-text">Scenario 2</h3>
                    <p>David has been using the app for several weeks and he is very happy with it. He is getting as little bored of the avatar he has created and he wants to mix things up a bit. He Sees that you are able to personalise your avatar in the settings menu. He selects this option and changes the avatar to the look that he desired.</p>
                    <h3 id="scenario3" class="muncher-text">Scenario 3</h3>
                    <p>Liam is on a healthy eating mission so he downloads the app and decides to go shopping for some healthy food to eat. He buys his food and brings it home. He scans the packet of rice cakes he bought and enters that he ate one of them. Muncher also presents him with data about them including the calories in it.  He decides to eat a banana so goes to scan it but there is no barcode so he uses the drop down menu instead. He feeds muncher and muncher gives him some top tips to keep him motivated and informed.</p>
                    <h3 id="scenario4" class="muncher-text">Scenario 4</h3>
                    <p>Jason has been hitting the student lifestyle pretty hard lately and he keeps meaning to get in shape and get back playing rugby. He isn’t very motivated, but he wants to start some basic light exercise so he can get back into the swing of things. He inputs into muncher that he wants to exercise 3 times a week at a reasonably low level. He wants to be reminded to get up off the couch so he enables push notifications so muncher can offer him some encouragement. After a couple of weeks he ups the intensity of the exercise as he finds himself getting fitter. </p>
                    <h3 id="scenario5" class="muncher-text">Scenario 5</h3>
                    <p>Marie is a french au pair who has been using the app for a few weeks. She wants to see how well she has been doing to keep her focused on her goals. She checks out the feedback section where she sees not only visual representations of the food she has consumed but also a detailed breakdown of what each food contained as well as some tips on muncher how best she should continue. She sees that she has been eating a lot of carbs and in order to reach her goal muncher says she should cut them down for a while.</p>
                </section>
            </div>

            <!-- Side nav -->
            <div class="col-sm-2 hidden-xs bs-docs-sidebar" role="complimentary">
                <ul id="sidebar" class="nav nav-stacked">
                    <li>
                        <a href="#Personnas">Personas</a>
                        <ul class="nav nav-stacked">
                            <li><a href="#Mary">Mary</a></li>
                            <li><a href="#David">David</a></li>
                            <li><a href="#Jason">Jason</a></li>
                            <li><a href="#Liam">Liam</a></li>
                            <li><a href="#Marie">Marie</a></li>
                        </ul>
                    </li>
                    <li><a href="#Scenarios">Scenarios</a>
                        <!--
                        <ul class="nav nav-stacked">
                            <li><a href="#scenario1">Scenario 1</a></li>
                            <li><a href="#scenario2">Scenario 2</a></li>
                            <li><a href="#scenario3">Scenario 3</a></li>
                            <li><a href="#scenario4">Scenario 4</a></li>
                            <li><a href="#scenario4">Scenario 5</a></li>

                        </ul>
                        -->
                    </li>
                </ul>
            </div>

        </div>
    </div>


    <!--MARK: Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p class="footer__p">
                        <em>Digital Skills Acadamy , Web Elevate 4.0 , Team 28 , Minor Project Design Showcase Website</em>
                        <br>
                        <strong>Team Members</strong>
                        <br>
                        Andrew Firman
                        <br>
                        Liam Molloy
                        <br>
                        James Monaghan
                        <br>
                        Tim Nunan
                        <br>
                        Alex thomas
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--MARK: Modal Prototype-->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                    <!-- Modal Head -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Prototype</h4>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <iframe src="https://xd.adobe.com/embed/bbda9e22-d610-42bc-7b15-958fb5f9926d/" width="100%" height="100%" style="border: 0px none; margin-left: -185px; height: 859px; margin-top: 0px; width: 926px;"></iframe>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

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
