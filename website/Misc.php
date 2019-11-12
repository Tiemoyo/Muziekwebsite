<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>overig</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/products.css">
</head>

<body>
<?php include ('header.php') ?>
<h1>shop</h1>
<div class="wrapper">

    <?php
    require_once ('private/DB.php');

    $query = "SELECT * FROM articles WHERE Articlegroup_ID = 1;";
    $result = mysqli_query($con, $query);
    while ($fetch = mysqli_fetch_assoc($result)){
        include ('private/GetProducts.php');
    }
    ?>

</div>
</body>
</html>