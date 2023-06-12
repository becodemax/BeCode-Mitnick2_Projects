#!/bin/bash

echo "	Hello fri3nd! What's up?"

echo "	Options :"
echo "		(1) Tell me a joke!"
echo "		(2) Do the math for me!"
echo "		(3) What time is it?"

while true
do
	read -p "	Select an option : " option

	if [ $option = 1 ]; then
		echo "	Here's a joke :"
		joke=$(shuf -n 1 ./jokes.txt)
		echo "	$joke"
		break
	elif [ $option = 2 ]; then
		echo "	This is option $option!"
		break
	elif [ $option = 3 ]; then
		echo "	That's the last option! Option number $option."
		break
	else
		echo "	Invalid option! Try again!"
	fi
done
