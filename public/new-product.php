<?php include("../private/header.php") ?>

<div id="container">

			<form action="create-product.php" method="post">
				<div class="details">
					<input type="text" name="name" placeholder="Product Name"><br />
					<textarea name="description" cols="50" rows="20">Product Description</textarea><br />
					<input type="text" name="price" placeholder="Price"><br />
					<input type="text" name="size" placeholder="Size"><br />
					<input type="text" name="brand" placeholder="Brand / Artist"><br />
					<input type="text" name="qtyInStock" placeholder="How many are in Stock"><br />
					<input type="file" name="image">
					
				</div>
								
				<input type="submit" value="submit">
				
			</form>
</div>

<?php include("../private/footer.php") ?>

