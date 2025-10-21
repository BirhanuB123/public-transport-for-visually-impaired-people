<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $busId = mysqli_real_escape_string($con, $_POST['busId']);
    
    $sql = "DELETE FROM busassignment WHERE BusId='$busId'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Bus assignment deleted successfully!'); window.location.href='index.php?page=bus_view';</script>";
        } else {
            echo "<script>alert('Bus ID not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

