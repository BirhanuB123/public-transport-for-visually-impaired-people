<!DOCTYPE html> 
<html> 
<head> 
<meta charset='UTF-8'> 
<title>Web_page_of_bus_information</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/style.css"> 
<!--[if !IE]><!--> 
<style>
</style> 
<!--<![endif]--> 
</head> 
<body> 
<h3>Bus_Assignment_Table</h3> 
<table align="center" border="2px" style="width:100px;"> 
<tr> 
<th>busID</th> 
<th>routeNumber</th> 
<th>currentStation</th> 
</tr> 
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
   ?>
    <tr>
<td>  <?php echo $row['BusId'] ;?></td> 
<td> <?php echo $row['RoutNumber'] ;?></td> 
<td> <?php echo $row['CurrentStation'] ;?></td> 
</tr>
<?php
} 
?> 
</tbody> 
</table> 
</body> 
</html>