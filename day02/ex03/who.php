#!/usr/bin/php
<?php
date_default_timezone_set("Europe/paris");
$fd = fopen("/var/run/utmpx", "r");
while ($binary_safe_file_read = fread($fd, 628))
	$array_who[] = unpack("A256user/A4id/A32tty/Ipid/Itype/Ltime", $binary_safe_file_read);
// print_r($arr);
foreach ($array_who as $item) {
	if ($item[type] == 7)
		echo $item[user] . "   " . $item[tty] . "  " . date("M j H:i", $item[time]) . "\n";
}
?>