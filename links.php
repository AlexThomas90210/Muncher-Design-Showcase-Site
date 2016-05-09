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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="who.php">Who</a></li>
                    <li><a href="how.php">How</a></li>
                    <li><a href="design.php">Design</a></li>
                    <li class="active"><a href="links.php">Links</a></li>
                    <li><a href="#contact" data-toggle="modal">Prototype</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <!-- Research -->
                <section id="research">
                    <h1 class="muncher-text">Research</h1>
                        <p>
                            For the data gathering process , we had an idea to use www.reddit.com . Reddit is a very popular website where users can post information about anything with each other in ‘subreddits’ that are separated by topic. If users like the post they upvote it, if they don’t they downvote it, then posts are ordered by how many upvotes they have , popular content stays at the top of a subreddit for a period of < 24 hours.
                        </p>
                        <p>
                            The subreddit that we choose was www.reddit.com/r/SampleSize ,it has 32,000 subscribers and is a dedicated subreddit for people to get feedback on surveys or studies , where if Users are interested in the topic , they will take the survey. We saw this as an excellent opportunity to survey a large number of people within our target audience.
                        </p>
                        <p>
                            We made a new post which you can see Here giving a brief description of the app in its title and a link to 2 surveys. Quickly our post on reddit got a massive amount of upvotes in its subreddit with hundreds of people taking our surveys and giving us detailed feedback with a huge amount of positivity.Within 12 hours our post had 200 upvotes and was at the top of the subreddit, the second place post was at 19 upvotes at the time showing what a staggering effect our post had.
                        </p>

                        <div id="accordion">
                            <h5>Question 1</h5>
                            <div>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>REF</th>
                                        <th>Answer</th>
                                    </tr>
                                    <tr>
                                        <td>S1.1-01</td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-02</td>
                                        <td>I enjoy the idea of this app, but this is coming from someone who is currently skinny, trying to get healthier. I think that if this app were to come out when I were overweight and severely struggling with my body image, I would not download it for fear of it damaging my already low self-esteem.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-03</td>
                                        <td>Several problems. first of all, not all food is scanable, and especially not the foods you SHOULD be eating (non-processed). Secondly, not all foods are equal for all people. People can react very differently to foods. for instance, someone with chronic low blood pressure, really doesn't need to be very concerned about excessive sodium. Even people with the same problems are different. People who take insulin for diabetes eat differently than people who do not take insulin. And even among those who don't, some of them can handle certain types of sugars ok, but some can't. And that is not even addressing problems like having something that should be healthy, but eating so much of it that it becomes unhealthy. There are so many more variables to "healthy eating" than just what the food is. That is not to say it should not exist, but it is a gross oversimplification for many people</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-04</td>
                                        <td>I don't like the implication of weight and health corresponding, because people can eat unhealthy food and not be healthy and still be skinny, and people can be chubby and eating well. Probably making the avatar happier/ brighter/more active/basically focus on well being and health without doing anything to the weight of the avatar by default. (A selectable option might be to involve weight in the app, but it shouldn't be the default.)</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-05</td>
                                        <td>Many people are "unaware" they are being unhealthy (or are too stubborn about it). Having something for them to look at and reflect on might be what people need to start eating better and to keep motivated.</td>
                                    </tr>
                                </table>
                            </div>

                            <h3>Question 2</h3>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>REF</th>
                                        <th>Answer</th>
                                    </tr>
                                    <tr>
                                        <td>S1.2-01</td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-02</td>
                                        <td>I enjoy the idea of this app, but this is coming from someone who is currently skinny, trying to get healthier. I think that if this app were to come out when I were overweight and severely struggling with my body image, I would not download it for fear of it damaging my already low self-esteem.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-03</td>
                                        <td>Several problems. first of all, not all food is scanable, and especially not the foods you SHOULD be eating (non-processed). Secondly, not all foods are equal for all people. People can react very differently to foods. for instance, someone with chronic low blood pressure, really doesn't need to be very concerned about excessive sodium. Even people with the same problems are different. People who take insulin for diabetes eat differently than people who do not take insulin. And even among those who don't, some of them can handle certain types of sugars ok, but some can't. And that is not even addressing problems like having something that should be healthy, but eating so much of it that it becomes unhealthy. There are so many more variables to "healthy eating" than just what the food is. That is not to say it should not exist, but it is a gross oversimplification for many people</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-04</td>
                                        <td>I don't like the implication of weight and health corresponding, because people can eat unhealthy food and not be healthy and still be skinny, and people can be chubby and eating well. Probably making the avatar happier/ brighter/more active/basically focus on well being and health without doing anything to the weight of the avatar by default. (A selectable option might be to involve weight in the app, but it shouldn't be the default.)</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-05</td>
                                        <td>Many people are "unaware" they are being unhealthy (or are too stubborn about it). Having something for them to look at and reflect on might be what people need to start eating better and to keep motivated.</td>
                                    </tr>
                                </table>
                            <h3>Question 3</h3>
                            <h3>Question 4</h3>
                            <h3>Question 5</h3>
                            <h3>Question 6</h3>
                            <h3>Question 7</h3>
                            <h3>Question 8</h3>
                            <h3>Question 9</h3>
                            <h3>Question 10</h3>
                        </div>
                </section>

                <!-- References -->
                <section id="references">
                    <h1 class="muncher-text">References</h1>
                </section>

                <!-- Appendix -->
                <section id="appendix">
                    <h1 class="muncher-text">Appendix</h1>
                </section>
            </div>

            <!-- Side nav -->
            <div class="col-sm-2 hidden-xs bs-docs-sidebar" role="complimentary">
                <ul id="sidebar" class="nav nav-stacked">
                    <li><a href="#research">Research</a></li>
                    <li><a href="#references">References</a></li>
                    <li><a href="#appendix">Appendix</a></li>
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
    <!-- Jquery UI -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
    $(function() {
        $( "#accordion" ).accordion({
            collapsible: true,
            active : 'none'
        });
    });
  </script>
</body>
</html>
