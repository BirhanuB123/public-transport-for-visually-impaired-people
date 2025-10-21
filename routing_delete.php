<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $routeNumber = mysqli_real_escape_string($con, $_POST['routeNumber']);
    
    $sql = "DELETE FROM routing_table WHERE Route_number='$routeNumber'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Route deleted successfully!'); window.location.href='index.php?page=routing_view';</script>";
        } else {
            echo "<script>alert('Route number not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

