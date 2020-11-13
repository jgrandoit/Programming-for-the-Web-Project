<!DOCTYPE html>
<?php
    include_once("dbConnection.php");
    list($conn1,$conn2,$conn3)= ConnectToDB();
    if(isset($_POST['submit'])){

    $studentname = $_POST["txtname"];
    $registration_no = $_POST["txtregist"];
    $course_code = $_POST["txtcourse_code"];
    $subject = $_POST["txtsubject"];
    $obtain_grades = $_POST["txtgrades"];
    $total_grades = $_POST["txttgrades"];
    $query = "INSERT INTO `student_record` (`id`, `registration_no`, `student_name`, `course_code`, `subjects`, `obtain_grades`, `total_grades`) VALUES (NULL, '$registration_no', '$studentname', '$course_code', '$subject', '$obtain_grades', '$total_grades')";
    if(mysqli_query($conn3, $query)){
        $msg="Student Record has been added";
    }
        else{
            $error="Operation unsuccessful,Due to some error";
        }
        }
?>
<html lang="en">
  <head>
    <title>Computer Science (CS340)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="..\JG_CSS_files/JG_Container.css">    
    <link rel="stylesheet"  href="..\JG_CSS_files/JG_Heading.css"/>
    <link rel="stylesheet" href="..\JG_CSS_files/JG_Footer.css"/>
    <link rel="stylesheet" href="..\JG_CSS_files/JG_student_entry_score_page.css"/>
  </head>
  <body>
   <?php require('JG_SubHeading.php')?>
   <div class="faculty_container">
       <h2>Add Student</h2>
				<div class="inner_container"> 
				<form id="frmInsertUpdateUser" method="post" action="">
                 <div class="form-row">
                     <div class="form-group">
                    <?php
                     if(isset($error)){
                       echo "<span class='pull-right' style='color:red;'>$error</span>";
                        }
                      elseif(isset($msg)){
                        echo "<span class='pull-right' style='color:green;'>$msg</span>";
                        }
                    ?>
                </div>
                 </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="inputEmail4">Registration No.</label>
                      <input type="text" class="form-control" id="txtregist" name="txtregist" placeholder="Registration No." required>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Student Name</label>
                      <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Student Name" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="inputEmail4">Course Code</label>
                      <input type="text" class="form-control" id="txtcourse_code" name="txtcourse_code" placeholder="Course Code" required>
                    </div>
                  </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Subject</label>
                      <input type="text" class="form-control" id="txtsubject" name="txtsubject" placeholder="Subject" required>
                    </div>
                  </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Obtain Score</label>
                      <input type="text" class="form-control" id="txtgrades" name="txtgrades" placeholder="Obtain Score" required>
                    </div>
                  </div>
                 <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Total Score</label>
                      <input type="text" class="form-control" id="txttgrades" name="txttgrades" placeholder="Total Score" required>
                    </div>
                  </div>
                  <div class="form-row form-group">
                      <button type="submit" class="btn" id="btnSignUp" name="submit">Add Student</button>
                  </div>
                </form>
				</div>
   </div>
    <?php require('..\JG_Footer.php')?>
  </body>
</html>