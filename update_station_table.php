<!DOCTYPE html> 
<html> 
<head> 
<title>HTML Forms</title> 
</head> 
<body> 
<section id="sec" style="color:#008080"> 
<h1>Update Station Assignment Table</h1> 
<form action="Station_update.php" method="POST"> 
<label for="stationID">Station ID</label> 
<input type="text" name="stationID" required><br><br> 
Station Name <input type="text" name="stationName" required><br><br> 
Latitude <input type="text" name="latitude" required><br><br> 
Longitude <input type="text" name="longitude" required><br><br> 
<input type="submit" value="Update">
</form>
</section> 
</body> 
</html>