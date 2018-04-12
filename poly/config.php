<?php
error_reporting(E_ALL ^ E_DEPRECATED);

	$conn = mysql_connect('localhost', 'froxtlab_home', '-uLNQV+Ge.]L');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("froxtlab_home", $conn);


?>