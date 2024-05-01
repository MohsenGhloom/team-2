<?php
// Include the FPDF library
require('../fpdf/fpdf.php');

// Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "bradford");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize PDF
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

// Table headings
$headings = array('Regiment', 'Rank', 'Newspaper Name', 'Total Names');

// Print table headings
foreach ($headings as $heading) {
    $pdf->Cell(58, 10, $heading, 1);
}
$pdf->Ln();

// SQL query for Sum of names per Regiment, Rank, and Newspaper_name
$sql = "SELECT Regiment, Rank, Newspaper_name, COUNT(*) AS Total_Names 
        FROM bf_np_ref 
        GROUP BY Regiment, Rank, Newspaper_name";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Loop through the results and add data to the PDF table
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(58, 10, $row['Regiment'], 1);
        $pdf->Cell(58, 10, $row['Rank'], 1);
        $pdf->Cell(58, 10, $row['Newspaper_name'], 1);
        $pdf->Cell(58, 10, $row['Total_Names'], 1);
        $pdf->Ln(); // Move to the next line after each row
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
