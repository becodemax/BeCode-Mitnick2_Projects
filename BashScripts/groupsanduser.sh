#!/bin/sh

groups=$(id -nG "$USER")

echo "$groups"

for g in $groups; do
   echo "$USER is a part of the group $g."
done
