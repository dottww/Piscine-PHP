#!/usr/bin/php
<?php

function grab_image($url, $saveto)
{
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
	$raw = curl_exec($ch);
	curl_close($ch);
	if (file_exists($saveto)) {
		unlink($saveto);
	}
	$fp = fopen($saveto, 'x');
	fwrite($fp, $raw);
	fclose($fp);
}

if ($argc == 2) {
	$source = file_get_contents($argv[1]);
	$img_link = preg_match('/<img src="(.*?)".*?"42">/', $source, $matches) ? $matches[1] : '';
	// echo "$img_link\n";
	$sitename = preg_match('/https?\:\/\/(.*)/', $argv[1], $matches) ? $matches[1] : '';
	// echo "$sitename\n";
	$imgname = preg_match('/.*\/(.*)/', $img_link, $matches) ? $matches[1] : '';
	// echo "$imgname\n";
	mkdir($sitename, 0700);
	grab_image($img_link, $sitename.'/'.$imgname);
}
?>