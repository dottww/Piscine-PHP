<?php
function auth($login, $passwd)
{
	$credential = "../private/passwd";
	if (!$login || !$passwd)
		return (FALSE);
	else {
		$fd = file_get_contents($credential);
		$data = unserialize($fd);
		if ($data) {
			foreach ($data as $key => $value) {
				if (($value["login"] == $login) && ($value["passwd"] == hash("sha256", $passwd)))
					return (TRUE);
			}
		}
		return (FALSE);
	}
}
?>