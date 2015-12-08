<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 1</title>
</head>
<body>
<?php 

	$sum = 0;

	foreach (range(1, 20) as $i) {
		$sum += $i; 
	}

	echo "Som: ${sum}";
	
 ?>
</body>
</html>