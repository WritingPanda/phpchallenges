<?php

// Create a function to check if a word is a palindrome or not.
// Amore, Roma .. A man, a plan, a canal: Panama .. No 'x' in 'Nixon
echo "Check if a word is a palindrome! Enter word: ";
$input = trim(fgets(STDIN));

function is_palindrome($input) {
	$pali = str_split($input);
	$revpali = array_reverse($pali);
	if ($pali == $revpali) {
		return true;
	} else {
		return false;
	}
}

if (is_palindrome($input)) {
	echo "{$input} is a palindrome! Cool, huh?\n";
} else {
	echo "{$input} is not a palindrome. Do you even know what those are?\n";
}
?>