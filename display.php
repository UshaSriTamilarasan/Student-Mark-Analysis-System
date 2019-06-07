<html> 
<head> 
<style> 
<table 
{ border "style :solid"; 
border "width :2px"; 
border "color :PINK";}> 
</style> 
</head> 
<body style="font-bold" background="im6.jpg">  
<?php 
echo "<table border='1' align ='center'> 
<tr> 
<br> 
<td>Student Name</td><td>Roll No</td> 
<tr> 
<td>Aneeka Amin</td><td>16it63</td> 
</br> 
</tr>"; 
?> 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db="db"; 
$conn = new mysqli($servername, $username, $password,$db); 
if (!$conn) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
$db="select * from 16it63"; 
$q=$conn->query($db); 
echo "<table border='1' align ='center'> 
<tr> 
<br> 
<br> 
<td>sub_id</td> 
<td>sub_name</td> 
<td>internal_I</td> 
<td>internal_II</td> 
<td>semester</td> 
</br> 
</br> 
</tr>"; 
while($row = $q->fetch_array()) 
{ 
echo "<tr>"; 
echo "<td> $row[sub_id]</td>"; 
echo "<td> $row[sub_name]</td>"; 
echo "<td>$row[internal_I]</td>"; 
echo "<td>$row[internal_II]</td>"; 
if($row['semester']!="U") 
{ 
echo "<td>$row[semester]</td>"; 
} 
else 
{ 
echo '<td BGCOLOR="#ff0000">'.$row['semester'].'</td>'; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
$conn->close(); 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db="db"; 
$conn = new mysqli($servername, $username, $password,$db); 
if (!$conn) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
$db="select * from 16it63"; 
$q=$conn->query($db); 
$tmp_gpa=0; 
$tot_credits=0; 
while($row = $q->fetch_array()) 
{ 
$a=$row['semester']; 
$b=$row['sub_name']; 
if($a!= 'U') 
{ 
if($a= 'S') 
{ 
$Grade = 10; 
} 
elseif($a= 'A') 
{ 
$Grade = 9; 
} 
elseif($a= 'B') 
{ 
$Grade = 8; 
} 
elseif($a= 'C') 
{ 
$Grade = 7; 
} 
elseif($a= 'D') 
{ 
$Grade = 6; 
} 
else 
{ 
$Grade = 5; 
} 
} 
else 
{ 
$Grade = 0; 
} 
if($b!= 'MPLAB') 
{ 
if($b = 'DAA') 
{ 
$NumCredits=4; 
} 
elseif($b= 'PQT') 
{ 
$NumCredits=4; 
} 
elseif($b= 'OS') 
{ 
$NumCredits=3; 
} 
elseif($b= 'MPMC') 
{ 
$NumCredits=3; 
} 
elseif($b= 'SE') 
{ 
$NumCredits=3; 
} 
elseif($b= 'SELAB') 
{ 
$NumCredits=2; 
} 
else 
{ 
$NumCredits=2; 
} 
} 
else 
{ 
$NumCredits=2; 
} 
$tmp_gpa = $tmp_gpa + ($Grade * $NumCredits); 
$tot_credits = $tot_credits + $NumCredits;  
} 
$gpa_final = $tmp_gpa/$tot_credits; 
echo "<table border='1' align ='center'> 
<tr> 
<br> 
<td>GPA</td><td>$gpa_final</td> 
<tr> 
</br> 
</tr>"; 
$conn->close(); 
?> 
</body> 
</html> 