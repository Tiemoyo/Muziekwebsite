<?php
  require "header.php";
  ?>
  
  
  <main>
   <h1>Nieuw account</h1>
   <?php
   if (isset($_GET['error'])) {
   if ($_GET['error'] == "emptyfields") {
	echo '<p class="signuperror">Vul alle velden in!</p>';
	}
	elseif ($_GET["error"] == "invaliduidmail") {
		echo '<p class="signuperror">Ongeldige gebruikersnaam en E-mail!</p>';
   } 
	elseif ($_GET["error"] == "invaliduiduid") {
		echo '<p class="signuperror">Gebruikersnaam is ongeldig!</p>';
   }   
	  
	elseif ($_GET["error"] == "invalidmail") {
		echo '<p class="signuperror">E-mail is ongeldig!</p>';
   }   
	  	elseif ($_GET["error"] == "passwordcheck") {
		echo '<p class="signuperror">Uw wachtwoord is niet gelijk!</p>';
   }   
	  
	elseif ($_GET["error"] == "usertaken") {
		echo '<p class="signuperror">Gebruikersnaam is in gebruik!</p>';
   } 
    elseif ($_GET["signup"] == "success") {
		echo '<p Signup is gelukt!</p>';
   }

   }

   
?>
<form action="includes/signup.inc.php" method="post">
<input type="text" name="uid" placeholder="Gebruikersnaam">
<input type="text" name="mail" placeholder="E-mail">
<input type="password" name="pwd" placeholder="Wachtwoord">
<input type="password" name="pwd-repeat" placeholder="Wachtwoord herhalen">
<button type="submit" name="signup-submit">Account aanmaken</button>
</form>
</section>
</div>
</main>
  
  
  
 <?php
  require "footer.php";
  
 ?>