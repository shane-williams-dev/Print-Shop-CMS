<?php 

require_once("../private/db_connect.php");

$query = 'SELECT * FROM PRODUCT';
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
					<h1><?php echo $row['name']; ?></h1>
					<p><?php echo $row['description']; ?></p>				
					<p><?php echo $row['price']; ?></p>
					<p><?php echo $row['size']; ?></p>
					<p><?php echo $row['brand']; ?></p>
					<p><?php echo $row['qtyInStock']; ?></p>
					<img src="<?php echo $row['image']; ?>" />
					
				</li>
			</ul>
		<?php
		}
		?>
	</div>

</div>

<?php include("../private/footer.php") ?>

