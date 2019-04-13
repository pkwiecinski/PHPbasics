<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
</head> 
<body bgcolor="cyan">	 
	<?php
		$name = $_GET['name']; 
        $city = $_GET['city']; 
        if($name=="asd"){
        $image="https://image.freepik.com/free-vector/abstract-dynamic-pattern-wallpaper-vector_53876-59131.jpg" ;   
        }else{
            $image="https://cdn.pixabay.com/photo/2017/07/09/19/50/wallpaper-2487962_960_720.jpg";
        }
        echo "<img src = \"$image\" alt = \"nanilake\" height = \"400\" width=\"500\" />";
		echo "<h1>This is ".$name." of ".$city."</h1><br>"; 
	?> 

</body> 
</html> 
