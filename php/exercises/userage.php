<html>
  <head><title>User Age</title></head>

    <form method="post" action="userage.php">

    <p>Do you speak English?</p>
    <input type="radio" id="en_yes" name="speak_en" value="yes">
    <label for="speak_en">Yes</label><br>
    <input type="radio" id="en_no" name="speak_en" value="no">
    <label for="speak_en">No</label>
    <br>

    <p>Man or woman?</p>
    <input type="radio" id="woman" name="gender" value="woman">
    <label for="woman">Woman</label><br>
    <input type="radio" id="man" name="gender" value="man">
    <label for="man">Man</label>
    <br>

    <p>How old are you?</p>
    <label for="age">Please type your age : </label>
    <input type="" name="age">
    <input type="submit" name="submit" value="Submit">
    <br>

    </form>

    <?php

    $method = $_SERVER['REQUEST_METHOD'];

    if ( isset($_POST['age']) ) {
        $input = ctype_digit($_POST['age']);
        if ( $input == 1 ) {
            $age = $_POST['age'];
        }
    }
    if ( isset($_POST['gender']) ) {
        $input = $_POST['gender'];
        if ( $input == 'man' || $input == 'woman' ) {
            $gender = $input;
        }
    }
    if ( isset($_POST['speak_en']) ) {
        $input = $_POST['speak_en'];
        if ( $input == 'yes' || $input == 'no' ) {
            $speak_en = $input;
        }
    }
    if ( isset($_POST['submit']) ) {
        $input = $_POST['submit'];
        if ( $input == 'Submit' ) {
            $submit = $input;
        }
    }

    function CheckAllFields($age, $gender, $speak_en, $submit) {
        if ( isset($speak_en, $gender, $age, $submit) ) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function Greeting($age, $person, $greetings) {
        if ($age < 12){
            echo "You're $age years old! $greetings $person kiddo!";
        }
        elseif ($age >= 12 && $age < 18){
            echo "You're $age years old! $greetings $person teenager!";
        }
        elseif ($age >= 18 && $age < 115){
            echo "You're $age years old! $greetings $person adult!";
        }
        elseif ($age > 115){
            echo "You're $age years old! Wow! Still alive $person? Are you a robot, like me ? Can I hug you ?!";
        }
    }

    function Gender($gender) {
        if ( $gender == "man" ){
            return "Mister";
        }
        elseif ( $gender == "woman" ){
            return "Miss";
        }
    }

    function SpeakEnglish($speak_en) {
        if ( $speak_en == "yes" ) {
            return "Hello";
        }
        elseif ( $speak_en == "no" ) {
            return "Aloha";
        }
    }

    function userAgeForm($age, $gender, $speak_en, $submit) {
        $check_all_fields = CheckAllFields($age, $gender, $speak_en, $submit);
        $person = Gender($gender);
        $greetings = SpeakEnglish($speak_en);
        if ( $check_all_fields == 0 ) {
            echo "Something went wrong! ";
            return 0;
        }
        elseif ( $check_all_fields == 1 ) {
            Greeting($age, $person, $greetings);
            return 1;
        }
    }

    if ( $method == 'POST' ) {
        userAgeForm($age, $gender, $speak_en, $submit);
    }

    ?>

  </body>
</html>