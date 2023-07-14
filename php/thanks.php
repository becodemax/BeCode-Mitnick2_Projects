<html>
  <head><title>Thank you!</title></head>
  <body>
  	<?php 

    echo "Thank you!";

    session_start();

    $bdate = $_SESSION['bdate'];
    $event = $_SESSION['event'];
    $artist = $_SESSION['artist'];
    $description = $_SESSION['description'];
    $promo = $_SESSION['promo'];
    $venue_name = $_SESSION['venue_name'];

    session_destroy();

    ?>

    <p><?php echo $bdate?></p>
    <p><?php echo $event?></p>
    <p><?php echo $artist?></p>
    <p><?php echo $description?></p>
    <p><?php echo $promo?></p>
    <p><?php echo $venue_name?></p>

  </body>
</html>