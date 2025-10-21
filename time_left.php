<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $routeNumber = mysqli_real_escape_string($con, $_POST['routeNumber']);
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    
    // Get current day of week
    $currentDay = date('l');
    $currentTime = date('H:i:s');
    
    // Query to find the next arrival time for this route and station
    $sql = "SELECT tt.Arrival_time, tt.Departure_time, ba.BusId, ba.CurrentStation, si.Station_Name
            FROM time_table tt
            LEFT JOIN busassignment ba ON ba.RoutNumber = tt.Route_number
            LEFT JOIN station_information_table si ON si.Station_Id = ba.CurrentStation
            WHERE tt.Route_number = '$routeNumber' 
            AND tt.Station_id = '$stationID' 
            AND tt.Day_of_week = '$currentDay'
            AND tt.Arrival_time >= '$currentTime'
            ORDER BY tt.Arrival_time ASC
            LIMIT 1";
    
    $result = mysqli_query($con, $sql);
    
    echo "<!DOCTYPE html>
    <html>
    <head>
    <title>Time Left Information</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .info-box { 
            background-color: #f0f0f0; 
            padding: 20px; 
            border-radius: 10px; 
            margin: 10px 0;
            border: 2px solid #008080;
        }
        h2 { color: #008080; }
        .time-display { font-size: 24px; font-weight: bold; color: #008080; }
        .back-btn { 
            background-color: #008080; 
            color: white; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
    </head>
    <body>
    <h2>Bus Arrival Information</h2>";
    
    if ($row = mysqli_fetch_array($result)) {
        $arrivalTime = $row['Arrival_time'];
        $departureTime = $row['Departure_time'];
        $busId = $row['BusId'] ? $row['BusId'] : 'N/A';
        $currentStation = $row['Station_Name'] ? $row['Station_Name'] : 'N/A';
        
        // Calculate time difference
        $current = new DateTime($currentTime);
        $arrival = new DateTime($arrivalTime);
        $diff = $current->diff($arrival);
        
        $hours = $diff->h;
        $minutes = $diff->i;
        
        echo "<div class='info-box'>
                <p><strong>Route Number:</strong> $routeNumber</p>
                <p><strong>Station ID:</strong> $stationID</p>
                <p><strong>Day:</strong> $currentDay</p>
                <p><strong>Current Time:</strong> $currentTime</p>
                <p><strong>Expected Arrival Time:</strong> $arrivalTime</p>
                <p><strong>Expected Departure Time:</strong> $departureTime</p>
                <p class='time-display'>Time Until Arrival: $hours hours and $minutes minutes</p>
                <p><strong>Bus ID:</strong> $busId</p>
                <p><strong>Bus Current Location:</strong> $currentStation</p>
              </div>";
    } else {
        echo "<div class='info-box'>
                <p style='color: red;'>No scheduled buses found for Route $routeNumber at Station $stationID today ($currentDay).</p>
                <p>Please check the schedule or try again later.</p>
              </div>";
    }
    
    echo "<a href='index.php?page=time' class='back-btn'>Back to Request Time</a>";
    echo "</body></html>";
    
    mysqli_close($con);
}
?>

