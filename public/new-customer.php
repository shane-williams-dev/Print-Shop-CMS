<?php include("../private/header.php") ?>

<div id="container">

			<form action="create-customer.php" method="post">
				<div class="details">
					<input type="text" name="firstName" placeholder="First Name"><br />
					<input type="text" name="lastName" placeholder="Last Name"><br />
					<input type="text" name="company" placeholder="Company"><br />
					<input type="text" name="phone" placeholder="Phone"><br />
					<input type="text" name="streetAddress" placeholder="Street Address"><br />
					<input type="text" name="city" placeholder="City"><br />
					<input type="text" name="state" placeholder="State"><br />
					<input type="text" name="postCode" placeholder="Post Code"><br />
				</div>
								
				<input type="submit" value="submit">
				
			</form>
</div>

<?php include("../private/footer.php") ?>

