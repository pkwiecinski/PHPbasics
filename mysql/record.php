
<?php
 
require ("db.php");
connectDB();
    
$dbh=connectDB(); 

if(isset($_POST['SubmitForm'])){

    $id2=$_POST['id'];
    $nm=$_POST['name']; 
    $ema=$_POST['email']; 
    $mob=$_POST['mobile']; 

    echo "This record was updated <br/><br/>";    

    if (!$dbh) {
            die("Unable to connect to MySQL: ".mysqli_error()); 
     }

    if (!mysqli_select_db($dbh,'phonebook'))   {
            die("Unable to select database: " . mysql_error()); 
    }

    $sql_stmt2 = "UPDATE `phonebook` SET `name` = '$nm',`email` = '$ema', `mobile` = '$mob'";
    $sql_stmt2 .= " WHERE `id`=$id2";
    $result2 = mysqli_query($dbh,$sql_stmt2); 

    $result2 = mysqli_query($dbh,$sql_stmt2);  
        
    if (!$result2){
        die("Updating record failed: " . mysqli_error()); 
        }

    header("Location: record.php?id='".$id2."'");


}else{

   
$id1=$_GET["id"];

if (!$dbh) {
        die("Unable to connect to MySQL: ".mysqli_error());
}

if (!mysqli_select_db($dbh,'phonebook')){  
	 die("Unable to select database: " . mysql_error()); 
}
    
$sql_stmt1 = "SELECT * FROM phonebook WHERE id=$id1";
$result1 = mysqli_query($dbh, $sql_stmt1);
 
if(!$result1){
    die("Unable to execute query: ".mysqli_error());
}

$rows = mysqli_num_rows($result1); 
    
if ($rows) {     
        $row = mysqli_fetch_array($result1);
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Names: ' . $row['name'] . '<br>';        
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'Telephone no#: ' . $row['mobile'] . '<br>', '<br>';         
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
            
            <input name="id" type="text" hidden value="<?php echo $row['id'];?>"><br>

            <label for="name">Update name: </label> 
            <input name="name" type="text"  value="<?php echo $row['name'];?>"><br> 
            
            <label for="email">Update email address: </label> 
            <input name="email" type="text"value="<?php echo $row['email'];?>"><br> 
            
            <label for="mobile">Update number: </label> 
            <input name="mobile" type="text"value="<?php echo $row['mobile'];?>"><br> 
            
            <input type="submit" value="Submit" name="SubmitForm"> 
            
            </form> 
            
             <?php   

 mysqli_close($dbh); 
}
}

?>