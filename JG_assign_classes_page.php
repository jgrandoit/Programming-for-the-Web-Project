<!DOCTYPE html>
<?php
    include_once("dbConnection.php");
    list($conn1,$conn2,$conn3)= ConnectToDB();
    if(isset($_POST['submit'])){
    
    $class_code = $_POST["txtCode"];
    $faculty_name= $_POST["txtname"];
    $subject = $_POST["txtsubject"];
    $query = "INSERT INTO `tbl_course_assigned` (`id`, `faculty_name`, `class_code`, `subject`) VALUES (NULL, '$faculty_name', '$class_code', '$subject');";
    if(mysqli_query($conn2, $query)){
        $msg="Course has been assigned";
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
    <link rel="stylesheet" href="..\JG_CSS_files/JG_assign_classes_page.css"/>
  </head>
  <body>
   <?php require('JG_SubHeading.php')?>
    <div class="faculty_container">
				<h2>Faculty Assignment </h2>
				<div class="inner_container">
				<form id="frmInsertUpdateUser" method="post" action="">
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
                  <div class="form-row">
                    <div class="form-group">
                      <label for="inputEmail4">Faculty Name</label>
                      <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Class Code</label>
                      <input type="text" class="form-control" id="txtCode" name="txtCode" placeholder="Class Code(Course Code)" required>
                    </div>
                  </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Subject</label>
                      <input type="text" class="form-control" id="txtsubject" name="txtsubject" placeholder="Subject" required>
                    </div>
                  </div>
                  <div class="form-row form-group">
                      <button type="submit" class="btn" id="btnSignUp" name="submit">Assign Faculty</button>
                  </div>
                </form>
				</div>
   </div>
    <?php require('..\JG_Footer.php')?>
  </body>
</html>