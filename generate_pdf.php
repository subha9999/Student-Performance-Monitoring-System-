<?php

require("fpdf.php");

$pdf = new FPDF();
if(isset($_POST['search']))
{
    $c_id = $_POST['c_id'];
    $servername = "localhost";
					$username = "username";
					$password = "";
					$database = "spms 3.0";

					$connection = new mysqli($servername, $username, $password, $database);

					if($connection->connect_error){
						die("Connection failed: " . $connection->connect_error);
					}

                    $sql = "SELECT * FROM `create_course_ot` WHERE course_id='$c_id'";

					$result = $connection->query($sql);

					if (!$result){
						die("Invalid query: " . $connection->error);
					}

                    foreach($result as $data){

                    $c_id = $data['course_id'];
					$c_title = $data['course_title'];
					$c_type = $data['course_type'];
					$c_val = $data['cred_val'];
					$c_hr = $data['contact_hr'];
					$c_des = $data['c_des'];
					$c_obj = $data['c_obj'];
					$c_pol = $data['c_pol'];
					$ads = $data['acd_dis'];
					$swdas = $data['swd_sss'];
					$nd = $data['ndps'];
					$c_cont = $data['cc'];
					$clo1 = $data['clo1'];
					$clo2 = $data['clo2'];
					$clo3 = $data['clo3'];
					$clo4 = $data['clo4'];
					$add_mat = $data['add_mat'];
    }

    $pdf->AddPage();
    $pdf->SetFont("Arial","B",12);
    $pdf->Cell(50,10,"Course_ID",4,2);
    $pdf->Cell(50,10, $c_id,1,1);
    $pdf->Cell(50,10,"Course_title",4,2);
     $pdf->Cell(50,10, $c_title,1,1);
     $pdf->Cell(50,10,"Course_type",4,2);
     $pdf->Cell(50,10, $c_type,1,1);
     $pdf->Cell(50,10,"Course_val",4,2);
     $pdf->Cell(50,10, $c_val,1,1);
     $pdf->Cell(50,10,"Course_hr",4,2);
     $pdf->Cell(50,10, $c_hr ,1,1);
     $pdf->Cell(50,10,"Course Description",4,2);
     $pdf->Cell(50,10, $c_des,1,1);
     $pdf->Cell(50,10,"Course_objective",4,2);
     $pdf->Cell(50,10, $c_obj,1,1);
     $pdf->Cell(50,10,"Course_policy",4,2);
     $pdf->Cell(50,10, $c_pol,1,1);
     $pdf->Cell(50,10,"Academic Dishonesty Section:",4,2);
     $pdf->Cell(50,10, $ads,1,1);
     $pdf->Cell(50,10,"Student With Disabilities and Stress:",4,2);
     $pdf->Cell(50,10, $swdas,1,1);
     $pdf->Cell(50,10,"Non_discrimination:",4,2);
     $pdf->Cell(50,10, $nd,1,1);
     $pdf->Cell(50,10,"Course Content:",4,2);
     $pdf->Cell(50,10, $c_cont,1,1);
     $pdf->Cell(50,10,"clo1",4,2);
     $pdf->Cell(50,10, $clo1,1,1);
     $pdf->Cell(50,10,"clo2",4,2);
     $pdf->Cell(50,10, $clo2,1,1);
     $pdf->Cell(50,10,"clo3",4,2);
     $pdf->Cell(50,10, $clo3,1,1);
     $pdf->Cell(50,10,"clo4",4,2);
     $pdf->Cell(50,10, $clo4,1,1);
     
$pdf->Output();

}