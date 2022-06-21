<?php
require_once '/absolute/path/to/vendor/autoload.php';
use GeoIp2\Database\Reader;

// This reader object should be reused across lookups as creation of it is
// expensive.
$reader = new Reader('/absolute/path/to/resources/GeoIP2-Country.mmdb');

$record = $reader->country($argv[1]);

print($record->country->isoCode);