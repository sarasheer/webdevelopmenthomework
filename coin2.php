<!DOCTYPE html>
<html>
<h1>Challenge 1</h1>
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
<h1>Challenge 2a</h1>

<body>
<?php
$coin = (mt_rand(1,2));
if ($coin == 1)
{
	print "<img src="heads" alt="heads" height="42" width="42">";
}
elseif ($coin == 2)
{
	print "<img src="tails" alt="tails" height="42" width="42">";
}
$num_tosses = function coin_toss (
$coin = (mt_rand(1,2));
if ($coin == 1)
{
	echo "heads";
}
elseif ($coin == 2)
{
	echo "tails";
}
)
for ($num_tosses; $num_tosses<4; ++$num_tosses)
{
	echo $coin $num_tosses
}
for ($num_tosses; $num_tosses<6; ++$num_tosses)
{
	echo $coin $num_tosses
}
for
	($num_tosses; $num_tosses<8; ++$num_tosses)
{
	echo $coin $num_tosses
}
for 
	($num_tosses; $num_tosses<10; ++$num_tosses)
{
	echo $coin $num_tosses
}
?>
</body>
<h1>Challenge 2b</h1>
<body>
<?php
$num_tosses = function coin_toss (
$coin = (mt_rand(1,2));
if ($coin == 1)
{
	echo "heads";
}
elseif ($coin == 2)
{
	echo "tails";
}
)
for ($num_tosses=1; ++$num_tosses)
echo "coin-toss"
if ($num_heads==2) break;
  echo "$num_tosses toss";
?>
</body>
</html>