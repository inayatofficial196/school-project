<?php
include ('Connection.php');
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM marquee WHERE id='$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: Admin-Marquee.php"); 
    exit();
}
?>