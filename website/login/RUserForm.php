<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../stylesheets/registerform.css">
    <title>Registratie</title>
</head>
<body>

    <?php
    require_once('register.inc.php');
    ?>

    <a href="../index.php"><h1 class="logo">logo</h1></a>

    <div ID = "paper" class ='wrapper'>
        <div class ='center'>
        
        <nav>
        <a href="../login">sign-in</a>
        <a href="RUserForm.php">register</a>
        </nav>

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

        <label for="street"><b>adress</b></label><br>
        <input ID="street" type="text" name="Street" placeholder="straat" required>
        <input ID="streetNR" type="number" name="StreetNR" placeholder="NR" required>
        <input ID="streetADD"type="text" name="streetADD" placeholder="X">

        <label for="Postalcode"><b>Postcode</b></label>
        <input type="text" name="Postalcode" placeholder="0000XX" required>
        
        <input type="submit" name="Register" value="Register">
        </form>

        </div>
    </div>
</body>
</html>