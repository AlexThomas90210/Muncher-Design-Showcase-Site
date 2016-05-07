<?php
session_start();
require_once('./constants.php');
//remove the session variable so all pages will redirect to the login page
unset($_SESSION['LoggedIn']);
//redirect to login page
header('Location: '.URL.LOGIN_PAGE, TRUE, 302);
?>
