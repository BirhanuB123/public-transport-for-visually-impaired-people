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
<h3>Bus_Station_Table</h3> 
<table align="center" border="1px" style="width:100px;"> 
<tr> 
<th>Route_number</th> 
<th>Path_id</th> 
<th>Station_id</th>
</tr> 
<tbody> 
<?php 
$con=mysqli_connect("localhost", "root", "", "publictransport"); 
// Check connection 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
} 
$result = mysqli_query($con,"SELECT * FROM routing_table"); 
while($row = mysqli_fetch_array($result)) 
{
   ?>
    <tr>
<td>  <?php echo $row['Route_number'] ;?></td> 
<td> <?php echo $row['Path_id'] ;?></td> 
<td> <?php echo $row['Station_id'] ;?></td> 
</tr>
<?php
} 
?> 
</tbody> 
</table> 
</body> 
</html>