<?php
  require 'header.php';
  ?>
 
   <?php
   if (isset($_GET['error'])) {
   if ($_GET['error'] == "wrongpwd") {
	echo '<p class="signuperror">Wachtwoord is onjuist</p>';
	}
	elseif ($_GET["error"] == "invaliduidmail") {
		echo '<p class="signuperror">Ongeldige gebruikersnaam en E-mail!</p>';
	}
		elseif ($_GET["error"] == "nouser") {
		echo '<p class="signuperror">Gebruikersnaam is ongeldig</p>';
	}
   }
   
		?> 
  
  <main>
 <?php
 
 if (isset($_SESSION['userId'])) {
	 echo '<p class="login-status">You are logged in!</p>';
}
else {
	echo '<p class="login-status">You are logged out!</p>';
}
 ?>
 

    </section>
   </div>
   </main>


  
  
  
 <?php
  require "footer.php";
  
 ?>