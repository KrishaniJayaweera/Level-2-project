<?php 
    session_start();
   //Read your session (if it is set)
   if (isset($_SESSION['userId']))
	   
   
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>R & T Vehicle Valuation Company</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css2/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css2/animate.css">
    <link rel="stylesheet" type="text/css" href="css2/style.css">
    <!-- =======================================================
        Theme Name: Maundy
        Theme URL: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <div class="content">
	      
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
		 <button><a href="logout.php">Logout</a></button>
		 <a href="adminRegister.php"><button>Admin Registration</button></a>
          <div class="logo text-center">
		    <h1>R & T Vehicle Valuation Center</h1>
            
            <h2>Order inbox</h2>
          </div>

         
         
          <div class="subcription-info text-center">
         
           <form class="subscribe_form"  action="Order_inbox_search.php" method ="post"> 
              <input required="" value="" placeholder="Enter Date..." class="email" id="email" name="order_search" type="date">
       
              <input class="subscribe" name="email" value="Search" type="submit">
            </form> 
           
          </div>
        </div>
      </div>
    </div>
     
	<div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
           <p style="font-size:40px; color: #000000; ">
            <a href="cdt.php">Check creditors</a>
			</p>
          </div>

        </div>
      </div>
    </div>
	
	<div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
           <p style="font-size:40px; color: #000000; ">
            <a href="paysalvw.php">Monthly Salary Details</a>
			</p>
          </div>

        </div>
      </div>
    </div>
	
	<div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
           <p style="font-size:40px; color: #000000; ">
            <a href="empvw.php">Employee Salary Details</a>
			</p>
          </div>

        </div>
      </div>
    </div>
	
    <div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
           <p style="font-size:40px; color: #000000; ">
            <a href="http://localhost:8088/Vehicle_valuation_project/public/home">Valuation Reports</a>
			</p>
          </div>

        </div>
      </div>
    </div>
	<br>
    <div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
           <p style="font-size:40px; color: #000000; ">
            <a href="http://localhost:8088/elves/employeeInbox.php">Employee Inbox</a>
			</p>
          </div>

        </div>
      </div>
    </div>  	
    </div>
    <footer class="footer">
      <div class="container">
         <div class="row bort">

           <div class="copyright">
                R & T Vehicle Valuation . All rights reserved.
                <div class="credits">
                    <!-- 
                        All the links in the footer should remain intact. 
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maundy
                    -->
                    No.95, Hospital Road, Kalubowila, Dehiwala, Sri Lanka. <a href="https://bootstrapmade.com/">  Telephone No +9411-2727240</a>
                </div>
           </div>

         </div>
      </div>
    </footer>
    <script src="js2/jquery.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/jquery.countdown.min.js"></script>
    <script src="js2/wow.js"></script>
    <script src="js2/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>