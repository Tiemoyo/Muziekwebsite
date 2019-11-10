<?php
require_once ('../private/DB.php');

if (isset($_POST['upload'])){

    $title = mysqli_real_escape_string($con, $_POST['PTitle']);
    $description = mysqli_real_escape_string($con, $_POST['PDescription']);
    $price = $_POST['PPrice'];
    $priceC = mysqli_real_escape_string($con, $_POST['PPriceCents']);
    $thumbn = mysqli_real_escape_string($con, $_POST['PThumbnail']);
    $artgrp = $_POST['PArticlegroup'];
    $user = $_SESSION['User_ID'];
    $playlist = 1;

    $price = $price . '.' . $priceC;

    $query = "INSERT INTO Articles (Title, ArticleGroup_ID, Thumbnail, Price, Uploaddate, Playlist_ID, User_ID, Description_ ) values ('$title','$artgrp','$thumbn', '$price', CURRENT_DATE, '$playlist', '$user', '$description');";
    mysqli_query($con, $query);

    echo $title . $description . $price . $thumbn . $artgrp . $user . $playlist;
}

?>