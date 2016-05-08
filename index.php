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

    <ol style="color:red;">
        TODO
        <li> More scenarios</li>
        <li> Create wireframes and put into site</li>
        <li> Create storyboards and put into site</li>
        <li> Make prototype</li>
        <li> Embed prototype instead of contact form</li>
        <li> References</li>
        <li> Links</li>
        <li> Research</li>
        <li> Video</li>
        <li> create example munchers and one that is adapting</li>
        <li> Add screen for settings in state transition diagram depending on how we choose to implement settings</li>
        <li> Color coordinate all diagrams</li>
    </ol>
    <div class="container">
        <!-- Product Name -->
        <h1 class="muncher-text">Product Name</h1>
        <h4>Muncher a Fun, Simple,  Easy to use app for healthy living</h4>

        <!-- Intro & Overview -->
        <h1 class="muncher-text">Intro Overview</h1>
            <p>We have produced this website in order to showcase our industry project, Muncher, a fun diet tracker and weight loss app which provides a Calorie Counter and nutritional information. Included within this site are our Product Video alongside our research outcomes in the forms of Personas and Scenarios.</p>
            <p>From these sources a full set of Use Cases, Task Cases and additional UX design documentation including Use Case Diagrams, Structure maps, Storyboards, Wireframes, State Transition diagrams and Behaviour diagrams have been constructed</p>
            <p>In addition we also present an online archive containing research materials, references and our appendix documentation.</p>


        <!-- Product Definition -->
        <h1 class="muncher-text">Product Definition</h1>
            <p>
                The concept behind Muncher is to develop an app into which the user can input everything they eat in order to gain visual feedback on how healthy (or not) their diet is. This app is being proposed in order to fulfil a market need for a simple, portable method to monitor and gain feedback on daily dietary requirements. The app will provide this feedback on how the food consumed impacts the user’s health by producing an Avatar to represent them and their food choices.
            </p>
            <p>
                Our unique Selling point which differenciates us from the market is the Avatar or "Muncher" that the user creates and it adapts based on the users diet &amp; Exercise levels , the concept art below gives a representation of how the Avatar will adapt to the input of the User.
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
            <p>
                <strong>Concept Art A</strong> shows the starting Avatar when the user creates a new Avatar, It has moderate features and definitions
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

        <!-- Product Video -->
        <h1 class="muncher-text">Product Video</h1>
        <img class="img-responsive" src="./images/video-image.png" alt="Video">
    </div>

    <!--MARK: Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p class="footer__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae iaculis ipsum, at elementum leo. In congue elementum ante quis rhoncus. Proin malesuada nec arcu sit amet ullamcorper. Donec consectetur tellus diam, quis cursus augue
                        vestibulum sit amet.
                        <br>
                        <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae iaculis ipsum, at elementum leo.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--MARK: Modal Contact form-->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Contact Form -->
                <form id="contactForm" class="form-horizontal" method="post" action="./ajax/contactSimple.php" onsubmit="return false;">

                    <!-- Modal Head -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Contact</h4>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contactName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="contactName" required placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="contactEmail" placeholder="you@example.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="contactMessage" rows="8" placeholder="Message" required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <!-- where the ajax response will be put -->
                        <p id="contactResponse"></p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn--muncher" type="submit">Send</button>
                    </div>

                </form>
                <!-- End of Contact form -->
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
