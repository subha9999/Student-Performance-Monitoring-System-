!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Add Course Outline</title>

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
			<h2>All Course Outline</h2>
            <br>
		 </div>
		 <form method="post" action="generate_pdf.php">
		 <div class="search">
			<input type="text" class="searchTerm" placeholder="Search" name="c_id">
			<button type="submit" class="searchButton" name="search">
			  <i class="fa fa-search"></i>
		   </button>
		</form>
		 </div><br>
			<br><br><br><br>
		  </div>
		</div>
		</div>
	</div>

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