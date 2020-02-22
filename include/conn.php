<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "phpdasar";

	$query = mysqli_connect($host , $user, $pass, $db) or die(mysqli_errno()); 