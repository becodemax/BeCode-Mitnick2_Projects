<html>
  <head><title>userage</title></head>
    <?php
    if (isset($_GET['age'])){
        $age = filter_var($_GET['age'], FILTER_SANITIZE_NUMBER_INT);
        if ($age < 12){
            echo "You're $age years old! Hello kiddo!";
        }
        if ($age >= 12 && $age < 18){
            echo "You're $age years old! Hello teenager!";
        }
        if ($age >= 18 && $age < 115){
            echo "You're $age years old! Hello adult!";
        }
        if ($age > 115){
            echo "You're $age years old! Wow! Still alive ? Are you a robot, like me ? Can I hug you ?!";
        }
    }
    ?>
    <form method="get" action="userage.php">
        <label for="age">Please type your age : </label>
        <input type="" name="age">
        <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
