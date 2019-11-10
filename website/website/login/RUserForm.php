<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registratie</title>
</head>
<body>
    <?php
    require_once('register.inc.php')
    
    ?>
<form action="RUserform.php" method="post">
        <label for="Username"><b>Gebruikersnaam</b></label>
        <input type="text" name="Username" placeholder="gebruikersnaam" required>

        <label for="Email"><b>Email</b></label>
        <input type="email" name="Email" placeholder="voorbeeld@Email.com" required>

        <label for="Password1"><b>Wachtwoord</b></label>
        <input type="password" name="Password1" placeholder="wachtwoord" required>

        <label for="Password2"><b>wachtwoord opnieuw</b></label>
        <input type="password" name="Password2" placeholder="wachtwoord opnieuw" required>

        <label for="Place"><b>Plaatsnaam</b></label>
        <input type="text" name="Place" placeholder="plaats" required>

        <label for="street"><b>Straatnaam</b></label>
        <input type="text" name="Street" placeholder="straat" required>

        <label for="streetNR"><b>Straatnummer</b></label>
        <input type="text" name="StreetNR" placeholder="nummer" required>

        <label for="Addition"><b>Toevoeging</b></label>
        <input type="text" name="Addition" placeholder="X">

        <label for="Postalcode"><b>Postcode</b></label>
        <input type="text" name="Postalcode" placeholder="0000XX" required>
        
        <input type="submit" name="Register" value="Register">
    </form>
</body>
</html>