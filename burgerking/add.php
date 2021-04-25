<!DOCTYPE html>
<html>

<section class="container grey-text">
	<h4 class="center"> Add a Burger </h4>
	<form class="center" action="add.php" method="POST"> 
		<label>Your Email:</label>
		<input type="text" name="email">
		<label>Burger Name</label>
		<input type="text" name="name">
		<label>Ingredients (comma seperated):</label>
		<input type="text" name="ingredients">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-o">
		</div>
	</form>

</section>
<? php include ('footer.php');?>
<body>
	<?<?php 
if (isset($_POST['submit'])) 
{
	echo $_POST['email'];
	echo $_POST['name'];
	echo $_POST['ingredients'];
 } ?>
</body>
</html>