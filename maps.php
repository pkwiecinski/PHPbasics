<?php 
  
// One way to create an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any",  
                  "Ram"=>"Rani", "Salim"=>"Sara",  
                  "Raghav"=>"Ravina"); 
$name_one["ABC"] = "xyz";
  
// Second way to create an associative array 
$name_two["zack"] = "zara"; 
$name_two["anthony"] = "any"; 
$name_two["ram"] = "rani"; 
$name_two["salim"] = "sara"; 
$name_two["raghav"] = "ravina"; 
$name_two["XYZ"] = "abc";   
  
// Accessing the elements directly 
echo "Accessing the elements directly:<br/>"; 
echo $name_two["zack"], "<br/>"; 
echo $name_two["salim"], "<br/>"; 
echo $name_two["anthony"], "<br/>"; 
echo $name_one["Ram"], "<br/>"; 
echo $name_one["Raghav"], "<br/> <br/>"; 

$count1 = count($name_one);
$count2 = count($name_two);
echo $count1 . "<br/>";
echo $count2. "<br/> <br/>";

// Looping through an array using foreach 
echo "Looping using foreach: <br/>"; 
foreach ($name_one as $val => $val_value){ 
    echo "Husband is ".$val." and Wife is ".$val_value."<br/>"; 
} 
  
// Looping through an array using for 
echo "<br/>Looping using for: <br/>"; 
$keys = array_keys($name_two); 
$round = count($name_two);  
  
for($i=0; $i < $round; ++$i) { 
    echo $keys[$i] . ' ' . $name_two[$keys[$i]] . "<br/>"; 
} 



?> 