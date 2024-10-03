<?php
$country=array(
"India"=>"Newdelhi",
"Russia"=>"Moscow",
"United Kingdom"=>"London",
"Germany"=> "Berlin",
"Spain"=> "Madrid");

ksort ($country);
echo "<br>";
print_r ($country);
echo "<br>";
echo "-- Keys (countries) in ascending order <br>";

asort ($country);
echo "<br>";
print_r ($country);
echo "<br>";
echo "-- Values (capitals) in descending order <br>";
?>	