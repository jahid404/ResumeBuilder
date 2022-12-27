<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style_lg.css"/>
<meta name="viewport" content="width=device-width,initial-scale=1" >
</head>
<body class="dataPageBody" >
	<div class="data_container" >
		<form method="post" action="<?php echo(htmlspecialchars('resume.php'));?>" enctype="multipart/form-data">
			<div class="data_name font-09-rem margin-top-4px" >
				<p>Name: </p>
				<input id="data_name"  type="text" name="data_name" class="inputBox" required="required" >
			</div>
			<div class="flex" >
				<div class="data_f_name font-09-rem margin-top-4px" >
					<p>Father's Name: </p>
					<input id="data_f_name"  type="text" name="data_f_name" class="inputBox" required="required" >
				</div>
				<div class="data_m_name font-09-rem margin-top-4px" >
					<p>Mother's Name: </p>
					<input id="data_m_name"  type="text" name="data_m_name" class="inputBox" required="required" >
				</div>
			</div>
			<div class="data_DOB font-09-rem margin-top-4px flex" >
				<p>Date of Birth: </p>
				<div>
					<input id="data_DOB_dd"  type="number" name="data_DOB_dd" placeholder="DD" class="inputBox"  min="1" max="31" required="required" >
					<input id="data_DOB_mm"  type="number" name="data_DOB_mm" placeholder="MM" class="inputBox"  min="1" max="12" required="required" >
					<input id="data_DOB_yy"  type="number" name="data_DOB_yy" placeholder="YY" class="inputBox"  min="1970" max="<?php echo(date('Y')-16)?>" required="required" >
				</div>
			</div>
			<div class="flex" >
				<div class="data_pre_address font-09-rem margin-top-4px" >
					<p>Present Address: </p>
					<input id="data_pre_address"  type="text" name="data_pre_address" class="inputBox" required="required" >
				</div>
				<div class="data_per_address font-09-rem margin-top-4px" >
					<p>Permanent Address: </p>
					<input id="data_per_address"  type="text" name="data_per_address" class="inputBox" >
				</div>
			</div>
			<div class="flex" >
				<div class="data_gender font-09-rem margin-top-4px" >
					<p>Gender: </p>
					<input id="data_gender"  list="gender" name="data_gender" class="inputBox" required="required" >
				</div>
				<div class="data_marital_status font-09-rem margin-top-4px" >
					<p>Marital Status: </p>
					<input id="data_marital_status"  list="marital_status" name="data_marital_status" class="inputBox" >
				</div>
			</div>
			<div class="flex" >
				<div class="data_religion font-09-rem margin-top-4px" >
					<p>Religion: </p>
					<input id="data_religion"  list="religion" name="data_religion" class="inputBox" required="required" >
				</div>
				<div class="data_nationality font-09-rem margin-top-4px" >
					<p>Nationality: </p>
					<input id="data_nationality"  list="nationality" name="data_nationality" class="inputBox" >
				</div>
				<div class="data_blood_group font-09-rem margin-top-4px" >
					<p>Blood Group: </p>
					<input id="data_blood_group"  list="blood_group" name="data_blood_group" class="inputBox" >
				</div>
			</div>
			<div class="data_education font-09-rem margin-top-4px" >
				<div>
					<p>Education (maximum => 3)</p>
					<p id="addEdu" >Add more <img src="https://cdn-icons-png.flaticon.com/512/2040/2040520.png" height="13px" width="13px" ></p>
				</div>
				<div class="educationInfo">
					<div>
						<input id="data_exam"  list="exam" name="exam" placeholder="Exam/Degree" class="inputBox" required="required" >
						<input id="data_sub"  list="sub" name="sub" placeholder="Group/Subject" class="inputBox" required="required" >
					</div>
					<div>
						<input id="data_board"  list="board" name="board" placeholder="Board" class="inputBox" required="required" >
						<input id="data_year"  type="number" name="year" placeholder="Year" class="inputBox"  min="1975" min="<?php echo(date('Y')+6)?>" required="required" >
						<input id="data_result"  list="result" name="result" placeholder="Result" class="inputBox" required="required" >
					</div>
				</div>
			</div>
			<div class="data_experience font-09-rem margin-top-4px" >
				<div>
					<p>Experiences</p>
					<p id="addExp">Add more <img src="https://cdn-icons-png.flaticon.com/512/2040/2040520.png" width="13px" height="13px" ></p>
				</div>
				<div class="experienceInfo" >
					<input id="data_experience"  type="text" name="data_experience" class="inputBox" >
				</div>
			</div>
			<div class="flex" >
				<div class="data_language font-09-rem margin-top-4px" >
					<p>Language</p>
					<input id="data_language"  type="text" name="data_language" class="inputBox" >
				</div>
				<div class="data_skills font-09-rem margin-top-4px" >
					<p>Skills</p>
					<input id="data_skills"  type="text" name="data_skills" class="inputBox" >
				</div>
				<div class="data_hobbies font-09-rem margin-top-4px" >
					<p>Hobbies</p>
					<input id="data_hobbies"  type="text" name="data_hobbies" class="inputBox" >
				</div>
			</div>
			<div class="flex data_contact font-09-rem margin-top-4px" >
				<div class="margin-top-4px" >
					<p>Phone</p>
					<input id="data_phone"  type="tel" name="data_phone" class="inputBox" required="required" >
				</div>
				<div class="margin-top-4px" >
					<p>Email</p>
					<input id="data_email"  type="email" name="data_email" class="inputBox" required="required" >
				</div>
			</div>
			<div class="flex data_photo font-09-rem margin-top-4px" >
				<div class="margin-top-4px" >
					<p>Upload Photo</p>
					<input id="data_photo"  type="file" name="data_photo" class="inputBox" >
				</div>
				<div class="margin-top-4px" >
					<p>Upload Signature</p>
					<input id="data_signature"  type="file" name="data_signature" class="inputBox" >
				</div>
			</div>
			<div class="submit" >
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</div>
	
	
	<!--Data lists-->
	<datalist id="exam" >
		<option value="PSC" >PSC</option>
		<option value="JSC" >JSC</option>
		<option value="SSC" >SSC</option>
		<option value="HSC" >HSC</option>
		<option value="B.Sc" >B.Sc</option>
		<option value="B.B.S" >B.B.S</option>
		<option value="B.A" >B.A</option>
		<option value="Degree" >Degree</option>
		<option value="M.Sc" >M.Sc</option>
		<option value="M.B.S" >M.B.S</option>
		<option value="M.A" >M.A</option>
		<option value="Ph.D" >Ph.D</option>
	</datalist>
	<datalist id="sub" >
		<option value="Science" >Science</option>
		<option value="Business Studies" >Business Studies</option>
		<option value="Humanities" >Humanities</option>
		<option value="Physics" >Sub->Physics</option>
		<option value="Chemistry" >Sub->Chemistry</option>
		<option value="Mathematics" >Sub->Mathematics</option>
		<option value="Zoology" >Sub->Zoology</option>
		<option value="Botany" >Sub->Botany</option>
		<option value="Accounting" >Sub->Accounting</option>
		<option value="Economics" >Sub->Economics</option>
		<option value="Others" >Others</option>
	</datalist>
	<datalist id="board" >
		<option value="Dhaka" >Dhaka</option>
		<option value="Chittagong" >Chittagong</option>
		<option value="Cumilla" >Cumilla</option>
		<option value="Jessore" >Jessore</option>
		<option value="Khulna" >Khulna</option>
		<option value="Barishal" >Barishal</option>
		<option value="Rangpur" >Rangpur</option>
		<option value="Sylhet" >Sylhet</option>
		<option value="National University" >National University</option>
		<option value="Others" >Others</option>
	</datalist>
	<datalist id="religion" >
		<option value="Islam" >Islam</option>
		<option value="Hinduism" >Hinduism</option>
		<option value="Buddhist" >Buddhist</option>
		<option value="Christian" >Christian</option>
	</datalist>
	<datalist id="nationality" >
		<option value="Bangladeshi" >Bangladeshi</option>
	</datalist>
	<datalist id="blood_group">
		<option value="A+" >A+</option>
		<option value="A-" >A-</option>
		<option value="B+" >B+</option>
		<option value="B-" >B-</option>
		<option value="O+" >O+</option>
		<option value="O-" >O-</option>
		<option value="AB+" >AB+</option>
		<option value="AB-" >AB-</option>
	</datalist>
	<datalist id="gender" >
		<option value="Male" >Male</option>
		<option value="Female" >Female</option>
		<option value="Others" >Others</option>
	</datalist>
	<datalist id="marital_status" >
		<option value="Married" >Married</option>
		<option value="Unmarried" >Unmarried</option>
		<option value="Divorced" >Divorced</option>
	</datalist>
	
	<script type="text/javascript" src="script.js"></script>
</body>
</html>