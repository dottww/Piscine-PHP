<?php
session_start();
$login = $_GET['login'];
$passwd = $_GET['passwd'];
$submit = $_GET['submit'];

if ($login && $passwd && $submit == "OK") {

 $_SESSION['login'] = $login;
 $_SESSION['passwd'] = $passwd;
 $_SESSION['time'] = time();
}
?>
<!DOCTYPE html>
<html><body>

<form action="/index.php" method="GET">
login:<br>
  <input type="text" name="login" value="">
  <br>
  passwd:<br>
  <input type="password" name="passwd" value="">
  <br><br>
  <input type="submit" value="OK">
</form>
</body>
</html>