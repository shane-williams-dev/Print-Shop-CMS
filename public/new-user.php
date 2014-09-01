<?php include("../private/header.php") ?>

<div id="container">

			<form action="create-user.php" method="post">
				<div class="details">
					<input type="text" name="userName" placeholder="User Name"><br />
					<input type="text" name="password" placeholder="Password"><br />
					<p>Is this user an Administrator?
					<input type="radio" name="isAdmin" value="1" placeholder="Admin User"><br /></p>
				</div>
								
				<input type="submit" value="submit">
				
			</form>
</div>

<?php include("../private/footer.php") ?>

