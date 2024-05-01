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
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

// SQL query to get the sum of burials per cemetery and date of death
$sql = "SELECT cemetery, date_of_death, COUNT(*) AS total_burials 
        FROM bf_buried 
        GROUP BY cemetery, date_of_death";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Add headers to the PDF table
    $pdf->Cell(100, 10, 'Cemetery', 1);
    $pdf->Cell(50, 10, 'Date of Death', 1);
    $pdf->Cell(40, 10, 'Total Burials', 1);
    $pdf->Ln();

    // Loop through the results and add data to the PDF table
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(100, 10, $row['cemetery'], 1);
        $pdf->Cell(50, 10, $row['date_of_death'], 1);
        $pdf->Cell(40, 10, $row['total_burials'], 1);
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
