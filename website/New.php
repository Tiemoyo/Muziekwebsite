<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuw</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/products.css">
    <style>
    .current_page{
        background-color: #003153;
    }
    </style>
</head>
<body>
<?php include ('header.php') ?>
<h1>shop</h1>
<div class="wrapper">

    <?php
    require_once ('private/DB.php');

    $query = "SELECT * FROM articles;";
    $result = mysqli_query($con, $query);
    while ($fetch = mysqli_fetch_assoc($result)){
        echo'<a href="Article.php?art='. $fetch['Article_ID'] .'" class="product_container" >
                <img src="img/' . $fetch['Thumbnail'] . '" alt=>
                <div>
                    <h2>
                    ' . $fetch['Title'] . ' 
                    </h2>
                    <p>
                    $' . $fetch['Price'] . '
                    </p>
                </div>
            </a>';
    }
    ?>

</div>
</body>
</html>