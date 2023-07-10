<html>
  <head><title>Soccer Team</title></head>

    <form method="post" action="soccerteam.php">

    <p>What's your name?</p>
    <label for="name">Your name : </label>
    <input type="" name="name">
    <br>

    <p>Man or woman?</p>
    <input type="radio" id="woman" name="gender" value="woman">
    <label for="woman">Woman</label><br>
    <input type="radio" id="man" name="gender" value="man">
    <label for="man">Man</label>
    <br>

    <p>How old are you?</p>
    <label for="age">Your age : </label>
    <input type="" name="age"><br>
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
    if ( isset($_POST['name']) ) {
        $input = ctype_alpha($_POST['name']);
        if ( $input == 1 ) {
            $name = $_POST['name'];
        }
    }
    if ( isset($_POST['submit']) ) {
        $input = $_POST['submit'];
        if ( $input == 'Submit' ) {
            $submit = $input;
        }
    }

    function CheckAllFields($age, $gender, $name, $submit) {
        if ( isset($name, $gender, $age, $submit) ) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function CheckCriteria($age, $gender) {
        if ( $age >= 21 && $age <= 40 ) {
            if ( $gender == 'woman' ) {
                return 1;
            }
            else {
                return 0;
            }
        }
        else {
            return 0;
        }
    }

    function TeamMessage($age, $gender, $name, $submit) {
        $allfields = CheckAllFields($age, $gender, $name, $submit);
        $criteria = CheckCriteria($age, $gender);
        if ( $allfields == 1 && $criteria == 1 ) {
            echo "Welcome to the team $name!";
        }
        elseif ( $allfields == 1 && $criteria == 0 ) {
            echo "Sorry $name, you don't fit the criteria.";
        }
        elseif ( $allfields == 0 ) {
            if ( isset($name) ) {
                echo "$name, please complete all the fields. This incident will be reported. ";
            }
            else {
                echo "Please complete all the fields.";
            }
        }
    }

    if ( $method == 'POST' ) {
        TeamMessage($age, $gender, $name, $submit);
    }

    ?>

  </body>
</html>