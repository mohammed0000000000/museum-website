<?php
require_once('../TCPDF-main/tcpdf.php');

function generateReport()
{
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "museumdb";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the exhibition table
    $exhibitionSql = "SELECT * FROM exhibitions";
    $exhibitionResult = $conn->query($exhibitionSql);

    // Fetch data from the gallery table
    $gallerySql = "SELECT * FROM gallery";
    $galleryResult = $conn->query($gallerySql);

    // Fetch data from the ticket table
    $ticketSql = "SELECT * FROM ticket";
    $ticketResult = $conn->query($ticketSql);

    // Create a new PDF document
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // Set the document properties
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Exhibition Report');
    $pdf->SetSubject('Exhibition Report');
    $pdf->SetKeywords('Exhibition, Report');

    // Add a new page to the PDF
    $pdf->AddPage();

    // Set the font and font size
    $pdf->SetFont('helvetica', '', 12);

    // Check if any records were found in the exhibition table
    if ($exhibitionResult->num_rows > 0) {
        $pdf->Write(0, "Exhibition Data:", '', 0, 'L', true);

        // Append the fetched exhibition data to the PDF
        while ($row = $exhibitionResult->fetch_assoc()) {
            $pdf->Write(0, "ID: " . $row["ID"], '', 0, 'L', true);
            $pdf->Write(0, "Name: " . $row["NAME"], '', 0, 'L', true);
            $pdf->Write(0, "Info: " . $row["INFO"], '', 0, 'L', true);
            $pdf->Write(0, "Exhibition Date: " . $row["exhibiDATE"], '', 0, 'L', true);
            $pdf->Ln();
        }
    } else {
        $pdf->Write(0, "No records found in the exhibition table.", '', 0, 'L', true);
    }

    // Check if any records were found in the gallery table
    if ($galleryResult->num_rows > 0) {
        $pdf->Write(0, "Gallery Data:", '', 0, 'L', true);

        // Append the fetched gallery data to the PDF
        while ($row = $galleryResult->fetch_assoc()) {
            $pdf->Write(0, "ID: " . $row["id"], '', 0, 'L', true);
            $pdf->Write(0, "Name: " . $row["name"], '', 0, 'L', true);
            $pdf->Write(0, "Info: " . $row["info"], '', 0, 'L', true);
            $pdf->Write(0, "Source: " . $row["src"], '', 0, 'L', true);
            $pdf->Ln();
        }
    } else {
        $pdf->Write(0, "No records found in the gallery table.", '', 0, 'L', true);
    }

    // Check if any records were found in the ticket table
    if ($ticketResult->num_rows > 0) {
        $pdf->Write(0, "Ticket Data:", '', 0, 'L', true);

        // Append the fetched ticket data to the PDF
        while ($row = $ticketResult->fetch_assoc()) {
            $pdf->Write(0, "Title: " . $row["TITLE"], '', 0, 'L', true);
            $pdf->Write(0, "Price: " . $row["PRICE"], '', 0, 'L', true);
            $pdf->Write(0, "Expiration Date: " . $row["EXPDATE"], '', 0, 'L', true);
            $pdf->Ln();
        }
    } else {
        $pdf->Write(0, "No records found in the ticket table.", '', 0, 'L', true);
    }

    // Close the database connection
    $conn->close();

    // Output the PDF as a download
    $pdf->Output('exhibition_report.pdf', 'D');
}
generateReport();
?>