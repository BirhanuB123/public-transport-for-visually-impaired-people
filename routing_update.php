<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $routeNumber = mysqli_real_escape_string($con, $_POST['routeNumber']);
    $pathId = mysqli_real_escape_string($con, $_POST['pathId']);
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    
    // Since routing table has composite primary key, we need old values to update
    // For simplicity, we'll update based on route number
    $sql = "UPDATE routing_table 
            SET Path_id='$pathId', Station_id='$stationID' 
            WHERE Route_number='$routeNumber'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Route updated successfully!'); window.location.href='index.php?page=routing_view';</script>";
        } else {
            echo "<script>alert('No changes made or Route not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

