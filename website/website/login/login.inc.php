<?php
require_once ('../private/DB.php');

$user =  mysqli_real_escape_string($con, $_POST['USER']);
$password = mysqli_real_escape_string($con, $_POST['PWS']);

$query = "SELECT * FROM Accounts WHERE UserName = '$user' or Email = '$user';";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) < 1){
    echo "gebruikersnaam of email incorrect";
}else {
    $row = mysqli_fetch_assoc ($result);
    $passcheck = password_verify($password, $row ['Password_']);
    if ($passcheck == false){
        echo "wrong password";
    }else{
        session_start();

        $_SESSION['User_ID'] = $row ['User_ID'];
        $_SESSION['Role_ID'] = $row ['Role_ID'];
        $_SESSION['Username'] = $row ['UserName'];

    }
}

?>