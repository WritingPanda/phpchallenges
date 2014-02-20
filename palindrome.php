<?php

// Create a function to check if a word is a palindrome or not.
// Amore, Roma .. A man, a plan, a canal: Panama .. No 'x' in 'Nixon
echo "Check if a word is a palindrome! Enter word: ";
$input1 = trim(fgets(STDIN));
$input2 = strtoupper($input1);

function is_palindrome($input) {
	$input = preg_replace("/[^A-Za-z0-9 ]/", "", $input);
	$input = str_replace(" ", "", $input);
	$pali = str_split($input);
	$revpali = array_reverse($pali);

	if ($pali == $revpali) {
		return true;
	} else {
		return false;
	}
}

if (is_palindrome($input2)) {
	echo "{$input1} is a palindrome! Cool, huh?\n";
} else {
	echo "{$input1} is not a palindrome. Do you even know what those are?\n";
}
?>