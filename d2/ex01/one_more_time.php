#!/usr/bin/php
<?php

function wf()
{
	echo "Wrong Format\n";
	exit;
}

function is_weekday($str)
{
	$day = explode(
		",",
		"Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi,Dimanche,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche"
	);
	if (in_array($str, $day)) {
		return 1;
	} else {
		return 0;
	}
}

function is_month($str)
{
	$month = explode(
		",",
		"Janvier,Février,Mars,Avril,Mai,Juin,Juillet,Août,Septembre,Octobre,Novembre,Décembre,janvier,février,mars,avril,mai,juin,juillet,août,septembre,octobre,novembre,décembre"
	);
	if (in_array($str, $month)) {
		return 1;
	} else {
		return 0;
	}
}

function num_month($str)
{
	$month = explode(
		",",
		"Janvier,Février,Mars,Avril,Mai,Juin,Juillet,Août,Septembre,Octobre,Novembre,Décembre,janvier,février,mars,avril,mai,juin,juillet,août,septembre,octobre,novembre,décembre"
	);
	$key = array_search($str, $month) + 1;
	if ($key == 12 || $key == 24)
		$key = 12;
	else
		$key = $key % 12;
	return $key;
}

function is_hour($str)
{
	$rawhour = explode(":", $str);
	if (!(count($rawhour) == 3
		&& $rawhour[0] <= 23 && $rawhour[0] >= 0
		&& $rawhour[1] <= 59 && $rawhour[1] >= 0
		&& $rawhour[2] <= 59 && $rawhour[2] >= 0
		&& ctype_digit($rawhour[0]) && ctype_digit($rawhour[0]) && ctype_digit($rawhour[0]))) {
		return 0;
	} else
		return 1;
}

if ($argc != 2) {
	return;
} else {
	$rawarray = explode(" ", $argv[1]);
	// print_r($rawarray);

	if (
		!is_weekday($rawarray[0])
		||
		!ctype_digit($rawarray[1])
		||
		!is_month($rawarray[2])
		||
		$rawarray[3] < 0 || !ctype_digit($rawarray[3])
		||
		!is_hour($rawarray[4])
	)
		wf();
	if ($rawarray[1] >= 1 && $rawarray[1] <= 9) {
		$rawarray[1] = '0' . $rawarray[1];
	}
	$rawarray[2] = num_month($rawarray[2]);

	$newarray = array_slice($rawarray, 1, 3);
	// print_r($newarray);

	$format = 'd-n-Y G:i:s';
	$dny = implode("-", $newarray);
	$dnyhr = $dny . ' ' . $rawarray[4];
	// echo "dny=$dnyhr\n";
	$sec = strtotime(date($dnyhr),'01-01-1970 00:00:00');
	if (!$sec)
		wf();
	else
		echo "$sec\n";
}
?>