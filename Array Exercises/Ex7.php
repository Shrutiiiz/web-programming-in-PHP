<?php
$country=array(
"India"=>"Newdelhi",
"Russia"=>"Moscow",
"United Kingdom"=>"London",
"Germany"=> "Berlin",
"Spain"=> "Madrid");

print_r($country);
echo "<br><br>";

$country["Russia"]="Xyz";

foreach($country as $key=>$value)
{
	echo ($key);
	echo " -> ";
	echo ($value);
	echo "<br>";
}	
?>