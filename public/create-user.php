<?php
require_once("../private/db_connect.php");

	

	// userName
	$userName = $_POST["userName"];
	
	// password
	$password = $_POST["password"];
		
	// isAdmin
	if ($_POST["isAdmin"] == 1) {
		$isAdmin = true;
	} else {
		$isAdmin = false;
	}
	
		

	// date
	$date = date('Y-m-d H:i:s');	
	
	
	// Query.
	$query = "INSERT INTO LOGIN (";
	$query .= "userName, password, isAdmin";
	$query .= ") VALUES (";
	$query .= "'{$userName}', '{$password}', '{$isAdmin}')";
	$result = mysqli_query($connection, $query);
	
	// Redirecting based on query results. 
	if ($result && mysqli_affected_rows($connection) >= 0) {
		//SUCCESS
		//$_SESSION["message"] = "Page Edited";					
		//redirect_to("manage_content.php?page={$id}");
		echo "Success";
	} else {
		// FAILURE
		//$message = "Page editing failed";	
		echo "Didn't Work";		
	}	
	
				
?>