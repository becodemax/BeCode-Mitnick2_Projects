<html>
  <head><title>Thank you!</title></head>
  <body>
  	<?php 

    echo "Thank you!";

    session_start();

    $bdate = $_SESSION['bdate'];
    $event = $_SESSION["event"];
    $artist = $_SESSION['artist'];
    $description = $_SESSION['description'];

    session_destroy();

    ?>

    <p><?php echo $bdate?></p>
    <p><?php echo $event?></p>
    <p><?php echo $artist?></p>
    <p><?php echo $description?></p>
    
  </body>
</html>