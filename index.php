<?php
require_once('./constants.php');
if ( !isset($_SESSION['LoggedIn']) ){
    header('Location: '.URL.'login.php', TRUE, 302);
    exit();
}
if ( $_SESSION['LoggedIn']) == false ) {
    header('Location: '.URL.'login.php', TRUE, 302);
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
                    <li class="active" ><a href="index.html">Home</a></li>
                    <li><a href="who.html">Who</a></li>
                    <li><a href="how.html">How</a></li>
                    <li><a href="design.html">Design</a></li>
                    <li><a href="links.html">Links</a></li>
                    <li><a href="#contact" data-toggle="modal">Prototype</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ol style="color:red;">
        TODO
        <li> Redo create muncher task flow incooporate login logic in there</li>
        <li> Easier to read text size structure map</li>
        <li> Add screen for settings in state transition diagram depending on how we choose to implement settings</li>
        <li> Add task flow diagrams for all task cases</li>
        <li> More scenarios</li>
        <li> Put up liams use cases and task flows</li>
        <li> Consider changing input food with barcode use case to input food to fully explain whats going on</li>
        <li> Create wireframes and put into site</li>
        <li> Create storyboards and put into site</li>
        <li> Make prototype</li>
        <li> Embed prototype instead of contact form</li>
        <li> Add set goals, customize to use case diagram</li>
        <li> Color coordinate all diagrams</li>
        <li> Product definition<ul><li>maybe have images of a concept muncher adapting to different inputs almost like a storyboard but not a UI just the muncher itself</li></ul></li>
        <li> References</li>
        <li> Links</li>
        <li> Research</li>
        <li> Password/login for site</li>
        <li> Figure out how to use web elevates hosting thingy</li>
        <li> Video</li>
        <li> Image gallery</li>
    </ol>
    <div class="container">
        <!-- Product Name -->
        <h1 class="muncher-text">Product Name</h1>
        <h4>Muncher</h4>

        <!-- Intro & Overview -->
        <h1 class="muncher-text">Intro Overview</h1>
            <p>The overriding concept behind Muncher is to develop an app into which the user can input everything they eat in order to gain visual feedback on how healthy (or not) their diet is. This app is being proposed in order to fulfil a market need for a simple, portable method to monitor and gain feedback on daily dietary requirements. The app will provide this feedback on how the food consumed impacts the user’s health by producing an Avatar to represent them and their food choices.</p>
            <p>The user is intended to enter their daily food intake and depending on the nutrients given to the Avatar it evolves appropriately. Providing the Avatar suitable nourishment will create an amiable and attractive monster, while feeding it an unbalanced diet will cause the avatar to reflect that. In addition the app will also give user feedback on how to improve their Avatar, providing an entertaining way for users to learn about proper nutrition and to track their diet.</p>
            <p>Our research has shown that users will be more likely to stay engaged with our app if they have a (perceived) personal stake in the project. Hopefully the use of an Avatar will act as a proxy as we have discovered from our research that people tend to lose interest in using such apps within a short time. We would hope that our retention rate would be higher if our users feel personally invested in the product.</p>
            <p>It is intended to offer this app on ios, Android and Microsoft mobile devices.</p>

        <!-- Product Definition -->
        <h1 class="muncher-text">Product Definition</h1>

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
