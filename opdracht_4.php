<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 4</title>
</head>
<body>
<?php 

	// Function that takes a numbers Array and prints it
	function printNumbers($numbers) {

		// Create a string from the numbers in the array
		$numbers_string = implode(", ", $numbers);
		
		echo "<p> Nummers: ${numbers_string} </p>";
	}

	$numbers_to_sort = [1337, 42, 69, 9, 11, 25091999, 420, 10, 8, 64];

	printNumbers($numbers_to_sort);
	rsort($numbers_to_sort);
	printNumbers($numbers_to_sort);

 ?>

</body>
</html>