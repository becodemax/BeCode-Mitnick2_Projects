<html>
  <head><title>Family</title></head>
  <body>
  	<?php 
    
    $name = 'Max'; 
    $age = 20;
    $eyes = 'brown';
    $family = array(
      'mom' => 'Ornella',
      'dad' => 'Jean',
      'uncle' => 'Marc',
      'cousin' => 'Gaetan',
    );

    ?>
    <h1>Hi! My name is <?php echo $name?>.</h1>
    <h1>I am <?php echo $age?> years old.</h1>
    <h1>My eyes are <?php echo $eyes?>.</h1>
    <h1>
      <?php
        foreach($family as $key => $value)
        {
          echo "My $key is $value!\n";
        }
      ?>
    </h1>
    <h1>The first person in my family is <?php echo $family['mom']?>.</h1>
  </body>
</html>