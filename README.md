# geoIP-country-check

This is a script meant to scan MaxMind database for IPs from provided list and find the ones that is displaying incorrect country. It is meant to be used for one DC (Location) at a time.

Resource folder is where you store both the list of the IPs you want to scan and mmdb database file.

Make sure IPs are provided plain 0.0.0.0 format without subnetmasks ex: 0.0.0.0/24

# Preparation

Once you clone the repository, make sure to update the paths in files:
* geoIP-country-check/Reader.php  |  lines: 2 and 7
* geoIP-country-check/geoIPcheck.sh  |  line: 9