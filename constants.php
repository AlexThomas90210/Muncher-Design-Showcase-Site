<?php
//the name of your site  eg. www.example.com/     important you add that "/" ad the end
define('URL', 'http://ec2-52-16-124-54.eu-west-1.compute.amazonaws.com/Muncher-Design-Showcase-Site/');
//the name of your login page    eg login.php
define('LOGIN_PAGE', 'login.php');
//the name of the first page you want to show after a user logs in    eg index.php
define('FIRST_PAGE' , 'index.php');
//the error message you want to display to the user (you dont have to do this)   eg Invalid name or password
define('LOGIN_ERROR' , 'Invalid username or password!');

//the following 2 are the name attribute on your input fields of your login form  eg <input type="text" name="UserName">
define('NAME_ATTR' , 'UserName');
define('PASSWORD_ATTR' , 'Password');

//Password      that the user has to type in
define('LOGIN_PASSWORD' , 'Pass');
//User Name      that he user has to type in
define('LOGIN_NAME' , 'Muncher');
?>
