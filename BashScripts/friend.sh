#!/bin/bash

echo "	Hello fri3nd! What's up?"

function math() {

	while true
	do
		read -p "	What operation do you want me to do? (e.g: 7+3 or 9*9) (x to quit) --> " input

		pattern="^([0-9.]+)([-+*/])([0-9.]+)$"
		d_zero_pattern="^([0-9.]+)([-+*/])(0+)$"

		if [[ $input =~ $d_zero_pattern ]]; then
			echo "	nah bro, I ain't doin that"
		elif [[ $input =~ $pattern ]]; then
			echo "	The result is $(($input))"
		elif [ $input = "x" ]; then
			echo "	Alrighty, that's enough math for today!"
			break
		else
			echo "	$input is invalid!"
		fi
	done
}

function weather() {
	read -p '	-> Select a city (leave blank for closer): ' city
	curl v2d.wttr.in/$city
}

function clock() {
	echo "	It is $(date +%H:%M:%S)!"
}

while true
do
	echo "	What can I do for you? "
	echo "		(1) Tell me a joke!"
	echo "		(2) Do the math for me!"
	echo "		(3) What time is it?"
	echo "		(4) What's the weather?"
	echo "		(x) Exit"
	read -p "	Select a number --> " option

	if [ $option = 1 ]; then
		echo "	Here's a joke :"
		joke=$(shuf -n 1 /home/max/Mitnick2-Projects/BashScripts/jokes.txt)
		echo "	$joke"
	elif [ $option = 2 ]; then
		echo "	I'll do the math for you, as much as I can!"
		math
	elif [ $option = 3 ]; then
		clock
	elif [ $option = 4 ]; then
		weather
	elif [ $option = x ]; then
		echo "	Goodbye! See you soon!"
		break
	else
		echo "	Invalid option! Try again!"
	fi
done
