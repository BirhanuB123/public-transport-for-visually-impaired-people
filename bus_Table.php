<!DOCTYPE html> 
<html> 
<head> 
<meta charset='UTF-8'> 
<title>webPage of busInformation</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/style.css"> 
<!--[if !IE]><!--> 
<style>
</style> 
<!--<![endif]--> 
</head> 
<body> 
<h3>BusAssignment Table</h3> 
<table> 
<thead>
<tr> 
<th>busID</th> 
<th>routeNumber</th> 
<th>currentStation</th> 
</tr> 
</thead> 
<tbody> 
<?php 
$con=mysqli_connect("localhost", "root", "", "publictransport"); 
// Check connection 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
} 
$result = mysqli_query($con,"SELECT * FROM busassignment"); 
while($row = mysqli_fetch_array($result)) 
{
    echo "<tr>"; 
echo "<td>" . $row['busId'] . "</td>"; 
echo "<td>" . $row['routeNumber'] . "</td>"; 
echo "<td>" . $row['currentStation'] . "</td>"; 
//<td><a href="delete.php">Delete</a></td> 
echo "</tr>"; 
} 
echo "</table>";
mysqli_close($con); 
?> 
</tbody> 
</table> 
</body> 
</html>