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
    
require('../../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();


//code for print data
$cid = $_GET['cid'];    
$sql = "SELECT * FROM candidate c JOIN voter v ON c.vid=v.vid JOIN election e ON c.eid=e.eid where cid=".$cid;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
 $pdf->SetFont('Arial','',16);  
 
 $pdf->Cell(50,5,"Candidate ID",1,0);
 $pdf->Cell(50,5,":  ".$row['cid'],1,1);
  
 $pdf->Ln(4); 
 
 $pdf->Cell(50,5,"Candidate Name",1,0);
 $pdf->Cell(50,5,":  ".$row['vname'],1,1);
 
$pdf->Ln(4); 
 
 $pdf->Cell(50,5,"Candidate Name",1,0);
 $pdf->Cell(50,5,":  ".$row['vname'],1,1);


$pdf->Output();
?>