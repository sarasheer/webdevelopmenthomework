<!DOCTYPE html>
<html>
<body>
<h1>Challenge 1</h1>
<?php
$change_due = 2.38;
$dollars = (int) (2.38 / 1);
$quarters = (int) (($change_due - $dollars) / .25);
$dimes = (int) ((($change_due - $dollars) - ($quarters * .25)) / .10);
$nickels = (int) ((($change_due - $dollars) - ($quarters * .25) - ($dimes * .1)) / .05);
$pennies = ((($change_due - $dollars) - ($quarters * .25) - ($dimes * .1) - ($nickels * .05)) / .01);
echo "Your change is \$2.38: $dollars dollars, $quarters quarters, $dimes dimes, $nickels nickels and $pennies pennies.";
?>

<h1>Challenge 2a</h1>

<?php
$bottles = 99;
$new_bottles = 98;
do {
	echo " <p> $bottles bottles of beer on the wall, $bottles bottles of beer <br>
	Take one down, pass it around, $new_bottles bottles of beer on the wall </p> ";
	--$bottles;
	--$new_bottles;
} while ($bottles > 0)
?>
<h1>Challenge 2b</h1>
<?php
$zottles = 4;
$new_zottles = $zottles - 1;
do {
	echo " <p> $zottles bottles of beer on the wall, $zottles bottles of beer <br>
	Take one down, pass it around, $new_zottles bottles of beer on the wall </p> ";
	--$zottles;
	--$new_zottles;
	} while ($zottles > 0)
?>
</body>
</html>