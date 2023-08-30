<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
    // header("location:dashboard.php");  
 }  
 ob_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Transys | Login In</title>

    <!-- Site favicon -->
    
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="admin/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="admin/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="admin/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="admin/vendors/images/register-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">TranSys </h2>
                        </div>
                        <form method="POST" action="">
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                    <label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="admin/vendors/images/person.svg" class="svg" alt=""></div>
										<span>Welcome</span>
										This is Transys
									</label>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" name="user" placeholder="Username">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                            
                                <input type="password" class="form-control form-control-lg" id="myInput" name="pass" placeholder="password"> 
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="fa fa-eye-slash" onclick="myFunction()"></i></span>
                                    <script>
                                        function myFunction() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                    }
                                }
                                </script>
                                </div>
                            </div>
                            <div class="row pb-1">
                            
                                       
                                    
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                   
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                   
                                </div>
                               

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        
											<!-- use code for form submit -->
											<input class="btn btn-primary btn-lg btn-block" name="sub" type="submit" value="Sign In">
										
                                        <!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-12 pt-3">
                                <div class="alert alert-success" role="alert">
                                        <t>Don't have an account?</t><strong><a href="client/register.php"> Register</a></strong>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
   
    <!-- js -->
    <script src="admin/vendors/scripts/core.js"></script>
    <script src="admin/vendors/scripts/script.min.js"></script>
    <script src="admin/vendors/scripts/process.js"></script>
    <script src="admin/vendors/scripts/layout-settings.js"></script>
</body>

</html>
<?php
   include('db.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      //$mypassword = md5($mypassword);
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: client/index.php");
         
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
      
   }
   ob_end_flush();
?>
