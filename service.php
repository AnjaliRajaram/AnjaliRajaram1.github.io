<?php
// Include the database connection file
include('conn.php');
{
if(isset($_POST['submit'])) {
    // Collect form data
    $companyname = $_POST["companyname"];
    $name = $_POST["name"];
    $position = $_POST["position"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $service = $_POST["service"];
    $selectedTrainings = isset($_POST["training1first"]) ? json_encode($_POST["training1first"]) : null; // Serialize checkbox selections
	
// Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO your_table_name (companyname, name, position, email, phonenumber, service, selected_trainings) 
            VALUES ('$companyname', '$name', '$position', '$email', '$phonenumber', '$service', '$selectedTrainings')";

if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "New record created successfully";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">




<title>Testcal Sdn Bhd</title>
    <style>
/* Style the dropdown container */
.dropdown {
  position: relative;
  display: inline-block;
   margin: 4px;
    width: 380px;
	margin-left:45px;
}

.dropdown-title {
    background-color: #1B4F72;
	color: white;
    padding: 6px;
    cursor: pointer;
    border: 2px solid grey;
    border-radius: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
	width:400px;

}


/* Style the dropdown button */
.dropdown-button {
  background-color: #3498db;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  
}

/* Style the dropdown content */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 450px; /* Adjust this width as needed */
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  z-index: 1;
  overflow: auto;
  max-height: 850px; /* Set a maximum height, adjust as needed */
}

.dropdown-content ul {
    list-style-type: disc; /* Use 'circle' for hollow circle bullet points */
    padding-left: 120px; /* Adjust the padding as needed */
}	
	
	
.dropdown-content ul li {
    margin: 5px 0; /* Add some spacing between each submenu item */
}


/* Show the dropdown content when the button is hovered or clicked */
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-item {
    padding: 10px;
    text-decoration: none;
    color: black;
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    list-style-type: disc; /* Add bullet points to submenu items * 
	margin
	
}

.dropdown-item:hover {
    background-color: red;
}
</style>
<style>
 #myForm {
            display: none;
        }

table, th, td {
          border: 1px solid;
        }
.image {
            margin-top: 10px; /* Adjust the value to set the desired spacing */
			margin-bottom: 10px;
	  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
        }
 body {
      background-image: url('images/background3.jpeg'); /* Replace with the URL of your image */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: #f0f0f0;
	   color: #fff;;
    }
	

.button2{
	  background-color: #1B4F72 ; 
  border: none;
  color: white;
  padding: 50px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover{
	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
 .dropdown-title {
            width:365px; /* Specify the width of the box */
            height: 50px; /* Specify the height of the box */
            border: 1px solid black; /* Add a border for better visibility */
            text-align: center; /* Center the text horizontally */
            line-height: 50px; /* Center the text vertically *
        }
	
.checkbox {
  margin-left: 35px; /* Adjust the amount of indentation as needed */
}
#content1, #content2, #content3, #content4, #content5, #content6, #content7, #content8, #content9, #content10, #content11, #content12, #content13, #content14, #content15, #content16, #content17, #content18, #content19, #content20, #content21 {
    left: 50px; /* Adjust this value to move the submenu to the left */
    padding: 10px;
}

 
   </style>
</head>

<div class="header">
 <?php include("header.php"); ?>
</div><br>


<body>
 <?php include 'navigation.php'; ?>

<div class="navbar">
    <a href="mainpage.php" class="nav-item <?php echo $currentPage == 'home' ? 'active' : ''; ?>">Home</a>
    <a href="service.php" class="nav-item <?php echo $currentPage == 'about' ? 'active' : ''; ?>">Training & Services </a>
</div>
       <div class="dropdown">
	    <center><img class="image" src="images/newhumanresources.jpeg" alt="Description of the image" width="200" height="150"></center>

        <center><div class="dropdown-title">Human Resources Program</div></center>
        <div class="dropdown-content">
         <div class="dropdown-item" >Human Resource Management Training</div>
		 <div class="dropdown-item" >Industrial Relation</div>
		 <div class="dropdown-item" >Training Needs Analysis  </div>
		 <div class="dropdown-item" > Behavioural Interview Technique </div>
         <div class="dropdown-item" > Recruitment & Selection Training </div>
		 <div class="dropdown-item"> Employee Performance Management</div>
		 <div class="dropdown-item" >Employee Retention </div>
		 <div class="dropdown-item" >Talent Management </div>
		 <div class="dropdown-item"> Training Development</div>
		 <div class="dropdown-item" >Effective Domestic Enquiry Skills</div>
		</div>
    </div>
  
   <div class="dropdown">
    <center><img class="image" src="images/finance.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title">Finance & Accounting Training Program</div></center>
        <div class="dropdown-content">
            <div class="dropdown-item">Accounting Skills</div>
            <div class="dropdown-item">Finance Skills</div>
		    <div class="dropdown-item">Costing</div>
		    <div class="dropdown-item">Effective Budgeting, Planning & Cost Control</div>
		    <div class="dropdown-item">Goods & Service Tax Implementation</div>
		    <div class="dropdown-item">Credit Control</div>
		    <div class="dropdown-item">Financial Statement</div>
		    <div class="dropdown-item">Financial Management</div>
		    <div class="dropdown-item">Debt Collection</div>
        </div>
    </div>

<div class="dropdown">
<center><img class="image" src="images/newestengineering.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title">Engineering Program</div></center>
        <div class="dropdown-content">
		<div class="dropdown-item">Mechanical Engineering</div>
  <div class="dropdown-item">Electrical Engineering</div>
  <div class="dropdown-item">Maintenance Training</div>
  <div class="dropdown-item">Equipment</div>
  <div class="dropdown-item">Asset Management</div>
  <div class="dropdown-item">Facilities Maintenance</div>
  <div class="dropdown-item">Environmental Engineering</div>
  <div class="dropdown-item">Green Technology</div>
  </div>
    </div>

<div class="dropdown">
<center><img src="images/newmanagement.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title">Management Program</div></center>
        <div class="dropdown-content" >
		<div class="dropdown-item">Leadership Development Program</div>
  <div class="dropdown-item">Management & Leadership Skills for Manager</div>
  <div class="dropdown-item">Effective Supervisory and Leadership Skills for Higher Quality and Productivity Improvement Training</div>
  <div class="dropdown-item">Effective Stress Management</div>
  <div class="dropdown-item">Risk Management</div>
  <div class="dropdown-item">Leading & Managing People Skills</div>
  <div class="dropdown-item">Effective Problem Solving & Decision Making Skills</div>
  <div class="dropdown-item">Creative Thinking</div>
  <div class="dropdown-item">Coaching and Mentoring</div>
  <div class="dropdown-item">Understanding People Work Habit</div>
 </div>
    </div>

<div class="dropdown">
<center><img class="image" src="images/newsalesmarketing.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Sales & Marketing Training Program</div></center>
 <div class="dropdown-content">
	<div class="dropdown-item">Professional Sales Skills</div>
  <div class="dropdown-item">Professional Marketing Skills</div>
  <div class="dropdown-item">Professional Telemarketing Skills</div>
  <div class="dropdown-item">Successful Selling & Negotiation Skills </div>
  <div class="dropdown-item">Customer Service and Relationship</div>
  <div class="dropdown-item">Consumer Behavior</div>
 <div class="dropdown-item">Product Brand Management</div>
  <div class="dropdown-item">Social Media for Business</div>
  <div class="dropdown-item">Public Relationship</div>
 </div>
    </div>
	
<div class="dropdown">
<center><img class="image" src="images/newsoftskills.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Soft Skills & Administration Training Program</div></center>
 <div class="dropdown-content" >
		<div class="dropdown-item">Communication Skills</div>
        <div class="dropdown-item">Effective Powerful, Dynamic & Persuasive Presentations Skills</div> 
        <div class="dropdown-item">Excellent Business Communication & Negotiation Skills</div>
        <div class="dropdown-item">Listening Skills</div>
        <div class="dropdown-item">Effective Communication & Business Writing Skills</div>
        <div class="dropdown-item">Effective Communicating & Speaking Skills</div>
        <div class="dropdown-item">Self-Development</div>
        <div class="dropdown-item">Effective Time Management</div>
        <div class="dropdown-item">Team Work</div>
        <div class="dropdown-item">Interpersonal Skills</div>
        <div class="dropdown-item">Excellence Secretarial Skills</div>
        <div class="dropdown-item">Understanding Body Language</div>
        <div class="dropdown-item">Professional Image & Business Etiquette</div>
		<div class="dropdown-item">Email Communication</div>
		<div class="dropdown-item">Handling Complaint</div>
     </div>
    </div>
	
<div class="dropdown">
<center><img class="image" src="images/newqualityproductivity.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Quality and Productivity Program</div></center>
        <div class="dropdown-content" >
	<div class="dropdown-item">Basic 7QC Tools For Quality and Productivity Improvement</div>
	<div class="dropdown-item">Cost of Quality : From concept to action</div>
	<div class="dropdown-item">Innovative Control Circle(ICC)</div>
	<div class="dropdown-item">Basic Sampling Techniques(ANZI Z1.4)</div>
	<div class="dropdown-item">5-S Good House Keeping</div>
	<div class="dropdown-item">5-S Good House Keeping(2 Days)</div>
	<div class="dropdown-item">5-S Internal Auditor</div>
	<div class="dropdown-item">Introduction to Total Quality Management(TQM)</div>
	<div class="dropdown-item">Gauge of Repeatability and Reproducibility(GR & R)</div>
	<div class="dropdown-item">Quality Function Development(QFD)</div>
	<div class="dropdown-item">Supplier Quality Management Training</div>
	<div class="dropdown-item">8D - Team Oriented Problem Solving</div>
	<div class="dropdown-item">Kaizen Continuous Improvement</div>
	<div class="dropdown-item">Quality Mindset for Inspector / Technicians</div>
	<div class="dropdown-item">Failure Root Couse Analysis for Maintenance / Technical personnel</div>
	<div class="dropdown-item">Design of Experiment</div>
	<div class="dropdown-item">Poka Yoke</div>
	<div class="dropdown-item">Customer Service & Customer Satisfaction Survey</div>
	<div class="dropdown-item">Continues Improvement</div>
	<div class="dropdown-item">Lean Management by Reducing 9 Types of Wastes</div>
	<div class="dropdown-item">Emotional Intelligence (EQ) at Workplace Training</div>
	<div class="dropdown-item">Effective Cost Reduction for Manufacturing / Production</div>
	<div class="dropdown-item">Production Planning and Control PPC</div>
	<div class="dropdown-item">Problem Solving</div>
	</div>
	</div>

<div class="dropdown">
<center><img class="image" src="images/newqms.png" alt="Description of the image" width="200" height="150"></center>
    <center><div class="dropdown-title" >ISO 9001 : 2015 Quality Management System</div></center>
    <div class="dropdown-content" >
	<div class="dropdown-item">ISO 9001 : 2015 Awareness Training</div>
	<div class="dropdown-item">ISO 9001 : 2015 Internal Auditing Training</div>
	<div class="dropdown-item">ISO 9001 : 2015 Awareness and Internal Auditing</div>
	<div class="dropdown-item">ISO 9001 : Documentation Training</div>
	<div class="dropdown-item">QMR Skill Development Training</div>
	<div class="dropdown-item">ISO 9001 : 2015 Risk Based Thinking Training</div>
	<div class="dropdown-item">ISO 9001 : 2015 Awareness (1Day) Training</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newenvironmentalsystem.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >ISO 14001 : 2015 Environmental Management System</div></center>
	<div class="dropdown-content" >
		<div class="dropdown-item">ISO 14001 : 2015 Awareness Program</div>
	<div class="dropdown-item">ISO 14001 : 2015 Internal Auditing</div>
	<div class="dropdown-item">ISO 14001 : 2015 Awareness & Internal Auditing</div>
	<div class="dropdown-item">ISO 14001 : 2015 Legal Requirements</div>
	<div class="dropdown-item">Aspect and Impact Identifications</div>
	<div class="dropdown-item">EMR Skill Development Training</div>
	<div class="dropdown-item">RoHS Implementation in Electronics Industries</div>
	<div class="dropdown-item">ISO 14001 : 2015 Risk Based Thinking Training</div>
	<div class="dropdown-item">Introduction & Understanding of RBA (Responsible Business Alliance) </div>
	<div class="dropdown-item">ESG Reporting Awareness</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/iatfqualitymanagement.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >IATF 16949 : 2016 Quality Management System</div></center>
	<div class="dropdown-content">
		<div class="dropdown-item">IATF 16949 : 2016 Awareness Training</div>
	<div class="dropdown-item">IATF 16949 : 2016 Internal Auditing Training</div>
	<div class="dropdown-item">IATF 16949 : 2016 Awareness and Internal Auditing</div>
	<div class="dropdown-item">Advanced Product Quality Planning (APQP)</div>
	<div class="dropdown-item">Production Part Approval Process(PPAP)</div>
	<div class="dropdown-item">APQP and PPAP</div>
	<div class="dropdown-item">Measurement System Analysis (MSA)</div>
	<div class="dropdown-item">Statistical Process Control (SPC) </div>
	<div class="dropdown-item">AIAG & VDA FMEA Awareness</div>
	<div class="dropdown-item">5 Core Tools for IATF 16949 : 2016 (APQP/PPAP/MSA/AIAG FMEA/SPC)</div>
	<div class="dropdown-item">VDA 6.3 Process Audit Interpretation</div>
	<div class="dropdown-item">VDA 6.3 Internal Auditing Training</div>
	<div class="dropdown-item">GP 12 - Early Production Containment Training </div>
	<div class="dropdown-item">IMDS (International Material Data Sheet)</div>
	<div class="dropdown-item">IATF 16949 : 2016 Risk Based Thinking Training</div>
	<div class="dropdown-item">Statistical Analysis Techniques Using Minitab Tools</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newohsas.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >ISO 45001 : 2018 OHSAS System</div></center>
	<div class="dropdown-content" >
		<div class="dropdown-item">ISO 45001 : 2018 Awareness Program</div>
	<div class="dropdown-item">ISO 45001 : 2018 Internal Auditing</div>
	<div class="dropdown-item">ISO 45001 : 2018 Awareness & Internal Auditing</div>
	<div class="dropdown-item">Hazard Identification, Risk Control (HIRAC) @ 1 Day</div>
	<div class="dropdown-item">ISO 45001 : 2018 Legal Requirement</div>
	<div class="dropdown-item">ISO 45001 : 2018 Risk Based Thinking Training</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newims.png" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >IMS (Intergrated Management System)</div></center>
	<div class="dropdown-content" >	
    <div class="dropdown-item">ISO 9001 and 14001 Internal Auditor Training</div>
	<div class="dropdown-item">ISO 9001 and IAFT Internal Auditor Training </div>
	<div class="dropdown-item">ISO 14001 and 45001 Internal Auditor Training</div>
	<div class="dropdown-item">ISO 9001/14001 IATF 16949 Internal Auditor Training</div>
	<div class="dropdown-item">Awareness and In-depth Understanding of ISO 9001 : 2015 / ISO 13485 : 2016 Training and Workshop</div>
	<div class="dropdown-item">Internal Audit Methodology and Reporting and Corrective Action Training and Workshops</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newqmsmed.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >ISO 13485 : 2016 QMS for Medical Devices</div></center>
	<div class="dropdown-content" >	
		<div class="dropdown-item">Understanding of ISO 13485 : 2016 (MD) Requirements</div>
	<div class="dropdown-item">ISO 13485 : 2016 Internal Auditing</div>
	<div class="dropdown-item">ISO 14971 : 2019 Application of Risk Management of Medical Devices</div>
	<div class="dropdown-item">ISO 13485 : 2016 Awareness and Internal Auditing</div>
	<div class="dropdown-item">Process Validation</div>
	<div class="dropdown-item">Risk and Process Validation</div>
	</div>
	</div>

<div class="dropdown">
<center><img class="image" src="images/fsms.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >FSMS ISO 22000 (Food Safety Management System)</div></center>
	<div class="dropdown-content">
		<div class="dropdown-item">Understanding of FSSC 22000 Training</div>
	<div class="dropdown-item">Internal Auditing of FSSC 22000 Training</div>
	<div class="dropdown-item">Understanding of and IQA of FSSC 22000 Training</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newlogistics.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Logistics Management Program</div></center>
	<div class="dropdown-content" >
		<div class="dropdown-item">Inventory and Warehouse Management</div>
	<div class="dropdown-item">Material Planning and Inventory Control</div>
	<div class="dropdown-item">Cost Effective Supply Chain Management</div>
	<div class="dropdown-item">Supply Chain Management</div>
	<div class="dropdown-item">Logistic Management</div>
	<div class="dropdown-item">Freight Transport and Logistic Management</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newfrontline.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Front Line & Customer Service Training Program</div></center>
	<div class="dropdown-content" >
		<div class="dropdown-item">Front Line Manager`s Leadership</div>
	<div class="dropdown-item">Customer Service Development Program</div>
	<div class="dropdown-item">Professional Front Line Service and Phone Etiquette</div>
	<div class="dropdown-item">Managing Customer and Complaints</div>
	<div class="dropdown-item">Developing a Customer Centric Program</div>
	<div class="dropdown-item">Telephone Skills & Excellent Customer Service</div>
	<div class="dropdown-item">Customer Service Leadership & Relationship</div>
	<div class="dropdown-item">Effective Communication and Interpersonal Skills</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newsafety.jpeg" alt="Description of the image" width="200" height="150"></center>
    <center><div class="dropdown-title" >Safety Training Program</div></center>
	<div class="dropdown-content" >
    <div class="dropdown-item">Hazard Identification, Risk Control (HIRAC) - 1 Day</div>
	<div class="dropdown-item">Effective Set-Up of Safety & Healthy Committee</div>
	<div class="dropdown-item">Safety Leadership for Supervisor Training</div>
	<div class="dropdown-item">Behavior Based Safety Training</div>
	<div class="dropdown-item">Occupational Safety & Health</div>
	<div class="dropdown-item">Noise Exposure Awareness Training</div>
	<div class="dropdown-item">Accident and Incident Investigation and Reporting</div>
	<div class="dropdown-item">Hazard Identification, Risk Control (HIRAC) - 2 Days</div>
	<div class="dropdown-item">Fire Safety</div>
	<div class="dropdown-item">First Aids</div>
	<div class="dropdown-item">Environmental Safety</div>
	<div class="dropdown-item">Legislation in Malaysia for OSHA</div>
	<div class="dropdown-item">Compliance Strategy in Management related to EHS regulation</div>
	<div class="dropdown-item">Awareness Training on Office Safety (OSHA)</div>
	<div class="dropdown-item">Forklift Safety</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newoffice.jpeg" alt="Description of the image" width="200" height="150"></center>
       <center><div class="dropdown-title" >Microsoft Office Training Program</div></center>
	   <div class="dropdown-content" >
	   <div class="dropdown-item">Microsoft Excel</div>
	   <div class="dropdown-item">Microsoft Access</div>
	   <div class="dropdown-item"> Microsoft Powerpoint</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newpd.jpeg" alt="Description of the image" width="200" height="150"></center>
    <center><div class="dropdown-title" >Personal Development Training Program</div></center>
	<div class="dropdown-content" >
	<div class="dropdown-item">NLP Training</div>
	<div class="dropdown-item">EQ & Stress Management</div>
	<div class="dropdown-item">Motivation Training</div>
	<div class="dropdown-item">Personal Excellence</div>
	<div class="dropdown-item">Professional Grooming Career & Business Success</div>
	<div class="dropdown-item">Positive Attitude and Good Discipline at Work</div>
	</div>
	</div>
	
<div class="dropdown">
<center><img class="image" src="images/newpm.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Project Management</div></center>
	<div class="dropdown-content" >
		<div class="dropdown-item">Project, Planning & Scheduling for Professional</div>
	<div class="dropdown-item">Project Risk Management</div>
	<div class="dropdown-item">Project Management Professional(PMP)</div>
	</div>
	</div>	
	
	<div class="dropdown">
<center><img class="image" src="images/newcustom.jpeg" alt="Description of the image" width="200" height="150"></center>
        <center><div class="dropdown-title" >Customized Training</div></center>
	<div class="dropdown-content" >
		<div class="dropdown-item">Training as per customer requirement.</div>
	</div>
	</div><br><br>
	
	<div style="background: linear-gradient(to right, #0074e4, #00a0e9); padding: 5px; display: inline-block; width: 1338px; text-align: center; ">
	<p>For more information, <a href="#" id="showFormLink"  style="color: white; text-decoration: none;">click here</a>.</p>
	</div>
	
	<div class="popup-form"  id="myForm">
<table>
 <form  method="POST" action='https://formsubmit.co/sornajali2003@gmail.com' >
  
<h1>Enquiry Form</h1>

 <tr> 
    <td>
    <label>Company Name:</label>
</td>
	<td>
    <input type="text" name="Company Name" required>
</td>
</tr>
<tr>
<td>
    <label>Name:</label>
	</td>
	<td>
    <input type="text" name="Name" required>
	</td>
</tr>
<tr>
<td>
	<label>Position:</label>
</td>
<td>
    <input type="text" name="Position" required>
</td>
</tr>
<tr>
<td>
	<label>Email:</label>
</td>
<td>
    <input type="email" name="Email" required>
</td>
</tr>
<tr>
<td>
	<label>Phone Number:<br><br></label>
</td>
<td>
    <input type="text" name="Phone Number" required> 
</td>
</tr>
<tr>
<td>
	<label>Select Service:</label>
</td>
<td>
   <select name="Service" id="service"> 
        <option value="">--Select--</option> 
        <option value="public course">Public Course</option> 
        <option value="in-house training">In-House Training</option> 
        <option value="online training">Online Training</option> 
        <option value="consulting">Consulting</option> 
		<option value="team building">Team Building</option> 
		<option value="event management & etc">Event Management & etc</option> 
    </select>
</td>
</tr>
<tr>
<td>

	<label>Select Type Of Trainings:</label>
</td>
<td>
	
    <input type="checkbox" id="training1" name="Training" value="HumanResourcesProgram" onclick="toggleCheckbox('training1')" ondblclick="uncheckCheckbox('training1')">
	<label for="HumanResourcesProgram">1.0 Human Resources Program</label><br>
	<div id="content1" style="display: none;">
        <label><input class="checkbox-container" type="checkbox" value="Selected Training Under Human Resources Program" name="HumanResource Management Training">&nbsp Human Resource Management Training</label><br>
	    <label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Industrial Relation">&nbsp Industrial Relation</label><br>
	    <label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Training Needs Analysis">&nbsp Training Needs Analysis</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Behavioural Interview Technique">&nbsp Behavioural Interview Technique</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Recruitment & Selection Training">&nbsp Recruitment & Selection Training</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Employee Performance Management">&nbsp Employee Performance Management</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Employee Retention">&nbsp Employee Retention</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Talent Management">&nbsp Talent Management</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Training Development">&nbsp Training Development</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Effective Domestic Enquiry Skills">&nbsp Effective Domestic Enquiry Skills</label><br>
    </div>
	
	<input type="checkbox" id="training2" name="Training" value="Finance&AccountingTrainingProgram" onclick="toggleCheckbox('training2')" ondblclick="uncheckCheckbox('training2')">
	<label for="Finance&AccountingTrainingProgram">2.0 Finance & Accounting Training Program </label><br>
	<div id="content2" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Accounting Skills" >&nbsp Accounting Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Finance Skills" >&nbsp Finance Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Costing" >&nbsp Costing</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Effective Budgeting, Planning & Cost Control">&nbsp Effective Budgeting, Planning & Cost Control</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Goods & Service Tax Implementation">&nbsp Goods & Service Tax Implementation</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Credit Control">&nbsp Credit Control</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Financial Statement">&nbsp Financial Statement</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Financial Management">&nbsp Financial Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Debt Collection">&nbsp Debt Collection</label><br>
	</div>
	
	<input type="checkbox" id="training3" name="Training" value="EngineeringProgram" onclick="toggleCheckbox('training3')" ondblclick="uncheckCheckbox('training3')">
	<label for="EngineeringProgram"> 3.0 Engineering Program</label><br>
		<div id="content3" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Mechanical Engineering">&nbsp Mechanical Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Electrical Engineering" >&nbsp Electrical Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Maintenance Engineering" >&nbsp Maintenance Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Equipment" >&nbsp Equipment</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Asset Management" >&nbsp Asset Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Facilities Maintenance" >&nbsp Facilities Maintenance</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Environmental Engineering" >&nbsp Environmental Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Green Technology" >&nbsp Green Technology</label><br>
	</div>

	<input type="checkbox" id="training4" name="Training" value="ManagementProgram" onclick="toggleCheckbox('training4')" ondblclick="uncheckCheckbox('training4')">
	<label for="ManagementProgram">4.0 Management Program</label><br>
	<div id="content4" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Leadership Development Program" >&nbsp Leadership Development Program</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Management & Leadership Skills for Manager" >&nbsp Management & Leadership Skills for Manager</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Effective Supervisory and Leadership Skills for Higher Quality and Productivity Improvement Training">&nbsp Effective Supervisory and Leadership Skills for Higher Quality and Productivity Improvement Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Effective Stress Management">&nbsp Effective Stress Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Risk Management">&nbsp Risk Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Leading & Managing People Skills">&nbsp Leading & Managing People Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Effective Problem Solving & Decision Making Skills">&nbsp Effective Problem Solving & Decision Making Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Creative Thinking">&nbsp Creative Thinking</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Coaching and Mentoring">&nbsp Coaching and Mentoring</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Understanding People Work Habit">&nbsp Understanding People Work Habit</label><br>
	</div>
	
	<input type="checkbox" id="training5" name="Training" value="ManagementProgram" onclick="toggleCheckbox('training5')" ondblclick="uncheckCheckbox('training5')">
	<label for="Sales&MarketingTrainingProgram">5.0  Sales & Marketing Training Program</label><br>
		<div id="content5" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Professional Sales Skills">&nbsp Professional Sales Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Professional Marketing Skills" >&nbsp Professional Marketing Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Professional Telemarketing Skills" >&nbsp Professional Telemarketing Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Successful Selling & Negotiation Skills " >&nbsp Successful Selling & Negotiation Skills </label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Customer Service and Relationship" >&nbsp Customer Service and Relationship</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Consumer Behavior" >&nbsp Consumer Behavior</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Product Brand Management" >&nbsp Product Brand Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Social Media for Business" >&nbsp Social Media for Business</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Public Relationship" >&nbsp Public Relationship</label><br>
  </div>
	
	<input type="checkbox" id="training6" name="Training" value="Sales&MarketingTrainingProgram" onclick="toggleCheckbox('training6')" ondblclick="uncheckCheckbox('training6')">
	<label for="SoftSkills&AdministrationTrainingProgram">6.0 Soft Skills & Administration Training Program</label> <br>
	  <div id="content6" style="display: none;">
    <label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Communication Skills" >&nbsp Communication Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Powerful, Dynamic & Persuasive Presentations Skills" >&nbsp Effective Powerful, Dynamic & Persuasive Presentations Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Excellent Business Communication & Negotiation Skills" >&nbsp Excellent Business Communication & Negotiation Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Listening Skills" >&nbsp Listening Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Communication & Business Writing Skills">&nbsp Effective Communication & Business Writing Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Communicating & Speaking Skills">&nbsp Effective Communicating & Speaking Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Self-Development">&nbsp Self-Development</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Time Management">&nbsp Effective Time Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Team Work">&nbsp Team Work</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Interpersonal Skills">&nbsp Interpersonal Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Excellence Secretarial Skills">&nbsp Excellence Secretarial Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Understanding Body Language" >&nbsp Understanding Body Language</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Professional Image & Business Etiquette">&nbsp Professional Image & Business Etiquette</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Email Communication">&nbsp Email Communication</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Handling Complaint">&nbsp Handling Complaint</label><br>
    </div>
	
	<input type="checkbox" id="training7" name="Training" value="SoftSkills&AdministrationTrainingProgram" onclick="toggleCheckbox('training7')" ondblclick="uncheckCheckbox('training7')">
	<label for="QualityandProductivityProgram">7.0 Quality and Productivity Program</label><br>
	<div id="content7" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Basic 7QC Tools For Quality and Productivity Improvement">&nbsp Basic 7QC Tools For Quality and Productivity Improvement</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Cost of Quality : From concept to action" >&nbsp Cost of Quality : From concept to action</label><br>
    <label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Innovative Control Circle(ICC)">&nbsp Innovative Control Circle(ICC)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Basic Sampling Techniques(ANZI Z1.4)">&nbsp Basic Sampling Techniques(ANZI Z1.4)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="5-S Good House Keeping">&nbsp 5-S Good House Keeping</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="5-S Good House Keeping(2 Days)">&nbsp 5-S Good House Keeping(2 Days)</label><br>
    <label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="5-S Internal Auditor">&nbsp 5-S Internal Auditor</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Introduction to Total Quality Management(TQM)">&nbsp Introduction to Total Quality Management(TQM)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Gauge of Repeatability and Reproducibility(GR & R)">&nbsp Gauge of Repeatability and Reproducibility(GR & R)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Quality Function Development(QFD)">&nbsp Quality Function Development(QFD)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Supplier Quality Management Training" >&nbsp Supplier Quality Management Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="8D - Team Oriented Problem Solving">&nbsp 8D - Team Oriented Problem Solving</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Kaizen Continuous Improvement">&nbsp Kaizen Continuous Improvement</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Quality Mindset for Inspector / Technicians">&nbsp Quality Mindset for Inspector / Technicians</label><br>
    <label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Failure Root Couse Analysis for Maintenance / Technical personnel">&nbsp Failure Root Couse Analysis for Maintenance / Technical personnel</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Design of Experiment">&nbsp Design of Experiment</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Poka Yoke">&nbsp Poka Yoke</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Customer Service & Customer Satisfaction Survey">&nbsp Customer Service & Customer Satisfaction Survey</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Continues Improvement">&nbsp Continues Improvement</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Lean Management by Reducing 9 Types of Wastes">&nbsp Lean Management by Reducing 9 Types of Wastes</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Emotional Intelligence (EQ) at Workplace Training">&nbsp Emotional Intelligence (EQ) at Workplace Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Effective Cost Reduction for Manufacturing / Production">&nbsp Effective Cost Reduction for Manufacturing / Production</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Production Planning and Control PPC">&nbsp Production Planning and Control PPC</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Problem Solving">&nbsp Problem Solving</label><br>
	</div>
	
	<input type="checkbox" id="training8" name="Training" value="QualityandProductivityProgram" onclick="toggleCheckbox('training8')" ondblclick="uncheckCheckbox('training8')">
	<label for="ISO9001:2015QualityManagementSystem">8.0 ISO 9001 : 2015 Quality Management System</label> <br>
	<div id="content8" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Awareness Training" >&nbsp ISO 9001 : 2015 Awareness Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Internal Auditing Training" >&nbsp ISO 9001 : 2015 Internal Auditing Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Awareness and Internal Auditing" >&nbsp ISO 9001 : 2015 Awareness and Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : Documentation Training" >&nbsp ISO 9001 : Documentation Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="QMR Skill Development Training" >&nbsp QMR Skill Development Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Risk Based Thinking Training" >&nbsp ISO 9001 : 2015 Risk Based Thinking Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Awareness (1Day) Training"  >&nbsp ISO 9001 : 2015 Awareness (1Day) Training</label><br>
	</div>
	
	<input type="checkbox" id="training9" name="Training" value="ISO9001:2015QualityManagementSystem" onclick="toggleCheckbox('training9')" ondblclick="uncheckCheckbox('training9')">
	<label for="ISO14001:2015EnvironmentalManagementSystem">9.0 ISO 14001 : 2015 Environmental Management System</label> <br>
	<div id="content9" style="display: none;"> 
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Awareness Program" >&nbsp ISO 14001 : 2015 Awareness Program</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Internal Auditing" >&nbsp ISO 14001 : 2015 Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Awareness & Internal Auditing" >&nbsp ISO 14001 : 2015 Awareness & Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Legal Requirements" >&nbsp ISO 14001 : 2015 Legal Requirements</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="Aspect and Impact Identifications" >&nbsp Aspect and Impact Identifications</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="EMR Skill Development Training">&nbsp EMR Skill Development Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="RoHS Implementation in Electronics Industries" >&nbsp RoHS Implementation in Electronics Industries</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 1400 : 2015 Risk Based Thinking Training">&nbsp ISO 14001 : 2015 Risk Based Thinking Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="Introduction & Understanding of RBA (Responsible Business Alliance)">&nbsp Introduction & Understanding of RBA (Responsible Business Alliance)</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ESG Reporting Awareness">&nbsp ESG Reporting Awareness</label><br>
	</div>
	
	<input type="checkbox" id="training10" name="Training" value="ISO14001:2015EnvironmentalManagementSystem" onclick="toggleCheckbox('training10')" ondblclick="uncheckCheckbox('training10')">
	<label for="IATF16949:2016QualityManagementSystem">10.0 IATF 16949 : 2016 Quality Management System</label> <br>
	<div id="content10" style="display: none;">
     <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="IATF 16949 : 2016 Awareness Training" >&nbsp IATF 16949 : 2016 Awareness Training</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="ATF 16949 : 2016 Internal Auditing Training" >&nbsp IATF 16949 : 2016 Internal Auditing Training</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="IATF 16949 : 2016 Awareness and Internal Auditing">&nbsp IATF 16949 : 2016 Awareness and Internal Auditing</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Advanced Product Quality Planning (APQP)">&nbsp Advanced Product Quality Planning (APQP)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Production Part Approval Process(PPAP)">&nbsp Production Part Approval Process(PPAP)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="APQP and PPAP">&nbsp APQP and PPAP</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="APQP and PPAP">&nbsp APQP and PPAP</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Measurement System Analysis (MSA)">Measurement System Analysis (MSA)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Statistical Process Control (SPC)">Statistical Process Control (SPC)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="AIAG & VDA FMEA Awareness">AIAG & VDA FMEA Awareness</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="5 Core Tools for IATF 16949 : 2016 (APQP/PPAP/MSA/AIAG FMEA/SPC)">5 Core Tools for IATF 16949 : 2016 (APQP/PPAP/MSA/AIAG FMEA/SPC)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="VDA 6.3 Process Audit Interpretation">VDA 6.3 Process Audit Interpretation</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="VDA 6.3 Internal Auditing Training">VDA 6.3 Internal Auditing Training</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="GP 12 - Early Production Containment Training ">GP 12 - Early Production Containment Training </label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="IMDS (International Material Data Sheet)">IMDS (International Material Data Sheet)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="IATF 16949 : 2016 Risk Based Thinking Training" >IATF 16949 : 2016 Risk Based Thinking Training</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Statistical Analysis Techniques Using Minitab Tools" >Statistical Analysis Techniques Using Minitab Tools</label><br>
	</div>
	
	<input type="checkbox" id="training11" name="Training" value="IATF16949:2016QualityManagementSystem" onclick="toggleCheckbox('training11')" ondblclick="uncheckCheckbox('training11')">
	<label for="ISO45001:2018OHSASSystem">11.0 ISO 45001 : 2018 OHSAS System</label><br>
	<div id="content11" style="display: none;">
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System" name="ISO 450011 : 2018 Awareness Program" >ISO 450011 : 2018 Awareness Program</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Internal Auditing" >ISO 450011 : 2018 Internal Auditing</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Awareness & Internal Auditing" >ISO 450011 : 2018 Awareness & Internal Auditing</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="Hazard Identification, Risk Control (HIRAC) @ 1 Day" >Hazard Identification, Risk Control (HIRAC) @ 1 Day</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Legal Requirement" >ISO 450011 : 2018 Legal Requirement</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Risk Based Thinking Training" >ISO 450011 : 2018 Risk Based Thinking Training</label><br>
	</div>
	
	<input type="checkbox" id="training12" name="Training" value="ISO45001:2018OHSASSystem" onclick="toggleCheckbox('training12')" ondblclick="uncheckCheckbox('training12')">
	<label for="IMS(Integrated Management System)">12.0  IMS (Integrated Management System)</label><br>
		<div id="content12" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 90001 and 14001 Internal Auditor Training" >ISO 90001 and 14001 Internal Auditor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 90001 and IAFT Internal Auditor Training" >ISO 90001 and IAFT Internal Auditor Training </label><br>
    <label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 14001 and 45001 Internal Auditor Training" >ISO 14001 and 45001 Internal Auditor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 90001/14001 IATF 16949 Internal Auditor Training" >ISO 90001/14001 IATF 16949 Internal Auditor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="Awareness and In-depth Understanding of ISO 9001 : 2015 / ISO 13485 : 2016 Training and Workshop" >Awareness and In-depth Understanding of ISO 9001 : 2015 / ISO 13485 : 2016 Training and Workshop</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="Internal Audit Methodology and Reporting and Corrective Action Training and Workshops" >Internal Audit Methodology and Reporting and Corrective Action Training and Workshops</label><br>
	</div>
	
	<input type="checkbox" id="training13" name="Training" value="IMS(Integrated Management System)" onclick="toggleCheckbox('training13')" ondblclick="uncheckCheckbox('training13')">
	<label for="ISO13485:2016QMSforMedicalDevices">13.0 ISO 13485 : 2016 QMS for Medical Devices</label><br>
	<div id="content13" style="display: none;"> 
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="Understanding of ISO 13485 : 2016 (MD) Requirements" >Understanding of ISO 13485 : 2016 (MD) Requirements</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="ISO 13485 : 2016 Internal Auditing" >ISO 13485 : 2016 Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="ISO 14971 : 2019 Application of Risk Management of Medical Devices" >ISO 14971 : 2019 Application of Risk Management of Medical Devices</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="ISO 13485 : 2016 Awareness and Internal Auditing" >ISO 13485 : 2016 Awareness and Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="Process Validation" >Process Validation</label><br>
    <label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="Risk and Process Validation" >Risk and Process Validation</label><br>
	</div>
	
	<input type="checkbox" id="training14" name="Training" value="ISO13485:2016QMSforMedicalDevices" onclick="toggleCheckbox('training14')" ondblclick="uncheckCheckbox('training14')">
	<label for="FSMSISO22000(Food Safety Management System)">14.0 FSMS ISO 22000 (Food Safety Management System)</label><br>
	<div id="content14" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under FSMS ISO 22000 (Food Safety Management System)" name="Understanding of FSSC 22000 Training" >Understanding of FSSC 22000 Training</label><br>
	<label><input type="checkbox" value="Selected Training Under FSMS ISO 22000 (Food Safety Management System)" name="Internal Auditing of FSSC 22000 Training" >Internal Auditing of FSSC 22000 Training</label><br>
	<label><input type="checkbox" value="Selected Training Under FSMS ISO 22000 (Food Safety Management System)" name="Understanding of IQA of FSSC 22000 Training" >Understanding of IQA of FSSC 22000 Training</label><br>
	</div>
	
	<input type="checkbox" id="training15" name="Training" value="FSMSISO22000(Food Safety Management System)" onclick="toggleCheckbox('training15')" ondblclick="uncheckCheckbox('training15')">
	<label for="LogisticsManagementProgram">15.0 Logistics Management Program</label><br>
	<div id="content15" style="display: none;">
    <label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Inventory and Warehouse Management" >Inventory and Warehouse Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Material Planning and Inventory Control" >Material Planning and Inventory Control</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Cost Effective Supply Chain Management" >Cost Effective Supply Chain Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Supply Chain Management" >Supply Chain Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Logistic Management" >Logistic Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Freight Transport and Logistic Management" >Freight Transport and Logistic Management</label><br>
	</div>
	
	<input type="checkbox" id="training16" name="Training" value="LogisticsManagementProgram" onclick="toggleCheckbox('training16')" ondblclick="uncheckCheckbox('training16')">
	<label for="FrontLine&CustomerServiceTrainingProgram">16.0 Front Line & Customer Service Training Program</label><br>	
	<div id="content16" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Front Line Manager`s Leadership" >Front Line Manager`s Leadership</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Customer Service Development Program" >Customer Service Development Program</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Professional Front Line Service and Phone Etiquette" >Professional Front Line Service and Phone Etiquette</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Managing Customer and Complaints" >Managing Customer and Complaints</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Developing a Customer Centric Program" >Developing a Customer Centric Program</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Telephone Skills & Excellent Customer Service" >Telephone Skills & Excellent Customer Service</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Customer Service Leadership & Relationship" >Customer Service Leadership & Relationship</label><br>
	<label><input type="checkbox" value="Selected Training Under Front Line & Customer Service Training Program" name="Effective Communication and Interpersonal Skills" >Effective Communication and Interpersonal Skills</label><br>
	</div>
	
	<input type="checkbox" id="training17" name="Training" value="FrontLine&CustomerServiceTrainingProgram" onclick="toggleCheckbox('training17')" ondblclick="uncheckCheckbox('training17')">
	<label for="SafetyTrainingProgram">17.0 Safety Training Program</label><br>
	<div id="content17" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Hazard Identification, Risk Control (HIRAC) - 1 Day" >Hazard Identification, Risk Control (HIRAC) - 1 Day</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Effective Set-Up of Safety & Healthy Committee" >Effective Set-Up of Safety & Healthy Committee</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Safety Leadership for Supervisor Training" >Safety Leadership for Supervisor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Behavior Based Safety Training" >Behavior Based Safety Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Occupational Safety & Health" >Occupational Safety & Health</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Noise Exposure Awareness Training" >Noise Exposure Awareness Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Accident and Incident Investigation and Reporting" >Accident and Incident Investigation and Reporting</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Hazard Identification, Risk Control (HIRAC) - 2 Days" >Hazard Identification, Risk Control (HIRAC) - 2 Days</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Fire Safety" >Fire Safety</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="First Aids" >First Aids</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Environmental Safety" >Environmental Safety</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Legislation in Malaysia for OSHA" >Legislation in Malaysia for OSHA</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Compliance Strategy in Management related to EHS regulation" >Compliance Strategy in Management related to EHS regulation</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Awareness Training on Office Safety (OSHA)" >Awareness Training on Office Safety (OSHA)</label><br>
	<label><input type="checkbox" value="Selected Training Under Safety Training Program" name="Forklift Safety">Forklift Safety</label><br>
	</div>
	
	<input type="checkbox" id="training18" name="Training" value="SafetyTrainingProgram" onclick="toggleCheckbox('training18')" ondblclick="uncheckCheckbox('training18')">
	<label for="MicrosoftOfficeTrainingProgram">18.0 Microsoft Office Training Program</label><br>
	<div id="content18" style="display: none;">
	 <label><input type="checkbox" value="Selected Training Under Microsoft Office Training Program" name="Microsoft Excel">Microsoft Excel</label><br>
	 <label><input type="checkbox" value="Selected Training Under Microsoft Office Training Program" name="Microsoft Access">Microsoft Access</label><br>
	 <label><input type="checkbox" value="Selected Training Under Microsoft Office Training Program" name="Microsoft Powerpoint"> Microsoft Powerpoint</label><br>
	</div>
	
	<input type="checkbox" id="training19" name="Training" value="MicrosoftOfficeTrainingProgram" onclick="toggleCheckbox('training19')" ondblclick="uncheckCheckbox('training19')">
	<label for="PersonalDevelopmentTrainingProgram">19.0 Personal Development Training Program</label><br>
	<div id="content19" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="NLP Training">NLP Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="EQ & Stress Management">EQ & Stress Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Motivation Training">Motivation Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Personal Excellence">Personal Excellence</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Professional Grooming Career & Business Success">Professional Grooming Career & Business Success</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Positive Attitude and Good Discipline at Work" >Positive Attitude and Good Discipline at Work</label><br>
	</div>
	
	<input type="checkbox" id="training20" name="Training" value="PersonalDevelopmentTrainingProgram" onclick="toggleCheckbox('training20')" ondblclick="uncheckCheckbox('training20')">
	<label for="ProjectManagement">20.0 Project Management</label><br>
	<div id="content20" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Project Management" name="Project, Planning & Scheduling for Professional">Project, Planning & Scheduling for Professional</label><br>
	<label><input type="checkbox" value="Selected Training Under Project Management" name="Project Risk Management">Project Risk Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Project Management" name="Project Management Professional(PMP)">Project Management Professional(PMP)</label><br>
	</div>
	
	<input type="checkbox" id="training21" name="Training" value="CustomizedTraining" onclick="toggleCheckbox('training21')" ondblclick="uncheckCheckbox('training21')">
	<label for="CustomizedTraining">21.0 Customized Training</label><br>
	<div id="content21" style="display: none;">
	<label><input type="checkbox" value="Selected Customized Training" name="Training as per customer requirement">Training as per customer requirement</label><br>
	</div>

</td> 
</tr>
<tr>
<td>
	
<label>Number of pax:<p><i>(max 25 pax per session)</p></i></label>
<br>
</td>
<td>
  <input type="number" id="quantity" name="Quantity" min="1" max="25">
</td>
</tr>
<tr>
<td colspan="2">
     
    <center><button class="button button1" type="submit" value="Submit" style="align:center;">Submit</button></center>
	</td>
	
	</tr>
	
  </form>
  </table>
</div>



<script>
    function toggleDropdown(dropdownId) {
        var dropdown = document.getElementById(dropdownId);
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-title')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var dropdown = dropdowns[i];
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                }
            }
        }
    }
</script>
<script>
        function showContent(contentId) {
            // Hide all content divs
            var contentDivs = document.querySelectorAll('div[id^="content"]');
            contentDivs.forEach(function(div) {
                div.style.display = "none";
            });

            // Show the selected content div
            var selectedContent = document.getElementById(contentId);
            selectedContent.style.display = "block";
        }
    </script>

<script>
        function handleSubmit() {
            // You can perform additional validation here if needed
            
            // Redirect to mainpage.php after the form is successfully submitted
            window.location.href = 'mainpage.php';
            
            // Return false to prevent the form from submitting traditionally
            return false;
        }
    </script>
  <script>
        document.getElementById('showFormLink').addEventListener('click', function(event) {
            event.preventDefault();  // Prevent the default link behavior
            var form = document.getElementById('myForm');
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
        });
    </script>

<!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
	  
	   <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>

	<br><br>

	<div class="footer">
 <?php include("footer.php"); ?>
</div>
<script>
// Add event listeners for training checkboxes using a loop
for (let i = 1; i <= 21; i++) {
    let trainingCheckbox = document.getElementById("training" + i);
    if (trainingCheckbox) {
        trainingCheckbox.addEventListener("change", function() {
            showContent("content" + i, "training" + i);
        });
    }
}

// Handle form submission
document.getElementById("trainingForm").addEventListener("submit", function(event) {
    // Prevent the form from submitting normally
    event.preventDefault();

    // Process selected trainings here, for example, send them to the server using AJAX
    console.log(selectedTrainings);
    
    // You can also submit the form data to the server using AJAX if needed
    // ...

    // Reset the form or perform other actions as needed
    // trainingForm.reset();
});
</script>
<script>
var lastClickedCheckbox = null;

function toggleCheckbox(checkboxId) {
    var checkbox = document.getElementById(checkboxId);
    checkbox.checked = true;
    lastClickedCheckbox = checkbox;
}

function uncheckCheckbox(checkboxId) {
    var checkbox = document.getElementById(checkboxId);
    checkbox.checked = false;
    lastClickedCheckbox = null;
}
</script>
	
</body>
</html>
<?php } ?>