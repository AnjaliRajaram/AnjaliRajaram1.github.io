<style>
table, th, td {
          border: 1px solid;
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
</style>

<div class="form-popup" id="myForm">
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
	
    <input type="radio" id="training1" name="Training" value="HumanResourcesProgram" onclick="showContent('content1')">
	<label for="HumanResourcesProgram">1.0 Human Resources Program</label><br>
	<div id="content1" style="display: none;">
        <label><input type="checkbox" value="Selected Training Under Human Resources Program" name="HumanResource Management Training">Human Resource Management Training</label><br>
	    <label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Industrial Relation">Industrial Relation</label><br>
	    <label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Training Needs Analysis">Training Needs Analysis</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Behavioural Interview Technique">Behavioural Interview Technique</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Recruitment & Selection Training">Recruitment & Selection Training</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Employee Performance Management">Employee Performance Management</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Employee Retention">Employee Retention</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Talent Management">Talent Management</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Training Development">Training Development</label><br>
		<label><input type="checkbox" value="Selected Training Under Human Resources Program" name="Effective Domestic Enquiry Skills">Effective Domestic Enquiry Skills</label><br>
    </div>
	
	<input type="radio" id="training2" name="Training" value="Finance&AccountingTrainingProgram" onclick="showContent('content2')">
	<label for="Finance&AccountingTrainingProgram">2.0 Finance & Accounting Training Program </label><br>
	<div id="content2" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Accounting Skills" >Accounting Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Finance Skills" >Finance Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Costing" >Costing</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Effective Budgeting, Planning & Cost Control">Effective Budgeting, Planning & Cost Control</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Goods & Service Tax Implementation"> Goods & Service Tax Implementation</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Credit Control">Credit Control</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Financial Statement">Financial Statement</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Financial Management">Financial Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Finance & Accounting Training Program" name="Debt Collection">Debt Collection</label><br>
	</div>
	
	<input type="radio" id="training3" name="Training" value="EngineeringProgram" onclick="showContent('content3')">
	<label for="EngineeringProgram"> 3.0 Engineering Program</label><br>
		<div id="content3" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Mechanical Engineering">Mechanical Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Electrical Engineering" >Electrical Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Maintenance Engineering" >Maintenance Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Equipment" >Equipment</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Asset Management" >Asset Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Facilities Maintenance" >Facilities Maintenance</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Environmental Engineering" >Environmental Engineering</label><br>
	<label><input type="checkbox" value="Selected Training Under Engineering Program" name="Green Technology" >Green Technology</label><br>
	</div>

	<input type="radio" id="training4" name="Training" value="ManagementProgram" onclick="showContent('content4')">
	<label for="ManagementProgram">4.0 Management Program</label><br>
	<div id="content4" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Leadership Development Program" >Leadership Development Program</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Management & Leadership Skills for Manager" >Management & Leadership Skills for Manager</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Effective Supervisory and Leadership Skills for Higher Quality and Productivity Improvement Training">Effective Supervisory and Leadership Skills for Higher Quality and Productivity Improvement Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Effective Stress Management">Effective Stress Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Risk Management">Risk Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Leading & Managing People Skills">Leading & Managing People Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Effective Problem Solving & Decision Making Skills">Effective Problem Solving & Decision Making Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Creative Thinking">Creative Thinking</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Coaching and Mentoring">Coaching and Mentoring</label><br>
	<label><input type="checkbox" value="Selected Training Under Management Program" name="Understanding People Work Habit">Understanding People Work Habit</label><br>
	</div>
	
	<input type="radio" id="training5" name="Training" value="ManagementProgram" onclick="showContent('content5')">
	<label for="Sales&MarketingTrainingProgram">5.0  Sales & Marketing Training Program</label><br>
		<div id="content5" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Professional Sales Skills">Professional Sales Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Professional Marketing Skills" >Professional Marketing Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Professional Telemarketing Skills" >Professional Telemarketing Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Successful Selling & Negotiation Skills " >Successful Selling & Negotiation Skills </label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Customer Service and Relationship" >Customer Service and Relationship</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Consumer Behavior" >Consumer Behavior</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Product Brand Management" >Product Brand Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Social Media for Business" >Social Media for Business</label><br>
	<label><input type="checkbox" value="Selected Training Under Sales & Marketing Training Program" name="Public Relationship" >Public Relationship</label><br>
  </div>
	
	<input type="radio" id="training6" name="Training" value="Sales&MarketingTrainingProgram" onclick="showContent('content6')">
	<label for="SoftSkills&AdministrationTrainingProgram">6.0 Soft Skills & Administration Training Program</label> <br>
	  <div id="content6" style="display: none;">
    <label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Communication Skills" >Communication Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Powerful, Dynamic & Persuasive Presentations Skills" >Effective Powerful, Dynamic & Persuasive Presentations Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Excellent Business Communication & Negotiation Skills" >Excellent Business Communication & Negotiation Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Listening Skills" >Listening Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Communication & Business Writing Skills">Effective Communication & Business Writing Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Communicating & Speaking Skills">Effective Communicating & Speaking Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Self-Development">Self-Development</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Effective Time Management">Effective Time Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Team Work">Team Work</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Interpersonal Skills">Interpersonal Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Excellence Secretarial Skills">Excellence Secretarial Skills</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Understanding Body Language" >Understanding Body Language</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Professional Image & Business Etiquette">Professional Image & Business Etiquette</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Email Communication">Email Communication</label><br>
	<label><input type="checkbox" value="Selected Training Under Soft Skills & Administration Training Program" name="Handling Complaint">Handling Complaint</label><br>
    </div>
	
	<input type="radio" id="training7" name="Training" value="SoftSkills&AdministrationTrainingProgram" onclick="showContent('content7')">
	<label for="QualityandProductivityProgram">7.0 Quality and Productivity Program</label><br>
	<div id="content7" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Basic 7QC Tools For Quality and Productivity Improvement">Basic 7QC Tools For Quality and Productivity Improvement</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Cost of Quality : From concept to action" >Cost of Quality : From concept to action</label><br>
    <label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Innovative Control Circle(ICC)">Innovative Control Circle(ICC)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Basic Sampling Techniques(ANZI Z1.4)">Basic Sampling Techniques(ANZI Z1.4)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="5-S Good House Keeping">5-S Good House Keeping</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="5-S Good House Keeping(2 Days)">5-S Good House Keeping(2 Days)</label><br>
    <label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="5-S Internal Auditor">5-S Internal Auditor</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Introduction to Total Quality Management(TQM)">Introduction to Total Quality Management(TQM)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Gauge of Repeatability and Reproducibility(GR & R)">Gauge of Repeatability and Reproducibility(GR & R)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Quality Function Development(QFD)">Quality Function Development(QFD)</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Supplier Quality Management Training" >Supplier Quality Management Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="8D - Team Oriented Problem Solving">8D - Team Oriented Problem Solving</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Kaizen Continuous Improvement">Kaizen Continuous Improvement</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Quality Mindset for Inspector / Technicians">Quality Mindset for Inspector / Technicians</label><br>
    <label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Failure Root Couse Analysis for Maintenance / Technical personnel">Failure Root Couse Analysis for Maintenance / Technical personnel</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Design of Experiment">Design of Experiment</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Poka Yoke">Poka Yoke</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Customer Service & Customer Satisfaction Survey" value="training7first">Customer Service & Customer Satisfaction Survey</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Continues Improvement">Continues Improvement</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Lean Management by Reducing 9 Types of Wastes">Lean Management by Reducing 9 Types of Wastes</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Emotional Intelligence (EQ) at Workplace Training">Emotional Intelligence (EQ) at Workplace Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Effective Cost Reduction for Manufacturing / Production">Effective Cost Reduction for Manufacturing / Production</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Production Planning and Control PPC">Production Planning and Control PPC</label><br>
	<label><input type="checkbox" value="Selected Training Under Quality and Productivity Program" name="Problem Solving">Problem Solving</label><br>
	</div>
	
	<input type="radio" id="training8" name="Training" value="QualityandProductivityProgram" onclick="showContent('content8')">
	<label for="ISO9001:2015QualityManagementSystem">8.0 ISO 9001 : 2015 Quality Management System</label> <br>
	<div id="content8" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Awareness Training" >ISO 9001 : 2015 Awareness Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Internal Auditing Training" >ISO 9001 : 2015 Internal Auditing Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Awareness and Internal Auditing" >ISO 9001 : 2015 Awareness and Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : Documentation Training" >ISO 9001 : Documentation Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="QMR Skill Development Training" >QMR Skill Development Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Risk Based Thinking Training" >ISO 9001 : 2015 Risk Based Thinking Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 9001 : 2015 Quality Management System" name="ISO 9001 : 2015 Awareness (1Day) Training"  >ISO 9001 : 2015 Awareness (1Day) Training</label><br>
	</div>
	
	<input type="radio" id="training9" name="Training" value="ISO9001:2015QualityManagementSystem" onclick="showContent('content9')">
	<label for="ISO14001:2015EnvironmentalManagementSystem">9.0 ISO 14001 : 2015 Environmental Management System</label> <br>
	<div id="content9" style="display: none;"> 
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Awareness Program" >ISO 14001 : 2015 Awareness Program</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Internal Auditing" >ISO 14001 : 2015 Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Awareness & Internal Auditing" >ISO 14001 : 2015 Awareness & Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 14001 : 2015 Legal Requirements" >ISO 14001 : 2015 Legal Requirements</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="Aspect and Impact Identifications" >Aspect and Impact Identifications</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="EMR Skill Development Training">EMR Skill Development Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="RoHS Implementation in Electronics Industries" >RoHS Implementation in Electronics Industries</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ISO 1400 : 2015 Risk Based Thinking Training">ISO 1400 : 2015 Risk Based Thinking Training</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="Introduction & Understanding of RBA (Responsible Business Alliance)">Introduction & Understanding of RBA (Responsible Business Alliance)</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 14001 : 2015 Environmental Management System" name="ESG Reporting Awareness">ESG Reporting Awareness</label><br>
	</div>
	
	<input type="radio" id="training10" name="Training" value="ISO14001:2015EnvironmentalManagementSystem" onclick="showContent('content10')">
	<label for="IATF16949:2016QualityManagementSystem">10.0 IATF 16949 : 2016 Quality Management System</label> <br>
	<div id="content10" style="display: none;">
     <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="IATF 16949 : 2016 Awareness Training" >IATF 16949 : 2016 Awareness Training</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="ATF 16949 : 2016 Internal Auditing Training" >IATF 16949 : 2016 Internal Auditing Training</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="IATF 16949 : 2016 Awareness and Internal Auditing">IATF 16949 : 2016 Awareness and Internal Auditing</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Advanced Product Quality Planning (APQP)">Advanced Product Quality Planning (APQP)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="Production Part Approval Process(PPAP)">Production Part Approval Process(PPAP)</label><br>
	 <label><input type="checkbox" value="Selected Training Under IATF 16949 : 2016 Quality Management System" name="APQP and PPAP">APQP and PPAP</label><br>
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
	
	<input type="radio" id="training11" name="Training" value="IATF16949:2016QualityManagementSystem" onclick="showContent('content11')">
	<label for="ISO45001:2018OHSASSystem">11.0 ISO 45001 : 2018 OHSAS System</label><br>
	<div id="content11" style="display: none;">
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System" name="ISO 450011 : 2018 Awareness Program" >ISO 450011 : 2018 Awareness Program</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Internal Auditing" >ISO 450011 : 2018 Internal Auditing</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Awareness & Internal Auditing" >ISO 450011 : 2018 Awareness & Internal Auditing</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="Hazard Identification, Risk Control (HIRAC) @ 1 Day" >Hazard Identification, Risk Control (HIRAC) @ 1 Day</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Legal Requirement" >ISO 450011 : 2018 Legal Requirement</label><br>
	 <label><input type="checkbox" value="Selected Training Under ISO 45001 : 2018 OHSAS System"  name="ISO 450011 : 2018 Risk Based Thinking Training" >ISO 450011 : 2018 Risk Based Thinking Training</label><br>
	</div>
	
	<input type="radio" id="training12" name="Training" value="ISO45001:2018OHSASSystem" onclick="showContent('content12')">
	<label for="IMS(Integrated Management System)">12.0  IMS (Integrated Management System)</label><br>
		<div id="content12" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 90001 and 14001 Internal Auditor Training" >ISO 90001 and 14001 Internal Auditor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 90001 and IAFT Internal Auditor Training" >ISO 90001 and IAFT Internal Auditor Training </label><br>
    <label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 14001 and 45001 Internal Auditor Training" >ISO 14001 and 45001 Internal Auditor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="ISO 90001/14001 IATF 16949 Internal Auditor Training" >ISO 90001/14001 IATF 16949 Internal Auditor Training</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="Awareness and In-depth Understanding of ISO 9001 : 2015 / ISO 13485 : 2016 Training and Workshop" >Awareness and In-depth Understanding of ISO 9001 : 2015 / ISO 13485 : 2016 Training and Workshop</label><br>
	<label><input type="checkbox" value="Selected Training Under IMS (Integrated Management System)" name="Internal Audit Methodology and Reporting and Corrective Action Training and Workshops" >Internal Audit Methodology and Reporting and Corrective Action Training and Workshops</label><br>
	</div>
	
	<input type="radio" id="training13" name="Training" value="IMS(Integrated Management System)" onclick="showContent('content13')">
	<label for="ISO13485:2016QMSforMedicalDevices">13.0 ISO 13485 : 2016 QMS for Medical Devices</label><br>
	<div id="content13" style="display: none;"> 
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="Understanding of ISO 13485 : 2016 (MD) Requirements" >Understanding of ISO 13485 : 2016 (MD) Requirements</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="ISO 13485 : 2016 Internal Auditing" >ISO 13485 : 2016 Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="ISO 14971 : 2019 Application of Risk Management of Medical Devices" >ISO 14971 : 2019 Application of Risk Management of Medical Devices</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="ISO 13485 : 2016 Awareness and Internal Auditing" >ISO 13485 : 2016 Awareness and Internal Auditing</label><br>
	<label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="Process Validation" >Process Validation</label><br>
    <label><input type="checkbox" value="Selected Training Under ISO 13485 : 2016 QMS for Medical Devices"  name="Risk and Process Validation" >Risk and Process Validation</label><br>
	</div>
	
	<input type="radio" id="training14" name="Training" value="ISO13485:2016QMSforMedicalDevices" onclick="showContent('content14')">
	<label for="FSMSISO22000(Food Safety Management System)">14.0 FSMS ISO 22000 (Food Safety Management System)</label><br>
	<div id="content14" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under FSMS ISO 22000 (Food Safety Management System)" name="Understanding of FSSC 22000 Training" >Understanding of FSSC 22000 Training</label><br>
	<label><input type="checkbox" value="Selected Training Under FSMS ISO 22000 (Food Safety Management System)" name="Internal Auditing of FSSC 22000 Training" >Internal Auditing of FSSC 22000 Training</label><br>
	<label><input type="checkbox" value="Selected Training Under FSMS ISO 22000 (Food Safety Management System)" name="Understanding of IQA of FSSC 22000 Training" >Understanding of IQA of FSSC 22000 Training</label><br>
	</div>
	
	<input type="radio" id="training15" name="Training" value="FSMSISO22000(Food Safety Management System)" onclick="showContent('content15')">
	<label for="LogisticsManagementProgram">15.0 Logistics Management Program</label><br>
	<div id="content15" style="display: none;">
    <label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Inventory and Warehouse Management" >Inventory and Warehouse Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Material Planning and Inventory Control" >Material Planning and Inventory Control</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Cost Effective Supply Chain Management" >Cost Effective Supply Chain Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Supply Chain Management" >Supply Chain Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Logistic Management" >Logistic Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Logistics Management Program" name="Freight Transport and Logistic Management" >Freight Transport and Logistic Management</label><br>
	</div>
	
	<input type="radio" id="training16" name="Training" value="LogisticsManagementProgram" onclick="showContent('content16')">
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
	
	<input type="radio" id="training17" name="Training" value="FrontLine&CustomerServiceTrainingProgram" onclick="showContent('content17')">
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
	
	<input type="radio" id="training18" name="Training" value="SafetyTrainingProgram" onclick="showContent('content18')">
	<label for="MicrosoftOfficeTrainingProgram">18.0 Microsoft Office Training Program</label><br>
	<div id="content18" style="display: none;">
	 <label><input type="checkbox" value="Selected Training Under Microsoft Office Training Program" name="Microsoft Excel">Microsoft Excel</label><br>
	 <label><input type="checkbox" value="Selected Training Under Microsoft Office Training Program" name="Microsoft Access">Microsoft Access</label><br>
	 <label><input type="checkbox" value="Selected Training Under Microsoft Office Training Program" name="Microsoft Powerpoint"> Microsoft Powerpoint</label><br>
	</div>
	
	<input type="radio" id="training19" name="Training" value="MicrosoftOfficeTrainingProgram" onclick="showContent('content19')">
	<label for="PersonalDevelopmentTrainingProgram">19.0 Personal Development Training Program</label><br>
	<div id="content19" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="NLP Training">NLP Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="EQ & Stress Management">EQ & Stress Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Motivation Training">Motivation Training</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Personal Excellence">Personal Excellence</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Professional Grooming Career & Business Success">Professional Grooming Career & Business Success</label><br>
	<label><input type="checkbox" value="Selected Training Under Personal Development Training Program" name="Positive Attitude and Good Discipline at Work" >Positive Attitude and Good Discipline at Work</label><br>
	</div>
	
	<input type="radio" id="training20" name="Training" value="PersonalDevelopmentTrainingProgram" onclick="showContent('content20')">
	<label for="ProjectManagement">20.0 Project Management</label><br>
	<div id="content20" style="display: none;">
	<label><input type="checkbox" value="Selected Training Under Project Management" name="Project, Planning & Scheduling for Professional">Project, Planning & Scheduling for Professional</label><br>
	<label><input type="checkbox" value="Selected Training Under Project Management" name="Project Risk Management">Project Risk Management</label><br>
	<label><input type="checkbox" value="Selected Training Under Project Management" name="Project Management Professional(PMP)">Project Management Professional(PMP)</label><br>
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
	<!--<td>
    <button type="button" class="button button1" onclick="closeForm()">Close</button>
	</td>-->
	</tr>
	
  </form>
  </table>
</div>