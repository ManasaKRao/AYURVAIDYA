<?php
require_once('../tcpdf/tcpdf.php');
session_start();
if (!isset($_SESSION['doc_id'])) {
  echo "Please wait!";
  exit;
}
$doc_id = $_SESSION['doc_id'];
$date =date("Y/m/d");
// connect to database using PDO
$host = 'localhost';
$dbname = 'consultation';
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
$doc_name = $pdo->prepare("SELECT username FROM doctor WHERE doctor_id = :doc_id");
$doc_name->bindParam(':doc_id', $doc_id);
$doc_name->execute();
$username = $doc_name->fetchColumn();




// Execute the query and get the result



$email = isset($_POST['email']) ? $_POST['email'] : '';
$contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : 'no number';
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '-';
$address= isset($_POST['address']) ? $_POST['address'] : '-';
$city= isset($_POST['city']) ? $_POST['city'] : '-';
$state= isset($_POST['state']) ? $_POST['state'] : '-';
$zipcode= isset($_POST['zipcode']) ? $_POST['zipcode'] : '-';
$country= isset($_POST['country']) ? $_POST['country'] : '-';
$nationality= isset($_POST['nationality']) ? $_POST['nationality'] : '-';
$dob= isset($_POST['dob']) ? $_POST['dob'] : '-';
$age= isset($_POST['age']) ? $_POST['age'] : '-';
$height= isset($_POST['height']) ? $_POST['height'] : '-';
$weight= isset($_POST['weight']) ? $_POST['weight'] : '-';
$gender= isset($_POST['gender']) ? $_POST['gender'] : '-';
if($gender==1)
{
  $gender='Female';
}
else if($gender==2)
{
  $gender='Male';
}
$maritalstatus= isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : '';
$profession= isset($_POST['profession']) ? $_POST['profession'] : '-';
$natureofwork= isset($_POST['natureofwork']) ? $_POST['natureofwork'] : '-';
$q1= isset($_POST['q1']) ? $_POST['q1'] : '-';
$q2= isset($_POST['q2']) ? $_POST['q2'] : '-';
$q3= isset($_POST['q3']) ? $_POST['q3'] : '-';
$q4= isset($_POST['q4']) ? $_POST['q4'] : '-';
$q5= isset($_POST['q5']) ? $_POST['q5'] : '-';
$q6= isset($_POST['q6']) ? $_POST['q6'] : '-';
$q7= isset($_POST['q7']) ? $_POST['q7'] : '-';
$q8= isset($_POST['q8']) ? $_POST['q8'] : '-';
$q9= isset($_POST['q9']) ? $_POST['q9'] : '-';
$q10= isset($_POST['q10']) ? $_POST['q10'] : '-';
$q11= isset($_POST['q11']) ? $_POST['q11'] : '-';
$q12= isset($_POST['q12']) ? $_POST['q12'] : '-';
$q13= isset($_POST['q13']) ? $_POST['q13'] : '-';
$q14= isset($_POST['q14']) ? $_POST['q14'] : '-';
$q15= isset($_POST['q15']) ? $_POST['q15'] : '-';
$q16= isset($_POST['q16']) ? $_POST['q16'] : '-';
$q17= isset($_POST['q17']) ? $_POST['q17'] : '-';
$q18= isset($_POST['q18']) ? $_POST['q18'] : '-';
$q19= isset($_POST['q19']) ? $_POST['q19'] : '-';
$q20= isset($_POST['q20']) ? $_POST['q20'] : '-';
$q21= isset($_POST['q21']) ? $_POST['q21'] : '-';
$q22= isset($_POST['q22']) ? $_POST['q22'] : '-';
$q23= isset($_POST['q23']) ? $_POST['q23'] : '-';
$q24= isset($_POST['q24']) ? $_POST['q24'] : '-';
$q25= isset($_POST['q25']) ? $_POST['q25'] : '-';
$q26= isset($_POST['q26']) ? $_POST['q26'] : '-';
$q27= isset($_POST['q27']) ? $_POST['q27'] : '-';
$q28= isset($_POST['q28']) ? $_POST['q28'] : '-';
$q29= isset($_POST['q29']) ? $_POST['q29'] : '-';
$q30= isset($_POST['q30']) ? $_POST['q30'] : '-';
$q31= isset($_POST['q31']) ? $_POST['q31'] : '-';
$q32= isset($_POST['q32']) ? $_POST['q32'] : '-';
$q33= isset($_POST['q33']) ? $_POST['q33'] : '-';
$q34= isset($_POST['q34']) ? $_POST['q34'] : '-';
$q35= isset($_POST['q35']) ? $_POST['q35'] : '-';
$q36= isset($_POST['q36']) ? $_POST['q36'] : '-';
$q37= isset($_POST['q37']) ? $_POST['q37'] : '-';
$q38= isset($_POST['q38']) ? $_POST['q38'] : '-';
$q39= isset($_POST['q39']) ? $_POST['q39'] : '-';
$q40= isset($_POST['q40']) ? $_POST['q40'] : '-';
$q41= isset($_POST['q41']) ? $_POST['q41'] : '-';
$q42= isset($_POST['q42']) ? $_POST['q42'] : '-';
$q43= isset($_POST['q43']) ? $_POST['q43'] : '-';
$file= isset($_POST['file']) ? $_POST['file'] : '-';
var_dump($_POST);
// create new PDF document
$pdf = new TCPDF();

// set document information
$pdf->SetCreator('My Application');
$pdf->SetAuthor('SDM AYURVAIDYA');
$pdf->SetTitle('CONSULTATION_FORM');
$pdf->SetSubject('AyurVaidya-ConsultationForm');
$pdf->SetKeywords('document, tcpdf, php');

// set default font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();

// get the contents of the HTML file
$html = '  <h1 style="text-align:center">SDM-AYURVAIDYA</h1><br><br><br><hr><table border="2" cellpadding="2" cellspacing="0" style="margin:10px">
<tr>
<td>Date:</td>
<td>' . $date.'</td>
</tr>
<tr>
<td>Doctor Name:</td>
<td>' . $username.'</td>
</tr></table>
<h2 style="text-align:center">Consultation Form</h2>
<table border="1" cellpadding="5" cellspacing="0" style="margin:auto">
<tr>
<td>Name</td>
<td>' . $fname . $lname .'</td>
</tr><tr>
    <td>Email</td>
    <td>' . $email . '</td>
  </tr>
  <tr>
  <td>Contact Number</td>
  <td>' . $contactNumber .'</td>
  </tr>
 
  <tr>
  <td>Address</td>
  <td>' . $address .'</td>
</tr>
<tr>
  <td>City</td>
  <td>'.$city.'</td>
</tr>
<tr>
  <td>State</td>
  <td>'.$state.'</td>
  </tr>
  <tr>
  <td>Pincode</td>
  <td>'.$zipcode.'</td>
  </tr>
  <tr>
  <td>Country</td>
  <td>'.$country.'</td>
  </tr>
  <tr>
  <td>Nationality</td>
  <td>'.$nationality.'</td>
  </tr>
  <tr><td>Date Of Birth</td>
  <td>'.$dob.'</td>
  </tr>
  <tr><td>Age</td>
  <td>'.$age.'</td>
  </tr>
  <tr><td>Height</td>
  <td>'.$height.'</td>
  </tr>
  <tr><td>Weight</td>
  <td>'.$weight.'</td>
  </tr>
  <tr><td>Gender</td>
  <td>'.$gender.'</td>
  </tr>
  <tr><td>Marital Status</td>
  <td>'.$maritalstatus.'</td>
  </tr>
  <tr><td>Profession</td>
  <td>'.$profession.'</td>
  </tr>
  <tr><td>Nature Of Work</td>
  <td>'.$natureofwork.'</td>
  </tr>
  <tr><td>How frequently do you need to travel</td>
  <td>'.$q1.'</td>
  </tr>
  <tr><td>How does your tongue look?</td>
  <td>'.$q2.'</td>
  </tr>
  <tr><td>Other Tongue color</td>
  <td>'.$q3.'</td>
  </tr>
  <tr><td>Present Complaints – List of Present Complaints</td>
  <td>'.$q4.'</td>
  </tr>
  <tr><td>Duration of each present complaint</td>
  <td>'.$q5.'</td>
  </tr>
  <tr><td>Details Of investigation so Far</td>
  <td>'.$q6.'</td>
  </tr>
  <tr><td>Family History of any illness?</td>
  <td>'.$q7.'</td>
  </tr>
  <tr><td>
  Current Medication with Dose, if any</td>
  <td>'.$q8.'</td>
  </tr>
  <tr><td>Allergies if any</td>
  <td>'.$q9.'</td>
  </tr>
  <tr><td>History of Previous illnesses, if any (Past Medical History)</td>
  <td>'.$q10.'</td>
  </tr>
  <tr><td>If yes, specify duration, otherwise type NO
  </td>
  <td>'.$q11.'</td>
  </tr>
  <tr><td>Please mark if you have any of the diseases down below
  </td>
  <td>'.$q12.'</td>
  </tr>
  <tr><td>Other Disease</td>
  <td>'.$q13.'</td>
  </tr>
  
  <tr><td>Bowel Habits</td>
  <td>'.$q14.'</td>
  </tr>
  <tr><td>Bowel Color</td>
  <td>'.$q15.'</td>
  </tr>
  <tr><td>Urine Quantity</td>
  <td>'.$q16.'</td>
  </tr>
  <tr><td>Urine Color</td>
  <td>'.$q17.'</td>
  </tr>
  <tr><td>Other Urine Color</td>
  <td>'.$q18.'</td>
  </tr>
  <tr><td>Appetite according to you</td>
  <td>'.$q19.'</td>
  </tr>
  <tr><td>Diet</td>
  <td>'.$q20.'</td>
  </tr>
  <tr><td>Other Diet</td>
  <td>'.$q21.'</td>
  </tr>
  <tr><td>Breakfast menu and time
  </td>
  <td>'.$q22.'</td>
  </tr>
  <tr><td>Lunch menu and time
  </td>
  <td>'.$q23.'</td>
  </tr>
  <tr><td>Dinner menu and time
  </td>
  <td>'.$q24.'</td>
  </tr>
 
  <tr><td>Habits If any</td>
  <td>'.$q25.'</td>
  </tr>
  <tr><td>Other Habits</td>
  <td>'.$q26.'</td>
  </tr>
  <tr><td>Have you been infected with Covid-19 before?</td>
  <td>'.$q27.'</td>
  </tr>
  <tr><td>If yes, what were the symptoms you had?
  </td>
  <td>'.$q28.'</td>
  </tr>
  <tr><td>Were you hospitalized due to Covid-19?</td>
  <td>'.$q29.'</td>
  </tr>
  <tr><td>Are you suffering from any post Covid-19 complications?  </td>
  <td>'.$q30.'</td>
  </tr>
  <tr><td>If yes, please elaborate</td>
  <td>'.$q31.'</td>
  </tr>
  <tr><td>Which of the Following describes your Menstruation?
  </td>
  <td>'.$q32.'</td>
  </tr>
  <tr><td>If yes, what were the symptoms you had?
  </td>
  <td>'.$q33.'</td>
  </tr>
  <tr><td>How many days does your menstruation last?
  </td>
  <td>'.$q34.'</td>
  </tr>
  <tr><td>Associated Symptoms Before or During Menstruation
  </td>
  <td>'.$q35.'</td>
  </tr>
  <tr><td>Any Vaginal Discharge?
  </td>
  <td>'.$q36.'</td>
  </tr>
  <tr><td>If there is a vaginal discharge, please describe any other observations with it
  </td>
  <td>'.$q37.'</td>
  </tr>
  <tr><td>Are You Pregnant Now?
  </td>
  <td>'.$q38.'</td>
  </tr>
  <tr><td>Do you use any Birth Control measures?
  </td>
  <td>'.$q39.'</td>
  </tr>
  <tr><td>If yes, please describe
  </td>
  <td>'.$q40.'</td>
  </tr>
  <tr><td>Number of Previous Pregnancies if any
  </td>
  <td>'.$q41.'</td>
  </tr>
  <tr><td>Describe Previous Pregnancies if any – How was the delivery done? Any abnormality? any other History
  </td>
  <td>'.$q42.'</td>
  </tr>
  <tr><td>Please add more information if you would like to add about your Disease/Problems
  </td>
  <td>'.$q43.'</td>
 
  </tr>

  
 </table><p>Selected image/file: </p>';


// check if a file was uploaded


// write HTML content to the PDF
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Image($file, 20, 50);

$pdfData = $pdf->Output('consultation.pdf', 'S'); // store PDF data in a variable

$host = 'localhost';
$dbname = 'consultation';
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

// insert consultation details and PDF data into database
$stmt = $pdo->prepare("INSERT INTO consultation_form (DocId, Consultation_Date, patientId, consultation_form) VALUES (:doc_id, :date, :patient_id, :file_data)");

$stmt->bindParam(':doc_id', $doc_id, PDO::PARAM_INT);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);
$stmt->bindParam(':patient_id', $patient_id, PDO::PARAM_STR);
$stmt->bindParam(':file_data', $pdfData, PDO::PARAM_LOB);
$stmt->execute();
header('Location: payscript.php');
exit();
?>
