<?php 



$db = mysqli_connect("localhost", "root", "", "elves");
if(isset($_POST['submit-btn'])){
	session_start();
	 $date = date('Y-m-d H:i:s');
	$address = $_POST['address'];
	$addresshometown = $_POST['addresshometown'];
	$deadline = $_POST['deadline'];
	$motorbike = $_POST['motorbyke'];
	$threewheel = $_POST['threewheel'];
	$car = $_POST['car'];
	$bus = $_POST['bus'];
	$lory = $_POST['lory'];
	$tractor = $_POST['tractor'];
    $customer_order = 1;
	if(strlen($address) > 1){
		
	    $sql = "INSERT INTO `order` (Location, Deadline_date, motorbike, threewheel, car, bus, lory, tractor, Ordered_date, addresshometown, customer_order) VALUE('$address', '$deadline', '$motorbike', '$threewheel', '$car', '$bus', '$lory', '$tractor', '$date', '$addresshometown', '$customer_order')";
            mysqli_query($db, $sql);
	//if(mysqli_query($db, $sql)){
       // require_once('distance.php');
//        echo calculateDistance();
}
//	
//	   
//		$_SESSION['message'] = "Order successful!";
//		$_SESSION['username'] =$username;
//
//		header("location:order.php");
	//}
	
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
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css1/2-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script src="my.js"></script>
   
</head>

<body style="background-color:#F9EBEA;">


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				    
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					
					<li>
					<a href="logout.php">Logout</a>
					</li>
					

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" style="background-color:#FEF9E7;">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create Order
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
               <div id="container_demo" >
	<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
	<a class="hiddenanchor" id="toregister"></a>
	<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">
		

		<div id="register" class="animate form">
                    <form method="post" action="order.php"  id="form" onSubmit="alert('Order Success!');"> 
				<h1 style="color:green; font-size: 250%; font-family: Sitka Heading;"> Order Now </h1> 
				<p> 
					<label for="address" class="address" data-icon="u">Oder Address</label>
				</p>
				<p>
					<input id="address" name="address" required="required" type="text" placeholder="" />
				</p>
				<p> 
					<label for="address" class="address" data-icon="u">Home Town</label>
				</p>
				<p>
					<input id="addresshometown" name="addresshometown" required="required" type="text" placeholder="" />
				</p>
				<p> 
					<label for="deadline" class="deadline" data-icon="e" > Deadline Date</label>
				</p>
				<p>
					<input id="deadline" name="deadline" required="required" type="date" placeholder=""/> 
				</p>
				</br></br>
				<p>
             <label>Select Vehicles</label>
			 </br>
                 <p> 
					<label for="motorbyke" class="motorbyke" data-icon="u">Motor Bysicle</label>
				</p>
				<p>
					<input id="motorbyke" name="motorbyke"  type="text" placeholder="add number" />
				</p>
				<p> 
					<label for="threewheel" class="threewheel" data-icon="e" >Three-wheel</label>
				</p>
				<p>
					<input id="threewheel" name="threewheel"  type="text" placeholder="add number"/> 
				</p>
          
		        <p> 
					<label for="car" class="car" data-icon="u">Car</label>
				</p>
				<p>
					<input id="car" name="car"  type="text" placeholder="add number" />
				</p>
				<p> 
					<label for="bus" class="bus" data-icon="e" > Bus</label>
				</p>
				<p>
					<input id="bus" name="bus"  type="text" placeholder="add number"/> 
				</p>
          
		           <p> 
					<label for="lory" class="lory" data-icon="u">Lory</label>
					</p>
					<p>
					<input id="lory" name="lory"  type="text" placeholder="add number" />
				   </p>
				    <p> 
					<label for="tractor" class="tractor" data-icon="e" > tractor</label>
					</p>
					<p>
					<input id="tractor" name="tractor"  type="text" placeholder="add numer"/> 
				   </p>
          </p>

          <input type="hidden" name="order_search" value="<?php echo date("Y-m-d")?>">
				<p class="signin button"> 
					<input type="submit"  id="submit" name="submit-btn" value="Submit" /> 
				</p>
				
			</form>
		</div>
		
	</div>
</div> </p>
            </div>
            <div class="col-md-6 portfolio-item">
               
                   

<div id="map" style="width:400px;height:400px;background:yellow"></div>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClS_lf8tjMuKAkxWPvqIx2RLmOkgGSNvA&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<button onclick="getLocation()">Search Location</button>

<p id="demo"></p>
<p id="demo2"></p>

<script>
var x = document.getElementById("demo");
var y = document.getElementById("demo2");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var x = position.coords.latitude ;
   var y= position.coords.longitude;
   
   var mapOptions = {
//var x=document.getElementById("demo");
//var y=document.getElementById("demo2");
    center: new google.maps.LatLng(x,y),
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
  

</script>
 
               
				</br></br>
				<h2>
                    <a href="<?php echo "Inbox.php"?>">View Order inbox</a>
                </h2>
<!--                <form class="subscribe_form" action="#" method="post">
                <input required="" value="" placeholder="Enter Date..." class="date" id="date" name="date" type="date">
                <input class="subscribe" name="email" value="Search" type="submit">
                </form>-->
            </div>
        </div>
        <!-- /.row -->

       
        

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> No.95, Hospital Road, Kalubowila, Dehiwala, Sri Lanka.</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>

</body>

</html>
