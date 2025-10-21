<!DOCTYPE html> 
<html> 
<head> 
<title>HTML Forms</title> 
</head> 
<body> 
<section id="sec" style="color:#008080"> 
<h1>Insert Routing Table</h1> 
<form action="saveroutingtable.php" method="POST"> 
<label for="routeNumber">Route Number </label> 
<input type="text" name="routeNumber" required><br><br> 
Path ID <input type="text" name="pathId" required><br><br> 
Station ID <input type="text" name="stationID" required><br><br> 
<input type="submit" value="Submit"> 
</form>
</section> 
</body> 
</html>