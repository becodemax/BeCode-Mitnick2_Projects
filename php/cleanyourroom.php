<html>
  <head><title>Dirty Room</title></head>
  <body>
  	<?php
		// 1.1 Clean your room Exercise 

		$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
		$room_filthiness = $possible_states[2]; 

		if( $room_filthiness == "health hazard" ){
			echo "Yuk, Room is hella dirty : let's clean it up !";
			cleanup_room();
			echo "<br>Room is now clean!";
			$room_filthiness = "clean";
		} elseif( $room_filthiness == "filthy" ) {
			echo "Yuk, Room is dirty : let's clean it up !";
			cleanup_room();
			echo "<br>Room is now clean!";
			$room_filthiness = "clean";
		} elseif( $room_filthiness == "dirty" ) {
			echo "Yuk, let's clean it up !";
			cleanup_room();
			echo "<br>Room is now clean!";
			$room_filthiness = "clean";
		} else {
			echo "<br>Nothing to do, room is neat.";
		}
   	?>
  </body>
</html>