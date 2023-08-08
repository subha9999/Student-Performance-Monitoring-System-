<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>

	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="web.css">
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
	<link rel="stylesheet" href="assets/modules/apexcharts/apexcharts.css">

</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
		<div class="menu">
			<ul>
				  <li class="nav-item dropdown"> 
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Faculty
                        <img src="faculty.png" alt="">
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="log out.html"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Log out</span></a>
					</ul>
				  </li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
		<div class="sidebar-content">
			<div id="sidebar">
	
				<!-- Logo -->
				<div class="logo">
					<h2 class="mb-0"><img src="logo.png"> IUB</h2>
				</div>
	
				<ul class="side-menu">
					<li>
						<a href="homepage.html" class="active">
							<i class='bx bxs-dashboard icon'></i> Dashboard
						</a>
					</li>
	
					<li>
						<a href="course_outline.html">
							<i class='bx bx-columns icon'></i>
							Course Outline
						</a>
					</li>
	
					<li>
						<a href="#">
							<i class='bx bxs-notepad icon'></i>
							Questions
							<i class='bx bx-chevron-right icon-right'></i>
						</a>
						<ul class="side-dropdown">
							<li><a href="spring.html">Spring</a></li>
							<li><a href="Summer.html">Summer</a></li>
							<li><a href="Autumn.html">Autumn</a></li>
						</ul>
					</li>
	
					<li>
						<a href="stud_info.html">
							<i class='bx bxs-widget icon'></i>
							Students
						</a>
					</li>
					<li>
						<a href="PLO_CO_maping.html">
							<i class='bx bxs-bar-chart-alt-2 icon'></i>
							PLO Analysis
						</a>
					</li>
					<li>
						<a href="assessment_data_entry.html">
							<i class='bx bxs-widget icon'></i>
							Assesment Data
						</a>
					</li>
					<li>
						<a href="Evaluting_data.html">
							<i class="bx bx-columns icon"></i>
							Evaluting Data
						</a>
					</li>
					<li>
					<a href="faculty_eva.html">
						<i class='bx bxs-widget icon'></i>
						Review
					</a>
					</li>
					
					<li>
						<a href="Student_enrollment.html">
							<i class='bx bxs-widget icon'></i>
							Student Enrollment
						</a>
						</li>
						<li>
							<a href="plo_co_report.html">
								<i class='bx bxs-widget icon' ></i> 
								PLO and CO Report
							</a>
						</li>
	
					<li>
						<a href="#">
							<i class='bx bxs-bar-chart-alt-2 icon'></i>
							Spider Chart
							<i class='bx bx-chevron-right icon-right'></i>
						</a>
						<ul class="side-dropdown">
							<li><a href="">PO's</a></li>
							<li><a href="">CO's</a></li>
						</ul>
					</li>
					<li>
						<a href="log out.html">
							<i class='fa fa-sign-out icon'></i>
							Log out
						</a>
					</li>
				</ul>
			</div>
	
		</div>
	</div>
	</div>


	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
	<body class="d-flex flex-column align-items-center" style="background-color: #FFE6EE">
    <h1 style="color: #3f2b96; margin-top: 20px">CLO-PLO Summary</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="dropdown" style="margin: 30px; display: inline">
        <select id="select1" name="semester">
          <option value="#">Semester</option>
          <option value="Summer22">Summer 2022</option>
        </select>
      </div>

      <div class="dropdown" style="margin: 30px; display: inline">
        <select id="select3" name="course">
          <option value="#">Course ID</option>
          <option value="CSE303">CSE303/CSE303L</option>
        </select>
      </div>

      <input
        class="btn btn-primary"
        type="submit"
        value="View"
        style="margin: 30px; display: inline"
      />
    </form>

    

<table class="table table-bordered" style="width: 1000px">
      <thead class="thead-dark">
        <tr>
          <th scope="col">CLO/PLO</th>
          <th scope="col">Attempted</th>
          <th scope="col">Succefully Achieved</th>
          <th scope="col">Succefully Achieved(%)</th>
          <th scope="col">Failed to Achieved</th>
          <th scope="col">Failed to Achieved(%)</th>
        </tr>
      </thead>
      <tbody>
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $semester = $_POST['semester'];
  $course = $_POST['course'];
  if (empty($semester) || empty($course)) {
    echo "Select from drop down menu!";
  }
else{
    $servername = "localhost";
    $username = "username";
    $password = "";
    $database = "spms 3.0";

    $connection = new mysqli($servername, $username, $password, $database);
    
    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    $sql1 = "SELECT  (SELECT COUNT(CO1)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as Attemp,
    COUNT(CO1) as SA, COUNT(CO1)*100/(SELECT COUNT(CO1)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'SAP', (SELECT COUNT(CO1)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO1) as NSA, ((SELECT COUNT(CO1)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO1))*100/(SELECT COUNT(CO1)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'NSAP'
    FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND (CO1/(SELECT MAX(CO1)FROM course_ms))*100>=40 AND `ID` IS NOT NULL;";
    $result = $connection->query($sql1);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>CLO1</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $sql2 = "SELECT  (SELECT COUNT(CO2)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as Attemp,
    COUNT(CO2) as SA, COUNT(CO2)*100/(SELECT COUNT(CO2)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'SAP', (SELECT COUNT(CO2)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO2) as NSA, ((SELECT COUNT(CO2)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO2))*100/(SELECT COUNT(CO2)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'NSAP'
    FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND (CO2/(SELECT MAX(CO2)FROM course_ms))*100>=40 AND `ID` IS NOT NULL;";
    $result = $connection->query($sql2);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>CLO2</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $sql3 = "SELECT  (SELECT COUNT(CO3)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as Attemp,
    COUNT(CO3) as SA, COUNT(CO3)*100/(SELECT COUNT(CO3)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'SAP', (SELECT COUNT(CO3)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO3) as NSA, ((SELECT COUNT(CO3)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO3))*100/(SELECT COUNT(CO3)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'NSAP'
    FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND (CO3/(SELECT MAX(CO3)FROM course_ms))*100>=40 AND `ID` IS NOT NULL;";
    $result = $connection->query($sql3);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>CLO3</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $sql4 = "SELECT  (SELECT COUNT(CO4)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as Attemp,
    COUNT(CO4) as SA, COUNT(CO4)*100/(SELECT COUNT(CO4)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'SAP', (SELECT COUNT(CO4)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO4) as NSA, ((SELECT COUNT(CO4)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL)-COUNT(CO4))*100/(SELECT COUNT(CO4)FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND `ID` IS NOT NULL) as 'NSAP'
    FROM course_ms WHERE Semester = '$semester' AND `Course ID`='$course' AND (CO4/(SELECT MAX(CO4)FROM course_ms))*100>=40 AND `ID` IS NOT NULL;";
    $result = $connection->query($sql4);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>CLO4</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $sql5="SELECT CLO1,CLO2,CLO3,CLO4 FROM `course_outine` WHERE `Course ID`='$course';";
    $result = $connection->query($sql5);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }

    foreach($result as $data){
      $clo1 = $data['CLO1'];
      $clo2 = $data['CLO2'];
      $clo3 = $data['CLO3'];
      $clo4 = $data['CLO4'];

      $result = $connection->query($sql1);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>$clo1</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $result = $connection->query($sql2);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>$clo2</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $result = $connection->query($sql3);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>$clo3</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }

        $result = $connection->query($sql4);
    if (!$result){
        die("Invalid query: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){ echo "
        <tr>
            <td>$clo4</td>
            <td>$row[Attemp]</td>
          <td>$row[SA]</td>
          <td>$row[SAP]</td>
          <td>$row[NSA]</td>
          <td>$row[NSAP]</td>
        </tr>
        "; }
    }

    
      }
      }
?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</div>
</div>
	<!-- General JS Scripts -->
	<script src="assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>


    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>