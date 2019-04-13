<?php

require ("db.php");

connectDB();

$dbh=connectDB();

if (!$dbh) {
    die("Unable to connect to MySQL: ".mysqli_error());
}
if(!mysqli_select_db($dbh, 'phonebook')){
    die("Unable to connect to database: ".mysqli_error());
}

$sql_stmt = "SELECT * FROM phonebook";
$result = mysqli_query($dbh, $sql_stmt);

if(!$result){
    die("Unable to execute query: ".mysqli_error());
}
$rows = mysqli_num_rows($result); 
    
	if ($rows) {     
	while ($row = mysqli_fetch_array($result)) {         
		echo 'ID: ' . $row['id'] . '<br>';         
		echo 'Names: ' . $row['name'] . '<br>';        
		echo 'Email: ' . $row['email'] . '<br>';         
		echo 'Telephone no#: ' . $row['mobile'] . '<br>', '<br>';         
     
	} 
} 
mysqli_close($dbh); //close the database connection 

?>