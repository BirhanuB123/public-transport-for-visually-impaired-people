<!DOCTYPE html> 
<html> 
<head> 
<title>HTML Forms</title> 
</head> 
<body> 
<section id="sec" style="color:#008080"> 
<h1>Insert Time Table</h1> 
<form action="savetimetable.php" method="POST"> 
<label for="routeNumber">Route Number </label> 
<input type="text" name="routeNumber" required><br><br> 
Station ID <input type="text" name="stationID" required><br><br> 
Arrival Time <input type="time" name="arrivalTime" required><br><br> 
Departure Time <input type="time" name="departureTime" required><br><br> 
Day of Week 
<select name="dayOfWeek" required>
<option value="">Select Day</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
</select><br><br>
<input type="submit" value="Submit"> 
</form>
</section>
</body> 
</html>

