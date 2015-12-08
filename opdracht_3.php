<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 3</title>
</head>
<body>

<?php 
	$sentence = "Peter is de broer van Hans";

	echo "<p>${sentence}</p>";

	// Create an array from the words in $sentence
	$words = explode(" ", $sentence); 

	// Swap the first and last word in the words array
	$word_count = count($words) - 1;
	$last_word = $words[$word_count];
	$words[$word_count] = $words[0];
	$words[0] = $last_word; 	

	// Create a new from the modified $words array
	$new_sentence = implode(" ", $words);

	echo "<p>${new_sentence}</p>";
 ?>

</body>
</html>