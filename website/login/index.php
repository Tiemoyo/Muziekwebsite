<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log in</title>
    <link rel="stylesheet" type="text/css" href="../stylesheets/signinform.css">
</head>

<?php 
session_start();

if (isset ($_SESSION['User_ID'])){
    header('location: ../');
}
if (isset($_POST['sign-in'])){
require_once('login.inc.php');
}
?>

<body>
    <a href="../index.php"><h1 class="logo">logo</h1></a>
    <div id="paper" class="wrapper" >
        <div class="center">
            <nav>
            <a href="../login">sign-in</a>
            <a href="RUserForm.php">register</a>
            </nav>

            <form action="index.php" method="POST">

            <label for="USER"><b>Email of gebruikersnaam.</b></label>
            <input type="text" name="USER" placeholder="Email of gebruikersnaam">

            <label for="Password"><b>Wachtwoord</b></label>
            <input type="password" name="PWS" placeholder="wachtwoord">

            <input id = "sign-in" name="sign-in" value="sign-in" type="submit">
            </form>
        </div>
    </div>
</body>
</html>