<?php
session_start();
if ($_POST['mybtn'])
{
	if ($_POST['bid'] != "")
	{
		if ($_POST['bid'] != "0")
		{
			$_SESSION['bid_session'] = $_POST['bid'];
		}
	}
}

$bid_session = $_SESSION['bid_session'];
?>
<form method="post" action="forms.php">
	<input type="text" name="bid" 
	value="<?php
	if ($bid_session == "")
	{
		echo("0");
	}else{
		echo($bid_session);
	}
	?>

	">
	<input type="submit" name="mybtn" value="calculate"/>
</form>

