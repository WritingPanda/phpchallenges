<?php

// Create a function alphabet_soup($str) that accepts a string and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". 
// So make sure your function separates and alphabetizes each word separately.

echo "Like alphabet soup? Enter a word or phrase and watch it go alphabetical! ";
$input = trim(fgets(STDIN));

function alphabet_soup($str) {
	// separate each word in the string by exploding it in an array
	$words = explode(" ", $str);
	// iterate through each element of the new array
	foreach ($words as $word) {
		$singleWord = str_split($word);
		$alphaWord = sort($singleWord);
	}
	// return the result
	return $singleWord;
}

print_r(alphabet_soup($input));
?>