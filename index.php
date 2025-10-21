
<!DOCTYPE html> 

<html>
<head> 
<meta charset='UTF-8'> 
<title>Web_page_of_bus_information</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="style.css"> 
<style> 
nav ul ul { 
display: none; } 
nav ul li:hover > ul { 
display: block; 
} 
nav ul { 
background: #efefef; 
background: linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%);
box-shadow: 0px 0px 9px rgba(0,0,0,0.15); 
padding: 0 20px; 
width:100%; 
border-radius: 10px; 
list-style: none; 
position: relative; 
display: inline-table; 
}
nav ul:after { 
content: ""; clear: both; display: block; 
} 
nav ul li { 
float: left; 
} 
nav ul li:hover { 
background: #4b545f; 
background: linear-gradient(top, #4f5964 0%, #5f6975 40%); 
background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%); 
background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%); 
} 
nav ul li:hover a { 
color: #fff; 
} 
nav ul li a { 
display: block; padding: 5px 25px;
color: #757575; text-decoration: none; 
} 
nav ul ul { 
background: #5f6975; border-radius: 0px; padding: 0; 
position: absolute; top: 100%;max-width:15em; 
} 
nav ul ul li {
    float: none; 
border-top: 1px solid #6b727c; 
border-bottom: 1px solid #575f6a; 
position: relative; 
} 
nav ul ul li a { 
padding: 5px 40px; 
color: #fff; 
} 
nav ul ul li a:hover { 
background: #4b545f; 
} 
.main_div{ 
width:900px; 
} 
</style> 
</head>
<body> 
<center>
<div class="main_div"> 
<h2 style="text-align:center ; font-size: 25px">Public Transport Information System </h2> 
<nav> 
<hr /> 
<ul>
<li><a href="?page=home">Home</a></li> 
<li><a href="#">Bus_table </a> 
<ul> 
<li><a href="?page=bus_view"> View</a></li> 
<li><a href="?page=bus_create"> Create</a></li> 
<li><a href="?page=bus_update"> Update</a></li> 
<li><a href="?page=bus_delete"> Delete</a></li> 
</ul> 
</li> 
<li><a href="#">Station_table </a> 
<ul> 
<li><a href="?page=station_view"> View</a></li> 
<li><a href="?page=station_create"> Create</a></li> 
<li><a href="?page=station_update"> Update</a></li> 
<li><a href="?page=station_delete"> Delete</a></li> 
</ul> 
</li> 
<li><a href="#">Routing_table </a>
<ul> 
<li><a href="?page=routing_view"> View</a></li> 
<li><a href="?page=routing_create"> Create</a></li> 
<li><a href="?page=routing_update"> Update</a></li> 
<li><a href="?page=routing_delete"> Delete</a></li> 
</ul>
</li> 
<li><a href="#">Time_table </a> 
<ul> 
<li><a href="?page=time_view"> View</a></li> 
<li><a href="?page=time_create"> Create</a></li> 
<li><a href="?page=time_update"> Update</a></li> 
<li><a href="?page=time_delete"> Delete</a></li> 
</ul> 
</li> 
<li><a href="?page=time"> Request_time</a></li> 
</ul> 
</nav> 
<br> 
<?php 
if (!isset($_GET['page'])) { 
include"home.php"; 
} 
else {
switch ($_GET['page']) { 
case "bus_view": 
include "view_bus_table.php"; 
break; 
case "bus_create": 
include "create_bus_table.php";
break; 
case "bus_update": 
include "update_bus_table.php"; 
break; 
case "bus_delete": 
include "delete_bus_table.php"; 
break; 
case "home": 
include "home.php"; 
break; 
case "station_view": 
include "view_station_table.php"; 
break; 
case "station_create": 
include "create_station_table.php"; 
break; 
case "station_update": 
include "update_station_table.php";
break; 
case "station_delete": 
include "delete_station_table.php"; 
break; 
case "routing_view": 
include "view_routing_table.php";
break; 
case "routing_create": 
include "create_routing_table.php"; 
break; 
case "routing_update": 
include "update_routing_table.php"; 
break; 
case "routing_delete": 
include "delete_routing_table.php"; 
break; 
case "time_view": 
include "view_time_table.php"; 
break; 
case "time_create": 
include "create_time_table.php"; 
break; 
case "time_update": 
include "update_time_table.php";
break; 
case "time_delete": 
include "delete_time_table.php"; 
break; 
case "time": 
include "trial.php";
case "viewTimeLeft": 
if(isset($_GET['message'])){ 
echo $_GET['message']; 
} 
} 
} 
?> 
<footer> <p>&copy; Copyright 2021</p>
<p>All rights are reserved!</p>
 </footer> 
</div> 
</center> 
</body> 
</html>