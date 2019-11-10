<?php 
    require ('header.php');
    require ('private/DB.php');
    $query = "SELECT * FROM articles A
              LEFT OUTER JOIN accounts AC ON AC.User_ID = A.User_ID
              WHERE A.Article_ID =" . mysqli_real_escape_string($con, $_GET['article']) .";";
    $result = mysqli_query($con , $query);
    $fetch = mysqli_fetch_assoc ($result);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/Article.css">
    <title><?php echo $fetch['Title'] ?></title>
</head>
<body>
    <div class = "contentwrapper">
            <?php echo '<img ID = "thumbnail" src="img/'.$fetch['Thumbnail'].'" alt="img/'.$fetch['Thumbnail'].'">';?>
            <div ID = "information">
                <h2 ID = "title" >
                    <?php echo $fetch['Title'];?>
                </h2>
                <p ID = "price">
                    <?php echo "€" . $fetch['Price'];?>
                </p>
                <div ID = description >
                    <h3>
                        Omschrijving
                    </h3>
                    <article>
                        <?php echo $fetch['Description_'];?>
                    </article>
                </div>
                <a href="Checkout.php?">
                    in winkelmandje 
                </a>
            </div>
    </div>
</body>
</html>