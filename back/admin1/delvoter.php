<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$vid = $_GET['vid'];

$sql = "DELETE FROM voter WHERE vid=".$vid;

if (mysqli_query($conn, $sql)) {
    echo "<h1 style='font-size:70px; font-weight:bold;'>Voter has been successfully deleted</h1>";
    echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_votermanage.php'>";
} else {
    
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

