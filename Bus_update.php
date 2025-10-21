<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $con = getDbConnection();
    
    $busId = mysqli_real_escape_string($con, $_GET['busId']);
    $routeNumber = mysqli_real_escape_string($con, $_GET['routeNumber']);
    $currentStation = mysqli_real_escape_string($con, $_GET['currentStation']);
    
    $sql = "UPDATE busassignment 
            SET RoutNumber='$routeNumber', CurrentStation='$currentStation' 
            WHERE BusId='$busId'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Bus assignment updated successfully!'); window.location.href='index.php?page=bus_view';</script>";
        } else {
            echo "<script>alert('No changes made or Bus ID not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

