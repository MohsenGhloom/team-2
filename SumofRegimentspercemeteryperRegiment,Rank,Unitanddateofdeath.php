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

// Initialize PDF
$pdf = new FPDF('L', 'mm', array(107 * 2, 215 * 2));
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

// SQL query to get the sum of regiments per cemetery per regiment, rank, unit, and date of death
$sql = "SELECT cemetery, regiment, rank, unit, date_of_death, COUNT(*) AS total_regiments 
        FROM bf_buried 
        GROUP BY cemetery, regiment, rank, unit, date_of_death";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Add headers to the PDF table
    $pdf->Cell(80, 10, 'Cemetery', 1);
    $pdf->Cell(80, 10, 'Regiment', 1);
    $pdf->Cell(40, 10, 'Rank', 1);
    $pdf->Cell(60, 10, 'Unit', 1);
    $pdf->Cell(40, 10, 'Date of Death', 1);
    $pdf->Cell(30, 10, 'Total Regiments', 1);
    $pdf->Ln();

    // Loop through the results and add data to the PDF table
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(80, 10, $row['cemetery'], 1);
        $pdf->Cell(80, 10, $row['regiment'], 1);
        $pdf->Cell(40, 10, $row['rank'], 1);
        $pdf->Cell(60, 10, $row['unit'], 1);
        $pdf->Cell(40, 10, $row['date_of_death'], 1);
        $pdf->Cell(30, 10, $row['total_regiments'], 1);
        $pdf->Ln();
    }
} else {
    // If no results, display a message
    $pdf->Cell(0, 10, 'No data found', 0, 1, 'C');
}

// Close MySQL connection
$conn->close();

// Output PDF
$pdf->Output('output.pdf', 'I');
?>
