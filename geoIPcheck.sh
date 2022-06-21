#!/bin/bash
filename='us-ip-list.txt'
badlist='badlist.txt'
while read line; do
# reading each line
echo "$line"

# use curl to check MaxMind IP database
grepinam=$(curl -u "138533:u8livtBJa9YHT68x" "https://geolite.info/geoip/v2.1/country/{$line}?pretty" | grep -w -A 8 'country');

# check if geoname_id = country code (US by default)
if [[ "$grepinam" == *"6252001"* ]];
then
  echo "The IP location is correct $grepinam"
else
  echo "The IP location is incorrect $grepinam"
  echo "$line" > $badlist
fi

done < $filename