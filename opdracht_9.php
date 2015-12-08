<?php 
if (isset($_POST["number"])) {
	$output = [];
	$number = $_POST["number"];
	while ($number > 0) {
		$output[] = $number;
		$number--;
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 9</title>
</head>
<body>
	<form action="opdracht_9.php" method="post">
		Startwaarde:<br>
		<input type="number" name="number">
		<br>
		<input type="submit">
	</form>

	<?php
	if (isset($output)) {
		foreach ($output as $value) {
			echo "{$value}<br>";
		}
	}
	 ?>
</body>
</html>