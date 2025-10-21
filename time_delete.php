<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getDbConnection();
    
    $timeId = mysqli_real_escape_string($con, $_POST['timeId']);
    
    $sql = "DELETE FROM time_table WHERE Time_id='$timeId'";
    
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('Time table entry deleted successfully!'); window.location.href='index.php?page=time_view';</script>";
        } else {
            echo "<script>alert('Time ID not found!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
    
    mysqli_close($con);
}
?>

