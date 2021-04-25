<!DOCTYPE html>
<html>

<body>

	<form action="forms2.php" method="get">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>

	Hi <?php echo $_POST["name"];?>

</body>
</html>