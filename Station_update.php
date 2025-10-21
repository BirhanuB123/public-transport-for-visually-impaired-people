<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    $stationName = mysqli_real_escape_string($con, $_POST['stationName']);
    $latitude = mysqli_real_escape_string($con, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($con, $_POST['longitude']);
    
    $sql = "UPDATE station_information_table 
            SET Station_Name='$stationName', Latitude='$latitude', Longitude='$longitude' 
            WHERE Station_Id='$stationID'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Station updated successfully!'); window.location.href='index.php?page=station_view';</script>";
        } else {
            echo "<script>alert('No changes made or Station ID not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

