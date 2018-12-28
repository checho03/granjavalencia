<?php

	$conexion = new mysqli("localhost", "root", "", "dbvalencia");
	
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
