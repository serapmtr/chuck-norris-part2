<?php

require_once("functions/binaryToString.php");
require_once("functions/split.php");

$input = "0 0 00 0000 0 000 00 0000 0 00";
// $input = "0 0 00 00 0 0 00 000 0 00 00 00 0 0 00 0 0 000 00 0 0 00 00 00 0 00 00 0 0 00 00 00 0 00 00 0 0 0000";
$splittedArray = split($input);

$string = binaryToString($splittedArray);

var_dump($string);