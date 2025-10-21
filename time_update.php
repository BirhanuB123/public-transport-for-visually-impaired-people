<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $timeId = mysqli_real_escape_string($con, $_POST['timeId']);
    $routeNumber = mysqli_real_escape_string($con, $_POST['routeNumber']);
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    $arrivalTime = mysqli_real_escape_string($con, $_POST['arrivalTime']);
    $departureTime = mysqli_real_escape_string($con, $_POST['departureTime']);
    $dayOfWeek = mysqli_real_escape_string($con, $_POST['dayOfWeek']);
    
    $sql = "UPDATE time_table 
            SET Route_number='$routeNumber', Station_id='$stationID', 
                Arrival_time='$arrivalTime', Departure_time='$departureTime', 
                Day_of_week='$dayOfWeek' 
            WHERE Time_id='$timeId'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Time table updated successfully!'); window.location.href='index.php?page=time_view';</script>";
        } else {
            echo "<script>alert('No changes made or Time ID not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

