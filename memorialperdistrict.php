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

// Add heading
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Sum of Memorials for each Memorial per district ',0,1,'C');
$pdf->Ln(10);

// Add header
$pdf->SetFont('Arial','',8);
$pdf->Cell(35,10,'District',1);
$pdf->Cell(125,10,'Memorial',1);
$pdf->Cell(27,10,'Total Memorials',1);
$pdf->Ln();

// Check if data fetched
if ($result->num_rows > 0) {
    // Loop through fetched data and add to PDF
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(35,10,$row['District'],1);
        $pdf->Cell(125,10,$row['Memorial'],1);
        $pdf->Cell(27,10,$row['Total_Memorials'],1);
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