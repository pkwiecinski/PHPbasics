<!DOCTYPE html> 
<html> 
<body> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 

<label for="name">Please enter your name: </label> 
<input name="name" type="text"><br> 

<label for="email">Please enter your email address: </label> 
<input name="email" type="text"><br> 

<label for="mobile">Please enter your phone number: </label> 
<input name="mobile" type="text"><br> 

<input type="submit" value="Submit" name="SubmitForm"> 

</form> 
<br>
<?php

require ("db.php");
connectDB();
$dbh=connectDB(); 

if(isset($_POST['SubmitForm'])){

    $nm=$_POST['name']; 
    $ema=$_POST['email']; 
    $mob=$_POST['mobile']; 

    echo "<strong> name: </strong>".$nm.". <strong> email: </strong> ".$ema.".<strong> mobile: </strong> ".$mob."<br/>";
    echo "This record was submited to database <br/><br/>";    

        if (!$dbh) {
            die("Unable to connect to MySQL: ".mysqli_error()); 
        }

        if (!mysqli_select_db($dbh,'phonebook'))   {
            die("Unable to select database: " . mysql_error()); 
        }

        
        $sql_stmt = "INSERT INTO `phonebook` (`name`,`email`,`mobile`)"; 
        $sql_stmt .= " VALUES('$nm','$ema','$mob')"; 
        

        $result = mysqli_query($dbh,$sql_stmt);  
        
        if (!$result){
            die("Adding record failed: " . mysqli_error()); 
        }
            
   // mysqli_close($dbh); 
}

if (!$dbh) {
    die("Unable to connect to MySQL: ".mysqli_error());
}
if(!mysqli_select_db($dbh, 'phonebook')){
    die("Unable to connect to database: ".mysqli_error());
}

$sql_stmt1 = "SELECT * FROM phonebook";
$result1 = mysqli_query($dbh, $sql_stmt1);

if(!$result1){
    die("Unable to execute query: ".mysqli_error());
}
$rows = mysqli_num_rows($result1); 
    
	if ($rows) {     
        while ($row = mysqli_fetch_array($result1)) {         
            echo 'ID: <a href="record.php?id='.$row['id'].'">'.$row['id'].'</a><br>';         
            echo 'Names: ' . $row['name'] . '<br>';        
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'Telephone no#: ' . $row['mobile'] . '<br>';
            echo 'ID: <a href="deletephone.php?id=' . $row['id'] . '"><b>Delete number</b></a><br><br>';         
        
        } 
} 
mysqli_close($dbh); //close the database connection 


?> 

</body> 
</html> 