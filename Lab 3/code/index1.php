<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-z][a-z]b/ui';
$find = preg_match_all($regexp,$str,$match);
var_dump($match);
echo "<br>";

$string = 'a1b2c3';
$regexp = '/[0-9]+/';
$newString = preg_replace_callback($regexp, function($numbers) {return pow($numbers[0], 3); }, $string);
echo $newString;