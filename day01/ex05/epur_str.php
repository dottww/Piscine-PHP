#!/usr/bin/php
<?php

$str = trim(preg_replace('/\s(?=\s)/', '', $argv[1]));

print("$str\n");

?>