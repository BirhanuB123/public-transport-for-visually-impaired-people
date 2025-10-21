<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    $stationName = mysqli_real_escape_string($con, $_POST['stationName']);
    $latitude = mysqli_real_escape_string($con, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($con, $_POST['longitude']);
    
    $sql = "INSERT INTO station_information_table (Station_Id, Station_Name, Latitude, Longitude) 
            VALUES ('$stationID', '$stationName', '$latitude', '$longitude')";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Station created successfully!'); window.location.href='index.php?page=station_view';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

