<?php

$valid = ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys');

if (!$valid) {
  header('WWW-Authenticate: Basic realm="Testing"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

else{
	$imgfile=file_get_contents("../img/42.png");
	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,".base64_encode($imgfile)."'>\n</body></html>";
}

?>