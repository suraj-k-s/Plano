<?php
	$server="localhost";
	$user="root";
	$pw="";
	$db="db_plano";
	$conn=mysqli_connect($server,$user,$pw,$db);
	if(!$conn)
	{
		echo "connction error";
	}
?>
