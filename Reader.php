<?php
require_once '/Users/Eimis/Documents/GitHub/geoIP-country-check/vendor/autoload.php';
use GeoIp2\Database\Reader;

// This reader object should be reused across lookups as creation of it is
// expensive.
$reader = new Reader('/Users/Eimis/Documents/GitHub/geoIP-country-check/resources/GeoIP2-Country.mmdb');

$record = $reader->country('128.101.101.101');

print($record->country->isoCode);