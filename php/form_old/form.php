
<?php

$method = $_SERVER['REQUEST_METHOD'];

// $bdate = $event = $artist = $description = $promo = "";
// $venue_name = $venue_address_1 = $venue_address_2 = $city = $region = $postal = $country = "";
// $capacity = $attendance = $performance = $time = "";
// $contact_firstname = $contact_lastname = $email = $number = $recorded = "";

if ( $method == 'POST' ) {

    // if ( empty($_POST['VAR']) ) { $VAR_err = " * This field is required"; $submit_err = 1; }
    // else {
    //     $regex = "//";
    //     $VAR = SanitizeInput($_POST['VAR'], $regex);
    //     if ( $VAR == 0 ) {
    //         $VAR_err = " * Please enter a valid format.";
    //         $submit_err = 1;
    //     }
    // }

    if ( empty($_POST['bdate']) ) { $bdate_err = " * This field is required."; $submit_err = 1; }
    else {
        $regex = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}\z/";
        $bdate = SanitizeInput($_POST['bdate'], $regex);
        if ( $bdate == 0 ) {
            $bdate_err = " * Please enter a valid date format.";
            $submit_err = 1;
        }
    }

    if ( empty($_POST['event']) ) { $event_err = " * This field is required."; $submit_err = 1; }
    else {
        $regex = "/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]\z/";
        $event = SanitizeInput($_POST['event'], $regex);
        if ( $event == 0) {
            $event_err = " * Please enter a valid time format.";
            $submit_err = 1;
        }
    }

    if ( empty($_POST['artist']) ) { $artist_err = " * This field is required"; $submit_err = 1; }
    else {
        $regex = "/^[1-4]$/";
        $artist = SanitizeInput($_POST['artist'], $regex);
        if ( $artist == 0 ) {
            $artist_err = " * Please only select the options above.";
            $submit_err = 1;
        }
    }

    if ( empty($_POST['description']) ) { $description_err = " * This field is required"; $submit_err = 1; }
    else {
        $regex = "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/";
        $description = SanitizeInput($_POST['description'], $regex);
        if ( $description == 0 ) {
            $description_err = " * Only common characters for text are authorized.";
            $submit_err = 1;
        }
    }

    if ( empty($_POST['promo']) ) { $promo_err = " * This field is required"; $submit_err = 1; }
    else {
        $regex = "/^[-a-zA-Z0-9\sàâçéèêëîïôûùüÿñæœ]*$/";
        $promo = SanitizeInput($_POST['promo'], $regex);
        if ( $promo == 0 ) {
            $promo_err = " * Please enter a valid name.";
            $submit_err = 1;
        }
    }

    if ( empty($_POST['venue_name']) ) { $venue_name_err = " * This field is required"; $submit_err = 1; }
    else {
        $regex = "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/";
        $venue_name = SanitizeInput($_POST['venue_name'], $regex);
        if ( $venue_name == 0 ) {
            $venue_name_err = " * Please enter a valid format.";
            $submit_err = 1;
        }
    }

    if ( $submit_err == 1 ) {
        $submit_err = "Please complete all the fields.";
    }
    else {
        session_start();
        $_SESSION['bdate'] = $bdate;
        $_SESSION["event"] = $event;
        $_SESSION['artist'] = $artist;
        $_SESSION['description'] = $description;
        $_SESSION['promo'] = $promo;
        $_SESSION['venue_name'] = $venue_name;
        header('Location: ./thanks.php');
    }
}

function SanitizeInput($data, $regex) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtolower($data);
    if ( !preg_match($regex, $data) ) { return 0; }
    else { return $data; }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Entertainment Booking Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<style>
.error {color: #FF0000;}
</style>

<body>
    <div class="testbox">
        <form action="./form.php" method="POST" enctype="multipart/form-data">
            <div class="banner">
                <h1>Entertainment Booking Form</h1>
            </div>
            <div class="item">
                <p>Date of Event</p>
                <input type="date" name="bdate" />
                <i class="fas fa-calendar-alt"></i>
                <p class="error"><?php echo $bdate_err;?></p>
            </div>
            <div class="item">
                <p>Time of Event</p>
                <input type="time" name="event" />
                <i class="fas fa-clock"></i>
                <p class="error"><?php echo $event_err;?></p>
            </div>
            <div class="item">
                <p>Select Artist</p>
                <select name="artist">
                    <option value="">*Please select*</option>
                    <option value="1">Artist 1</option>
                    <option value="2">Artist 2</option>
                    <option value="3">Artist 3</option>
                    <option value="4">Artist 4</option>
                </select>
                <p class="error"><?php echo $artist_err;?></p>
            </div>
            <div class="item">
                <p>Description of Event</p>
                <textarea rows="3" name="description"></textarea>
                <p class="error"><?php echo $description_err;?></p>
            </div>
            <div class="item">
                <p>Promoter's Name</p>
                <input type="text" name="promo" />
                <p class="error"><?php echo $promo_err;?></p>
            </div>
            <div class="item">
                <p>Venue Name</p>
                <input type="text" name="venue_name" />
                <p class="error"><?php echo $venue_name_err;?></p>
            </div>
            <div class="item">
                <p>Venue Address</p>
                <input type="text" name="venue_address_1" placeholder="Street address" />
                <input type="text" name="venue_address_2" placeholder="Street address line 2" />
                <div class="city-item">
                    <input type="text" name="city" placeholder="City" />
                    <input type="text" name="region" placeholder="Region" />
                    <input type="text" name="postal" placeholder="Postal / Zip code" />
                    <select name="country">
                        <option value="">Country</option>
                        <option value="1">Russia</option>
                        <option value="2">Germany</option>
                        <option value="3">France</option>
                        <option value="4">Armenia</option>
                        <option value="5">USA</option>
                    </select>
                </div>
            </div>
            <div class="item">
                <p>Venue Capacity</p>
                <input type="text" name="capacity" />
            </div>
            <div class="item">
                <p>Expected Attendance</p>
                <input type="text" name="attendance" />
            </div>
            <div class="item">
                <p>Type of Performance</p>
                <select name="performance">
                    <option value="">*Please select*</option>
                    <option value="1">Solo Performance</option>
                    <option value="2">Full Band</option>
                </select>
            </div>
            <div class="item">
                <p>Set Time (in minutes)</p>
                <input type="text" name="time" />
            </div>
            <div class="item">
                <p>Contact Person</p>
                <div class="name-item">
                    <input type="text" name="contact_firstname" placeholder="First" />
                    <input type="text" name="contact_lastname" placeholder="Last" />
                </div>
            </div>
            <div class="item">
                <p>Contact Email</p>
                <input type="text" name="email" />
            </div>
            <div class="item">
                <p>Contact Number</p>
                <input type="text" name="number" />
            </div>
            <div class="question">
                <p>Will this event be recorded?</p>
                <div class="question-answer">
                    <div>
                        <input type="radio" value="yes" id="radio_1" name="recorded" />
                        <label for="radio_1" class="radio"><span>Yes</span></label>
                    </div>
                    <div>
                        <input type="radio" value="no" id="radio_2" name="recorded" />
                        <label for="radio_2" class="radio"><span>No</span></label>
                    </div>
                </div>
            </div>
            <div class="btn-block">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="btn-block">
                <button type="submit" href="/" name="submit">SEND</button>
                <p class="error"><?php echo $submit_err;?></p>
            </div>
        </form>
    </div>

</body>
</html>