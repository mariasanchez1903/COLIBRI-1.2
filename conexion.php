<?php

	/*$conex = mysqli_connect("sql213.260mb.net","n260m_18281976","927ygbjc") or die (mysql_error());
	mysqli_select_db($conex, "n260m_18281976_business");
		mysqli_query($conex, "SET CHARACTER SET UTF8");*/


$conex = mysqli_connect("localhost","root","123456") or die (mysqli_error());
	mysqli_select_db($conex, "colibri");
		mysqli_query($conex, "SET CHARACTER SET UTF8");
 ?>