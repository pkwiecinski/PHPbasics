<?php
 
require ("db.php");
connectDB();
    
$dbh=connectDB(); 

$id3=$_GET["id"];

if (!$dbh) {
    die("Unable to connect to MySQL: ".mysqli_error());
}

if (!mysqli_select_db($dbh,'phonebook')) {  
    die("Unable to select database: " . mysql_error()); 
}

	$sql_stmt = "DELETE FROM `phonebook` WHERE `id` = $id3"; 
    
	$result = mysqli_query($dbh,$sql_stmt); 
    
	if (!$result) {
	die("Deleting record failed: " . mysqli_error());
    }
    
	echo "ID number $id3 has been successfully deleted";

    
mysqli_close($dbh); 
?>