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

<?php

  //Thumbnail uploader
 if(isset($_FILES['PThumbnail'])){
	//pre_r($_FILES);
	
	$phpUploaderrors = array(
	 0 => 'There is no error, the file uploaded with success',
	 1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
	 2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
	 3 => 'The uploaded file was only partially uploaded',
	 4 => 'No file was uploaded',
	 6 => 'Missing a temporary folder',
	 7 => 'Failed to write file to disk.',
	 8 => 'A PHP extension stopped the file upload.',
	
	);

	
	$ext_error = false;
	
	//alleen foto gerelateerde extensies staan we toe
	$extensies = array('jpg','jpeg', 'gif', 'png');
	$file_ext = explode('.',$_FILES['PThumbnail']['name']);
	$file_ext = end($file_ext);
	
	if(!in_array($file_ext, $extensies)){
		$ext_error = true;
	}
	
	//Als de uploaderror niet gelijk is aan 0
	if ($_FILES['PThumbnail']['error']){
	echo $phpUploaderrors[$_FILES['PThumbnail']['error']];
	}
	elseif ($ext_error){
		echo "Invalid file extension!";
	}
	else {
		echo " has succesful been uploaded!";
		
	}
	
	move_uploaded_file($_FILES['PThumbnail']['tmp_name'], 'geuploade_images/'.
	$_FILES['PThumbnail']['name']);
}
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}


 ?>     
