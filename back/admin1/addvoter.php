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
$vname= ucwords(strtolower($_POST['vname']));
$vbirth=$_POST['vbirth'];
$vgender=ucfirst(strtolower($_POST['vgender']));
$vphone=$_POST['vphone'];
$vyear=$_POST['vyear'];
$vemail=$_POST['vemail'];

$sql = "INSERT INTO voter (vname,vbirth,vgender,vphone,vyear,vemail) VALUES ('$vname','$vbirth','$vgender','$vphone','$vyear','$vemail')";

   
if (mysqli_query($conn, $sql)) {
$sql1= "select max(vid) as mvid from voter";
   $sql2=mysqli_query($conn, $sql1);     
  $row = mysqli_fetch_assoc($sql2);
       echo "<h1 style='font-size:70px; font-weight:bold;'>New voter added successfully : ".$row["mvid"]."</h1>";
       echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_addvoter.php'>";
} else {
    echo "Record not created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

