
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Complaint Management System</title>
    <link href="users/assets/css/bootstrap.css" rel="stylesheet">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	<title>CMS | User Login</title>

	<!-- Bootstrap core CSS -->
	<link href="users/assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<!-- <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Red Hat Text' rel='stylesheet' /> -->
	<!-- Custom styles for this template -->
	<link href='https://fonts.google.com/specimen/Spartan' rel='stylesheet'>
	<link href="users/assets/css/style.css" rel="stylesheet">
	<link href="users/assets/css/style-responsive.css" rel="stylesheet">
	<link href="users/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="users/assets/css/half-slider.css" rel="stylesheet">
	<script type="text/javascript">
		function valid() {
			if (document.forgot.password.value != document.forgot.confirmpassword.value) {
				alert("Password and Confirm Password Field do not match  !!");
				document.forgot.confirmpassword.focus();
				return false;
			}
			return true;
		}
	</script>
</head>

<body>

    <!-- Navigation -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://localhost/cms/img/3.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #3d00be">
            <div class="container">
            </header>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand m-3" style="color: white"  href="./index.html">COMPLAINT MANAGEMENT SYSTEM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li>
                        <a style="color:white" href="http://localhost/cms/users/">User Login</a>
                    </li>
                    <li>
                        <a style="color:white"  href="http://localhost/cms/users/registration.php">User Registration</a>
                    </li>
                    <li>
                        <a style="color:white"  href="http://localhost/cms/admin/">admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://localhost/cms/img/3.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
        </div>
        

        <!-- Controls -->


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Complaint Management System</h1>
            </div>
        </div>
        <hr>
        <!-- Starts Main Body -->
        <div id="login-page" style="background-color: white;">
            <div class="container" >
                <h3 style="color:grey">COMPLAINT MANAGEMENT SYSTEM | LOGIN</h3>
                <form class="form-login" name="login" method="post" >
                    <h2 class="form-login-heading"style="background-color: #3d00be">sign in now</h2>
                    <p style="padding-left:4%; padding-top:2%;  color:red">
                        <?php if ($errormsg) {
                            echo htmlentities($errormsg);
                        } ?></p>
    
                    <p style="padding-left:4%; padding-top:2%;  color:green">
                        <?php if ($msg) {
                            echo htmlentities($msg);
                        } ?></p>
                    <div class="login-wrap">
                        <input type="text" class="form-control" name="username" placeholder="User ID" required autofocus>
                        <br>
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                        <label class="checkbox">
                            <span class="pull-right">
                                <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
    
                            </span>
                        </label>
                        <button class="btn btn-theme btn-block" name="submit" type="submit" style="background-color: #3d00be"><i class="fa fa-lock"></i> SIGN IN</button>
                        <hr>
                </form>
                <div class="registration">
                    Don't have an account yet?<br />
                    <a class="" href="users/registration.php">
                        Create an account
                    </a>
                </div>
    
            </div>
    
            <!-- Modal -->
            <form class="form-login" name="forgot" method="post">
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your details below to reset your password.</p>
                                <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control" required><br>
                                <input type="text" name="contact" placeholder="contact No" autocomplete="off" class="form-control" required><br>
                                <input type="password" class="form-control" placeholder="New Password" id="password" name="password" required><br />
                                <input type="password" class="form-control unicase-form-control text-input" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" required>
    
    
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-theme" type="submit" name="change" onclick="return valid();">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </form>
            
    
        </div>
        <!-- Ends Main Body -->
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; | COMPLAINT MANAGEMENT SYSTEM <b><a href="http://www.ssipgujarat.in/sgh201920/"
                                target="_blank">SGH2020</a></b></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
    <!-- js placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!--BACKSTRETCH-->
	<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
	<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>

</body>

</html>