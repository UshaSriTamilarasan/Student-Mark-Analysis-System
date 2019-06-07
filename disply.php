<?php 
include_once "id1.php"; 
$Rollno=$_POST['no']; 
$Name=$_POST['nm']; 
$cv=$_POST['n']; 
$si=$_POST['no1']; 
$Nv=$_POST['no2']; 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db="db"; 
$conn = new mysqli($servername, $username, $password, $db); 
$sql ="UPDATE $Rollno SET $cv='$Nv' WHERE sub_id='$si'"; 
if ($conn->query($sql) === TRUE)  
{echo "Record updated successfully";}  
else  
{echo "Error updating record: " . $conn->error;} 
$conn->close();    
?> 