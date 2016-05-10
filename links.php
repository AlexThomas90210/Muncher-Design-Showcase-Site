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

                        <div class="accordion">
                            <h5>Q.1 : Do you like or dislike any aspect of the idea? if so what is it?</h5>
                            <div>
                                <table class="table table-bordered table-striped small">
                                    <tr>
                                        <th>No</th>
                                        <th>Answers</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>I enjoy the idea of this app, but this is coming from someone who is currently skinny, trying to get healthier. I think that if this app were to come out when I were overweight and severely struggling with my body image, I would not download it for fear of it damaging my already low self-esteem.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Several problems. first of all, not all food is scanable, and especially not the foods you SHOULD be eating (non-processed). Secondly, not all foods are equal for all people. People can react very differently to foods. for instance, someone with chronic low blood pressure, really doesn't need to be very concerned about excessive sodium. Even people with the same problems are different. People who take insulin for diabetes eat differently than people who do not take insulin. And even among those who don't, some of them can handle certain types of sugars ok, but some can't. And that is not even addressing problems like having something that should be healthy, but eating so much of it that it becomes unhealthy. There are so many more variables to "healthy eating" than just what the food is. That is not to say it should not exist, but it is a gross oversimplification for many people</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>I don't like the implication of weight and health corresponding, because people can eat unhealthy food and not be healthy and still be skinny, and people can be chubby and eating well. Probably making the avatar happier/ brighter/more active/basically focus on well being and health without doing anything to the weight of the avatar by default. (A selectable option might be to involve weight in the app, but it shouldn't be the default.)</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Many people are "unaware" they are being unhealthy (or are too stubborn about it). Having something for them to look at and reflect on might be what people need to start eating better and to keep motivated.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>I like it a lot.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Yes. I don't have a smartphone/app things, so it's useless to me. Also, I eat low-carb and have for years, so unless the diet of what's healthy and what's not were customisable, I would no way in hell use it.</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Great idea! I think having fitness information is important, too, however.</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>I think the concept is fun and adorable. I'm imagining it almost exactly like MyFitnessPal but with a much cuter and funny interface.</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>You would have to include activity level. At my peak performance level I consumed over 3,000 calories a day. I can only imagine what my little avatar would look like if I didn't know how many of those calories I actually burned lol</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>I like it. The avatar should fatten immediately eating though.</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>I like it because (to my knowledge) it hasn't been done before, and if it has been I've never seen it</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Like! It seems like a great idea to help visualize how someone's physical condition is altered by their diet.</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>I think the visual representation is dumb personally, but I can see how plebs and hiveminds would become obsessed with it like a Tamagotchi.</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>I love the idea, but maybe give different statuses based on the carb/protein/fat intake on the avatar as well? Or separate them out so that it could be easier to visualize where the problem is.</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Love the idea.</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>This seems like it would stumble over the same issue that other motivation apps seem to: Convincing the average user to continue interacting with the app, especially when they begin experiencing negative feedback due to sloppy habits. I've done this myself a few times, it can be more disheartening than motivating when I fail to get positive results from genuinely trying. Of course, by posing this as a problem, I'm basically asking you to solve people's laziness. Good luck!</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>I like it for the cuteness factor.</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Definitely like.</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>The avatar seems like a fresh idea in that kind of app</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>I love this idea! My only problem with it is some people have different dietary requirements. Someone who needs a high sodium diet might get penalized with an uglier avatar for eating too many salty foods, even though that's healthy for them. Maybe include a checklist of things that a person can check that are healthy for them before they start inputting data?</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>I'm very interested to see this in action. Weight creeps on slowly so without regular monitoring, changes aren't immediately noticeable. I expect the avatar will show weight gain more quickly so a correction can be made before weight gain is unmanageable.</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>I like that it is a visual representation of your diet (other than yourself) that allows you to see the effects of the food you're eating.</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>I like the idea generally, but I can't imagine how I'd put in the data. I mainly cook myself, so I don't know the precise amounts of nutrients I'm eating. And I definitely won't weigh every ingredient so I can put it into the app, that's too inconvenient.</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>I think it's a great idea.</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>At this point i like the entire idea. I would like the option to be entirely offline (no social media).</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Like</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Would body shape have an affect on how the avatar changes? Would an avatar eating too little show effects/dangers of anorexia etc? Will immune system play a part?</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Maybe give the avatar a bit of future vision. As in "if you keep eating the way you do, you'll look like this" instead of simply "this is what you probably look like currently." That'll (hopefully) motivate people more to have a healthy diet if they can see themselves get fat/fit</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>I like the idea as described.</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>I am concerned about the nature of healthy vs unhealthy foods since guidelines change rapidly and it is less about individual foods than it is overall diet over an extended period of time</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>I think it's brilliant, I've wanted an app like this for a while! It would just need to be linked with the tons of current food-tracking apps otherwise people won't bother</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>The entire aspect is very cool. One thing I want to call to attention is that many people want to gain weight (muscle) so that should be incorporated. Like you could have options where if you're eating more and lifting, then you gain muscle, rather than fat.</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Yes! It sounds like a fun way to log progress.</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>I love the idea, but I'm just not sure how it would work on a day by day (or food by food) basis. Like what if I have a super healthy salad for dinner, but then a cupcake for dessert? Do those things cancel each other out?</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>I love this.</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>There needs to be a way to enter things that do not have barcodes. Will this work internationally? How will the barcodes get entered into the system - by users?</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>I like it. It's a little more interesting than regular nutrition-tracking apps, which I have tried several times but get bored of/forget to update.</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>The avatar's appearance may trigger those with eating disorders</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>I love the idea and think it is a great way to track my dietary habits</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="accordion">
                            <h5>Q.2 : How do you imagine the avatar would look like and how realistic do you want the Avatar to be? <small>(e.g. Animal form , Human form , Monster form etc.)</small></h5>
                                <table class="table table-bordered table-striped small">
                                    <tr>
                                        <th>No</th>
                                        <th>Answer</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>more like a human</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Customization similar to that of RPGs would be cool (the option of different forms/races and further avatar customization).</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>I think most people would prefer several options. Mostly humanoids, but maybe a variety of skin tones, options for animal ears, elf/alien ears, things like that.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Cute animal or person, either way</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Animal form. More playful. But we get to choose which animal!</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Monster form. Much like tamagotchis. Human form would be weird.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>N/A don't care; no smartphone, not going to use it</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Should take "monster" form. I don't think you want the avatar to look too realistic, as that could potentially be off-putting. Maybe allow the user to start off by creating their "monster"/avatar's appearance, their current height/weight, etc.</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Monster! Or animal. DEFINITELY NOT human. That would creep me out unless it was an exact 3D model of myself.</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>I'd prefer non-human. Something cute.</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>It should be a tan animal viewed either from the front or isometrically.</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>An unidentifiable figure (i.e. a made up monster/creature thing).</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Please, choose whatever style you want EXCEPT anime, I think anime would turn me off the app and make me not want to use it. If possible, why not have multiple types of Avatar and make the user choose from them? That would be cool. But I think it should probably default to human.</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Cute figures with bright colors, something that you see with Waze avatars. OR A silhouette of a man or woman from the front and side profiles, which changes shape/color based on the given inputted metrics.</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>I wouldn't imagine it because it's retarded. A tomato popped into my mind, like Return of The Killer Tomatoes style.</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Pretty much like a pokemon creature. offer 5-6 and let the user pick which one / customize it.</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Creature form. You could even choose from a small selection of presets. And then your creature would evolve from there.</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>I would imagine it as human form, as that's the most helpful. Anything beyond a silhouette with a face would probably lose appeal for me.</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Caricature of a human</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Tamagotchi like. So, monster?</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Customize it ourselves somewhat. I think animals could be fun. I love the idea of starting out a fat little baby baboon and growing into a more fit adult one over a few months sounds like fun.</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Human form, but obviously cartoon style. Not too realistic.</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>It would be fun to start with a basic shape and add the user enters food, losses weight, meets activity goals, etc., customizable features (color, features, accessories, special avatars like animals, monsters, famous/historical figures) are unlocked. Like Waze but with more options.</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Something cartoon-ish would be cool, not too detailed, like a tamagotchi-like avatar. Would have changing face, breathe, move etc. Or like a mii from tomodachi life.</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Like a cute blue monster.</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>I'm kinda partial to felines, but a customizable human could be interesting too.</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Monster or animal.</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Animal form! I think it would be much cuter to have something non-human.</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>a monster/animal like totoro from "my neighbour totoro"</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Monster colours, similar to human features, but with tail/fur/spikes</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>I'd say make it a cartoonish person. It'll look human-like but still be simple enough that you don't have to add a ton of detail. Plus, then you can easily edit the person to be fatter, healthier, or have a variety of conditions (like if they're lacking X in their diet, or eating too much Y)</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>I would prefer something not quite real, so I guess like a monster, or maybe fantasy creatures. I just don't think something that is real would be as easy to exaggerate the effects of food on. In the end, if the app works well I won't care what the avatar is. Some amount of options or control over the characters general appearance would be important to me though.</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Monster form! Like the real tomagatchis only less blob looking. I also picture it acting like stitch from lilo and stitch and getting very monstrous looking while devouring food then going back to cute</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Animals. I don't want to look after a human</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Monster form. I'm thinking like Pokemon/digoxin knockoffs.</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Cute animal form please! Like a narwhal!</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>I think it would be cool if you could pick what form it was, like there are 5 different animal options, some human options, monster, etc. I am imagining it to be sort of pixelated like the tamagotchis, but that may be for nostalgia-sake only, since I had one as a kid. Not sure if younger users would appreciate the vintage look.</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Definitely Animal. If possible multiple options. I would like it to look pretty cartoonish</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>I imagine it as a bunny, but I don't think it should be a bunny. I think making it a human might make people more critical of the app</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Monster form - this would allow the unhealthy/healthy difference to be very dramatic!</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>You should be able to select from several different kinds. Animal/monsters similar to pokemon. But definitely some real animals to appeal to the non-nerd crowd (losers)</td>
                                    </tr>
                                    <tr>
                                        <td>42</td>
                                        <td>I was imagining a cartoonish human. I like the idea of choosing an aesthetic that appeals to you and having the avatar look more impressive than an aesthetic. E.g: strongman, athlete, streetclothes maybe, professional, etc. Not a well formed idea, but I know different aesthetics appeal to people on an innate level. Like, if my avatar was just getting increasingly burly and thuggish, I wouldn't be a fan, but I'd love if he looked "cool" in streetwear or smart-casual and got increasingly healthy/well-dressed and vice versa.</td>
                                    </tr>
                                    <tr>
                                        <td>43</td>
                                        <td>Human form but cute</td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td>I would like a cute monster form</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="accordion">
                            <h5>Q.3 : What feature would motivate you to input everything you eat into the app?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Unhappiness with my body and ease of using app</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Reward points for inputting data, interactivity with the avatar, goals/achievements, etc.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>making it as easy and accurate as possible.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>If the thing was adorable.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Unlockable items as you progress. The more days you log (and the more days you are on target) the more fun things your avatar can wear or do.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Progress. Quick evaluation of food quality. (So like the character would give feedback on what was eaten very quick, not slowly)</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Immediate feedback of positive or negative stimulus.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Nothing</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Easy to use interface would be great. If it's a pain to find anything, I (and I'm sure most others) will stop using it. Achievements may also help. Something like "eat 5 Italian inspired dishes" or something.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Time-boxing, i.e. creating short sessions (a week, a month) to try to meet a specific goal. Automatic guesstimates of nutritional content that are close to 100% accurate. Ability to compare and compete with a friend to see who is living a healthier life.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>A log showing your average and/or your progress.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Being able to set alarms or reminders at certain times of day to remind me to enter to the app.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Game like progression, why not even put simple games that you can do with your Avatar and have your choices affect the performance of your Avatar? That would be cool.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>A point system, with levels and other "unlockables" per those points. Maybe to customize an avatar or something about the interface. From a proactive standpoint, push-notifications at configurable times. Duolingo has an option for this and it's a pretty big help.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>If it showed you what type of toxic waste is in your particular product. Aspartame, TBHQ, BHT, L-cystene and so-on. Also GMO shit.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Stupid cute stuff like neko atsume, or sync it up with mfp or loseit.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Barcode scanning foods</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>A graph. I love graphs. I've been losing weight for the past year and change, and the only reason I've stuck with it this time is that I made a neat graph so I can see how I'm doing!</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Comedic effects of the creature eating.</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Seeing the avatar change. Nice to see what's happening in that way</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Calorie counter; suggested daily values of sodium, fats, etc; vitamins that I need more of</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Ability to customize my avatar with clothes and items, as well as change its base appearance through eating. You could lose access to the items if you start eating bad and have to earn them again.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Some type of game rewards system. Features that are unlocked as goals are achieved</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Cute, 'living' avatar</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Idk, but please no notifications.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>I am on a keto diet. I would want it to hold me accountable for my nutrition goals. If I meet the goals without exceeding my calorie allowance, maybe the character changes in some way, or I get points to buy things to give to the character.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Possibly a scanner and a quick look up.</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>leaderboards</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Reminders that the munchster is 'ungry</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>You could give people points for every consecutive day they enter their meals. They then use those points to buy new clothes, hats, etc. for their avatar.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>It needs to be easy and fast to input foods or whole meals, especially repeated meals.</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>personally, not having to input my food. have the option to sync to my fitness pal. for kids, maybe cute cartoons of the food next to each one, so like a slice of pie next to pie etc</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Well like I said, having it linked with something like MyFitnessPal would be best as otherwise I would get too lazy</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Reminders after mealtimes. Data visualizations</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Having my additions change/improve my pet/avatar would motivate me to use it.</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Making it easy to enter in food. Some apps you have to search for each item, and it takes a while to enter every little thing in. It would also be fun to see the little avatar 'eat' the food you entered.</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Easy to input food and save it for next time. Also, if there was an option to just put calorie counts some days would greatly motivate me to use it.</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Immediate feedback. He doesn't have to change size dramatically, but a notification of what happened would be nice</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>"It's been 5 hours since I last ate! Feed me?"</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Working hard to evolve that character. Maybe a goal that doubles XP or earns some other thing if I do it in a certain amount of days.</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Most of all a very easy to use input system, which I discuss below. Creative ideas with the avatar would really help as well, since I've not stuck with previous apps which had decent input systems. As a videogame lover, an RPG-like level up system/game which was executed well would really get me addicted, but it may not be for everyone. And I'm not sure how it'd be pulled off well.</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Diet recommendations</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>The ability of the app to analyze dietary information that is later reflected in the shape of the creature</td>
                                </tr>
                            </table>
                            </div>
                            <div class="accordion">
                            <h5>Q.4 : What aspect about healthy eating do you think you need help with?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>increasing water intake</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BALANCE. For example, I'll eat a super healthy lunch but then pig out at night with snacking.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>I often don't eat enough in a day.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Honestly, one that doesn't focus on weight or weight loss.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>As a McDonald's employee- Lack of will power! But also finding certain ingredients and knowing how to increase/reduce certain macros.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Maintaining a high calorie intake.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Drinking more water</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>More regular diet.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>I cannot bring myself to enter all the nutritional data I consume. I love how MyFitnessPal has most of this info, but I don't trust the accuracy. I feel like I have to manually enter everything which makes me not do it.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Getting enough iron. I have anemia so I need a lot of iron.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Portion control and snacking.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Calorie counting, general motivation, and exercise.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>I eat pretty healthily, but I eat too much of the healthy foods so I still have a higher body fat amount than I'm comfortable with, although I have cut that out in the past couple of weeks.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>None, really. I am more freakish than you.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Hitting my protein macro and not eating so many carbs.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Calorie control</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>I eat too much, even when I'm not hungry; I crave food and end up overeating. Mostly this problem arises with grabbing seconds.</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>How to get more protein as a veggie.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Calorie counting. A fun app would make it much nicer.</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Keeping track of the balance of carbs, fats, proteins I intake.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Crave less sugar</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Staying away from soft, sugary carbs</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Coming up with healthy meal ideas.</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>I need it to be easy to enter calories protein and net carbs.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Sodium intake and sugar intake.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Portions and binge eating</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>the amount</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Remembering easy ways to slip in a few more veggies</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>I need a good way to get cheap healthy food. I'm poor but I don't know what to buy/make so I just get unhealthy frozen meals.</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Reducing my calorie consumption.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>staying within my calories without tracking food</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Not snacking</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Enough protein, especially with a vegetarian diet. Eating enough calories without binging on desserts.</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Reduce snacking</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Making sure I eat a balanced diet (enough whole grains, veggies, fruit etc), and also keeping my sugar-intake low is important to me.</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Eating less.</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Keeping track of how much I snack.</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Choosing the right proportion of protein/carbs/fats in my diet. If I give the app the food I want to eat (say, Cottage Cheese - Banana - Bread - Peanut Butter) then it should be able to give me recommended amounts (say, 1 cup cottage cheese - 1 whole banana - 1 slice bread - 3 tbsp peanut butter) and I can modify the amounts before approving it to add to the meal log.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>I need to eat more, really. But a lot of the time I just feel like my everyday habits don't lend themselves to this, so I'm not sure.</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Reducing junk food</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Suggestions of healthy food items and portions</td>
                                </tr>

                            </table>
                            </div>
                            <div class="accordion">
                            <h5>Q.5 : Have you used a health app before? if so what did you like about it?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>I used a health app for about two seconds before realizing that it needed a FitBit (which I do not have) to work. Having just the app (no additional purchases/downloads) would be a lot easier.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>I like ones that give accurate calorie counts, and information like carb counts per meal and per day. Being able to also track glucose readings in the same app would be helpful to many as well.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>I've used myfitnesspal and a couple others and they all either made me be really specific about all my macronutrients when I don't have time for that or they put an emphasis on weight loss.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Yes. My fitness pal. I like that it has the ability to log macros and nutrients. One thing I would change is being able to change your daily goal depending on exercise. Some days I'm sedentary. Some I'm lightly active. Some highly active. But each day has to be set to the same "activity level" and some exercises such as being at work can not be imputed</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Stronglifts 5x5. Tracked both shortterm (in workout) and long term progress.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>It takes too much time to input the food I eat and get back the calorie counts or nutrition info.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>No smartphone</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Yes. I love how MyFitnessPal auto-enters so much info and allows me to adjust my calories based on how much I've exercised.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>I like the little progression log, and I liked being able to keep track of everything.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>I have used MyFitnessPal in the past. I like being able to 'scan' a barcode of a product and have the nutrition info be automatically entered for me.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>I used an exercise app, I really liked how it kept track of your schedule, though that might not work with a diet app since you don't have "days off" generally speaking to recuperate your mad gainz in a diet app.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Surprisingly not! I don't have an Apple Watch or Fitbit so I don't have many exactly precise metrics to use but I'll get on that while I'm thinking of it. I think an app for the Apple Watch would be a great way to collect data.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Fooducate. You should take queues from them. It's bad ass.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>I love the easy graph display of loseit, it puts things in perspective.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Liked it. I used Lose It. It had an easy to use used interface and scanning in foods was easy.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Does a sleep app count? I liked the graphs c:</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Yes, I didn't like anything about, I just wanted to see what kind of food I was eating. If it was healthy in the middle term.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Yes. I liked the large variety of foods already programmed in, and still being able to add my own. Seeing the contents (fat, carbs, etc) was nice too.</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>I've tried a couple, but they were just really bland and the lists of foods weren't very complete.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>No, but I would if it involved earning cute things!</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Yes. It's always with me on my phone.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>I have used myfitnesspal. I like that you can enter all your personal data and tells you how much to eat of macronutrients and calories. I like the statistics.</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Have not.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>I haven't found an app that gives me accurate numbers. If I can input my own numbers and food list, I would totally use this thing.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>My fitnesspal. I hate calorie counting because its so meticulous and i am not sure if the limits it sets are realistic</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>no</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>I used S Health, I liked how I could do everything in that one app. Record how much I exercise, record what I ate, I could even set up exercise plans</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>I've tried. I like that they help me count calories and nutrients.</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>large food database is important. ability to set my own diet plan</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Yep. Praise, encouragement, polite warnings</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Myfitnesspal felt too much like counting calories, which I try to avoid. Maybe somehow give an option where you only care about rough estimates.</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Yes I use MyFitnessPal. I like being able to log all of my calories and exercise.</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Yes. I like that you can save your recent food items so they're easier to enter and find later. I like that you can track multiple things like sugar, carbs, or protein you've had that day.</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Yes. I like ease of use, and having bmi calculators and stuff like that.</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>I used myfitnesspal and I liked that it had a lot of features and that a lot of foods had been entered by other people before me, so I didn't have to look up how many calories a banana had, etc.</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Yes - I liked the ability to track my diet over time</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Yes, Myfitnesspal. I liked the input system for the most part, being able to search for foods & scan barcodes. The disadvantage I found was when I didn't know my meal contents, which is all the time I eat something I didn't prepare myself. If I'd search "roast dinner", the differences in user-inputted calories was enormous and often seemed too low for what I'd just eaten. So I'd end up having to individually try and add up ingredients, guessing masses, which was often hard.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Yes. I liked that it tracked caloric intake and exercise</td>
                                </tr>
                            </table>

                            </div>
                            <div class="accordion">
                            <h5>Q.6 : How would you like to input what you are eating? <small>(take image of food, scan barcore , search bar or any other ideas)</small></h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>scan barcode</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>All of these sound amazing, though time-consuming for development.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>bar codes are great for some things, as are search boxes, but I find that often the food I eat either has no barcodes, or is from a small local company that no app has info on so I end up having to manually type in all the information myself anyway. This usually only lasts a few days before I give up.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Search bar seems to work best</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>All of those sound good. Much like MFP. Scan barcodes and search. Also maybe categories such as brands, types of food etc</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>All of those ideas sound good.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Photos, scan barcodes, search bar, but the important thing is to do it immediately when I eat and to do it quickly. If it takes more than a few seconds to do it then I won't be interested. The creature should respond with immediate stimulation if I do something good or bad.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>I don't. Huge privacy concerns.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Should be multiple input methods. The 3 you started are good, one thing that make things easy is, when eating out, have the restaurant menu available on the app, so you can click on what you are eating that way.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>photo of food would be amazing if it was accurate</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>I'd like a barcode scan and also a search bar for homemade items that don't have barcodes.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>scan barcode, or take picture of food.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Input a recipe and have the app determine from the ingredients and the portion size how much I ate. (would also help if the app had pre-sets for common home cooked meals e.g scrambled eggs and sausage for breakfast, fastfood for lunch, pizza for dinner etc)</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>That's the really tricky area. People who cook at home really have to guesstimate calorie count with ingredients and cooking process. If I were you, I'd either add a feature to ask if the person KNOWS or is guessing the caloric count.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>All of the above, the more options the better</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>scan barcode and input.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Scan barcode or enter in nutritional info. Needs to be detailed otherwise app loses value.</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>This is a difficult one. I'm not going to look up the caloric content of everything I'm eating, add it together if there's multiple things, estimate serving size... no. In a perfect world a camera would be able to tell category of food and then you could select from a list of options within that category. Basically, my general philosophy is, the more interactions/menus/whatever an action takes, the less likely the average user is to do it. With this in mind, a search bar split into categories of food seems like the best solution to me, or at least would be the one I'd most likely use.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>take photo</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Bar code and search bar.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Barcode, search bar, manual entry of nutritional facts if you can't find it otherwise</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Search bar and barcode seem least frustrating in terms of current technology. It would be frustrating to take a pic and have the app not be able to identify it correctly.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>If there is a way to use images that accurately predict Nutrient vales and the images don't clog up my phone's storage, that would be great. Built in Barcode scanner (or one linked to my fitness pal or other well established database so add not to limit items recognized) and manual input (for homemade recipes) are acceptable</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>barcode scan and search.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Search for words.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Barcodes are great, but make it easy to tell it that I only ate half a can of that ham, make it easy to tell it that I shared half of my 3 scrambled eggs with someone else.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>All of those. Image would be cool.</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Scan barcode &amp; search bar</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>quick lists maybe, remember my most inputted meals</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>And manual. It's always harder when you make stuff yourself at home. Maybe have the option to select ID user thinks it's a good/bad balance and show where they might be tricking themselves.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Probably the easiest way would be like S Health's; type in the name and a list of results will show, then choose the correct result, or input your own data manually if you can't find the correct item.</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Any method that makes it easier and less time consuming. A search bar would be necessary tough since many foods don't have a Barcode (in restaraunts for example), it would also be good to be able to make custom meals or maybe favorites to assist with inputting my personal common food.</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>search bar</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Link to app!</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Scanning is easiest. Remember past food is very helpful. Manual entry is a must for random foods</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Search for it</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>If you can take a picture of the food, that seems easiest (if it is possible). If I am eating something like oatmeal, but I've added nuts, various dried fruit, flax seeds, chia seeds, almond milk, etc... that's a ton of extra ingredients to look up, and mostly I'm using a tablespoon at most of each, so adding in a little of each thing is annoying. If there's a way to bypass that shit that would be awesome.</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>A recipe feature would be awesome. I hate Barcode because they never seem to have what I'm eating so as long as there is a search feature and an easy to input food menu then I'm good.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>It would be handy if I could take a picture of the nutrition facts and have it automatically enter them. I need to be able to put in fractions of servings.</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Build a "menu" of quickly selectable items and choose an item, then choose an amount. For a breakfast of scrambled eggs and toast, you could follow the path of (Egg - scrambled - 2)(Tomato - 1/2)(Hot sauce)(Bread - toasted - buttered - 2)(Orange Juice - glass)</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Barcode is useful, but if I'm at all in public I wouldn't use it. A search bar would be very important, and it would need to have a good database. This is the biggest problem I've had with similar apps. I'm not always able to scan a barcode or tell you all the ingredients of my meals, so a simple but full database of possible meals with approximations would be very good. Ideally these would indicate size - I don't snack throughout the day and eat very large portions. My idea of a dinner of bolognese I would often find out was almost double what the app thought.</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Search bar, I feel like a lot of what I eat wouldn't be on a database to scan into</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Normally I use manual input but I would like a search bar for online recipes if possible</td>
                                </tr>
                            </table>
                            </div>
                            <div class="accordion">
                            <h5>Q.7 : How many minutes per day do you think is a reasonable amount to spend on the app in total?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>7 minutes total</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Probably not much. I would assume it would take 5 minutes at absolute most to input each meal/snack/exercise, so assuming 3 meals, 1 snack, and 1 exercise on an average day--25 minutes.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>I would think no more than 15-20 per day. if it takes more than 5 min to input the info, it it too much.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Like I'm not looking to spend more than a few minutes after each meal.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Maybe around half an hour. It's good to be able to look through and see how you're doing and plan for another day. But if there is a social community linked to it then it could be several hours a day, sharing stories and getting and giving advice.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dont know. Quite a few if youre inputting each time you eat.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Less than 1 minute for each meal of "work" inputting my diet and exercise, unlimited "play" time.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>15 mintues</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>No more than ten minutes if it's just a diet tracker. If it has some kind of mini-game aspect, then I'd guess a little bit longer.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>20-40 minutes per day (i.e. 5-10 minutes for each meal, plus extra for snacks, or just having a look around the app.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>10-15 minutes, beyond that I feel I would not be looking forward to using the app and it would start becoming a chore.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>It really depends on how you intend the user to use the app. - If you intend the user to input data after each meal, then get an update at the end of the day, then 3-5 minutes every post-meal time would be reasonable with a page that shows the progress and data to analyze at the end of the day where/when you'd easily spend 10 minutes or so. - Inputting data after each meal or at the end of the day, then receiving an output at the end of the week. With this model, you could assume 3-5 minutes after each meal which would mean 9-15 total per day. Again, though, it depends on how you intend the user to use the app. If it's very factual, upfront, and data oriented then you could expect the general area of the guesstimated times I listed. But if you turn it into a game or social media type of app, then you could easily give a 100% boost to the times I gave. Perhaps add a point system, this would incentivize users to stay in the app longer and very importantly give them a broader area of time to be receptive to ads. A longer time they spend in the app means a higher likeliness of them clicking/tapping an advertisement and most importantly (with the gained likeliness) you can incorporate less ads, increasing the friendliness to users.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Initially 10-20 to start learning, but once you've established your diet I think people will use it less.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Anything more than 5 is excessive.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Probably a minute or two per meal/snack, so say maybe 5-10 minutes?</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>10mins</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>A few minutes after each meal (because some meals need a lot of searching to get every part). 6-12 minutes?</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>10 minutes during a meal, more if there's more to do during my freetime</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Less than a minute per meal or snack to input data. Longer when you're ready to sit down and customize your avatar with rewards you've earned.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>No more than 10 minutes per day, unless the user chooses to engage in other activities like social networking, fighting other avatars, etc</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>5-10min adding in data, watching or perhaps interacting with avatar</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>10 to 20 mins</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>It shouldn't take more than 10-20 mins to get all the logging done assuming you have to enter everything you ate for the first time.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>10?</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>20 min?</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>I have a 20 minute timer on my Facebook app to watch usage. I'd say that might be enough time to input daily meals and snacks, but only if input is streamlined. Hard to find what you're looking for sometimes.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Probably just go into the app to enter data, then spend a few minutes looking at your avatar, looking at diet/exercise tips, and planning your next meal</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>5 - 10</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>5-10</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>On a given day - 10-15</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>5, maybe 10 minutes on average</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>15 minutes</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Probably like 15 total.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>30, if it's fun.</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Give it 5 minutes at each meal, plus 10 minutes of checking throughout the day - I'd say 30 minutes total would be reasonable.</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>On food input alone? A minute after meals, so ~5 minutes. If there are game-like features on top maybe more. And I'd spend more time as I built up data, looking at this, if the nutritional info was good.</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>I think 30 is reasonable but I might use it more often</td>
                                </tr>
                            </table>
                            </div>
                            <div class="accordion">
                            <h5>Q.8 : How do you feel about or think is wrong with your current diet?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>I feel guilty about it being bad,too much sugar</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Good most of the time, but I can definitely do much better.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>I feel my diet is so restricted due to health problems that i have little to no variety.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>I'm happy with it. I eat well.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>I eat relatively healthy. I aim for a high protein and carb diet as I am fairly active in my job and I cycle there and back.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>I dont eat enough</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Pretty good!</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>I like it</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Confident.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>High levels sugar and carbohydrates. I don't eat meat, so I find carbohydrates are the main bulk of my meal (e.g. pasta, rice, bread, potato), but then I get hungry between meals and end up snacking on biscuits or cake.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Unhealthy heavy and dense meals mostly, in portions that are too large eaten too frequently.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>I'm pretty happy with it. For the most part I stick with water and black coffee, but occasionally I'll have coconut water which I think is pretty yummy.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Nothing</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Not enough protein, too many carbs.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>I eat too much in general.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>I eat fine food, nothing overly unhealthy. I limit unhealthy stuff to rare or special occurrences. My problem with casual meals or snacks is almost always eating the same thing about 3 times in one sitting.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>I feel pretty good about it.</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Too much beer.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>I need more fruits and less processed foods</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Overall pretty good, but I love sugar way too much.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>I eat to relieve stress and don't exercise enough</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Snacks are mostly fine, could use new ideas dinner and other meals difficult to keep healthy and interesting. regulation of chocolate consumption is difficult.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>I actually think my diet is great, but I'd like to know if I'm right.</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>I love my current diet but I probably still drink too much artificial sugar. Not surprising considering I had a HUGE sugar intake before keto.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>I think i need to waych my sodium intake and sugar intake</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Mostly alright, I gave trouble sometimes not eating when I know I’m already full but I’m craving a snack.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>I eat healthy meal but snack a lot</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Sugar is addictive</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>It's definitely not the healthiest, I just eat whatever's cheap and available.</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>I primarily eat too much, and especially eat too much sugar.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>too many calories sometimes</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>I generally eat good, healthy meals, but I love snacking more than anything</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Not enough</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>I eat a bit too much carbs and fat.</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>I feel great about the foods I eat. I go back and forth on my sugar intake though. I have a bad sweet tooth and feel awful if I eat sugar regularly.</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>I eat too much and go out too often.</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>I snack a lot and don't pay attention to how much they add up.</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>I overeat because I just have coffee for breakfast, coffee for lunch, then binge on carbs for dinner. A reminder of "Hey, I'm hungry - any food around?" would be helpful.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>I eat a relatively balanced diet. Could do with more fruit &amp; veg, but don't eat too much fatty or sugary foods. I really need to eat more though, mainly protein &amp; carbs, to gain weight.</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>I binge eat sometimes and eat dairy products even though I'm a little lactose intolerant</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>I think I could cut out more of the processed foods I eat and increase my intake of carbohydrates and vegetables as I mainly eat proteins and fat (according to another health app)</td>
                                </tr>
                            </table>

                            </div>
                            <div class="accordion">
                            <h5>Q.9 : what aspects In your life are stopping you from having a perfectly healthy diet?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>the tastiness of unhealthy foods</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Unhealthy food tastes good. The Internet is more enticing than the gym.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>multiple health issues, which also means money issues so I cannot afford to eat well all the time.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>I'm on a campus and sometimes the food options aren't that great.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Working for McDonald's. Free McDonald's every day man.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Size of stomach. Laziness.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Ignorance of what is good, where to buy it, how to cook it.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Commuting, and drinking more water = more uncomfortable needing to piss whilst driving</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Work</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Laziness. Pleasure-seeking. Rebellion.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Anemia, but I have a health condition that causes that so lifestyle choices have nothing to with it. Consuming enough iron and protein is difficult for me and I have to keep a close eye on it.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>I have two jobs and am completing a Masters degree so I don't have a lot of time to spend cooking, shopping, etc so ready-made or frozen meals, and snacks are easier to eat.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Stress, food for me is an easy, relatively harmless way (compared to say, hard drugs or alcoholism or even cigarettes etc) of coping with stress.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>I don't really know. I think sleep could easily be factored into diet, not really from an input aspect but more from an output aspect. How your body handles food, body fat, etc. I think if steadied my sleep cycle then I could easily take away .5-2% of my current weight. I'm in the 'healthy' range of the BMI, but I'm at the top of it so I need to get on that.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Nothing</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Hating read meat because it sucker punches my stomach.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Stress. Easy access to cheap food. Laziness.</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>I'd probably classify it as food addiction? I just love the taste and feeling of eating food, and sometimes I just can't stop myself.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>I think it's pretty good, I need to do more exercise, that's it.</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Laziness from Momming, and then having beer a few times a week to calm down.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Not feeling like cooking after 12 hour shifts</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Desserts are THE BEST. Sometimes it can be annoying to prepare something from scratch and it's easier to just zone out and get fast food.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Routine</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>lack of cooking skill lack of creativity</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Not applicable.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>My love of sugar and my dislike for water.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>I exercise alot and get really hungry sometimes. I love going to biffets after a long school day..</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>an eating disorder</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>poor self control</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Time</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Laziness, not knowing what healthy food is also cheap, not knowing any easy recipes</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>I always feel in a rush, so I tend to eat without thought rather than considering my portions.</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>business</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>getting high :/</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Dining hall (I'm a student) and vegetarian while trying to gain weight is very hard</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Desire to eat things that are enjoyable to me. Getting the munchies.</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Sugar addiction? Not enough time (or know-how) to cook?</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>My addiction to fast food, and addiction to sugar.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Currently studying abroad without access to much variety.</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Strapped for time with overwhelming choices and no way to narrow it down</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>I find if I cook properly in the evenings, when I'm most likely to be eating vegetables, it takes up a lot of that evening's free time. I'm actually not sure how I could eat more, I have three meals every day, including a substantial meal, but I don't gain weight and rarely hit calorie goals when I've tracked it in the past.</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Stress eating, not being able to control myself, I guess just like eating!</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Currently I'm limited by the time available to me as I have a busy schedule and so cannot cook healthy meals consistently</td>
                                </tr>
                            </table>

                            </div>
                            <div class="accordion">
                            <h5>Q.10 : Are there any features you think would benefit the app?</h5>
                            <table class="table table-bordered table-striped small">
                                <tr>
                                    <th>No</th>
                                    <th>Answers</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>as well as the avatar experiencing physical change I also think the app should provide a brief commentary on estimated weight loss/gain depending on original weight inputed and food scanned over a period of time</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>The ability to input food allergies and have the app warn you if something you scan has them, and account for them when making suggestions would be nice. If it could also account for general prices, that would be good too. Yea, it would be nice to eat steak and asparagus, but impossible if you live on a chicken and spinach salary.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mostly just being able to change your activity level for each day.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>I think you should be able to have your character workout by doing either cardio or weightlifting alongside you and this goes into the equation. Also entering your own height and weight so the app knows what food is needed to improve. Cardio would definitely have to go into the equation ro stop the haracyer from getting too fat and stuff.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>It would be cool to have you take your Avatar on minigame adventures, they don't have to be awfully complicated, just simple sports themed minigames where the effects of your (and by extension, your avatars) diet are displayed. If you like my suggestion and want to implement it, please be careful it does not become dead weight that drags your app down, if you don't feel like you can do it well enough to not detract from the rest of your app please completely ignore it (or at least have it be 100% optional) Thank you for your time, looking forward to using your app! Who knows maybe one day my lazy ass will become healthier because of your app :)</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>An easy or cute interface, like Duolingo or Waze could very easily boost the "welcoming" feeling users will get when using the app. This is the last box so my reddit username is /u/tnargkiller. Feel free to contact me if any of my answers were unclear. Hope I helped!</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Make all the search options available that you listed, add nutrition and GMO stuff like I mentioned, add allergy / gluten stuff for those affected and I think you'll have a winner winner chicken dinner. Mmm, chicken dinner.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Cute or funny avatar statuses and imagery for certain foods?</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Set a limit for number of meals and snacks per day, regardless of content. If you eat more than this, something bad happens, like your avatar gets sad, or plays a misguided game of Russian roulette. But seriously speaking, just some nagging message would probably do.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>You should also be able to tell the app when you go to sleep, water intake, and exercise.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Make sure to add exercise to help the avatar get fit.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Ability to turn off all notifications, don't ask me to rate it every time I open the app.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Sharing your avatar with friends. Designing a target avatar and having the app show what you'd need to do to get each part of it. Being able to have pet avatars that you can also input (much simpler) data on so that they update with you.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Linking to fitness trackers - fitbit, vivosmart, Apple watch, etc.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Interaction with other people</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>If it could be geared to match all the different popular diets, like keto and paleo etc.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Seeing how my avatar grows</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Not too much guilting or shaming users for going off course. This could cause them to do worse.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>input from fitness trackers: mapmyrun/strava etc, not sure if they have APIs to pass Kcal counts</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Ability to see how others are doing/tips from others/their successful meal plans</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>It'd be nice if it could either have this feature, or pair with an app that has this feature: a list of healthy recipes, healthy cheap food, and locations of healthy restaurants</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>You would definitely need age, weight, height, gender.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Apart from other app links, not paritcularly</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Data visualization!</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>I think having specific foods trigger your avatar's insides (or organs) would be awesome. For example, If you eat carrots, your eyes get big and beautiful because carrots are good for your eyes (if that's true), or if you eat fish your brain gets bigger because it's got Omega-3s. If you eat bacon maybe your heart looks sad because it's clogging your arteries, etc.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Other than the ones I've already talked about, no.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Calculating nutrients, like vitamins, etc</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Giving it a "pantry" of the food in your house (all scanned in while at the grocery store) and asking it to suggest a snack or meal would be great! It could even suggest items to buy while shopping.</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Like the different diets you suggested (i.e. Paleo, vegan, etc.), you need restrictive diets based on religion also. Ability to toggle between many of the options you provided in your other survey. Some people want to post everything, some nothing. Some people want to battle with other people, friends, or no one at all.</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Specifying what I want from my diet, and the app responding to it intelligently, would be very important. I want to gain weight; it would be unhealthy for me to lose it. So while avoiding objectively unhealthy foods would be good, I do not want the app to chastise me for choosing high-cal or -carb foods. Past apps/websites have annoyed me just by their constant assumption that I'd want to be losing weight. This would apply to any food suggestions it might give, if that's a feature. If it notices I'm not getting enough of e.g: Iron in my diet, suggest things that'll fill me up that have it, not just what the market has decided is healthiest for everyone.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>I think that making it interactive by feeding it the food you eat could make it more fun</td>
                                </tr>
                            </table>

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
        $( ".accordion" ).accordion({
            collapsible: true,
            active : 'none'
        });
    });
  </script>
</body>
</html>
