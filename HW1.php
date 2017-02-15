<!DOCTYPE html>
<html>
<body>
<?php
$change_due = 2.38;
$dollars = (int) (2.38 / 1);
$quarters = (int) (($change_due - $dollars) / .25);
$dimes = (int) ((($change_due - $dollars) - ($quarters * .25)) / .10);
$nickels = (int) ((($change_due - $dollars) - ($quarters * .25) - ($dimes * .1)) / .05);
$pennies = ((($change_due - $dollars) - ($quarters * .25) - ($dimes * .1) - ($nickels * .05)) / .01);
echo "Your change is $dollars dollars, $quarters quarters, $dimes dimes, $nickels nickels and $pennies pennies.";
?>

</body>
</html>