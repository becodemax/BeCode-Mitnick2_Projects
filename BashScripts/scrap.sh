#!/bin/sh

curl $1 > ./tmp_scrap

cat ./tmp_scrap | grep '<h4 class="pull-right price">'
