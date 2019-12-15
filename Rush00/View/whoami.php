<?php
	// session_start();
	
	if(isset($_SESSION["loggued_on_user"]))
	{
		if($_SESSION["loggued_on_user"] == "")
		echo "<p>You are browsing as not logged in visitor</p>";
		else
		echo "<p>You have loggedin as : " . $_SESSION["loggued_on_user"]. "</p>";
	}
	
?>