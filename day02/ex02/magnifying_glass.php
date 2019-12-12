#!/usr/bin/env php
<?php

function ft_callable($subject)
{
	return (
			str_replace(
			$subject[1], strtoupper($subject[1]), $subject[0]
						)
			);
}

if ($argc == 2)
	{
		$raw = fopen($argv[1], 'r');
		while (!feof($raw))
		{
			$subject = fgets($raw);
			$result1 = preg_replace_callback
			('/<a href=.*?title="(.*?)">/', "ft_callable", $subject);
			$result2 = preg_replace_callback
			('/<a href=.*?>(.*?)</', "ft_callable", $result1);
			echo $result2;
		}
	}
?>