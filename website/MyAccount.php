<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mijn account</title>
</head>
<body>
    <?php
    include ('header.php');

    if (isset ($_POST['logout'])){
        session_destroy();
        header('location:index.php');
    }

    ?>

    <div class = "wrapper" >
        <form action="MyAccount.php" method = "post">
        <input type="submit" name="logout" >
        </form>
    </div>
</body>
</html>