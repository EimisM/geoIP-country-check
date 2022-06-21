#!/bin/bash
filename='resources/us-ip-list.txt'
badlist='output/badlist.txt'
while read line; do
# reading each line
echo "$line"

# query to read the database mmdb file
query=$(php /absolute/path/to/reader.php "$line"); 

# check if geoname_id = country code (US by default)
if [[ "$query" == 'US' ]];
then
  echo "The IP location is correct = $query"
else
  echo "The IP location is incorrect = $query"
  echo "$line" >> $badlist
fi

done < $filename