/*-----references----*/
//data page reference
const data_name = document.getElementById("data_name").value;
const data_f_name = document.getElementById("data_f_name").value;
const data_m_name = document.getElementById("data_m_name").value;
const data_DOB_dd = document.getElementById("data_DOB_dd").value;
const data_DOB_mm = document.getElementById("data_DOB_mm").value;
const data_DOB_yy = document.getElementById("data_DOB_yy").value;
const data_pre_address = document.getElementById("data_pre_address").value;
const data_per_address = document.getElementById("data_per_address").value;
const data_gender = document.getElementById("data_gender").value;
const data_marital_status = document.getElementById("data_marital_status").value;
const data_religion = document.getElementById("data_religion").value;
const data_nationality = document.getElementById("data_nationality").value;
const data_blood_group = document.getElementById("data_blood_group").value;
const data_exam = document.getElementById("data_exam").value;
const data_sub = document.getElementById("data_sub").value;
const data_board = document.getElementById("data_board").value;
const data_year = document.getElementById("data_year").value;
const data_result = document.getElementById("data_result").value;
const data_experience = document.getElementById("data_experience").value;
const data_language = document.getElementById("data_language").value;
const data_phone = document.getElementById("data_phone").value;
const data_skills = document.getElementById("data_skills").value;
const data_hobbies = document.getElementById("data_hobbies").value;
const data_email = document.getElementById("data_email").value;
const addExp = document.getElementById("addExp");
const addEdu = document.getElementById("addEdu");

const data_education_class = document.querySelector(".data_education");
const data_experience_class = document.querySelector(".data_experience");

let countEdu = 0;
let count = 0;
/*-----events-----*/
addEdu.addEventListener("click",function(){
	if(!(countEdu==2)){
		const educationInfo = document.createElement("div");
		educationInfo.classList.add("educationInfo");
		educationInfo.innerHTML = `
		<div>
			<input id="data_exam"  list="exam" name="exam${countEdu}" placeholder="Exam/Degree" class="inputBox" >
			<input id="data_sub"  list="sub" name="sub${countEdu}" placeholder="Group/Subject" class="inputBox" >
		</div>
		<div>
			<input id="data_board"  list="board" name="board${countEdu}" placeholder="Board" class="inputBox" >
			<input id="data_year"  type="number" name="year${countEdu}" placeholder="Year" class="inputBox"  min="1975" min="<?php echo(date('Y')+6)?>" >
			<input id="data_result"  list="result" name="result${countEdu}" placeholder="Result" class="inputBox" >
		</div>`;
		data_education_class.appendChild(educationInfo);
		countEdu++;
	};
});

addExp.addEventListener("click",function(){
	if(!(count==2)){
		const experienceInfo = document.createElement("div");
		experienceInfo.classList.add("experienceInfo");
		experienceInfo.innerHTML = `<input id="data_experience"  type="text" name="data_experience${count}" class="inputBox">`;
		data_experience_class.appendChild(experienceInfo);
		count++;
	};
});