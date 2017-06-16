<?php
require 'phping.php';

$host = 'masiarek.pl';
$ping = new Ping($host);
$latency = $ping->ping();
if ($latency !== false) {
  print 'Latency is ' . $latency . ' ms';
}
else {
  print 'Host could not be reached.';
}
