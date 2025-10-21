<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $routeNumber = mysqli_real_escape_string($con, $_POST['routeNumber']);
    $pathId = mysqli_real_escape_string($con, $_POST['pathId']);
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    
    $sql = "INSERT INTO routing_table (Route_number, Path_id, Station_id) 
            VALUES ('$routeNumber', '$pathId', '$stationID')";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Route created successfully!'); window.location.href='index.php?page=routing_view';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

