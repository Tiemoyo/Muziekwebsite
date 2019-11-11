

<?php 
  session_start();


?>

<!doctype html>
<html>
<header>

<title>My Account</title>
<h1>My account</h1>
<h2>Welcome <?php echo $_SESSION['Username']; ?>,<h2>
</header>
<body>
<h3>Account details:<h3>

<p>Username: <?php echo $_SESSION['Username'];?></p>
<p> Email:<?php  echo $_SESSION['Email']; ?></p>
<p> place:<?php echo $_SESSION['Place']; ?></p>
<p> Street:<?php  echo $_SESSION['Street']; ?></p>
<p> Streetnr:<?php echo $_SESSION['StreetNR']; ?></p>
<p >Addition :<?php  echo $_SESSION['Addition']; ?></p>
<p> Postalcode:<?php  echo $_SESSION['Postalcode']; ?></p>
<p> Wachtwoord:<?phpecho $_SESSION['Password1'];?></p>
<br></br>
<form>
<input type="submit" name="change" value="Gegevens wijzigen">
<?php
if(isset($_GET['change'])){
	header("Location: change.php");
}
?>
</body>
</html>