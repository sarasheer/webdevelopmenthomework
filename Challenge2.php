<!DOCTYPE html>
<html>
<body>
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

	