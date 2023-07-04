<html>
  <head><title>Time</title></head>
  <body>
  	<?php
    date_default_timezone_set('Belgium/Brussels');
    $date = date('m/d/Y', time());
    $time = date('h:i:s a', time());
    $hour = date('H', time());
    $minute = date('i', time());

    // echo $date;

    if(($hour >= 5 && $hour < 9 && $minute >= 0)){
        echo "Good morning!";
        echo "\n It's currently $time. Today is $date.";
    }
    elseif(($hour >= 9 && $hour < 12 && $minute >= 0)){
        echo "Have a good day!";
        echo "\n It's currently $time. Today is $date.";
    }
    elseif(($hour >= 12 && $hour < 16 && $minute >= 0)){
        echo "Good afternoon!";
        echo "\n It's currently $time. Today is $date.";
    }
    elseif(($hour >= 16 && $hour < 21 && $minute >= 0)){
        echo "Good evening!";
        echo "\n It's currently $time. Today is $date.";
    }
    elseif(($hour >= 21 && $hour < 24 && $minute >= 0) || ($hour >= 0 && $hour < 5 && $minute >= 0)){
        echo "Good night!";
        echo "\n It's currently $time. Today is $date.";
    }

    ?>
    
  </body>
</html>