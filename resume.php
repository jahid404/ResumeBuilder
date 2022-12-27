<?php require 'process.php';?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>
<body>
	
	<div class="downloadPDF" >
		<input type="button" id="create_pdf" value="Download">
	</div>
	
	<div class="resumeMainPage" >
		<div class="top">
			<div>
				<h2 class="CV_title" style="background-color:#ccc">Curriculum Vitae</h2>
				<table class="personal_info_table" >
					<caption style="background-color:#ccc"  >Personal Information</caption>
					<tr>
						<th>Name</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="name" ><?php if(isset($_SESSION['name'])){echo($_SESSION['name']);}?></span></td>
					</tr>
					<tr>
						<th>Father's Name</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="f_name" ><?php if(isset($_SESSION['f_name'])){echo($_SESSION['f_name']);}?></span></td>
					</tr>
					<tr>
						<th>Mother's Name</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="m_name" ><?php if(isset($_SESSION['m_name'])){echo($_SESSION['m_name']);}?></span></td>
					</tr>
					<tr>
						<th>Date of Birth</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="DOB" ><?php echo("$DOB")?></span></td>
					</tr>
					<tr>
						<th>Present Address</th>
						<td>:</td>  
						<td class="padding-left-8px ><span id="pre_address" ><?php if(isset($_SESSION['pre_address'])){echo($_SESSION['pre_address']);}?></span></td>
					</tr>
					<tr>
						<th>Permanent Address</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="per_address" ><?php if(isset($_SESSION['per_address'])){echo($_SESSION['per_address']);}?></span></td>
					</tr>
					<tr>
						<th>Gender</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="gender" ><?php if(isset($_SESSION['gender'])){echo($_SESSION['gender']);}?></span></td>
					</tr>
					<tr>
						<th>Marital Status</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="marital_status" ><?php if(isset($_SESSION['marital_status'])){echo($_SESSION['marital_status']);}?></span></td>
					</tr>
					<tr>
						<th>Religion</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="religion" ><?php if(isset($_SESSION['religion'])){echo($_SESSION['religion']);}?></span></td>
					</tr>
					<tr>
						<th>Nationality</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="nationality" ><?php if(isset($_SESSION['nationality'])){echo($_SESSION['nationality']);}?></span></td>
					</tr>
					<tr>
						<th>Blood Group</th>
						<td>:</td>
						<td class="padding-left-8px" ><span id="blood" ><?php if(isset($_SESSION['blood_group'])){echo($_SESSION['blood_group']);}?></span></td>
					</tr>
				</table>
			</div>
			<div class="photo">
				<p>Photo</p>
				<img src="<?php if(isset($_SESSION['photo'])){echo $filepathPhoto;}?>">
			</div>
		</div>
		<div class="bottom" >
			<div class="qualification" >
				<table class="qualification_table" id="examData" >
					<caption style="background-color:#ccc">Educational Qualifications</caption>
					<tr>
						<th>Exam/Degree</th>
						<th>Sub/Division</th>
						<th>Board</th>
						<th>Year/Session</th>
						<th>Result</th>
					</tr>
					<tr class="exam_data" >
						<td><?php if(isset($_SESSION['exam'])){echo($_SESSION['exam']);}?></td>
						<td><?php if(isset($_SESSION['sub'])){echo($_SESSION['sub']);}?></td>
						<td><?php if(isset($_SESSION['board'])){echo($_SESSION['board']);}?></td>
						<td><?php if(isset($_SESSION['year'])){echo($_SESSION['year']);}?></td>
						<td><?php if(isset($_SESSION['result'])){echo($_SESSION['result']);}?></td>
					</tr>
					<tr class="exam_data" >
						<td><?php if(isset($_SESSION['exam0'])){echo($_SESSION['exam0']);}?></td>
						<td><?php if(isset($_SESSION['sub0'])){echo($_SESSION['sub0']);}?></td>
						<td><?php if(isset($_SESSION['board0'])){echo($_SESSION['board0']);}?></td>
						<td><?php if(isset($_SESSION['year0'])){echo($_SESSION['year0']);}?></td>
						<td><?php if(isset($_SESSION['result0'])){echo($_SESSION['result0']);}?></td>
					</tr>
					<tr class="exam_data" >
						<td><?php if(isset($_SESSION['exam1'])){echo($_SESSION['exam1']);}?></td>
						<td><?php if(isset($_SESSION['sub1'])){echo($_SESSION['sub1']);}?></td>
						<td><?php if(isset($_SESSION['board1'])){echo($_SESSION['board1']);}?></td>
						<td><?php if(isset($_SESSION['year1'])){echo($_SESSION['year1']);}?></td>
						<td><?php if(isset($_SESSION['result1'])){echo($_SESSION['result1']);}?></td>
					</tr>
				</table>
			</div>
			
			<div class="experience" >
				<h3 style="background-color:#ccc">Experiences</h3>
				<p><?php if(isset($_SESSION['experience'])){echo("<img src='https://cdn-icons-png.flaticon.com/512/839/839986.png' width='12px' height='12px'> ");echo($_SESSION['experience']);}?></p>
				<p><?php if(isset($_SESSION['experience0'])){echo("<img src='https://cdn-icons-png.flaticon.com/512/839/839986.png' width='12px' height='12px'> ");echo($_SESSION['experience0']);}?></p>
				<p><?php if(isset($_SESSION['experience1'])){echo("<img src='https://cdn-icons-png.flaticon.com/512/839/839986.png' width='12px' height='12px'> ");echo($_SESSION['experience1']);}?></p>
			</div>
			
			<div class="language" >
				<h3 style="background-color:#ccc">Language Proficiency</h3>
				<p class="languageInfo" ><?php if(isset($_SESSION['language'])){echo($_SESSION['language']);}?></p>
			</div>
			
			<div class="skills" >
				<table class="skills_table" >
					<caption style="background-color:#ccc">Skills & Hobbies</caption>
					<tr>
						<th>Skills</th>
						<td>:</td>
						<td class="padding-left-8px" ><span class="skillInfo" ><?php if(isset($_SESSION['skills'])){echo($_SESSION['skills']);}?></span></td>
					</tr>
					<tr>
						<th>Hobbies</th>
						<td>:</td>
						<td class="padding-left-8px" ><span class="hobbiesInfo" ><?php if(isset($_SESSION['hobbies'])){echo($_SESSION['hobbies']);}?></span></td>
					</tr>
				</table>
			</div>
			
			<div class="contact" >
				<table class="contact_table" >
					<caption style="background-color:#ccc">Contact</caption>
					<tr>
						<th>Phone</th>
						<td>:</td>
						<td class="padding-left-8px" ><span class="phoneNum" ><?php if(isset($_SESSION['phone'])){echo($_SESSION['phone']);}?></span></td>
					</tr>
					<tr>
						<th>Email</th>
						<td>:</td>
						<td class="padding-left-8px" ><span class="email" ><?php if(isset($_SESSION['email'])){echo($_SESSION['email']);}?></span></td>
					</tr>
				</table>
			</div>
			
			<div class="signature" >
				<div></div>
				<div class="signature_container" >
					<img src="<?php if(isset($_SESSION['signature'])){echo $filepathSignature;}?>" width="95%" height="40px" id="signature">
					<p>Signature</p>
				</div>
			</div>
		</div>
	</div>	
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script> 
	<script>  
		(function () {  
		var  
		form = $('.resumeMainPage'),  
		cache_width = form.width(),  
		a4 = [595.28, 841.89]; // for a4 size paper width and height  
		
		$('#create_pdf').on('click', function () {  
		$('body').scrollTop(0);  
		createPDF();  
		});  
		//create pdf  
		function createPDF() {  
		getCanvas().then(function (canvas) {  
		var  
		img = canvas.toDataURL("image/png"),  
		doc = new jsPDF({  
		unit: 'px',  
		format: 'a4'  
		});  
		doc.addImage(img, 'JPEG', 20, 20);  
		doc.save('resume.pdf');  
		form.width(cache_width);  
		});  
		}  
		console.log(cache_width);
		// create canvas object  
		function getCanvas() {  
		form.width((a4[0] * 1.33) - 125).css('width', 'none');  
		return html2canvas(form, {  
		imageTimeout: 2000,  
		removeContainer: true  
		});  
		}  
		
		}());  
	</script>  
	<script>  
		/* 
		* jQuery helper plugin for examples and tests 
		*/  
		(function ($) {  
		$.fn.html2canvas = function (options) {  
		var date = new Date(),  
		$message = null,  
		timeoutTimer = false,  
		timer = date.getTime();  
		html2canvas.logging = options && options.logging;  
		html2canvas.Preload(this[0], $.extend({  
		complete: function (images) {  
		var queue = html2canvas.Parse(this[0], images, options),  
		$canvas = $(html2canvas.Renderer(queue, options)),  
		finishTime = new Date();  
		
		$canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
		$canvas.siblings().toggle();  
		
		$(window).click(function () {  
		if (!$canvas.is(':visible')) {  
		$canvas.toggle().siblings().toggle();  
		throwMessage("Canvas Render visible");  
		} else {  
		$canvas.siblings().toggle();  
		$canvas.toggle();  
		throwMessage("Canvas Render hidden");  
		}  
		});  
		throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
		}  
		}, options));  
		
		function throwMessage(msg, duration) {  
		window.clearTimeout(timeoutTimer);  
		timeoutTimer = window.setTimeout(function () {  
		$message.fadeOut(function () {  
		$message.remove();  
		});  
		}, duration || 2000);  
		if ($message)  
		$message.remove();  
		$message = $('<div ></div>').html(msg).css({  
		margin: 0,  
		padding: 10,  
		background: "#000",  
		opacity: 0.7,  
		position: "fixed",  
		top: 10,  
		right: 10,  
		fontFamily: 'Tahoma',  
		color: '#fff',  
		fontSize: 12,  
		borderRadius: 12,  
		width: 'auto',  
		height: 'auto',  
		textAlign: 'center',  
		textDecoration: 'none'  
		}).hide().fadeIn().appendTo('body');  
		}  
		};  
		})(jQuery);  
	</script>  
</body>
</html>