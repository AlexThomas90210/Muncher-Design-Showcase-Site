<?php
session_start();
require_once('./constants.php');
if ( !isset($_SESSION['LoggedIn']) ){
    header('Location: '.URL.'login.php', TRUE, 302);
    exit();
}
if ( $_SESSION['LoggedIn'] == false ) {
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

        <!-- logout button -->
        <form class="logoutForm" action="./logout.php" method="post">
            <button class="muncher-text logoutForm__submit text-small" type="submit" name="logoutSubmit">Logout</button>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="who.php">Who</a></li>
                    <li><a href="how.php">How</a></li>
                    <li class="active"><a href="design.php">Design</a></li>
                    <li><a href="links.php">Links</a></li>
                    <li><a href="#contact" data-toggle="modal">Prototype</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <!-- Structure Maps -->
                <section id="structure-map">
                    <h1 class="muncher-text">Structure map</h1>
                    <img class="img-responsive" src="images/Design-Assets/muncher-app-structure-map.png" alt="Structure Map">
                </section>

                <!-- State Transition Diagram -->
                <section id="state-transition-diagram">
                    <h1 class="muncher-text">State Transition Diagram</h1>
                    <img class="img-responsive" src="images/Design-Assets/muncher-state-transition-diagram.png" alt="Structure Map">
                </section>

                <!-- Wire Frames -->
                <section id="wireframes">
                    <h1 class="muncher-text">Wire Frames</h1>
                    <h3 id="wireframe-login-create" class="muncher-text">Login &amp; Create Munher</h3>
                        <a href="images/Design-Assets/wireframe-login-create.png" title="Wireframe Login, Create Muncher" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/wireframe-login-create.png" alt="Login / Create">
                        </a>
                    <h3 id="wireframe-home" class="muncher-text">Home</h3>
                        <a href="images/Design-Assets/wireframe-home.png" title="Wireframe Home" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/wireframe-home.png" alt="Home">
                        </a>
                    <h3 id="wireframe-input-food" class="muncher-text">Feed</h3>
                        <a href="images/Design-Assets/wireframe-input-food.png" title="Wireframe Feed" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/wireframe-input-food.png" alt="Input Food">
                        </a>
                    <h3 id="wireframe-feedback" class="muncher-text">Feedback</h3>
                        <a href="images/Design-Assets/wireframe-feedback.png" title="Wireframe Feedback" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/wireframe-feedback.png" alt="Feedback">
                        </a>
                    <h3 id="wireframe-exercise" class="muncher-text">Exercise</h3>
                        <a href="images/Design-Assets/wireframe-exercise.png" title="Wireframe Exercise" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/wireframe-exercise.png" alt="Exercise">
                        </a>
                    <h3 id="wireframe-settings" class="muncher-text">Settings</h3>
                        <a href="images/Design-Assets/wireframe-settings.png" title="Wireframe Settings" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/wireframe-settings.png" alt="Settings">
                        </a>
                </section>

                <!-- Story Boards -->
                <section id="storyboards">
                    <h1 class="muncher-text">Story Boards</h1>
                    <h3 id="get-feedback-flow-diagram" class="muncher-text">Get Feedback Task Flow Diagram</h3>
                    <a href="images/Design-Assets/Storyboard-search-food.png" title="Task Flow Create Muncher" data-gallery>
                        <img class="img-responsive" src="images/Design-Assets/Storyboard-search-food.png" alt="Storyboard Search Food">
                    </a>
                </section>
            </div>

            <!-- Side nav -->
            <div class="col-sm-2 hidden-xs bs-docs-sidebar" role="complimentary">
                <ul id="sidebar" class="nav nav-stacked">
                    <li><a href="#structure-map">Structure Map</a></li>
                    <li><a href="#state-transition-diagram">State Transition Diagram</a></li>
                    <li><a href="#wireframes">Wireframes</a>
                            <ul class="nav nav-stacked">
                                <li><a href="#wireframe-login-create">Login , Create Muncher</a></li>
                                <li><a href="#wireframe-home">Home</a></li>
                                <li><a href="#wireframe-input-food">Input Food</a></li>
                                <li><a href="#wireframe-feedback">Feedback</a></li>
                                <li><a href="#wireframe-exercise">Input Exercise</a></li>
                                <li><a href="#wireframe-settings">Settings</a></li>
                            </ul>
                    </li>
                    <li><a href="#storyboards">Storyboards</a></li>
                </ul>
            </div>

        </div>
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
