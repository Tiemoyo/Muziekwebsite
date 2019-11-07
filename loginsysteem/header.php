<?php

session_start();

?>
<!doctype html>
<html>
<head>
<meta charset= "UTF-82">
<meta name="beschrijving" content="This is an example of a meta description.">
<meta name=viewport content="width=device-width, initial-scale=1">
<title></title>

</head>
<body>


<header>
    <nav class="nav-header-main">
	  <a class="header-logo" href="index.php">
	  <img src="geert-pieters-8QrPJ3Kfie4-unsplash.jpg" alt="Inkakken is bijpakken" width="500" height="250">
	</a>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="#">toegangskaartjes</a></li>
	<li><a href="#">merchandise</a></li>
	<li><a href="#">instrumenten</a></li>
	</ul> 
	<div>
<div class="header-login">
<?php
if (isset($_SESSION['userId'])) {
	 echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Uitloggen</button>
	  </form>';
}
else {
	echo '<form action="includes/login.inc.php" method="post">
	  <input type="text" name="mail" placeholder="Gebruikersnaam/E-mail...">
	  <input type="password" name="pwd" placeholder="Wachtwoord...">
	  <button type="submit" name="login-submit">Inloggen</button>
	  </form>
	    <a href="signup.php">Signup</a>';
}


 ?>

	 

	  </div>
	</nav>
	
	
</header>
</html>