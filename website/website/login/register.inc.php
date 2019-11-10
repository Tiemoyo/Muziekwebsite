        
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
            $RAddition = $_POST['Addition'];
            $RPostalcode = $_POST['Postalcode'];

            if ($RPassword1 == $RPassword2){

                if (check_availabillity($RUsername, $REmail, $con) == true){
                    echo "gebruikersnaam of wachtwoord zijn ingebruik";
                }else{
                insertaccount($RUsername, $REmail, $RPassword1, $RPlace, $RStreet, $RStreetNR, $RAddition, $RPostalcode, $con);
                header('Location:index.php?R=succes');
                }
                
                

            }else { 
            echo "Wachtwoorden komen niet overeen.";
        }
    }
    ?>

    