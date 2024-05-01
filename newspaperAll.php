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
$pdf = new FPDF('L', 'mm', array(297 * 2, 215 * 5)); 
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

// Table headings with adjusted widths
$headings = array(
    'ID' => 80,
    'Name' => 80,
    'Rank' => 80,
    'Age' => 80,
    'Address' => 80,
    'Regiment' => 80,
    'Comment Category' => 80,
    'Comment Date' => 80,
    'Comment Data' => 80,
    'Newspaper Name' => 80,
    'Paper Date' => 80,
    'Page/Column' => 80,
    'Photo' => 80
);

// Print table headings with adjusted widths
foreach ($headings as $heading => $width) {
    $pdf->Cell($width, 10, $heading, 1);
}

$pdf->Ln();

// SQL query to select all data from bf_np_ref table
$sql = "SELECT * FROM bf_np_ref";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Loop through the results and add data to the PDF table
    while ($row = $result->fetch_assoc()) {
        // Add each field value to the PDF
        foreach ($row as $column) {
            $pdf->Cell(80, 10, $column, 1);
        }
        // Move to the next line after each row
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
