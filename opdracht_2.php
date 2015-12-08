<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 2</title>
</head>
<body>
<?php 

	$sum = 0;
	$count = 1;

	while ($count <= 20) {
		$sum += $count;
		$count += 1;
	}

	echo "Som: ${sum}";
	
 ?>
</body>
</html>