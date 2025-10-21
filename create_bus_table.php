<!DOCTYPE html> 
<html> 
<head> 
<title>HTML Forms</title> 
</head> 
<body> 
<section id="sec" style="color:#008080"> 
<h1>Insert Bus Assignment Table</h1> 
<form action="savebusassignment.php" method="POST"> 
<label for="busId">Bus ID </label> 
<input type="text" name="busId" required><br><br>
Route Number <input type="text" name="Route_number" required><br><br> 
Current Station <input type="text" name="Current_station" required><br><br> 
<input type="submit" value="Submit"> 
</form>
</section> 
</body> 
</html>
