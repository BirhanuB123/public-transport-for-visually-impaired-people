<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $routeNumber = mysqli_real_escape_string($con, $_POST['routeNumber']);
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    $arrivalTime = mysqli_real_escape_string($con, $_POST['arrivalTime']);
    $departureTime = mysqli_real_escape_string($con, $_POST['departureTime']);
    $dayOfWeek = mysqli_real_escape_string($con, $_POST['dayOfWeek']);
    
    $sql = "INSERT INTO time_table (Route_number, Station_id, Arrival_time, Departure_time, Day_of_week) 
            VALUES ('$routeNumber', '$stationID', '$arrivalTime', '$departureTime', '$dayOfWeek')";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Time table entry created successfully!'); window.location.href='index.php?page=time_view';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

