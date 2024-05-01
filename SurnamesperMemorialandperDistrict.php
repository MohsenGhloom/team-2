<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the FPDF library
require('../fpdf/fpdf.php');

// Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "bradford");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT District, Memorial, COUNT(*) AS Total_Memorials
        FROM bf_memorials
        GROUP BY District, Memorial";

// Execute query
$result = $conn->query($sql);

// Initialize PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);



$pdf->SetFont('Arial','b',14);
$pdf->Cell(0,30,'Sum of Surnames per Memorial and per District',0,1,'C');
$pdf->Ln(10);


$pdf->SetFont('Arial','',8);
$pdf->Cell(20,10,'District',1);
$pdf->Cell(120,10,'Memorial',1);
$pdf->Cell(25,10,'Surname',1);
$pdf->Cell(27,10,'Total Memorials',1);
$pdf->Ln();

$sql2 = "SELECT District, Memorial, Surname, COUNT(*) AS Total_Surnames
FROM bf_memorials
GROUP BY District, Memorial, Surname";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // Loop through fetched data and add to PDF
    while ($row = $result2->fetch_assoc()) {
        $pdf->Cell(20,10,$row['District'],1);
        $pdf->Cell(120,10,$row['Memorial'],1);
        $pdf->Cell(25,10,$row['Surname'],1);
        $pdf->Cell(27,10,$row['Total_Surnames'],1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No data found', 0, 1);
}

// Close MySQL connection
$conn->close();

// Output PDF
$pdf->Output('output.pdf', 'I');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>