<?php
require_once('../tcpdf/tcpdf.php');

// retrieve consultation form data from the database
$id = isset($_GET['id']) ? $_GET['id'] : '';
var_dump($id);
$host = 'localhost';
$dbname = 'consultation';
$username = 'root';
$password = "";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

$stmt = $pdo->prepare("SELECT response FROM consultation_form WHERE consultation_id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$form = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$form) {
  echo 'ERROR!.';
  exit;
}

// output the PDF data as a file

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="response_form.pdf"');
header('Content-Description: SDM-AYURVAIDYA');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
echo $form['response'];

?>
