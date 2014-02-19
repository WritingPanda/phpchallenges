<?php

for ($beer = 99; $beer >= 1; $beer--) { 
	$lessBeer = $beer - 1;
	if ($beer == 2){
		echo $beer . " bottles of beer on the wall, " . $beer . " bottles of beer. Take one down and pass it around, " . $lessBeer .  " bottle of beer on the wall." . PHP_EOL;
	} elseif ($beer == 1) {
		echo $beer . " bottle of beer on the wall, " . $beer . " bottle of beer. Take one down and pass it around, no more bottles of beer on the wall." . PHP_EOL;
	} else {
	echo $beer . " bottles of beer on the wall, " . $beer . " bottles of beer. Take one down and pass it around, " . $lessBeer .  " bottles of beer on the wall." . PHP_EOL;
	}
}
echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall." . PHP_EOL;
?>