<!DOCTYPE html>
<html>
<body>
<h1>Challenge 1</h1>
<?php
$each_book = array (
array("Title"=>"PHP and MySQL Web Development", "Author"=>"Luke Welling", "Pages"=>"144", 
"Type"=>"Paperback", "Price"=>'$31.63'),
array("Title"=>"Web Design with HTML, CSS, JavaScript and jQuery", "Author"=>"Jon Duckett", 
"Pages"=>"135", "Type"=>"Paperback", "Price"=>'$41.23'), 
array("Title"=>"PHP Cookbook: Solutions & Examples for PHP Programmers", 
"Author"=>"David Sklar", "Pages"=>"14", "Type"=>"Paperback", "Price"=>'$40.88'), 
array("Title"=>"JavaScript and JQuery: Interactive Front-End Web Development",
"Author"=>"Jon Duckett", "Pages"=>"251", "Type"=>"Paperback", "Price"=>'$22.09'), 
array("Title"=>"Modern PHP: New Features and Good Practices", 
"Author"=>"Josh Lockhart", "Pages"=>"7", "Type"=>"Paperback", "Price"=>'$28.49'), 
array("Title"=>"Programming PHP","Author"=>"Kevin Tatroe", "Pages"=>"26", 
"Type"=>"Paperback", "Price"=>'$28.96')
)

echo "<table>";
	echo "<tr>";
		echo "<td>"Title"</td>";
		echo "<td>"Author"</td>";
		echo "<td>"Pages"</td>";
		echo "<td>"Type"</td>";
		echo "<td>"Price"</td>";
	echo "</tr>";
	echo "<tr>";
		foreach ($each_book as $key=>$value)
			echo "<td>"foreach ($Title as $Title=>$value) {
				echo "$value";
			}
			echo "</td>";
				echo "<td>"foreach ($Author as $Author=>$value) {
				echo "$value";
			}
			echo "</td>"
				echo "<td>"foreach ($Pages as $Pages=>$value) {
				echo "$value";
			}
			echo "</td>";
				echo "<td>"foreach ($Type as $Type=>$value) {
				echo "$value";
			}
			echo "</td>";
				echo "<td>"foreach ($Price as $Price=>$value) {
				echo "$value";
			}
			echo "</td>";
			
	echo "</tr>";		
echo "</table>";
?>
<h1>Challenge 2</h1>
<?php
$side = mt_rand (0,1);
if ($side == 0) {
	echo "Heads";
	}
else {
	echo "Tails";
	}

$c = 0 //total flips
$h = 0 //heads in a row

while ($h < 5) {
	if ($side == 0)
		{$h=$h+1;}
		}
	else {
		$h=0
		}

while ($h < 5) {
	{$c + 1}
	echo mt_rand (0,1);
	}
 for ($h == 5)
 	{echo "$h heads in a row; $c tosses";
 	}

?> 
</body>
</html>
 
