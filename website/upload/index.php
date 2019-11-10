<?php
session_start();
require_once ('Upload.inc.php')
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="../stylesheets/uploadform.css">
</head>
<body>
    <a href="../"><h1 class="logo">logo</h1></a>
    <div id="paper" class="wrapper" >
        <div class="center">
            <form action="index.php" method = "post">

                <label for=""><b>Naam product</b></label>
                <input type="text" name="PTitle" placeholder='naam product' required>

                <label for=""><b>omschrijving product</b></label>
                <textarea ID="description" name="PDescription" id="" cols="30" rows="10" required></textarea>

                <label for=""><b>prijs</b></label><br>
                <input ID="price" type="number" name="PPrice" placeholder='€00'min = 2 required>
                <label for=""><b>,</b></label>
                <input ID="pricecent" type="number" name="PPriceCents" placeholder='00'min = 0 max = 99 ><br>

                <label for=""><b>foto product</b></label>
                <input type="file" name="PThumbnail" required>

                <label for=""><b>Artiekelgroep</b></label><br>
                <select name="PArticlegroup" id="artikelgroep">
                    <option value= 1 name="" checked = "true">overig</option>
                    <option value= 2 name="">T-shirts</option>
                    <option value= 3 name="">Posters</option>
                    <option value= 4 name="">Handtekeningen</option>
                    <option value= 5 name="">Kaartjes</option>
                </select>

                <input value="upload" name="upload" type="submit">
                
            </form>
        </div>
    </div>
</body>
</html>