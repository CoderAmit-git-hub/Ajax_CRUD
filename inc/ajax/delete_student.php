<?php

	// Database connection
    include_once "../../app/db.php";
    include_once "../../app/functions.php";

	$id = $_POST['id'];

	$sql = "DELETE FROM students WHERE sl='$id'";
	$connection -> query($sql);



 ?>