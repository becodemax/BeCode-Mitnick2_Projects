<html>
  <head><title>School Sucks</title></head>

    <form method="post" action="schoolsucks.php">

    <p>How bad is it?</p>
    <label for="note">Note (/20) : </label>
    <input type="number" min="0" max="20" name="note" required>
    <input type="submit" name="submit" value="Submit">
    <br>

    </form>

    <?php

    $method = $_SERVER['REQUEST_METHOD'];

    if ( isset($_POST['note']) ) {
        $input = ctype_digit($_POST['note']);
        if ( $input == 1 ) {
            $note = $_POST['note'];
        }
    }

    if ( isset($_POST['submit']) ) {
        $input = $_POST['submit'];
        if ( $input == 'Submit' ) {
            $submit = $input;
        }
    }

    function CheckAllFields($note, $submit) {
        if ( isset($note, $submit) ) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function EvalGrade($note) {
        switch ($note) {
            case ( $note <= 4 ):
                echo "This work is really bad. What a dumb kid! ";
                break;
            case ( $note > 4 && $note <= 9 ):
                echo "This is not sufficient. More studying is required.";
                break;
            case ( $note == 10 ):
                echo "Barely enough!";
                break;
            case ( $note > 10 && $note <= 14 ):
                echo "Not bad!";
                break;
            case ( $note > 14 && $note <= 18 ):
                echo "Bravo, bravissimo!";
                break;
            case ( $note == 19 || $note == 20 ):
                echo "Too good to be true : confront the cheater!";
                break;
            default:
                echo "Impossible. Please, select a number between 0 and 20!";
                break;
        }
    }

    if ( $method == 'POST' ) {
        if ( CheckAllFields($note, $submit) == 1 ) {
            EvalGrade($note, $submit);
        }
        elseif ( CheckAllFields($note, $submit) == 0 ) {
            echo "What are you doing?";
        }
    }

    ?>

    </body>
</html>