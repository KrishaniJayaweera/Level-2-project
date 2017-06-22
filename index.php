<?php 


$db = mysqli_connect("localhost", "root", "", "elves");
if(isset($_POST['register-btn'])){
	session_start();
	$role = "customer";
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contactNo = $_POST['contactNo'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
	
		if (strlen($password) < 6 OR strlen($password) > 20) {
			$error .= '<p class="error">Password should be within 6-20 characters long.</p>';
		}
	
	if($password == $password2){
		$password = md5($password);
		// insertion to users table
      $sql = "INSERT INTO users(username, password, email, name, address, contactNo, role) VALUE('$username', '$password', '$email', '$name', '$address', '$contactNo', '$role')";
      	mysqli_query( $db,$sql );
		
		//$userId = $db->insert_id;
		
		//$sql2 = "SELECT * FROM users WHERE id = $userId";
		//$result2 = mysqli_query( $db,$sql2 );
		
		//$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
		 
		{
		
			header("location:order.php");
		}
		}
	else{
		$_SESSION['message'] = "The two passwords do not match";
	}
	
}
?>
<?php
   
   $db = mysqli_connect("localhost", "root", "", "elves");

if(isset($_POST['submit-btn'])){
  session_start();
   
   
      
     $username = $_POST['username'];
     $password = md5($_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
	  $result = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($result);
	  
	  if($count == 1) {
	     //$result1 = mysqli_query($db,"SELECT role FROM users WHERE id = $row[id]");
		 
		 $result2 = mysqli_query($db,"SELECT emp_user_id  FROM users WHERE id = $row[id]");
		 $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
		 
		 if($row2['emp_user_id'] == 0){
		   
			//session_start();
      //Store the name in the session
      //$_SESSION['userlogin'] = $username;
			
		  header("location:order.php");
			// }
	    // }
	   }else{
		 
	     $result1 = mysqli_query($db,"SELECT role, Designation FROM employee, users WHERE Emp_id = emp_user_id AND emp_user_id = $row2[emp_user_id]");
	   while($row1 = mysqli_fetch_array($result1))
     {
	   if($row1['role'] == "Employee"){
		   if($row1['Designation'] == "Chief Valuar"){
		   
		       session_start();
              //Store the name in the session
              $_SESSION['userlogin'] = $username;
		   
		  header("location:Inbox.php");
		   }
		    if($row1['Designation'] == "Accountant"){
		   session_start();
          //Store the name in the session
          $_SESSION['userlogin'] = $username;
		   
		  header("location:accountantInbox.php");
	   }
	   }
	   
	  
	  }}}else {
         $error = "Your Login Name or Password is invalid";
      }
	  
	 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>R & T Vehicle Valuation Company</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">R & T Vehicle Valuation Company</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
					<li class="page-scroll">
                        <a href="#portfolio">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/img6.png" alt="">
                    <div class="intro-text">
                        <span class="name">Welcome</span>
                        <hr class="star-light">
                        <span class="skills">Feel Your Comfortable Life with Best Services</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sign Up</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div id="register" class="animate form">
			<form method="post"  action="index.php" onSubmit="alert('Successfully registered! your user id is <?php echo $row['id']; ?>');"> 
			      <div class="col-lg-6 ">
				 
				<p>	<label for="usernamesignup" class="uname" data-icon="u"> Your name</label></p>
				</div>
				<div class="col-lg-6 ">	
				<p>	<input id="usernamesignup" name="name" required="required" type="text" placeholder="mysuperusername690" /></p>
				</div>
				
				<div class="col-lg-6 ">
				 
				<p>	<label for="usernamesignup" class="uname" data-icon="u"> Contact No</label></p>
				</div>
				<div class="col-lg-6 ">	
				<p>	<input id="usernamesignup" name="contactNo" required="required" type="text" placeholder="mysuperusername690" /></p>
				</div>
				<div class="col-lg-6 "> 
				<p>	<label for="usernamesignup" class="uname" data-icon="u">Address</label></p>
				</div>
				<div class="col-lg-6 ">
				<p>	<input id="usernamesignup" name="address" required="required" type="text" placeholder="mysuperusername690" /></p>
				</div>
				<div class="col-lg-6 ">
				<p>	<label for="usernamesignup" class="uname" data-icon="u">Email</label></p>
				</div>
				<div class="col-lg-6 ">
				<p>	<input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/></p> 
				</div>
				<div class="col-lg-6 ">
				 <p>	<label for="usernamesignup" class="uname" data-icon="u"> User name</label></p>
				</div>
				<div class="col-lg-6 ">	
				<p>	<input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" /></p>
				</div>
				<div class="col-lg-6 "> 
				<p>	<label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label></p>
				</div>
				<div class="col-lg-6 ">
				<p>	<input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/></p>
				</div>
				<div class="col-lg-6 ">
				<p>	<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label></p>
				</div>
				<div class="col-lg-6 ">
				<p>	<input id="passwordsignup_confirm" name="password2" required="required" type="password" placeholder="eg. X8df!90EO"/></p>
				</div>
				
				<p class="signin button"> 
				<p>	<input type="submit" name="register-btn" value="Sign up"/> </p>
				</p>
				<p class="change_link">  
					Already a member ?
					<a href="#tologin" class="to_register"> Go and log in </a>
				</p>
			 </div>
			</form>
		</div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>R & T Vehicle Valuation Centre has been established as a licensed valuer (Registration No.LASL/V/087)with its registered office at No.95, Hospital Road, Kalubowila,Dehiwala.</p>
                </div>
                <div class="col-lg-4">
                    <p>We issue valuation reports in our centre & at your door step on your request by our mobile team for all types of vehicles, earth moving machineries of all establishments including commercial institutions, banks& government departments at the best market rate. </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                         Join with us and get best services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    
                        <div id="container_demo" >
	<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
	<a class="hiddenanchor" id="toregister"></a>
	<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">
		<div id="login" class="animate form">
			<form method="post" action="index.php" autocomplete="on"> 
				<h1>Log in</h1> 
				<div class="col-lg-6 ">
				<p> 
					<label for="username" class="uname" data-icon="u" > Username </label>
				</p>
				</div>
				<div class="col-lg-6 ">
				<p>
					<input id="username" name="username" required="required" type="text" placeholder="myusername"/>
				</p>
				</div>
				<div class="col-lg-6 ">
				<p> 
					<label for="password" class="youpasswd" data-icon="p"> Your password </label>
				</p>
				</div>
				<div class="col-lg-6 ">
				<p>
					<input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
				</p>
				</div>
				
				<p class="keeplogin"> 
					<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
				
					<label for="loginkeeping">Keep me logged in</label>
				</p>
				
				
				<p class="login button"> 
					<input type="submit" name="submit-btn" value="Login" /> 
				</p>
				
				
				<p class="change_link">
					Not a member yet ?
					<a href="#toregister" class="to_register">Join us</a>
				</p>
				
			</form>
		</div>

		
		
	</div>
</div>  
                    </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    
    

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
