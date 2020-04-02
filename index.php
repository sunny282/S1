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

	<?php else: ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<script data-ad-client="ca-pub-6184791442727848" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>

	<div class="header">
		<a href="/">Full On Chill</a>
	</div>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

 <h1>Login</h1>
	<span> <a href="register.php"></a></span>

	<form action="login.php" method="POST">

		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">

		<input type="submit">

	</form>

</body>
</html>

	<?php endif; ?>

</body>
</html>
