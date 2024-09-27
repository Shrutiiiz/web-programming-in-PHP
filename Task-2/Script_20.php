<?php
function factn($n){
	if($n<=1){
		return 1;
	}
	else{
		return $n*factn($n-1);
	}
}
$n=5;
$fact=factn($n);
echo "Factorial Number is = $fact"; 
?>