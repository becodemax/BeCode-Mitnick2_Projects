<html>
  <head><title>User Age</title></head>
    <?php

    if ( isset($_POST['age']) ) {
        $input = ctype_digit($_POST['age']);
        if ( $input == 0 ) {
            echo "Please enter a valid age number! This incident will be reported.";
        }
        elseif ( $input == 1 ) {
            $age = $_POST['age'];
        }
    }
    if ( isset($_POST['genre']) ) {
        $input = ctype_alpha($_POST['genre']);
        if ( $input == 0 ) {
            echo "Please enter a valid gender! This incident will be reported.";
        }
        elseif ( $input == 1 ) {
            $genre = $_POST['genre'];
        }
    }

    function userAge($age, $person) {
        if ($age < 12){
            echo "You're $age years old! Hello $person kiddo!";
        }
        if ($age >= 12 && $age < 18){
            echo "You're $age years old! Hello $person teenager!";
        }
        if ($age >= 18 && $age < 115){
            echo "You're $age years old! Hello $person adult!";
        }
        if ($age > 115){
            echo "You're $age years old! Wow! Still alive $person? Are you a robot, like me ? Can I hug you ?!";
        }
    }

    function userAgeForm($age, $genre) {
        if ( $genre == "man" && $age ){
            $person = "Mister";
            userAge($age, $person);
        }
        if ( $genre == "woman" && $age ){
            $person = "Miss";
            userAge($age, $person);
        }
    }

    userAgeForm($age, $genre);

    ?>
    <form method="post" action="userage.php">

        <p>Man or woman?</p>
        <input type="radio" id="woman" name="genre" value="woman">
        <label for="woman">Woman</label><br>
        <input type="radio" id="man" name="genre" value="man">
        <label for="man">Man</label><br>
        
        <p>How old are you?</p>
        <label for="age">Please type your age : </label>
        <input type="" name="age">
        <input type="submit" name="submit" value="Submit">
        <br>

    </form>

  </body>
</html>