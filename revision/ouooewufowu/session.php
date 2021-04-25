<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

echo $_SESSION['favcolor'];



if ($_SESSION['favcolor'] == 'green')
{
	echo 'green';
}


?>

</body>
</html>