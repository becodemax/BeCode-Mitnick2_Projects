<html>
    <head>

    <?php

    $method = $_SERVER['REQUEST_METHOD'];

    $bdate = $event = $artist = $description = $promo = "";
    $venue_name = $venue_address_1 = $venue_address_2 = $city = $region = $postal = $country = "";
    $capacity = $attendance = $performance = $time = "";
    $contact_firstname = $contact_lastname = $email = $number = $recorded = "";

    if ( $method == 'POST' ) {
        if ( empty($_POST('bdate')) ) {
            $bdate_err = "This field is required.";
        }
        else {
            $bdate = SanitizeInput($_POST['bdate']);
            if ( !preg_match("^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$", $bdate) ) {
                $bdate_err = "Please enter a valid date format.";
            }
        }
    }

    function SanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo $bdate_err;
    echo $bdate;
    echo "test";

    ?>
    </head>
</html>