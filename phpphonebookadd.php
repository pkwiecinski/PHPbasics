<?php 
    require ("db.php");

    connectDB();
    
    $dbh=connectDB();    

    if (!$dbh) {
        die("Unable to connect to MySQL: ".mysqli_error());
    }

	if (!mysqli_select_db($dbh,'phonebook'))     
	    die("Unable to select database: " . mysql_error()); 

    
    $sql_stmt = "INSERT INTO `phonebook` (`name`,`email`,`mobile`)"; 
	$sql_stmt .= " VALUES('Poseidon','searocks@gmail.com','333444555')"; 
    
	$result = mysqli_query($dbh,$sql_stmt);  
    
	if (!$result){
		die("Adding record failed: " . mysqli_error()); 
    }
        
 mysqli_close($dbh); 
?>

