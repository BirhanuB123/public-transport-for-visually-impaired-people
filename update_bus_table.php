<!DOCTYPE html> 
<html> 
<head>
<title>HTML Forms</title>
</head> 
<body> 
<section id="sec" style="color:#008080"> 
<h1>Update Bus Assignment Table</h1> 
<form action="Bus_update.php" method="GET"> 
<label for="busId">Bus ID</label> 
<input type="text" name="busId" required><br><br> 
Route Number <input type="text" name="routeNumber" required><br><br> 
Current Station <input type="text" name="currentStation" required><br><br> 
<input type="submit" value="Update"> 
</form>
</section> 
</body> 
</html>