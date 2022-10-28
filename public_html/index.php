<?php

$mysqli = new mysqli("db", "root", "admin", "ninja_ecommerce_solution");

if ($mysqli->connect_errno) {
	echo "Failed connection to MariaDB: " . $mysqli -> connect_error;
	exit();
} else {
	echo "Successfully connected to MariaDB";
}

$mysqli->close();