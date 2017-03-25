<?php

$host = "localhost";
$username = "root";
$password = "";
	mysql_connect($host,$username,$password) or die ("could not connect" .mysql_error());
			
	mysql_select_db("abin_cp_db") or die("database doesnot exist");
		
?>