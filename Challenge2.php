<!DOCTYPE html>
<html>
<body>
<?php
$bottles = 99;
$new_bottles = $bottles - 1
do {
	echo " <p> $bottles bottles of beer on the wall /,/ $ bottles of beer <br>
	take one down /,/ pass it around /,/ $new_bottles bottles of beer on the wall </p> ";
	--$bottles;
} while ($bottles > 0)
?>
</body>
</html>

	