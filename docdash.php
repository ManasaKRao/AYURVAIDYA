<?php
session_start();
if (!isset($_SESSION['doc_id'])) {
  header('Location: doclogin.php');
  exit;
}

$doc_id = $_SESSION['doc_id'];

// Retrieve consultations for this doctor
$conn = new PDO('mysql:host=localhost;dbname=consultation', 'root', '');

$sql = "SELECT * FROM consultation_form WHERE DocId = :doc_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':doc_id', $doc_id);
$stmt->execute();
$consultations = $stmt->fetchAll(PDO::FETCH_ASSOC);


/*
$pdo = new PDO('mysql:host=localhost;dbname=consultation', 'root', '');
$res = $pdo->prepare("SELECT status FROM consultation_form WHERE consultation_id = :consultation_id");
$res->bindParam(':consultation_id', $consultation_id);
$res->execute();

$status = $res->fetchColumn(); // Fetch the value of status column from the first row

// assuming $status contains the status value
if ($status == 0) {
    $buttonText = "Replied";
} else {
    $buttonText = "Reply";
}
*/




?>

<!-- HTML table to display consultations for this doctor -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<div class="container mt-5">
  <h2>Consultation Forms</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Consultation ID</th>
        <th scope="col">Date</th>
        <th scope="col">Patient ID</th>
        <th scope="col">View</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($consultations as $consultation) {
  $is_replied = $consultation['status'];
  $button_text = ($is_replied == 1) ? 'Replied' : 'Reply';
  $form_action = ($is_replied == 1) ? 'view_reply.php' : 'reply.php';
  $button_class = ($is_replied == 1) ? 'btn-success' : 'btn-primary';
?>
  <tr>
    <td><?php echo $consultation['consultation_id']; ?></td>
    <td><?php echo $consultation['Consultation_Date']; ?></td>
    <td><?php echo $consultation['patientId']; ?></td>
    <td><a href="view_pdf.php?id=<?php echo $consultation['consultation_id']; ?>" target="_blank"><button class="view-btn btn btn-primary">View</button></a></td>
    <td>
      <form action="<?php echo $form_action; ?>" method="GET">
        <input type="hidden" name="id" value="<?php echo $consultation['consultation_id']; ?>">
        <button class="btn <?php echo $button_class; ?>"><?php echo $button_text; ?></button>
      </form>
    </td>
  </tr>
<?php } ?>

    </tbody>
  </table>
</div>


