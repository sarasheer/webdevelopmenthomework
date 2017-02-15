<!DOCTYPE html>
<html>
<body>
<?php
$isbn = "0812976711";
$x=
(
(
(((substr($isbn, 0, 1)) * 10) +

(((substr($isbn, 1, 1)) * 9) + 
(((substr($isbn, 2, 1)) * 8) +
(((substr($isbn, 3, 1)) * 7) + 
(((substr($isbn, 4, 1)) * 6) + 
(((substr($isbn, 5, 1)) * 5) + 

(((substr($isbn, 6, 1)) * 4) + 
(((substr($isbn, 7, 1)) * 3) + 
(((substr($isbn, 8, 1)) * 2) + 
(((substr($isbn, 9, 1)) * 1)
)
 % 11);
if ($x == 0) 
{
		echo "This is a valid ISBN.";
}
else {
		echo "This is not a valid ISBN.";
}
?>
</body>
</html>