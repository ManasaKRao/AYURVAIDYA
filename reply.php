<?php
require_once('../tcpdf/tcpdf.php');

// Get the consultation ID from the URL
$consultation_id = isset($_GET['id']) ? $_GET['id'] : '';

// Fetch the patient details from the database
$dsn = "mysql:host=localhost;dbname=consultation";
$username = "root";
$password = "";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $pdo->prepare("SELECT * FROM consultation_form WHERE consultation_id = :consultation_id");
$stmt->bindParam(':consultation_id', $consultation_id);
$stmt->execute();
$patient = $stmt->fetch(PDO::FETCH_ASSOC);

// If the form was submitted, generate and save the PDF
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $observation = $_POST['response'];

    // Set up the PDF object
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Doctor');
    $pdf->SetTitle('AYURVAIDYA-Response');
    $pdf->SetSubject('Consultation Form Response');
    $pdf->SetKeywords('Consultation, Response, Form');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    
    // Add a page
    $pdf->AddPage();
    
    // Add the title to the PDF
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Consultation Form Response', 0, 1, 'C');
    
    // Add the observation text to the PDF
    $pdf->SetFont('helvetica', '', 12);
    $pdf->MultiCell(0, 10, $observation, 0, 'L', 0, 1, '', '', true);
    
    // Output the PDF as a string with the title
    $pdfString = $pdf->Output('Consultation Form Response.pdf', 'S');
    

    // Save the PDF to the database
    $stmt = $pdo->prepare("UPDATE consultation_form SET response = :response, status = 1 WHERE consultation_id = :consultation_id");
    $stmt->bindParam(':response', $pdfString, PDO::PARAM_LOB);
    $stmt->bindParam(':consultation_id', $consultation_id);
    $stmt->execute();
    
    // Redirect back to the consultation forms page
  
   header('Location:docdash.php');
exit;
}
?>
<head>
    <style>
        form {
  margin: 20px 0;
  padding: 20px;
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
}

textarea {
  display: block;
  width: 100%;
  height: 150px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: vertical;
  font-size: 16px;
}

input[type="submit"] {
  display: block;
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
h2{
    text-align: center;
}
        </style>
</head>
<!-- Display the patient details -->

<!-- Display the form to enter the observation -->
<form method="post">
    <h2>SDM AYURVAIDYA</h2>
    <form method="post">
    <label for="response">Observation:</label>
    <textarea name="response" id="response"></textarea>
    <input type="submit" name="submit_response" value="Submit">
</form>

</form>
<script>
    
</script>





