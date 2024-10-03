<?php
$city=array(
array("Newdelhi" => 2000, "ABC", "india"),
array("Moscow" => 3000, "BCD", "Russia"),
array("Berlin" => 4000, "CDE", "Germany"));

foreach ($city as $row)
{
	foreach ($row as $value)
	{
		echo "$value  ";
	}	
	echo "<br><br>";
}
?>