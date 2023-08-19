<!DOCTYPE html>
<html>
<head>
	<title>Patient Registration Form</title>
    <style>
        form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

label {
  margin-top: 20px;
  font-size: 18px;
}

input {
  margin-top: 5px;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 18px;
  border-radius: 5px;
  border: none;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

    </style>
</head>
<body>
	<h1>Patient Registration Form</h1>
	<form method="post" action="register.php">
		<label for="username">Username:</label>
		<input type="text" name="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" name="confirm_password" required><br><br>
		<label for="code">Code:</label>
		<input type="text" name="code" required readonly><br><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>
