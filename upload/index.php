<html>
<head>
<title>Uploader</title>
</head>
<body>
<?php
if(isset($_FILES['userfile'])){
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
	$file_ext = explode('.',$_FILES['userfile']['name']);
	$file_ext = end($file_ext);
	
	if(!in_array($file_ext, $extensies)){
		$ext_error = true;
	}
	
	//Als de uploaderror niet gelijk is aan 0
	if ($_FILES['userfile']['error']){
	echo $phpUploaderrors[$_FILES['userfile']['error']];
	}
	elseif ($ext_error){
		echo "Invalid file extension!";
	}
	else {
		echo "Success! Image has been uploaded";
		
	}
	
	move_uploaded_file($_FILES['userfile']['tmp_name'], 'images/'.
	$_FILES['userfile']['name']);
}
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="userfile">
<input type="submit" value="Upload">


</form>

</body>
</html>




