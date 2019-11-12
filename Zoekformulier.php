<?php
/*Het formulier voor de zoekfunctie */
$host="localhost";

$port=3306;

$socket="";

$user="root";

$password="password";

$dbname="projectwebprogrameren";



$con = new mysqli($host, $user, $password, $dbname, $port, $socket)

	or die ('Could not connect to the database server' . mysqli_connect_error());



//$con->close();

?>

<!DOCTYPE html>
<html lang = 'en'>
<html>
<head>
</head>
<body>
<form action="searchform.php" method="post">
    <input type="text" name="search" placeholder="Zoeken naar resultaten..." />
    <input type="submit" value="zoek" />
</form>
</body>
</html>