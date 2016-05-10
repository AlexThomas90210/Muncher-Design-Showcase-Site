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
                    <li class="active" ><a href="index.php">Home</a></li>
                    <li><a href="who.php">Who</a></li>
                    <li><a href="how.php">How</a></li>
                    <li><a href="design.php">Design</a></li>
                    <li><a href="links.php">Links</a></li>
                    <li><a href="#contact" data-toggle="modal">Prototype</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <!-- Product Video -->
        <h1 class="muncher-text">Product Video</h1>
        <img class="img-responsive" src="./images/video-image.png" alt="Video">

        <!-- Product Name -->
        <h1 class="muncher-text">Product Name</h1>
        <h5><strong>Muncher</strong> - A fun, easy to use healthy app.</h5>

        <!-- Intro & Overview -->
        <h1 class="muncher-text">Website Overview</h1>
            <p>We have produced this website in order to showcase our app, Muncher, a fun and interactive food tracker and dietary guidance app which provides a Calorie Counter and nutritional information. Included within this site are our Product Video alongside our research outcomes in the forms of Personas and Scenarios.</p>
            <p>From these sources a full set of Use Cases, Task Cases and additional UX design documentation and Behaviour diagrams including Use Case Diagrams, Structure maps, Storyboards, Wireframes, State Transition diagrams  have been constructed.</p>
            <p>In addition we also present an online archive containing research materials, references and appendices documentation.</p>


        <!-- Product Definition -->
        <h1 class="muncher-text">Product Definition</h1>
            <p>
                The concept of muncher is an app that allows the user to input all the food they consume in order to observe their diet. It allows users to create and customize a fun Avatar that shows the effects of their dietary choices. This Avatar "muncher" provides encouragement and information to help the user achieve their health goals.
            </p>
            <p>
                The user is intended to enter their daily food intake and, depending on the nutrients given to the Avatar, it evolves appropriately. Providing the Avatar suitable nourishment will create an amiable and attractive monster, while feeding it an unbalanced diet will cause the avatar to reflect that. In addition the app will also give user feedback on how to improve their Avatar, providing an entertaining way for users to learn about proper nutrition and to track their diet.
            </p>
            <p>
                Our research has shown that users will be more likely to stay engaged with our app if they have a (perceived) personal stake in the project. Hopefully the use of an Avatar will act as a proxy as we have discovered from our research that people tend to lose interest in using such apps within a short time. We would hope that our retention rate would be higher if our users feel personally invested in the product.
            </p>
            <p>
                It is intended to offer this app on ios, Android and Microsoft mobile devices.
            </p>
            <h3 class="muncher-text">Concept Art</h3>
            <p>
                Our unique Selling point which differenciates us from the market is the Avatar or "Muncher" that the user creates and it adapts based on the users diet &amp; Exercise levels , the concept art below gives a representation of how the Avatar will adapt to the input of the User.
            </p>
            <p>
                <strong>Concept Art A</strong> shows the starting Avatar when the user creates a new Avatar, It has moderate features and definitions<br><br>
                <strong>Concept Art B</strong> shows how the Avatar will adapt when the user is not exercising enough , eating too much and eating junk food.
                    <ul>
                        <li>The avatar features become less pronounced as shown with this Muncher's horn , spikes on back due to lack of nutrients</li>
                        <li>The avatar gains weight based on the calirie intake of the user being above what is expected for the users age, sex and BMI</li>
                        <li>The avatar looks tired due to high intake of sugar and lack of healthy nutrients</li>
                        <li>The avatar skin looks dull and begins to get spots due to the unhealthy food the user is eating</li>
                    </ul>
                <strong>Concept Art C</strong> shows how the Avatar will adapt if the user is eating an apropriate callorie intake , healthy foods and exercising.
                    <ul>
                        <li>The Avatar gets brighter in color to indicate healthy nutrients</li>
                        <li>The avatar gets musclier from the inputed exercise</li>
                        <li>The Avatar features , in this case horns, scales, wings and nails become more pronouced due to the healthy &amp; nutrient rich diet of the user</li>
                    </ul>
                <strong>Concept Art D</strong> shows how the Avatar will adapt if the user is not exercising and not eating enough food
                    <ul>
                        <li>The avatar looks tired due to lack of energy from calorie intake</li>
                        <li>The avatar has low muscle mass due to the lack of exercise the user is inputing</li>
                        <li>The avatar loses its features such as scales, nail length , horns due to the low nutrient and calorie intake of the user</li>
                        <li>The avatar becomes thin due to the user low input of food</li>
                    </ul>
            </p>
            <img class="img-responsive" src="images/Design-Assets/concept-art.jpg" alt="Concept Art" />


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
                        Alex Thomas
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
