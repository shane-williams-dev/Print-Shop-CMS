<?php
require_once("../private/db_connect.php");

	

	// firstName
	$firstName = $_POST["firstName"];
	
	// lastName
	$lastName = $_POST["lastName"];
	
	// company
	$company = $_POST["company"];
	
	// phone
	$phone = $_POST["phone"];
	
	// streetAddress
	$streetAddress = $_POST["streetAddress"];
	
	// city
	$city = $_POST["city"];	
	
	// state
	$state = $_POST["state"];		

	// post code
	$postCode = $_POST["postCode"];		
		

	// date
	$date = date('Y-m-d H:i:s');	
	
	
	// Query.
	$query = "INSERT INTO CUSTOMER (";
	$query .= "firstName, lastName, company, phone, streetAddress, city, state, postCode, date";
	$query .= ") VALUES (";
	$query .= "'{$firstName}', '{$lastName}', '{$company}', '{$phone}', '{$streetAddress}', '{$city}', '{$state}', '{$postCode}', '{$date}')";
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