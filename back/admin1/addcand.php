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
$vid = $_REQUEST['vid'];
$eid = $_REQUEST['eid'];
$pos = $_REQUEST['pos'];


$sql = "select * from voter where vid=".$vid;

$sql1 = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($sql1);

if ($vid == $row["vid"]) {


    $sql2 = "INSERT INTO candidate(vid,eid,pos) VALUES('$vid','$eid','$pos')";

    if (mysqli_query($conn, $sql2)) {
        echo "<h1 style='font-size:70px; font-weight:bold;'>Candidiate added successfully</h1>";
        echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_addcand.php'>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($vid != $row["vid"]) {
  echo "<h1 style='font-size:70px; font-weight:bold;'>Voter Not Found : " . $vid . "</h1>";
    echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_addcand.php'>";
    
}

mysqli_close($conn);
?>

