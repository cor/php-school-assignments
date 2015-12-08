<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 5</title>
</head>
<body>
<?php 
	$fibonacci = [1, 1];

	foreach( range(1, 10) as $i ) {
		// Calculate the next fibonacci number
		$next_number = $fibonacci[$i] + $fibonacci[$i - 1]; 

		// Add the next number to the end of the fibonacci array
		array_push ($fibonacci, $next_number);
	}

	// Create a string from the elements in $fibonacci
	$fibonacci_string = implode(", ", $fibonacci);

	echo "Fibonaccireeks: ${fibonacci_string}";
 ?>
</body>
</html>