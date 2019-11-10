
<?php

function insertaccount($a, $b, $c, $d, $e, $f, $g, $h, $con){

    $a = mysqli_real_escape_string($con, $a);
    $b = mysqli_real_escape_string($con, $b);
    $c = password_hash(mysqli_real_escape_string($con, $c), PASSWORD_DEFAULT);
    $d = mysqli_real_escape_string($con, $d);
    $e = mysqli_real_escape_string($con, $e);
    $f = mysqli_real_escape_string($con, $f);
    $g = mysqli_real_escape_string($con, $g);
    $h = mysqli_real_escape_string($con, $h);
    $i = 1;

    $query = "INSERT INTO accounts (UserName, Email, Password_, Role_ID, Place, Street, StreetNR, StreetAddition, Postalcode) values ( '$a','$b','$c','$i','$d','$e','$f','$g','$h');";
    $reuslt = mysqli_query($con, $query);
    }

    function check_availabillity($Username, $Email, $con){
    $Username = mysqli_real_escape_string($con, $Username);
    $query = "SELECT * FROM accounts WHERE UserName = '$Username' OR Email = '$Email';";
    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0){
        return (true);
    }else{
        return (false);
    }
    }
    

?>