<!DOCTYPE html>
<?php
    include_once("dbConnection.php");
    list($conn1,$conn2,$conn3)= ConnectToDB();
    if(isset($_POST['submit'])){
    
    $password = $_POST["txtpassword"];
    $user_name= $_POST["txtname"];
    $email = $_POST["txtemail"];
    $query = "INSERT INTO `users` (`id`, `user_name`, `email`, `password`) VALUES (NULL, '$user_name', '$email', ' $password');";
    if(mysqli_query($conn1, $query)){
        $msg="Account Created";
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
    <link rel="stylesheet" href="../JG_CSS_files/JG_Sign_up.css"/>
  </head>
  <body>
   <?php require('JG_SubHeading.php')?>
    <div class="faculty_container">
				<h2>Sign Up </h2>
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
                      <label for="txtname">User Name</label>
                      <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="txtCode">Password</label>
                      <input type="text" class="form-control" id="txtpassword" name="txtpassword" placeholder="Class Code(Course Code)" required>
                    </div>
                  </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="txtemail">email</label>
                      <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email" required>
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