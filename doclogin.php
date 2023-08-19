
<?php
session_start();
if (isset($_SESSION['doc_id'])) {
  header('Location: docdash.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $code = $_POST['code'];

  // Validate form data
  // ...

  // Check if doctor exists and credentials are valid
  $conn = mysqli_connect('localhost', 'root', '', 'consultation');
  $sql = "SELECT doctor_id FROM doctor WHERE username = '$username' AND password = '$password' AND code = '$code'";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $doc_id = $row['doctor_id'];

    // Set cookie with doctor ID
    setcookie('doc_id', $doc_id, time()+3600, '/');

    // Set session variable with doctor ID
    $_SESSION['doc_id'] = $doc_id;
    $error=' ';
    // Redirect to doctor dashboard
    header('Location: docdashmain.php');
    exit();
  } else {
      $error = 'Invalid username,password or code';
  }

  mysqli_close($conn);
}
?>

<!-- HTML form for doctor login -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    #error {
  color: red;
  font-size: 18px;
  font-family: 'Open Sans', sans-serif;
  margin-top: 5px;
  text-align: center;
}
  </style>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Login</h4>
					</div>
					<div class="card-body">
          
          <form method="post">
							<div class="form-group">
              <div  id="error"><?php if (isset($error)) { echo $error; }
              else { echo "";} ?></div>
								<label for="username">Username:</label>
								<input type="text" class="form-control" name="username" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<div class="form-group">
								<label for="code">Code:</label>
								<input type="text" class="form-control" name="code" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

