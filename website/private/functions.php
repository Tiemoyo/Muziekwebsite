
<?php

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