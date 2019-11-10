    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylesheets/header.css">
    </head>
    <body> 
        <?php session_start(); ?>
    <header>
            <div>
                <div class="wrapper">
                    <a href="index.php">logo</a>
                <form action="">
                    <input class="searchbar" type="search">
                    <input value="" class="searchButton" type="submit" name='search'>
                </form>

                <?php
                if (isset($_SESSION['User_ID'])){
                    echo '<a class = "loginbutton" href="MyAccount.php"></a>
                          <a class = "uploadbutton" href="upload"></a>
                          <a class = "check-outbutton" href="checkout.php"></a>';
                }else {
                    echo '<a class = "loginbutton" href="login"></a>';
                }
                ?>

                </div>
            </div>
        <nav>
        <ul class="wrapper">
            <li>
                <a id="New" href="New.php">Nieuw</a>
                <a id="Shirts" href="Shirts.php">Shirts</a>
                <a id="Posters" href="Posters.php">posters</a>
                <a id="Enterycards" href="Enterycards.php">kaartjes</a>
                <a id="Signatures" href="Signatures.php">handtekeningen</a>
                <a id="Misc" href="Misc.php">overig</a>
            </li>
        </ul>
        </nav>
    </header>
</body>
</html>