<?php
  session_start();

  include 'config.php';

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mick Bosman">
    <link rel=stylesheet href="style.css?v=<<?php echo time() ?>">
    <title>Magram</title>
  </head>
  <body>

  <h1>page nadat je bent ingelogd </h1>

  </body>
</html>
