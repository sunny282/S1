<!DOCTYPE html>
<html>
<head>
<style>
body  {
  background-image: url("background.jpg");
  background-color: #cccccc;
  cursor: url("cursor.png"),progress !important;
}
</style>
	<title>Full On Chill</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<?php if( !empty($user) ): ?>

    <?php
include 'func.php';

$title  = 'FullOnChill'; //Edit Homepage Title

include 'includes/config.php';
echo'<h1>All You Need Is Here</h1>';
echo '<h2>Select Category</h2>';
include'category.php';
echo '<h2><a>Facebook.com/PakIdiots</a> | <a>Full On Chill</a></h2>';
?>

</body>
</html>
