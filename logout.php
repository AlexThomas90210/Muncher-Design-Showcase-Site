<?php
require_once('./constants.php');
$_SESSION['LoggedIn'] = false;
header('Location: '.URL.'login.php', TRUE, 302);
?>
