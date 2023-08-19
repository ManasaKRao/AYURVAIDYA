<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  label {
    display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  height: 40vh;
}

input[type="text"] {
  display: block;
  margin: 0 auto;
  text-align: center;
  font-size: 32px;
  width: 300px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}


span {
    display: block;
  text-align: center;
  font-size: 24px;
  margin-bottom: 10px;
  color: #666;
}

        </style>
</head>
<body>

<?php
@include 'C:\xampp\htdocs\AYURVAIDYA\login system\config.php';

$code = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'), 0, 6);
$host = 'localhost';
$dbname = 'consultation';
$uname = 'root';
$pswd = '';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $pdo = new PDO($dsn, $uname, $pswd, $options);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

$username = $_POST['username'];
$password = $_POST['password'];
$cpassword=$_POST['confirm-password'];
$select = " SELECT * FROM doctor WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($password != $cpassword){
         $error[] = 'password not matched!';
      }else{
        $dummy=1;
         $insert = "INSERT INTO doctor (username,  password, code) VALUES('$username', '$password',' $code')";
         mysqli_query($conn, $insert);
         $doctor_id = $pdo->lastInsertId();

        // Concatenate doctor_id and code
        $doc_code = $doctor_id . '-' . $code;

        // Update the doctor record with the concatenated code
        $stmt = $pdo->prepare("UPDATE doctor SET code = ? WHERE doctor_id = ?");
        $stmt->execute([$doc_code, $doctor_id]);
         header('location:login_form.php');
      }
   }
//$stmt = $pdo->prepare("INSERT INTO doctor (username, password, code) VALUES (?, ?, ?)");
//$stmt->execute([$username, $password, $code]);

// Get the auto-generated doctor_id
?>
<label for="code">Code:</label>
  <input type="text" id="code" name="code"  value="<?php echo $doc_code; ?>" readonly disabled><br>
  <span>please make a note of this code and enter it every time you log in</span><br>
</body>
</html>
