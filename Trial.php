<!DOCTYPE html> 
<html> 
<head> 
<title>Request Bus Arrival Time</title>
<style>
body {
    font-family: Arial, sans-serif;
}
.form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
}
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #008080;
}
.form-group input, .form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.submit-btn {
    background-color: #008080;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}
.submit-btn:hover {
    background-color: #006666;
}
</style>
</head> 
<body>
<div class="form-container">
    <section id="sec" style="color:#008080"> 
        <h1>Request Bus Arrival Time</h1>
        <p>Enter the route number and station ID to find out when the next bus will arrive.</p>
        
        <form action="time_left.php" method="POST"> 
            <div class="form-group">
                <label for="routeNumber">Route Number</label> 
                <input type="text" name="routeNumber" id="routeNumber" required 
                       placeholder="e.g., R001">
            </div>
            
            <div class="form-group">
                <label for="stationID">Station ID</label>
                <input type="text" name="stationID" id="stationID" required
                       placeholder="e.g., ST001">
            </div>
            
            <input type="submit" value="Get Arrival Time" class="submit-btn">
        </form>
        
        <div style="margin-top: 20px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;">
            <p style="margin: 5px 0; font-size: 14px;"><strong>Tip:</strong> You can view available routes and stations from the menu above.</p>
        </div>
    </section>
</div>
</body> 
</html>
