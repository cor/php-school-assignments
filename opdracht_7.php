<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 7</title>
</head>
<body>

<ul>
<?php 

	foreach (range(1, 10) as $i) { 
		$random_number = rand(1, 6);
		echo "<li>Worp: {$i}, Uitkomst: {$random_number}</li>";
	}
?>
</ul>
</body>
</html>