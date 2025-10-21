<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $busId = mysqli_real_escape_string($con, $_POST['busId']);
    $routeNumber = mysqli_real_escape_string($con, $_POST['Route_number']);
    $currentStation = mysqli_real_escape_string($con, $_POST['Current_station']);
    
    $sql = "INSERT INTO busassignment (BusId, RoutNumber, CurrentStation) 
            VALUES ('$busId', '$routeNumber', '$currentStation')";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Bus assignment created successfully!'); window.location.href='index.php?page=bus_view';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

