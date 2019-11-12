        
    <?php
        if (isset($_POST['Register'])){

            require_once ('../private/DB.php');
            require_once ('../private/functions.php');

            $RUsername = $_POST['Username'];
            $REmail = $_POST['Email'];
            $RPassword1 = $_POST['Password1'];
            $RPassword2 = $_POST['Password2'];
            $RPlace = $_POST['Place'];
            $RStreet = $_POST['Street'];
            $RStreetNR = $_POST['StreetNR'];
            $RstreetADD = $_POST['streetADD'];
            $RPostalcode = $_POST['Postalcode'];

            if ($RPassword1 == $RPassword2){

                if (check_availabillity($RUsername, $REmail, $con) == true){
                    echo "gebruikersnaam of wachtwoord zijn ingebruik";
                }
                else{
                    $RUsername = mysqli_real_escape_string($con, $RUsername);
                    $REmail = mysqli_real_escape_string($con, $REmail);
                    $RPassword = password_hash(mysqli_real_escape_string($con, $RPassword1), PASSWORD_DEFAULT);
                    $RPlace = mysqli_real_escape_string($con, $RPlace);
                    $RStreet = mysqli_real_escape_string($con, $RStreet);
                    $RStreetNR = mysqli_real_escape_string($con, $RStreetNR);
                    $RstreetADD = mysqli_real_escape_string($con, $RstreetADD);
                    $RPostalcode = mysqli_real_escape_string($con, $RPostalcode);
                
                    $query = "INSERT INTO accounts (UserName, Email, Password_, Role_ID, Place, Street, StreetNR, StreetAddition, Postalcode) values ( '$RUsername','$REmail','$RPassword','1','$RPlace','$RStreet','$RStreetNR','$RstreetADD','$RPostalcode');";
                    $reuslt = mysqli_query($con, $query);
                }
                header('Location:index.php?R=succes');
                }else { 
                echo "Wachtwoorden komen niet overeen.";
            }   
        }
    ?>

    