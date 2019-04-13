<?php 
  
// Creating an indexed array 
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav"); 
  
// One way of Looping through an array usign foreach 
echo "Looping using foreach: <br/>"; 
foreach ($name_one as $val){ 
    echo $val. "<br/>"; 
} 
  
// count() function is used to count  
// the number of elements in an array 
$round = count($name_one);  
echo "<br/>The number of elements are $round <br/>"; 
  
// Another way to loop through the array using for 
echo "Looping using for: <br/>"; 
for($n = 0; $n < $round; $n++){ 
    echo $name_one[$n], "<br/>"; 
} 
  
?> 