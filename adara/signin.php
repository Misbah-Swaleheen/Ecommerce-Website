<?php 
    include('main.php');
    $user = $obj->select();
    if (isset($_SESSION['user'])){
        echo("<script>window.location.href='index.php'</script>");         
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Adara - Modern & Multipurpose eCommerce Template</title>
  <!-- loader-->

  <!--favicon-->
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme7">


<!-- Start wrapper-->
 <div id="wrapper">

 <div class="height-100v d-flex align-items-center justify-content-center">
 
	<div class="card card-authentication1 mb-0">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="img/w_logo.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>

          <span style="color:red"><?php 
              
                if (isset($_POST['btn1'])) {
                    # code...
                    if (!$user) {
                        # code...
                        ?>
                    <span>Invalid email and Password</span>
                        <?php 
                    }
                    else {
                        //hum user ko pehchan kr yaad kr lete hn
                      
                        $_SESSION['user'] = $user['email'];
                     
                        //humm ussko  uski user type/role ke mutabiq uske desired page pr redirect krdete hn
                        // header('location:user.php');
                        echo("<script>window.location.href='index.php'</script>");
                    
                    }
            
                } 
          ?></span>
		    <form method="post" action="">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="email" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username">
				  <div class="form-control-position">
					  <i class="icon-email"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="authentication-reset-password.html">Reset Password</a>
			 </div>
			</div>
			 <button type="submit" name="btn1" class="btn btn-light btn-block">Sign In</button>
			  <div class="text-center mt-3">Sign In With</div>
			  
			 <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
			 </div>
			</div>
			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Do not have an account? <a href="signup.php"> Sign Up here</a></p>
		  </div>
	     </div>
	   </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->

  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	
  <!-- Metismenu js -->

</body>
</html>
<?php 
    } 
?>
