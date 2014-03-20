#!/usr/bin/php5
<?php

$url = "http://www.network-science.de/ascii/ascii.php?FONT=nancyj-fancy&WIDT=1000&FORM=left&STRE=no&RICH=no&TEXT=%s";

$callThisUrl = sprintf($url, urlencode($argv[1]));

$contents = file_get_contents($callThisUrl);
$m = array();
preg_match_all('|<TD><PRE>([^<]+)<\/PRE>|', $contents, $m);

echo "\n";
echo(html_entity_decode($m[1][0]));

