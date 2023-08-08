
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Higher Authority Dashboard</title>

	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="question.css">
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
                          Higher Authority
                          <img src="High_auth.png" alt="">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href=""><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
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
            <a href="higher_auth_dashboard.html" class="active">
              <i class='bx bxs-dashboard icon' ></i> Dashboard
            </a>
          </li>
  
          <li>
            <a href="h.auth_course_outline.html">
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
                <li><a href="h.auth_spring.html">Spring</a></li>
                <li><a href="h.auth_summer.html">Summer</a></li>
                <li><a href="h.auth_autumn.htmll">Autumn</a></li>
              </ul>
              </li>
  
            <li>
              <a href="">
              <i class='bx bxs-bar-chart-alt-2 icon' ></i> 
              PLO Analysis
            </a>
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
    <div class="content-header">
      <h1>Dashboard</h1>
      <p></p>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
              <div class="card-block">
                <h6 class="m-b-20"> <a href="" style="text-decoration: none;color:white;">
                    Total Students</a> </h6>
                <h2 class="text-right"><i class="fas fa-user-graduate text-light"></i><span></span></h2>
                
              </div>
            </div>
          </div>
      
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
              <div class="card-block">
                <h6 class="m-b-20"><a href="" style="text-decoration: none;color:white;">Total Teacher</a> </h6>
                <h2 class="text-right"><i class="fas fa-chalkboard-teacher text-light"></i><span></span></h2>
                
              </div>
            </div>
          </div>
      
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
              <div class="card-block">
                <h6 class="m-b-20"><a href="" style="text-decoration: none;color:white;">
                    Total Courses</a></h6>
               <h2 class="text-right"><i class="fas fa-book text-light"></i><span></span></h2>
                
              </div>
            </div>
          </div>
      
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
              <div class="card-block">
                <h6 class="m-b-20"><a href="" style="text-decoration: none;color:white;">
                    Total Questions</a></h6>
                <h2 class="text-right"><i class="fas fa-question-circle text-light"></i><span></span></h2>
                
              </div>
            </div>
          </div>
    
          
        </div>
      </div>
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
