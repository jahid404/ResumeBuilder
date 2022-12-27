<?php
	session_start();
	/*-----references-----*/
	$_SESSION['name'] = $_POST["data_name"];
	$_SESSION['f_name'] = $_POST["data_f_name"];
	$_SESSION['m_name'] = $_POST["data_m_name"];
	$_SESSION['DOB_dd'] = $_POST["data_DOB_dd"];
	$_SESSION['DOB_mm'] = $_POST["data_DOB_mm"];
	$_SESSION['DOB_yy'] = $_POST["data_DOB_yy"];
	$_SESSION['pre_address'] = $_POST["data_pre_address"];
	$_SESSION['per_address'] = $_POST["data_per_address"];
	$_SESSION['gender'] = $_POST["data_gender"];
	$_SESSION['marital_status'] = $_POST["data_marital_status"];
	$_SESSION['religion'] = $_POST["data_religion"];
	$_SESSION['nationality'] = $_POST["data_nationality"];
	$_SESSION['blood_group'] = $_POST["data_blood_group"];
	$_SESSION['experience'] = $_POST["data_experience"];
	$_SESSION['language'] = $_POST["data_language"];
	$_SESSION['phone'] = $_POST["data_phone"];
	$_SESSION['skills'] = $_POST["data_skills"];
	$_SESSION['hobbies'] = $_POST["data_hobbies"];
	$_SESSION['email'] = $_POST["data_email"];
	$_SESSION['exam'] = $_POST["exam"];
	$_SESSION['sub'] = $_POST["sub"];
	$_SESSION['board'] = $_POST["board"];
	$_SESSION['year'] = $_POST["year"];
	$_SESSION['result'] = $_POST["result"];
	$_SESSION['photo'] = $_FILES['data_photo'];
	$_SESSION['signature'] = $_FILES['data_signature'];
	
	//statements
	$months = array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec");
	$DOB = $_SESSION['DOB_dd']." ".$months[$_SESSION['DOB_mm']-1]." ".$_SESSION['DOB_yy'];
	
	$variables = array($_SESSION['name'],
	$_SESSION['f_name'],
	$_SESSION['m_name'],
	$DOB,
	$_SESSION['pre_address'],
	$_SESSION['per_address'],
	$_SESSION['gender'],
	$_SESSION['marital_status'],
	$_SESSION['religion'],
	$_SESSION['nationality'],
	$_SESSION['blood_group'],
	$_SESSION['experience'],
	$_SESSION['language'],
	$_SESSION['phone'],
	$_SESSION['skills'],
	$_SESSION['hobbies'],
	$_SESSION['email'],
	$_SESSION['exam'],
	$_SESSION['sub'],
	$_SESSION['board'],
	$_SESSION['year'],
	$_SESSION['result']);
	
	//events
	for($counter = 0; $counter<=1; $counter++){
		if(isset($_POST['exam'.$counter])){
			$_SESSION['exam'.$counter] = $_POST["exam".$counter];
			$_SESSION['sub'.$counter] = $_POST["sub".$counter];
			$_SESSION['board'.$counter] = $_POST["board".$counter];
			$_SESSION['year'.$counter] = $_POST["year".$counter];
			$_SESSION['result'.$counter] = $_POST["result".$counter];

			array_push($variables,
			$_SESSION['exam'.$counter],
			$_SESSION['sub'.$counter],
			$_SESSION['board'.$counter],
			$_SESSION['year'.$counter],
			$_SESSION['result'.$counter]);
		};
		
		if(isset($_POST['data_experience'.$counter])){
			$_SESSION['experience'.$counter] = $_POST["data_experience".$counter];
			array_push($variables,$_SESSION['experience'.$counter]);
		};
	};
	
	if(isset($_SESSION['photo'])){
		$filepathPhoto = "uploads/" . $_FILES["data_photo"]["name"];
		move_uploaded_file($_FILES["data_photo"]["tmp_name"], $filepathPhoto);
	};
	if(isset($_SESSION['signature'])){
		$filepathSignature = "uploads/" . $_FILES["data_signature"]["name"];
		move_uploaded_file($_FILES["data_signature"]["tmp_name"], $filepathSignature);
	};

	//getting data
	include 'getData.php';
?>