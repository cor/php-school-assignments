<?php 

if (isset($_POST["1"]) && isset($_POST["2"]) && isset($_POST["3"])) {
	$average = ($_POST["1"] + $_POST["2"] + $_POST["3"]) / 3;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 8</title>
</head>
<body>
	<form action="opdracht_8.php" method="post">
		<input type="number" name="1">
		<input type="number" name="2">
		<input type="number" name="3">
		<input type="submit">
	</form>

	<?=$average?>
</body>
</html>