
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
/* Form styles */
h2{
	color: orange;
}
h1{
	color: orange;
margin: 0 auto;
text-align: center;
}
form {
  max-width: 900px;
  margin: 0 auto;
  background-color: #f3f1d3;
  padding: 20px;
  box-shadow: 0px 0px 5px rgba(240, 210, 112, 0.1);
  border-radius: 5px;
}
form table{
	margin: 0 auto;
	width: 100%;
}
td{
  padding-right: 50px;
  padding-top: 10px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #444;
  margin-bottom: 10px;
}
.form-group input {
  margin-bottom: 10px;
}
select {
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin: 10px 0;
  width: 100%;
}

.form-group input, 
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  color: #555;
}

.form-group input:focus, 
.form-group textarea:focus {
  border-color: #008cba;
  outline: none;
}

.form-group input[type="submit"] {
  background-color: #008cba;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  padding: 10px 20px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.form-group input[type="submit"]:hover {
  background-color: #0077aa;
}


sup{
	color: red;
}
button{
	height: 40px;
	width: 200px;
	background-color: orange;
	border: none;

}
button:hover{
	background-color: darkorange;
}
	</style>
</head>
<body>

	<form method="POST" action="mail.php">

		<h1>AYURVAIDYA-ONLINE CONSULTATION FORM</h1>
		<h2>Section For Personal & Medical Details</h2>
			<div class="form-group">
				<table>
					<tr>
						<td><label for="email">Email<sup>*</sup></label>
							<input type="text" name="email" class="email" id="email" required></td>
						<td><label for="contactNumber">Contact Number<sup>*</sup></label>
							<input type="text" name="contactNumber" class="contactNumber" id="contactNumber" required></td>
					</tr>
				</table>
			</div>

			<div class="form-group">
				<table>
					<tr>
						<td><label for="fname">First Name<sup>*</sup></label>
							<input type="text" name="fname" id="fname" required>
						</td>
						<td><label for="lname">Last Name<sup>*</sup></label>
							<input type="text" name="lname" id="lname" required></td>
					</tr>
				</table>
			</div>

			<div  class="form-group">
				<table>
					<tr>
						<td>	<label for="address">Address<sup>*</sup></label>
							<input type="text" name="address" id="address" required>
						</td>
						<td><label for="city">City/Town<sup>*</sup></label>
							<input type="text" name="city" id="city" required></td>

							
					</tr>
				</table>
			</div>
			
			<div class="form-group">
				<table>
					<tr>
						<td><label for="state">State<sup>*</sup></label>
							<input type="text" name="state" id="state" required>
						</td>
						<td><label for="zipcode">Zip Code<sup>*</sup></label>
							<input type="text" name="zipcode" id="zipcode" required></td>
					</tr>
				</table>
			</div>

			<div class="form-group">
				<table>
					<tr>
						<td><label for="country">Country<sup>*</sup></label>
							<input type="text" name="country" id="country" required>
						</td>
						<td><label for="Nationality">Nationality<sup>*</sup></label>
							<input type="text" name="nationality" id="nationality" required></td>
					</tr>
				</table>
			</div>

			<div class="form-group">
				<table>
					<tr>
						<td><label for="dob">Date Of Birth<sup>*</sup></label>
							<input type="text" name="dob" id="dob" required>
						
						</td>
						<td>
							<label for="age">Age<sup>*</sup></label>
							<input type="text" name="age" id="age" required>
						</td>
						<td><label for="height">Height<sup>*</sup></label>
							<input type="text" name="height" id="height" required>
						</td>
						<td><label for="weight">Weight<sup>*</sup></label>
							<input type="text" name="weight" id="weight" required>
						</td>
					</tr>
				</table>
			</div>


			<div class="form-group">
				<table>
					<tr>
						<td><label for="gender">Gender<sup>*</sup></label>
							<select name="gender">
								<option>Select</option>
								<option value="-1"></option>
								<option value="1">Female</option>
								<option value="2">Male</option>
							</select></td>
						<td><label for="maritalstatus">Marital Status<sup>*</sup></label>
							<select name="maritalstatus">
								<option>Select</option>
								<option value="-1"></option>
								<option value="Married">Married</option>
								<option value="Unmarried">Unmarried</option>
							</select></td>
					</tr>
				</table>	
			</div>

			<div class="form-group">
				<table>
					<tr>
						<td><label for="profession">Profession<sup>*</sup></label>
							<input type="text" name="profession"  id="profession" required>
						</td>
						<td>	<label for="natureofwork">Nature of Work and Travelling<sup>*</sup></label>
							<input type="text" name="natureofwork" id="natureofwork" required>
					</td>
					</tr>
				</table>
				</div>

				<div class="form-group">
					<table>
						<tr>
							<td><label for="q1">How frequently do you need to travel</label>
								<input type="text" name="q1" >
							</td>
							<td>	<label for="q2">How does your tongue look?*<sup>*</sup></label>
								<select required name="q2">
									<option>Select</option>
								<option value="whitecoated">White Coated</option>
									<option value="Yellowcoated">Yellow Coated</option>
									<option value="Pink">Pink without Coating</option>
									<option value="Other">Other</option>
								</select>
						</td>
						<td><label for="q3">Other Tongue color</label>
							<input type="text" name="q3" id="q3">
						</td>
						</tr>
					</div>
						<div class="form-group">
							<table>
								<tr>
									<td><label for="q4">Present Complaints – List of Present Complaints<sup>*</sup></label>
										<input type="textarea" name="q4" id="q4">
									</td>
									<td>	<label for="q5">Duration of each present complaint<sup>*</sup></label>
										<input type="text" name="q5" id="q5">
								</td>
								</tr>
							</table>
							</div>


							<div class="form-group">
								<table>
									<tr>
										<td><label for="q6">Details Of investigation so Far</label>
											<input type="text"  name="q6" id="q6">
										</td>
										<td>	<label for="q7">Family History of any illness?</label>
											<input type="text"  name="q7" id="q7">
									</td>
									<td>
										<label for="file">Upload Related Documents</label>
										<input type="file" name="file" multiple>

									</td>
									</tr>
								</table>
								</div>
								<div class="form-group">
									<table>
										<tr>
											<td><label for="q8">Current Medication with Dose, if any</label>
												<input type="text"  name="q8" id="q8">
											</td>
											<td>	<label for="q9">Allergies if any</label>
												<input type="text" name="q9" id="q9">
										</td>
										</tr>
									</table>
									</div>
									<div class="form-group">
										<table>
											<tr>
												<td>
													<label for="q10">History of Previous illnesses, if any (Past Medical History)</label>
													<input type="text"  name="q10" id="q10">
												</td>
												<td>
													<label for="q11">If yes, specify duration, otherwise type NO</label>
													<input type="text"  name="q11" id="q11">
												</td>
											</tr>
										</table>

									</div>
									
				<div class="form-group">
					<table>
						<tr>
							<td>	
								<label for="q12">Please mark if you have any of the diseases down below<sup>*</sup></label>
								<select name="q12">
									<option>Select</option>
								<option value="Jaundice">Jaundice</option>
									<option value="Diabetes">Diabetes</option>
									<option value="Hypertension">Hypertension(Blood Pressure)</option>
									<option value="Arthritis">Arthritis</option>
									<option value="Piles">Piles</option>
									<option value="Fistula">Fistula</option>
									<option value="Ulcer">Ulcer</option>
									<option value="Anaemia">Anaemia</option>
									<option value="Cancer">Cancer</option>
									<option value="HeartDisease">Heart Disease</option>
									<option value="Obesity">Obesity</option>
									<option value="none">None of the above</option>
									<option value="other">Other</option>
								</select>
						</td>
						<td><label for="q13">Other Disease</label>
							<input type="text"  name="q13" id="13">
						</td>
						</tr>
					</div>
					<div class="form-group">
						<table>
							<tr>
								<td>	
									<label for="q14">Bowel Habits<sup>*</sup></label>
									<select name="q14">
										<option>Select</option>
										<option value="Regular">Regular</option>
										<option value="Irregular">Irregular</option>
										<option value="Constipated">Constipated</option>
										<option value="Satisfactory">Satisfactory</option>
										<option value="Unsatisfactory">Unsatisfactory</option>
									</select>
							</td>
							<td><label for="q15">Bowel Color</label>
								<input type="text"  name="q15" id="q15">
							</td>
							</tr>
						</div>

						<div class="form-group">
							<table>
								<tr>
									<td>	
										<label for="q16">Urine Quantity<sup>*</sup></label>
										<select name="q16">
											<option>Select</option>
											<option value="More">More</option>
											<option value="Less">Less</option>
											<option value="Normal">Normal</option>
								
										</select>
								</td>
								<td>	
									<label for="q17">Urine Color<sup>*</sup></label>
									<select  name="q17">
										<option>Select</option>
										<option value="Yellow">Yellow</option>
										<option value="PaleYellow">Pale Yellow</option>
										<option value="White">White</option>
										<option value="other">Other</option>
							
									</select>
							</td>
								<td><label for="q18">Other Urine Color</label>
									<input type="text"  name="q18" id="q18">
								</td>
								</tr>
							</div>

							
						<div class="form-group">
							<table>
								<tr>
									<td>	
										<label for="q19">Appetite according to you<sup>*</sup></label>
										<select name="q19">
											<option>Select</option>
											<option value="More">More</option>
											<option value="Less">Less</option>
											<option value="Normal">Normal</option>
								
										</select>
								</td>
								<td>	
									<label for="q20">Diet<sup>*</sup></label>
									<select name="q20">
										<option>Select</option>
										<option value="Vegetarian">Vegetarian</option>
										<option value="Non-Vegetarian">Non-Vegetarian</option>
										<option value="Vegan">Vegan</option>
										<option value="Glutten-free">Glutten-free</option>
										<option value="other">other</option>
									</select>
							</td>
								<td><label for="q21">Other Diet</label>
									<input type="text" name="q21" id="q21">
								</td>
								</tr>
							</div>

							<div class="form-group">
								<table>
									<tr>
										<td><label for="q22">Breakfast menu and time</label>
											<input type="text" name="q22" id="q22">
										</td>
									<td><label for="q23">Lunch menu and time</label>
										<input type="text" name="q23" id="q23">
									</td>
									<td><label for="q24">Dinner menu and time</label>
										<input type="text" name="q24" id="q24">
									</td>
									</tr>
								</div>
								<div class="form-group">
									<table>
										<tr>
											<td><label for="q25">Habits If any<sup>*</sup></label>
												<select name="q25">
													<option>Select</option>
													<option value="Smoking">Smoking</option>
													<option value="Tobacco">Tobacco</option>
													<option value="Drugs">Drugs</option>
													<option value="None">None</option>
													<option value="other">other</option>
												</select></td>
												<td><label for="q26">Other Habits</label>
													<input type="text" name="q26" id="q26">
												</td>
										</tr>
									</table>
									
								</div>
								<h2>Section For Covid-19 Details</h2>
								<div class="form-group">
									<table>
										<tr>
											<td><label for="q27">Have you been infected with Covid-19 before?<sup>*</sup></label>
												<select name="q27">
													<option>Select</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
													</select></td>
												<td><label for="q28">If yes, what were the symptoms you had?</label>
													<input type="text" name="q28" id="q28">
												</td></tr>
												<tr>
												<td><label for="q29">Were you hospitalized due to Covid-19?<sup>*</sup></label>
													<select name="q29">
														<option>Select</option>
														<option value="yes">Yes</option>
														<option value="no">No</option>
														</select></td>
														<td><label for="q30">Are you suffering from any post Covid-19 complications?<sup>*</sup></label>
															<select name="q30">
																<option>Select</option>
																<option value="yes">Yes</option>
																<option value="no">No</option>
																</select></td>
																<td><label for="q31">If yes, please elaborate</label>
																	<input type="text" name="q31" id="q31">
																</td>
										</tr>
									</table>
								</div>
								<h2>Section For Women Only</h2>
								<div class="form-group">
									<table>
										<tr>
											<td><label for="q32">Which of the Following describes your Menstruation?</label>
												<select name="q32">
													<option>Select</option>
													<option value="Absent">Absent</option>
													<option value="Regular">Regular</option>
													<option value="Irregular">Irregular</option>
													<option value="Toofrequent">Too frequent</option>
													<option value="Infrequent">In frequent</option>
													<option value="Menopause">Menopause</option>
													<option value="CeasedafterMenopause">Ceased after Menopause</option>
													</select></td>
												<td><label for="q33">If yes, what were the symptoms you had?</label>
													<input type="text" name="q33" id="q33">
												</td>
										</tr>
										<tr>
												<td><label for="q34">How many days does your menstruation last?</label>
													<select name="q34">
														<option>Select</option>
														<option value="1">0-4 Days</option>
														<option value="2">5-7 Days</option>
														<option value="3">More than 7 Days</option>
														</select></td>
													<td><label for="q35">Associated Symptoms Before or During Menstruation</label>
														<input type="text" name="q35" id="q35">
													</td>
										</tr>
										<tr>
													<td><label for="q36">Any Vaginal Discharge?</label>
														<select name="q36">
															<option>Select</option>
															<option value="yes">Yes</option>
															<option value="no">No</option>
															<option value="maybe">Maybe</option>
															</select></td>
															<td><label for="q37">If there is a vaginal discharge, please describe any other observations with it</label>
																<input type="text" name="q37" id="q37">
															</td>
										</tr>
										<tr>
															<td><label for="q38">Are You Pregnant Now?</label>
																<select name="q38">
																	<option value=" ">Select</option>
																	<option value="yes">Yes</option>
																	<option value="no">No</option>
																	
																	</select></td>
								
								
																	<td><label for="q39">Do you use any Birth Control measures?</label>
																		<select name="q39">
																			<option value="">Select</option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																			
																			</select></td>
										</tr>
										<tr>
																			<td><label for="q40">If yes, please describe</label>
																				<input type="text" name="q40" id="q40">
																			</td>
																			<td><label for="q41">Number of Previous Pregnancies if any</label>
																				<input type="text" name="q41" id="q41">
																			</td>
																			<td><label for="q42">Describe Previous Pregnancies if any – How was the delivery done? Any abnormality? any other History</label>
																				<input type="text" name="q42" id="q42">
																			</td>
										</tr>
										<tr>
																			<td><label for="q43">Please add more information if you would like to add about your Disease/Problems</label>
																				<input type="textarea" name="q43" id="q43">
																			</td>
																			<td><label for="q44">Please attach your recent photo</label>
																				<input type="file" name="q44" multiple>
																			</td>
										</tr>
								
										
									</table>
								</div>
								<div class="form-group">
								<button type="submit" name="generatepdf" onclick="submit()">SUBMIT</button>	
								<button type="RESET">RESET</button></div>
								<label id="lbl"></label>				
</form>
<script>
	function submit(){
			var email= document.getElementById("email").value;
			var contactNumber= document.getElementById("contactNumber").value;
			var fname= document.getElementById("fname").value;
			var lname= document.getElementById("lname").value;
			var address= document.getElementById("address").value;
			var city= document.getElementById("state").value;
			var state= document.getElementById("city").value;
			var zipcode= document.getElementById("zipcode").value;
			var country= document.getElementById("country").value;
			var nationality= document.getElementById("nationality").value;
			var dob= document.getElementById("dob").value;
			var age= document.getElementById("age").value;
			var height= document.getElementById("height").value;
			var weight= document.getElementById("weight").value;
			var gender= document.getElementById("gender").value;
			var maritalStatus= document.getElementById("maritalstatus").value;
			var profession= document.getElementById("email").value;
			var natureofwork= document.getElementById("natureofwork").value;
			var q1= document.getElementById("q1").value;
			var q2= document.getElementById("q2").value;
			var q3= document.getElementById("q3").value;
			var q4= document.getElementById("q4").value;
			var q5= document.getElementById("q5").value;
			var q6= document.getElementById("q6").value;
			var q7= document.getElementById("q7").value;
			var q8= document.getElementById("q8").value;
			var q9= document.getElementById("q9").value;
			var q10= document.getElementById("q10").value;
			var q11= document.getElementById("q11").value;
			var q12= document.getElementById("q12").value;
			var q13= document.getElementById("q13").value;
			var q14= document.getElementById("q14").value;
			var q15= document.getElementById("q15").value;
			var q16= document.getElementById("q16").value;
			var q17= document.getElementById("q17").value;
			var q18= document.getElementById("q18").value;
			var q19= document.getElementById("q19").value;
			var q20= document.getElementById("q20").value;
			var q21= document.getElementById("q21").value;
			var q22= document.getElementById("q22").value;
			var q23= document.getElementById("q23").value;
			var q24= document.getElementById("q24").value;
			var q25= document.getElementById("q25").value;
			var q26= document.getElementById("q26").value;
			var q27= document.getElementById("q27").value;
			var q28= document.getElementById("q28").value;
			var q29= document.getElementById("q29").value;
			var q30= document.getElementById("q30").value;
			var q31= document.getElementById("q31").value;
			var q32= document.getElementById("q32").value;
			var q33= document.getElementById("q33").value;
			var q34= document.getElementById("q34").value;
			var q35= document.getElementById("q35").value;
			var q36= document.getElementById("q36").value;
			var q37= document.getElementById("q37").value;
			var q38= document.getElementById("q38").value;
			var q39= document.getElementById("q39").value;
			var q40= document.getElementById("q40").value;
			var q41= document.getElementById("q41").value;
			var q42= document.getElementById("q42").value;
			var q43= document.getElementById("q43").value;
			var q43= document.getElementById("q44").value;


	}

</script>

</body>
</html>