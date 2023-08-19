<!DOCTYPE html>
<html>
<head>
	<title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 50px;
		}
		h1 {
			font-size: 36px;
			margin-bottom: 30px;
		}
		.btn {
			margin-right: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
    <?php
   session_start();
   $doc_id = $_SESSION['doc_id'];
   
   // Retrieve doctor's username using PDO
   $conn = new PDO('mysql:host=localhost;dbname=consultation', 'root', '');
   $sql = "SELECT username FROM doctor WHERE doctor_id = :doc_id";
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(':doc_id', $doc_id);
   $stmt->execute();
   $doc = $stmt->fetch();
   $docname = $doc['username'];
   
  
?>   

<br>	
<div class="container">
		<h1>Welcome, <?php echo $docname; ?>!</h1>
		<div class="btn-group">
			<a href="docdash.php" class="btn btn-primary">View Consultations</a>
	
			<a href="logout.php" class="btn btn-danger">Logout</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



