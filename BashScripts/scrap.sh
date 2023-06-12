#!/bin/sh

curl $1 > ./tmp_scrap

description=$(cat ./tmp_scrap | grep '<p class="description">' | cut -d '>' -f2 | cut -d '<' -f1 | sed 's/\&quot;/\"/' | cut -d ',' -f 2-)

title=$(cat ./tmp_scrap | grep 'class="title"' | grep -E -o 'title="[^"]*">' | cut -d '"' -f2 | sed 's/\&quot;/\"/')

price=$(cat ./tmp_scrap | grep -E -o '\$[0-9]+(\.[0-9]{2})?')
