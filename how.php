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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- main -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- image gallery -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href=".css/bootstrap-image-gallery.min.css">
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
                    <li ><a href="who.php">Who</a></li>
                    <li class="active"><a href="how.php">How</a></li>
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

                <!-- Use Case Diagram -->
                <section id="use-case-diagram">
                    <h1 class="muncher-text">Use Case Diagram</h1>
                    <img class="img-responsive" src="images/Design-Assets/muncher-use-case-diagram.png" alt="Use Case Diagram">
                </section>

                <!-- Use Cases -->
                <section id="use-cases">

                    <!-- Create Muncher Use Case -->
                    <h1 class="muncher-text">Use Cases</h1>
                    <h3 id="create-muncher" class="muncher-text">Use Case : Create Muncher</h3>
                    <h4>Brief Description</h4>
                    <p>This use case describes how the user gets started with creating a new Muncher after downloading the app</p>
                    <h4>Actors</h4>
                    <p>
                        Muncher
                        <br>
                        User
                    </p>
                    <h4>Preconditions</h4>
                    <p>There is an active network to the Muncher Server</p>
                    <h4>Basic Flow Of Events</h4>
                    <ol>
                        <li>The use case begins when the User downloads the app.</li>
                        <li>User opens the app.</li>
                        <li>User does not want to create an account so taps on “Create Muncher”.</li>
                        <li>User enters their Age, Sex, BMI &amp; weight.</li>
                        <li>User selects which Muncher Avatar they want to use.</li>
                    </ol>
                    <h4>Alternate Flows</h4>
                    <strong>User logs in with facebook</strong>
                    <ol>
                        <li>The use case begins when the User downloads the app.</li>
                        <li>User opens the app.</li>
                        <li>User taps on login with facebook</li>
                        <li>User is redirected to facebook to confirm</li>
                        <li>User is redirected back to muncher</li>
                        <li>User enters their Age, Sex, BMI &amp; weight.</li>
                        <li>User selects which Muncher Avatar they want to use.</li>
                    </ol>

                    <!-- Task Case : Create Muncher-->
                    <h3 class="muncher-text">Task Case : Create Muncher</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Step</th>
                            <th>User Activity</th>
                            <th>System Responsibility</th>
                        </tr>
                        <tr>
                            <td>Download &amp; Open App</td>
                            <td><ol><li>Download App.</li><li> Open App.</li></ol></td>
                            <td>Check if User has already logged in or created a muncher, In this case the user has not so the system displays the start screen</td>
                        </tr>
                        <tr>
                            <td>Create Muncher</td>
                            <td>The user taps on “Create Muncher”.</td>
                            <td>Display create muncher screen, User details Step</td>
                        </tr>
                        <tr>
                            <td>User details</td>
                            <td><ol><li>The user inputs their age, sex , BMI , weight.</li><li>User taps next</li></ol></td>
                            <td>Display Select Avatar step</td>
                        </tr>
                        <tr>
                            <td>Select Avatar</td>
                            <td><ol><li>User selects which avatar they want to use</li><li>taps next</li></ol></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Finish</td>
                            <td>Taps finish</td>
                            <td><ol><li>Store all inputed data on device</li><li>Send all inputted data to server</li><li>display home screen</li></ol></td>
                        </tr>
                    </table>

                    <!-- Input Food with barcode -->
                    <h3 id="input-food-with-barcode" class="muncher-text">Use Case : Input Food with barcode</h3>
                    <h4>Brief Description</h4>
                    <p>This use case describes how the User uses the Muncher to input the food they eat.</p>
                    <h4>Actors</h4>
                    <p>
                        Muncher
                        <br>
                        User
                    </p>
                    <h4>Preconditions</h4>
                    <p>There is an active network to the Muncher Server <br>
                         The User has created a Muncher.</p>
                    <h4>Basic Flow Of Events</h4>
                    <ol>
                        <li>The use case begins when Opens the App.</li>
                        <li>User selects "Feed Muncher".</li>
                        <li>User selects “Barcode Scanner”</li>
                        <li>The user scans the barcode with their devices camera</li>
                        <li>The user enters the amount.</li>
                        <li>The user is shown the food,total calories &amp; nutrients</li>
                        <li>The user confirms</li>
                    </ol>
                    <h4>Use Case Wireframe </4>
                    <a href="images/Design-Assets/use-case-input-barcode.png" title="Use Case Exercise" data-gallery>
                        <img class="img-responsive" src="images/Design-Assets/use-case-input-barcode.png" alt="Use Case barcode">
                    </a>
                    <h4>Alternate Flows</h4>
                    <strong>Barcode undefined</strong>
                    <ol>
                        <li>The use case begins when Opens the App.</li>
                        <li>User selects "Feed Muncher".</li>
                        <li>User selects “Barcode Scanner”</li>
                        <li>The user scans the barcode with their devices camera</li>
                        <li>The system does not recognise the barcode</li>
                        <li>System prompts the user about the error</li>
                        <li>The user selects a different input method</li>
                    </ol>
                    <h4>Use Case Wireframe </4>
                    <a href="images/Design-Assets/use-case-input-food-search.png" title="Use Case Search" data-gallery>
                        <img class="img-responsive" src="images/Design-Assets/use-case-input-food-search.png" alt="Use Case Search">
                    </a>

                    <!-- Task Case : Input Food With Barcode -->
                    <h3 class="muncher-text">Task Case : Input food with barcode</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Step</th>
                            <th>User Activity</th>
                            <th>System Responsibility</th>
                        </tr>
                        <tr>
                            <td>Select Input Food</td>
                            <td><ol><li>The use case begins when Opens the App.</li><li>In this case the User always selects "Feed Muncher".</li></ol></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Select Barcode Scanner</td>
                            <td>In this case the User always selects “Barcode Scanner”</td>
                            <td>The system opens the camera of the device and waits for it to recognise a barcode </td>
                        </tr>
                        <tr>
                            <td>Scan Barcode</td>
                            <td>The user scans the barcode with their devices camera</td>
                            <td><ol><li>The system calls the Server with the barcode to get the food name,image nutritional content and calorie count.</li><li>The system displays the information and prompts the user to input the correct amount of in taken</li></ol></td>
                        </tr>
                        <tr>
                            <td>Enter Amount</td>
                            <td>The user enters the amount</td>
                            <td>The system calculates the nutritional &amp; calorie value from the amount , and prompts that to the user</td>
                        </tr>
                        <tr>
                            <td>Confirm</td>
                            <td>The user Confirms to feed muncher the selected food &amp; amount</td>
                            <td><ol><li>The system adapts muncher based on the nutritional &amp; caloric input</li><li>The system records the calorie intake and nutritional information for use in recommendation</li><li>The system displays a health tip about the inputted food if one is available</li></ol></td>
                        </tr>
                    </table>

                    <!-- Input Exercise -->
                    <h3 id="input-exercise" class="muncher-text">Use Case : Input Exercise</h3>
                    <h4>Brief Description</h4>
                    <p>This use case describes how the User uses the Muncher to input the exercise they have done.</p>
                    <h4>Actors</h4>
                    <p>
                        Muncher
                        <br>
                        User
                    </p>
                    <h4>Preconditions</h4>
                    <p>There is an active network to the Muncher Server <br>
                         The User has created a Muncher.</p>
                    <h4>Basic Flow Of Events</h4>
                    <ol>
                        <li>The use case begins when Opens the App.</li>
                        <li>User selects "Exercise".</li>
                        <li>User selects the intensity of the exercise from soft, medium or hard.</li>
                        <li>User selects the the duration of the exercise.</li>
                        <li>User sees the estimated calories burnt from that exercise.</li>
                        <li>User confirms</li>
                    </ol>
                    <h4>Use Case Wireframe </4>
                    <a href="images/Design-Assets/use-case-exercise.png" title="Use Case Exercise" data-gallery>
                        <img class="img-responsive" src="images/Design-Assets/use-case-exercise.png" alt="Use Case Exercise">
                    </a>
                    <h4>Alternate Flows</h4>
                    <strong>None</strong>

                    <!--Task Case : Input Exercise -->
                    <h3 class="muncher-text">Task Case : Input Exercise</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Step</th>
                            <th>User Activity</th>
                            <th>System Responsibility</th>
                        </tr>
                        <tr>
                            <td>Select Exercise</td>
                            <td><ol><li>The use case begins when Opens the App.</li><li>In this case the User always selects "Exercise".</li></ol></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Input intensity level</td>
                            <td>The user selects the intensity of the exercise from soft, medium or hard.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Input duration</td>
                            <td>The user selects the the duration of the exercise.</td>
                            <td><ol><li>The system calculates the estimated calories burned based on intensity level, duration , age , sex , BMI .</li><li>The system displays estimated burned calories to user.</li></ol></td>
                        </tr>
                        <tr>
                            <td>Confirm</td>
                            <td>The user Confirms to input the exercise.</td>
                            <td><ol><li>The system adapts muncher based on the estimated calories burned &amp; intensity of the workout.</li><li>The system records the inputted exercise</li></ol></td>
                        </tr>
                    </table>


                    <h3 id="get-feedback" class="muncher-text">Use Case: Get Feedback</h3>
                    <h4>Brief Description</h4>
                    <p>This use case describes how the User uses Muncher for feedback on how they can improve their diet.</p>
                    <h4>Actors</h4>
                    <p>
                        Muncher
                        <br>
                        User
                    </p>
                    <h4>Preconditions</h4>
                    <p>There is an active network to the Muncher Server <br>
                         The User has created a Muncher.</p>
                    <h4>Basic Flow Of Events</h4>
                    <ol>
                        <li>The use case begins when the User opens the App.</li>
                        <li>User selects "Feedback".</li>
                        <li>The user is displayed stats about the nutritional value of their diet</li>
                        <li>The user can cycle from food’s they should remove from their diet , to food they should try include more of in their diet for a healthy, balanced diet.</li>
                    </ol>
                    <h4>Alternate Flows</h4>
                    <strong>Not enough information</strong>
                    <ol>
                        <li>The user opens the app.</li>
                        <li>The user selects “Feedback”.</li>
                        <li>The user see’s no stats because they have not inputed enough food into the app</li>
                        <li>The user taps “Recommended food”</li>
                        <li>The system prompts the user that it needs more information to give the user feedback</li>
                        <li>The user is required to use the app more to benefit from this feature</li>
                    </ol>
                    <strong>Wrong diet preference setting chosen</strong>
                    <ol>
                        <li>The user opens the app.</li>
                        <li>The user selects “Feedback”.</li>
                        <li>The user sees stats about their diet</li>
                        <li>The user taps “Recommended food”</li>
                        <li>The app displays meat’s because the user is low in protein</li>
                        <li>The user is a vegetarian</li>
                        <li>The user is required to change their diet preferences in Settings to vegetarian</li>
                    </ol>

                    <!-- Task Case: Get Feedback -->
                    <h3 class="muncher-text">Task Case : Get Feedback</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Step</th>
                            <th>User Activity</th>
                            <th>System Responsibility</th>
                        </tr>
                        <tr>
                            <td>Select Feedback</td>
                            <td><ol><li>The use case begins when Opens the App.</li><li>In this case the User always selects "Feedback".</li></ol></td>
                            <td>The system displays stats on the user’s diet , such as the user’s intake of key nutrients vs recommended daily allowance, average daily calorie intake.</td>
                        </tr>
                        <tr>
                            <td>Select “Foods to add to diet”</td>
                            <td>The user taps on “Foods to add to diet”</td>
                            <td><ol><li> The system calculates which nutrients the user is lacking the most in their diet against the recommended daily allowance.</li><li>From that list of nutrients, the system finds foods that contain those nutrient that also fit the user’s diet. Eg. A user who is low in protein who has selected vegetarian in settings would be displayed pumpkin seeds, dried beans, eggs </li></ol></td>
                        </tr>
                        <tr>
                            <td>Select Foods to remove from diet</td>
                            <td>The user taps on foods to remove from diet</td>
                            <td><ol><li>The system calculates which nutrients the user is consuming too much of against the daily recommended allowance.</li><li>From that list , the systems displays foods the user has eaten which are causing this nutritional imbalance in their diet. Certain nutrients having priority over less important nutrients such as Sugar or Salt or Saturated fats.</li></ol></td>
                        </tr>
                        <tr>
                            <td>Confirm</td>
                            <td>The user Confirms to input the exercise.</td>
                            <td><ol><li>The system adapts muncher based on the estimated calories burned &amp; intensity of the workout.</li><li>The system records the inputted exercise</li></ol></td>
                        </tr>
                    </table>
                    </section>

                    <!-- CUSTTOMIZE -->
                    <h3 id="customize-muncher" class="muncher-text">Use Case: Customise Muncher</h3>
                    <h4>Brief Description</h4>
                    <p>This use case describes how the User can customize Muncher with items such as hats, shorts, sun glasses or other fun items</p>
                    <h4>Actors</h4>
                    <p>
                        Muncher
                        <br>
                        User
                    </p>
                    <h4>Preconditions</h4>
                    <p>There is an active network to the Muncher Server <br>
                         The User has created a Muncher.</p>
                    <h4>Basic Flow Of Events</h4>
                    <ol>
                        <li>Sinead opens up the app on her phone.</li>
                        <li>She clicks on Settings</li>
                        <li>She clicks on the customise muncher option.</li>
                        <li>She selects an item to place on muncher.</li>
                        <li>She picks what colour she would like it in.</li>
                        <li>Mucher shows her what it looks like.</li>
                        <li>She saves the settings.</li>
                    </ol>
                    <h4>Alternate Flows</h4>
                    <strong>Doesnt like the item on muncher</strong>
                    <ol>
                        <li>Sinead opens up the app on her phone.</li>
                        <li>She clicks on Settings</li>
                        <li>She clicks on the customise muncher option.</li>
                        <li>She selects an item to place on muncher.</li>
                        <li>She picks what colour she would like it in.</li>
                        <li>Mucher shows her what it looks like.</li>
                        <li>She rejects the option</li>
                        <li>She select a different item</li>
                    </ol>

                    <!-- Task Case: Get Feedback -->
                    <h3 class="muncher-text">Task Case : Customize Muncher</h3>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Step</th>
                            <th>User Activity</th>
                            <th>System Responsibility</th>
                        </tr>
                        <tr>
                            <td>Open App</td>
                            <td>User opens app on phone</td>
                            <td>Open app.</td>
                        </tr>
                        <tr>
                            <td>Select Customise</td>
                            <td><ol><li>User selects settings</li><li>User selects customize</li></ol></td>
                            <td>Open customise screen, Display options</td>
                        </tr>
                        <tr>
                            <td>Select Item to Add</td>
                            <td>User Selects an item</td>
                            <td>Add item to muncher</td>
                        </tr>
                        <tr>
                            <td>Select Item Colour</td>
                            <td>User Selects a colour</td>
                            <td>Change colour of item</td>
                        </tr>
                        <tr>
                            <td>Save Choices</td>
                            <td>Save when happy with choice</td>
                            <td>Save choices, use same muncher with linked account.</td>
                        </tr>
                    </table>
                    </section>


                    <!-- Task Case Diagram -->
                    <section id="task-case-diagrams">
                        <h1 class="muncher-text">Task Case Diagram</h1>
                        <h3 id="create-muncher-flow-diagrams" class="muncher-text">Create Muncher Task Flow Diagram</h3>
                        <a href="images/Design-Assets/task-flow-login-create-muncher.png" title="Task Flow Create Muncher" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/task-flow-login-create-muncher.png" alt="Task Flow Create Muncher">
                        </a>

                        <h3 id="input-exercise-flow-diagram" class="muncher-text">Input Exercise Task Flow Diagram</h3>
                        <a href="images/Design-Assets/task-flow-input-exercise.png" title="Task Flow Create Muncher" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/task-flow-input-exercise.png" alt="Task Flow Create Muncher">
                        </a>

                        <h3 id="get-feedback-flow-diagram" class="muncher-text">Get Feedback Task Flow Diagram</h3>
                        <a href="images/Design-Assets/task-flow-get-feedback.png" title="Task Flow Create Muncher" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/task-flow-get-feedback.png" alt="Task Flow Get Feedback">
                        </a>

                        <h3 id="input-food-flow-diagram" class="muncher-text">Get Feedback Task Flow Diagram</h3>
                        <a href="images/Design-Assets/task-flow-input-food.png" title="Task Flow Create Muncher" data-gallery>
                            <img class="img-responsive" src="images/Design-Assets/task-flow-input-food.png" alt="Task Flow Input Food">
                        </a>

                    </section>
                </div>

                <!-- Side nav -->
                <div class="col-sm-2 hidden-xs bs-docs-sidebar" role="complimentary">
                    <ul id="sidebar" class="nav nav-stacked">
                        <li><a href="#use-case-diagram">Use Case Diagram</a></li>
                        <li><a href="#use-cases">Use Cases</a>
                            <ul class="nav nav-stacked">
                                <li><a href="#create-muncher">Create Muncher</a></li>
                                <li><a href="#input-food-with-barcode">Input Food With Barcode</a></li>
                                <li><a href="#input-exercise">Input Exercise</a></li>
                                <li><a href="#get-feedback">Get Feedback</a></li>
                                <li><a href="#customize-muncher">Customize Muncher</a></li>
                            </ul>
                        </li>
                        <li><a href="#task-case-diagrams">Task Flow Diagrams</a>
                            <ul class="nav nav-stacked">
                                <li><a href="#create-muncher-flow-diagrams">Create Muncher</a></li>
                                <li><a href="#input-exercise-flow-diagram">Input Exercise</a></li>
                                <li><a href="#get-feedback-flow-diagram">Get Feedback </a></li>
                                <li><a href="#input-food-flow-diagram">Input Food</a></li>
                            </ul>
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
                        <iframe src="https://xd.adobe.com/embed/bbda9e22-d610-42bc-7b15-958fb5f9926d/" width="100%" height="100%" style="border: 0px none; margin-left: -185px; height: 859px; margin-top: 0px; width: 926px;"></iframe>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Main -->
    <script src="./js/main.js"></script>

</body>
</html>
