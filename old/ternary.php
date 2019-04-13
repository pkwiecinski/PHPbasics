<?php 

// pass by value 
function valGeek($num) { 
	$num += 2; 
	return $num; 
} 

// pass by reference 
function refGeek(&$num) { 
	$num += 10; 
	return $num; 
} 

$n = 10; 

valGeek($n); 
echo "The original value is still $n \n"; 

refGeek($n); 
echo "The original value changes to $n"; 

?> 
