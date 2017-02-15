<!DOCTYPE html>
<html>
<body>
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