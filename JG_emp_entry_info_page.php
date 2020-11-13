<!DOCTYPE html>
<?php
    include_once("dbConnection.php");
    list($conn1,$conn2,$conn3)= ConnectToDB();
    if(isset($_POST['submit'])){

    $username = $_POST["txtUsername"];
    $email = $_POST["txtEmail"];
    $department = $_POST["txtdepart"];
    $phone = $_POST["txtPhone"];
    $query = "INSERT INTO `tbl_emp_info` (`id`, `full_name`, `department`, `email`, `contact`) VALUES (NULL, '$username', '$department', '$email ', ' $phone')";
    if(mysqli_query($conn2, $query)){
        $msg="New Faculty has been added";
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
    <link rel="stylesheet" href="..\JG_CSS_files/JG_emp_entry_info_page.css"/>
  </head>
  <body>
   <?php require('JG_SubHeading.php')?>
   <div class="emp_container">
				<h2>Add Faculty</h2>
				<div class="inner_container">
				<form id="frmInsertUpdateUser" method="post" action="" >
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
                      <label for="inputEmail4">Full Name</label>
                      <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Email</label>
                      <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="example@gmail.com" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                    <label for="txtphone">Contact</label>
                    <input type="tel" class="form-control" id="txtPhone" name="txtPhone" placeholder="Cell no.">
                  </div>
                  </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">Department</label>
                      <input type="text" class="form-control" id="txtdepart" name="txtdepart" placeholder="Department" required>
                    </div>
                  </div>
                  <div class="form-row form-group">
                      <button type="submit" class="btn" id="btnSignUp" name="submit">Add Faculty</button>
                    </div>
                </form>
				</div>
   </div>
    <?php require('..\JG_Footer.php')?>
  </body>
</html>