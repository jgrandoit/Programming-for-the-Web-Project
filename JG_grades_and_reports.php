<!DOCTYPE html>
<?php
    include_once("dbConnection.php");
    list($conn1,$conn2,$conn3)= ConnectToDB();

?>
<html lang="en">
  <head>
    <title>Computer Science (CS340)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="..\JG_CSS_files/JG_Container.css">    
    <link rel="stylesheet"  href="..\JG_CSS_files/JG_Heading.css"/>
    <link rel="stylesheet" href="..\JG_CSS_files/JG_Footer.css"/>
    <link rel="stylesheet" href="..\JG_CSS_files/JG_grades_and_reports.css"/>
  </head>
  <body>
   <?php require('JG_SubHeading.php')?>
    <div class="faculty_container">
       <h2>Student Grades/Report Card</h2>
        <form id="frmInsertUpdateUser" method="post" action="">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="inputf">Student Registration no.</label>
                      <input type="text" class="form-control" id="txtregist" name="txtregist" placeholder="Registration no.">
                    </div>
                      <div class="form-group">
                      <label for="inputPassword4">Course Code</label>
                      <input type="text" class="form-control" id="txtCode" name="txtCode" placeholder="Class Code(Course Code)">
                    </div>
                      <div class="form-group">
                      <label for="inputPassword4">Subject</label>
                      <input type="text" class="form-control" id="txtsubject" name="txtsubject" placeholder="Subject">
                    </div>
                  <div class="form-group">
                      <button type="submit" class="btn" id="btnSignUp" name="submit">Search</button>
                  </div>
                  </div>
                </form>
				<div class="inner_container"> 
				    <table  width="100%" id="report_table">
				<?php
                    if(isset($_POST['submit'])){
                            $registration_no = $_POST["txtregist"];
                            $course_code = $_POST["txtCode"];
                            $subject = $_POST["txtsubject"];
                         $query = "SELECT * FROM student_record WHERE  	course_code='$course_code' OR registration_no='$registration_no'OR subjects='$subject'";
                            $student_record=mysqli_query($conn3,$query);
                    if ($student_record)
                        {  
                            $rows = mysqli_num_rows($student_record);
                        if($rows=0){
                            echo "<span class='pull-right' style='color:green;'>NO record found;</span>";
                        }
                            while ($row = mysqli_fetch_array($student_record))
                            {
                                echo "<tr><th colspan='2'><h1>Report Card</h1></th></tr>";
                                echo "<tr><td class='tr_color'>Student Name</td>
                                      <td>" . $row['student_name'] . "</td></tr>";
                                echo "<tr><td  class='tr_color'>Registration No.</td>
                                      <td>" . $row['registration_no'] . "</td></tr>";
                                echo "<tr><td  class='tr_color'>Course Code</td>
                                      <td>" . $row['course_code'] . "</td></tr>";
                                echo "<tr><td class='tr_color'>Subject</td>
                                      <td>" . $row['subjects'] . "</td></tr>";
                                echo "<tr><td class='tr_color'>Obtain Grades</td>
                                      <td>:" . $row['obtain_grades'] . "</td></tr>";
                                echo "<tr><td class='tr_color'>Total Grades</td>
                                      <td>:" . $row['total_grades'] . "</td></tr>";
                            }
                        }
                 }
				?>
			</table>
				</div>
   </div>
    <?php require('..\JG_Footer.php')?>
  </body>
</html>