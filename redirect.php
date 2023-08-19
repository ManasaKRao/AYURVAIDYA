<?php
session_start(); 

if(isset($_SESSION['doc_id'])) { 
  header('Location: CONSULTATION_FORM.php');
} else {
  
  echo '<div style="display: flex;text-align:center; justify-content: center; align-items: center; height: 20vh; font-weight:bolder;font-size:40px;"><p>Sorry, the doctor is currently unavailable.</p></div>';
  echo '<div style="display: flex;text-align:center; justify-content: center; height: 20vh; font-weight:bold;font-size:30px;"><br><p>Please wait a few moments for the doctor to log in and begin accepting consultations.</p></div>';
  echo '<div style="display: flex;text-align:center; justify-content: center; align-items: center; height: 20vh; font-weight:bolder;font-size:40px;"><br><p>Thank you for your patience.</p></div>';
}
?>
