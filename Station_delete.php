<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $stationID = mysqli_real_escape_string($con, $_POST['stationID']);
    
    $sql = "DELETE FROM station_information_table WHERE Station_Id='$stationID'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Station deleted successfully!'); window.location.href='index.php?page=station_view';</script>";
        } else {
            echo "<script>alert('Station ID not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

