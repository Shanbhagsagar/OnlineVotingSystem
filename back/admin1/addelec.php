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
$etitle=$_POST['etitle'];
$estart=$_POST['estart'];
$eend=$_POST['eend'];


$sql = "INSERT INTO election (etitle,estart,eend) VALUES ('$etitle','$estart','$eend')";

if (mysqli_query($conn, $sql)) {
    echo "<h1 style='font-size:70px; font-weight:bold;'>New election added successfully</h1>";
    echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_addelec.php'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

