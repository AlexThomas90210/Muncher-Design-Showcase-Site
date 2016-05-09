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
                            <h5>Question 1 : Do you like or dislike any aspect of the idea? if so what is it?</h5>
                            <div>
                                <table class="table table-bordered table-striped small">
                                    <tr>
                                        <th>  REF  </th>
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
                                    <tr>
                                        <td>S1.1-06</td>
                                        <td>I like it a lot.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-07</td>
                                        <td>Yes. I don't have a smartphone/app things, so it's useless to me. Also, I eat low-carb and have for years, so unless the diet of what's healthy and what's not were customisable, I would no way in hell use it.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-08</td>
                                        <td>Great idea! I think having fitness information is important, too, however.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-09</td>
                                        <td>I think the concept is fun and adorable. I'm imagining it almost exactly like MyFitnessPal but with a much cuter and funny interface.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-10</td>
                                        <td>You would have to include activity level. At my peak performance level I consumed over 3,000 calories a day. I can only imagine what my little avatar would look like if I didn't know how many of those calories I actually burned lol</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-11</td>
                                        <td>I like it. The avatar should fatten immediately eating though.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-12</td>
                                        <td>I like it because (to my knowledge) it hasn't been done before, and if it has been I've never seen it</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Like! It seems like a great idea to help visualize how someone's physical condition is altered by their diet.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I think the visual representation is dumb personally, but I can see how plebs and hiveminds would become obsessed with it like a Tamagotchi.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I love the idea, but maybe give different statuses based on the carb/protein/fat intake on the avatar as well? Or separate them out so that it could be easier to visualize where the problem is.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Love the idea.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>This seems like it would stumble over the same issue that other motivation apps seem to: Convincing the average user to continue interacting with the app, especially when they begin experiencing negative feedback due to sloppy habits. I've done this myself a few times, it can be more disheartening than motivating when I fail to get positive results from genuinely trying. Of course, by posing this as a problem, I'm basically asking you to solve people's laziness. Good luck!</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I like it for the cuteness factor.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Definitely like.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>The avatar seems like a fresh idea in that kind of app</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I love this idea! My only problem with it is some people have different dietary requirements. Someone who needs a high sodium diet might get penalized with an uglier avatar for eating too many salty foods, even though that's healthy for them. Maybe include a checklist of things that a person can check that are healthy for them before they start inputting data?</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I'm very interested to see this in action. Weight creeps on slowly so without regular monitoring, changes aren't immediately noticeable. I expect the avatar will show weight gain more quickly so a correction can be made before weight gain is unmanageable.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I like that it is a visual representation of your diet (other than yourself) that allows you to see the effects of the food you're eating.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I like the idea generally, but I can't imagine how I'd put in the data. I mainly cook myself, so I don't know the precise amounts of nutrients I'm eating. And I definitely won't weigh every ingredient so I can put it into the app, that's too inconvenient.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I think it's a great idea.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>At this point i like the entire idea. I would like the option to be entirely offline (no social media).</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Like</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Would body shape have an affect on how the avatar changes? Would an avatar eating too little show effects/dangers of anorexia etc? Will immune system play a part?</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Maybe give the avatar a bit of future vision. As in "if you keep eating the way you do, you'll look like this" instead of simply "this is what you probably look like currently." That'll (hopefully) motivate people more to have a healthy diet if they can see themselves get fat/fit</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I like the idea as described.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I am concerned about the nature of healthy vs unhealthy foods since guidelines change rapidly and it is less about individual foods than it is overall diet over an extended period of time</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I think it's brilliant, I've wanted an app like this for a while! It would just need to be linked with the tons of current food-tracking apps otherwise people won't bother</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>The entire aspect is very cool. One thing I want to call to attention is that many people want to gain weight (muscle) so that should be incorporated. Like you could have options where if you're eating more and lifting, then you gain muscle, rather than fat.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>Yes! It sounds like a fun way to log progress.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I love the idea, but I'm just not sure how it would work on a day by day (or food by food) basis. Like what if I have a super healthy salad for dinner, but then a cupcake for dessert? Do those things cancel each other out?</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I love this.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>There needs to be a way to enter things that do not have barcodes. Will this work internationally? How will the barcodes get entered into the system - by users?</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I like it. It's a little more interesting than regular nutrition-tracking apps, which I have tried several times but get bored of/forget to update.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>The avatar's appearance may trigger those with eating disorders</td>
                                    </tr>
                                    <tr>
                                        <td>S1.1-13</td>
                                        <td>I love the idea and think it is a great way to track my dietary habits</td>
                                    </tr>
                                </table>
                            </div>

                            <h5>Question 2 : How do you imagine the avatar would look like and how realistic do you want the Avatar to be? (e.g. Animal form , Human form , Monster form etc.)</h5>
                                <table class="table table-bordered table-striped small">
                                    <tr>
                                        <th>REF</th>
                                        <th>Answer</th>
                                    </tr>
                                    <tr>
                                        <td>S1.2-01</td>
                                        <td>more like a human</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Customization similar to that of RPGs would be cool (the option of different forms/races and further avatar customization).</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I think most people would prefer several options. Mostly humanoids, but maybe a variety of skin tones, options for animal ears, elf/alien ears, things like that.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Cute animal or person, either way.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Animal form. More playful. But we get to choose which animal!</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster form. Much like tamagotchis. Human form would be weird.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>N/A don't care; no smartphone, not going to use it</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Should take "monster" form. I don't think you want the avatar to look too realistic, as that could potentially be off-putting. Maybe allow the user to start off by creating their "monster"/avatar's appearance, their current height/weight, etc.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster! Or animal. DEFINITELY NOT human. That would creep me out unless it was an exact 3D model of myself.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I'd prefer non-human. Something cute.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>It should be a tan animal viewed either from the front or isometrically.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>An unidentifiable figure (i.e. a made up monster/creature thing).</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Please, choose whatever style you want EXCEPT anime, I think anime would turn me off the app and make me not want to use it. If possible, why not have multiple types of Avatar and make the user choose from them? That would be cool. But I think it should probably default to human.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Cute figures with bright colors, something that you see with Waze avatars. OR A silhouette of a man or woman from the front and side profiles, which changes shape/color based on the given inputted metrics.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I wouldn't imagine it because it's retarded. A tomato popped into my mind, like Return of The Killer Tomatoes style.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Pretty much like a pokemon creature. offer 5-6 and let the user pick which one / customize it.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Creature form. You could even choose from a small selection of presets. And then your creature would evolve from there.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I would imagine it as human form, as that's the most helpful. Anything beyond a silhouette with a face would probably lose appeal for me.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Caricature of a human</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Tamagotchi like. So, monster?</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Customize it ourselves somewhat. I think animals could be fun. I love the idea of starting out a fat little baby baboon and growing into a more fit adult one over a few months sounds like fun.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Human form, but obviously cartoon style. Not too realistic.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>It would be fun to start with a basic shape and add the user enters food, losses weight, meets activity goals, etc., customizable features (color, features, accessories, special avatars like animals, monsters, famous/historical figures) are unlocked. Like Waze but with more options.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Something cartoon-ish would be cool, not too detailed, like a tamagotchi-like avatar. Would have changing face, breathe, move etc. Or like a mii from tomodachi life.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Like a cute blue monster.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I'm kinda partial to felines, but a customizable human could be interesting too.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster or animal.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Animal form! I think it would be much cuter to have something non-human.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>a monster/animal like totoro from "my neighbour totoro"</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster colours, similar to human features, but with tail/fur/spikes</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I'd say make it a cartoonish person. It'll look human-like but still be simple enough that you don't have to add a ton of detail. Plus, then you can easily edit the person to be fatter, healthier, or have a variety of conditions (like if they're lacking X in their diet, or eating too much Y)</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I would prefer something not quite real, so I guess like a monster, or maybe fantasy creatures. I just don't think something that is real would be as easy to exaggerate the effects of food on. In the end, if the app works well I won't care what the avatar is. Some amount of options or control over the characters general appearance would be important to me though.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster form! Like the real tomagatchis only less blob looking. I also picture it acting like stitch from lilo and stitch and getting very monstrous looking while devouring food then going back to cute</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Animals. I don't want to look after a human</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster form. I'm thinking like Pokemon/digoxin knockoffs.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Cute animal form please! Like a narwhal!</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I think it would be cool if you could pick what form it was, like there are 5 different animal options, some human options, monster, etc. I am imagining it to be sort of pixelated like the tamagotchis, but that may be for nostalgia-sake only, since I had one as a kid. Not sure if younger users would appreciate the vintage look.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Definitely Animal. If possible multiple options. I would like it to look pretty cartoonish</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I imagine it as a bunny, but I don't think it should be a bunny. I think making it a human might make people more critical of the app</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Monster form - this would allow the unhealthy/healthy difference to be very dramatic!</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>You should be able to select from several different kinds. Animal/monsters similar to pokemon. But definitely some real animals to appeal to the non-nerd crowd (losers)</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I was imagining a cartoonish human. I like the idea of choosing an aesthetic that appeals to you and having the avatar look more impressive than an aesthetic. E.g: strongman, athlete, streetclothes maybe, professional, etc. Not a well formed idea, but I know different aesthetics appeal to people on an innate level. Like, if my avatar was just getting increasingly burly and thuggish, I wouldn't be a fan, but I'd love if he looked "cool" in streetwear or smart-casual and got increasingly healthy/well-dressed and vice versa.</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>Human form but cute</td>
                                    </tr>
                                    <tr>
                                        <td>S1.2-06</td>
                                        <td>I would like a cute monster form</td>
                                    </tr>




                                </table>
                            <h5>Question 3</h5>
                            <tr>
                                <td>S1.2-06</td>
                                <td></td>
                            </tr>
                            <h5>Question 4</h5>
                            <h5>Question 5</h5>
                            <h5>Question 6</h5>
                            <h5>Question 7</h5>
                            <h5>Question 8</h5>
                            <h5>Question 9</h5>
                            <h5>Question 10</h5>
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
