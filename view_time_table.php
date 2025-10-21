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
<h3>Time_Table</h3> 
<table align="center" border="1px" style="width:100px;"> 
<tr> 
<th>Time_id</th> 
<th>Route_number</th> 
<th>Station_id</th>
<th>Arrival_time</th>
<th>Departure_time</th>
<th>Day_of_week</th>
</tr> 
<tbody> 
<?php 
$con=mysqli_connect("localhost", "root", "", "publictransport"); 
// Check connection 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
} 
$result = mysqli_query($con,"SELECT * FROM time_table"); 
while($row = mysqli_fetch_array($result)) 
{
   ?>
    <tr>
<td>  <?php echo $row['Time_id'] ;?></td> 
<td> <?php echo $row['Route_number'] ;?></td> 
<td> <?php echo $row['Station_id'] ;?></td> 
<td> <?php echo $row['Arrival_time'] ;?></td>
<td> <?php echo $row['Departure_time'] ;?></td>
<td> <?php echo $row['Day_of_week'] ;?></td>
</tr>
<?php
} 
?> 
</tbody> 
</table> 
</body> 
</html>

