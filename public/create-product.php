<?php
require_once("../private/db_connect.php");

	

	// product name
	$name = $_POST["name"];
	
	// description
	$description = $_POST["description"];
	
	// price
	$price = $_POST["price"];
	
	// size
	$size = $_POST["size"];
	
	// brand
	$brand = $_POST["brand"];
	
	// qtyInStock
	$qtyInStock = $_POST["qtyInStock"];
	
	// image
	$image = $_POST["image"];		

	// date
	$date = date('Y-m-d H:i:s');	
	
	
	// Query.
	$query = "INSERT INTO PRODUCT (";
	$query .= "name, description, price, size, brand, qtyInStock, date, image";
	$query .= ") VALUES (";
	$query .= "'{$name}', '{$description}', '{$price}', '{$size}', '{$brand}', '{$qtyInStock}', '{$date}', '{$image}')";
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