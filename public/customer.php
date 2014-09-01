<?php 

require_once("../private/db_connect.php");

$query = 'SELECT * FROM CUSTOMER';
$result = mysqli_query($connection, $query);
$rc = mysqli_num_rows($result);

for($i=0; $i < $rc; $i++) {
	$rows[$i] = mysqli_fetch_array($result);
}

?>

<?php include("../private/header.php") ?>

<div id="container">
	<div id="blog">
		<?php foreach($rows as $row) { ?>
			<ul class="product<?php echo $row['id']; ?>">
				<li>
					<h1><?php echo $row['firstName']; ?></h1>
					<p><?php echo $row['lastName']; ?></p>				
					<p><?php echo $row['company']; ?></p>
					<p><?php echo $row['phone']; ?></p>
					<p><?php echo $row['streetAddress']; ?></p>
					<p><?php echo $row['city']; ?></p>
					<p><?php echo $row['state']; ?></p>
					<p><?php echo $row['postCode']; ?></p>
					
					
				</li>
			</ul>
		<?php
		}
		?>
	</div>

</div>

<?php include("../private/footer.php") ?>

