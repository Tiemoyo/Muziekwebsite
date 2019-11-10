<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="stylesheets/products.css">  
    <link rel="stylesheet" href="stylesheets/home.css">
</head>
<body>
<?php include ('header.php');?>
<div class="home_pic">
    <img src="img/acdc.png" alt="">
</div>
<h1>shop</h1>
<div class="wrapper">

    <?php
    require_once ('private/DB.php');

    $query = "SELECT * FROM articles;";
    $result = mysqli_query($con, $query);
    while ($fetch = mysqli_fetch_assoc($result)){
        echo'<a href="Article.php?article='. $fetch['Article_ID'] .'" class="product_container" >
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