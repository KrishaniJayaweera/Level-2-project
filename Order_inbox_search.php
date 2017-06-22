<?php 



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

</head>

<body>

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
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order Details
                    
                </h1>
            </div>
        </div>
        <div class="table">
              <table class="table table-striped">
<thead>
                <tr>
                
                
                <th>Order Id</th>
                <th>Ordered date</th> 
                <th>Deadline date</th>
                 <th>Location</th>
                <th>Status</th> 
                <th>Customer</th>
                <th>Invoice</th>

               </tr>
                </thead>

  <?php  
  
  $con= mysqli_connect("localhost", "root", "", "elves");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$date=$_POST['order_search'];

//$result = mysqli_query($con,"SELECT * FROM `order` WHERE  `Ordered_date`='$date'");
// $result = mysqli_query($con,"SELECT a.*,b.Name FROM `order` a,customer b WHERE  `Ordered_date`='$date' AND a`Name`=b.`customer_order`");
$result = mysqli_query($con,"SELECT *,
customer.`Name`
FROM `customer`
INNER JOIN `order`
ON `order`.`customer_order`=`customer`.`Customer_id`
WHERE `order`.`Ordered_date`='$date'");

 while($raw = mysqli_fetch_array($result))
  {
   
   echo '<tr>';
       // echo '<tr><td>'.$raw->Select.'</td>';
        echo '<td>'.$raw['Order_id'].'</td>';   
        echo '<td>'.$raw['Ordered_date'].'</td>';
         echo '<td>'.$raw['Deadline_date'].'</td>';
        echo '<td>'.$raw['Location'].'</td>';
        echo '<td>'.$raw['orderstatus'].'</td>';
         echo '<td>'.$raw['Name'].'</td>';
        
   
      ?>
     <td>
                    <form id="form1"class="subscribe_form"  action="Create_invoice_form.php" method ="post" target="_blank">
                        <input type="hidden" name="oid" value="<?php echo $raw['Order_id']; ?>"/>
                        <input type="hidden" name="cid" value="<?php echo $raw['Customer_id']; ?>"/>
                        <input type="hidden" name="date" value="<?php echo $raw['Ordered_date']; ?>"/>
                               <input type="hidden" name="invoice_id" value="<?php //echo $raw['Invoice_num']; ?>"/>
                        <button type="submit" value="View Invoice" name=""  class="btn btn-default pull-right  "><i class="fa fa-print" style="position: static">Create Invoice</i></button></form>
        </td>
      

<?php
       echo '</tr>' ;

     


  }
  mysqli_close($con);
    ?>


     



</table> 

        </div>
        <!-- /.row -->

      
        </footer>

    </div>
  
    <script src="js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>

</body>

</html>
