#!/usr/bin/php
<?php

$str1 = trim(preg_replace('/\s(?=\s)/', '', $argv[1]));
print("$str1\n");

// $str2 = trim(preg_replace('/\s+/', ' ', $argv[1]));
// print("$str2\n");

?>