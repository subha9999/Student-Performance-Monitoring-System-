<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Create Course outline</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="question.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
	

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
						<a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Log out</span></a>
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
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>

				<li>
                    <a href="course_outline.html">
						<i class='bx bx-columns icon' ></i> 
						Course Outline
					</a>
                </li>

                <li>
                    <a href="#">
						<i class='bx bxs-notepad icon' ></i> 
						Questions
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                    	<li><a href="spring.html">Spring</a></li>
					    <li><a href="Summer.html">Summer</a></li>
					    <li><a href="Autumn.html">Autumn</a></li>
                    </ul>
                </li>

				<li>
                    <a href="stud_info.html">
						<i class='bx bxs-widget icon' ></i> 
                        Students
					</a>
                </li>
                <li>
                    <a href="PLO_CO_maping.html">
						<i class='bx bxs-bar-chart-alt-2 icon' ></i> 
						PLO Analysis
					</a>
                </li>
				<li>
                    <a href="assessment_data_entry.html">
						<i class='bx bxs-widget icon' ></i> 
						Assesment Data
					</a>
                </li>
				<li >
					<a href="Evaluting_data.html">
						<i class="bx bx-columns icon"></i>
						Evaluting Data
					</a>
				</li>
				
                    <a href="faculty_eva.html">
						<i class='bx bxs-widget icon' ></i> 
						Review
					</a>
                </li>

				<li>
                    <a href="#">
						<i class='bx bxs-bar-chart-alt-2 icon' ></i> 
						Spider Chart
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                        <li><a href="">PLO's</a></li>
                        <li><a href="">CO's</a></li>
                    </ul>
                </li>
				<li>
                    <a href="log out.html">
						<i class='fa fa-sign-out icon' ></i> 
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
		<div class="container">
		 <div class="Course-box">
			<h2>Create New Course Outline</h2>
			<br><br>
			  <form id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<label id="name-label">Course Code:</label><br>
				<input id="name" type="text" name="c_id" required><br><br>
				<label id="name-label">Course Title:</label><br>
				<input id="name" type="text" name="c_title" required><br><br>
				<label id="name-label">Course Type:</label><br>
                <input id="name" type="text" name="c_type" required><br><br>
				<label id="name-label">Credit Value:</label><br>
                <input id="name" type="text" name="c_val" required><br><br>
                <label id="name-label">Contact Hour Per Week:</label><br>
                <input id="name" type="text" name="c_hr" required><br><br>
                <label id="name-label">Course Description:</label><br>
                <textarea id="msg" name="c_des" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
                <label id="name-label">Course Objective:</label><br>
				<textarea id="msg" name="c_obj" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
				<label>Course Policy:</label><br>
				<textarea id="msg" name="c_pol" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
				<label>Academic Dishonesty Section:</label><br>
				<textarea id="msg" name="ads" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
				<label>Student With Disabilities and Stress:</label><br>
				<textarea id="msg" name="swdas" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
				<label>Non_discrimination:</label><br>
				<textarea id="msg" name="nd" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
				<label>Course Content:</label><br>
				<textarea id="msg" name="c_cont" rows="4" cols="50" placeholder="Enter Text Here"></textarea><br><br>
				<label>CLO1:</label><br>
				<input id="name" type="text" name="clo1" required><br><br>
				<label>CLO2:</label><br>
				<input id="name" type="text" name="clo2" required><br><br>
				<label>CLO3:</label><br>
				<input id="name" type="text" name="clo3" required><br><br>
				<label>CLO4:</label><br>
				<input id="name" type="text" name="clo4" required><br><br>
				<label>Additional Material:</label><br>
				<textarea id="msg" name="add_mat" rows="4" cols="50" placeholder="Enter Text Here"></textarea>
                <br>
				<br>
				<input name="create"
				class="btn btn-primary"
				type="submit"
				value="Submit"
				style="margin: 30px; display: inline"
      			/>
				<closeform></closeform>
			</form>

			<?php
			require("fpdf.php");
			
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					// collect value of input field
					$c_id = $_POST['c_id'];
					$c_title = $_POST['c_title'];
					$c_type = $_POST['c_type'];
					$c_val = $_POST['c_val'];
					$c_hr = $_POST['c_hr'];
					$c_des = $_POST['c_des'];
					$c_obj = $_POST['c_obj'];
					$c_pol = $_POST['c_pol'];
					$ads = $_POST['ads'];
					$swdas = $_POST['swdas'];
					$nd = $_POST['nd'];
					$c_cont = $_POST['c_cont'];
					$clo1 = $_POST['clo1'];
					$clo2 = $_POST['clo2'];
					$clo3 = $_POST['clo3'];
					$clo4 = $_POST['clo4'];
					$add_mat = $_POST['add_mat'];
	


					$servername = "localhost";
					$username = "username";
					$password = "";
					$database = "spms 3.0";

					$connection = new mysqli($servername, $username, $password, $database);

					if($connection->connect_error){
						die("Connection failed: " . $connection->connect_error);
					}

					$sql = "INSERT INTO `create_course_ot` (course_id, course_title, course_type, cred_val, contact_hr, c_des, c_obj, c_pol, acd_dis, swd_sss, ndps, cc, clo1, clo2, clo3, clo4, add_mat)
					VALUES ('$c_id', '$c_title', '$c_type', '$c_val', '$c_hr', '$c_des', '$c_obj', '$c_pol', '$ads', '$swdas', '$nd', '$c_cont', '$clo1', '$clo2', '$clo3', '$clo4', '$add_mat');";
						
					$result = $connection->query($sql);

					if (!$result){
						die("Invalid query: " . $connection->error);
					}
					

					$pdf = new FPDF();
					if(isset($_POST['create' ]))
					{
						$pdf->AddPage();
						$pdf->SetFont("Arial","B",19);
						$pdf->Cell(50,10,"c_id",1,0);
						$pdf->Cell(50,10, $c_id,1,1);
						$pdf->Cell(50,10,"c_title",1,0);
						 $pdf->Cell(50,10, $c_title,1,1);
						 $pdf->Cell(50,10,"c_type",1,0);
						 $pdf->Cell(50,1, $c_type,1,1);
						 $pdf->Cell(50,10,"c_val",1,0);
						 $pdf->Cell(50,10, $c_val,1,1);
						 $pdf->Cell(50,10,"c_hr",1,0);
						 $pdf->Cell(50,10, $c_hr ,1,1);
						 $pdf->Cell(50,10,"c_des",1,0);
						 $pdf->Cell(50,10, $c_des,1,1);
						 $pdf->Cell(50,10,"c_obj",1,0);
						 $pdf->Cell(50,10, $c_obj,1,1);
						 $pdf->Cell(50,10,"c_pol",1,0);
						 $pdf->Cell(50,10, $c_pol,1,1);
						 $pdf->Cell(50,10,"ads",1,0);
						 $pdf->Cell(50,10, $ads,1,1);
						 $pdf->Cell(50,10,"swdas",1,0);
						 $pdf->Cell(50,10, $swdas,1,1);
						 $pdf->Cell(50,10,"nd",1,0);
						 $pdf->Cell(50,10, $nd,1,1);
						 $pdf->Cell(50,10,"c_cont",1,0);
						 $pdf->Cell(50,10, $c_cont,1,1);
						 $pdf->Cell(50,10,"clo1",1,0);
						 $pdf->Cell(50,10, $clo1,1,1);
						 $pdf->Cell(50,10,"clo2",1,0);
						 $pdf->Cell(50,10, $clo2,1,1);
						 $pdf->Cell(50,10,"clo3",1,0);
						 $pdf->Cell(50,10, $clo3,1,1);
						 $pdf->Cell(50,10,"clo4",1,0);
						 $pdf->Cell(50,10, $clo4,1,1);
						 
					$pdf->Output();
					
				}}
			?>
				<br><br><br><br>
			</div>
		</div>
		</div>
	</div>
	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="valid.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>
 
    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>