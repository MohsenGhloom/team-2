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

// Initialize PDF with wider page width
$pdf = new FPDF('L', 'mm', array(297 * 2, 215 * 5)); // Double the width and height of A4 paper
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

// SQL query to select data from bf_memorials table
$sql = "SELECT surname, forename, regiment, unit, memorial, memorial_address, memorial_location, memorial_post_code, district FROM bf_memorials";
$result = $conn->query($sql);

// Function to generate table
function generateTable($pdf, $header, $data) {
    // Set font for data
    $pdf->SetFont('Arial','',12);

    // Loop through data and add to PDF
    foreach ($data as $row) {
        // Loop through row data and add to PDF
        foreach ($row as $col) {
            // Allow for multiline text in cells
            $pdf->Cell(120,20,$col,1);
        }
        // Move to next line after each row
        $pdf->Ln();
    }
}

// Extract data from result set
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array_values($row);
    }
}

// Define column names
$header = ['Surname', 'Forename', 'Regiment', 'Unit', 'Memorial', 'Memorial Address', 'Memorial Location', 'Memorial Post Code', 'District'];

// Add header row to PDF
generateTable($pdf, $header, [$header]); // Add header as a single row before the data

// Generate table body
generateTable($pdf, $header, $data); // Add data rows to the PDF table

// Close MySQL connection
$conn->close();

// Output PDF
$pdf->Output('output.pdf', 'I');
?>
