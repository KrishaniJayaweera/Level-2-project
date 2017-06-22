<!-- $sql = "INSERT INTO employee(name, address, contactNo, designation) VALUE('$name', '$address', '$contactNo', '$designation')INSERT INTO users(emp_user_id, username, password, email) VALUES ( LAST_INSERT_ID(), '$userName', '$password', '$email')";
            //  mysqli_query($db, $sql);-->
<?php 

 session_start();
   //Read your session (if it is set)
   if (isset($_SESSION['userlogin']))
   {

$db = mysqli_connect("localhost", "root", "", "elves");
if(isset($_POST['register-btn'])){
	
	
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contactNo = $_POST['contactNo'];
	$designation = $_POST['designation'];
	$Basic_sal = $_POST['Basic_sal'];
	$userName = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$role="Employee";
	
		if (strlen($password) < 6 OR strlen($password) > 20) {
                    $error="";
			$error .= '<p class="error">Password should be within 3-20 characters long.</p>';
		}
	
	if($password == $password2){
		$password = md5($password);

  
		$sql = "INSERT INTO employee(Designation, Basic_sal) VALUE('$designation', '$Basic_sal')";
		mysqli_query($db, $sql);
		
		
   $userId = $db->insert_id;
        
$conn = "INSERT INTO users(emp_user_id, username, password, email,name,address,contactNo,role) VALUES ('$userId', '$userName', '$password', '$email','$name','$address','$contactNo','$role')";
mysqli_query($db, $conn);

	
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>R & T Vehicle Valuation Center</title>
<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
   
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
</head>

<body>

<div class="logo"></div>
<div class="login-block">
    <form method="post"  action="adminRegister.php" onSubmit="alert('Successfully registered!');"> 
    <h1>Admin Registration Form</h1>
    <input type="text" placeholder="Name" id="name" name="name" />
	<input type="text" placeholder="Address" id="address" name="address"/>
	<input type="text" placeholder="Contact NO" id="contactNo" name="contactNo" size="10"/>
	<input type="email" placeholder="E-mail" id="email" name="email"/>
	<select id="designation" name="designation" style="width:310px;">        
                <option value="Chief Valuar">Chief Valuar</option>
                <option value="Accountant">Accountant</option>
                <option value="Inspection Officer">Inspection Officer</option>
                 </select>
				 <br><br>
	<input type="text" placeholder="Basic Salary" id="Basic_sal" name="Basic_sal"/>			 
	<input type="text" placeholder="Username" id="username" name="username"/>
    <input type="password" placeholder="Password" id="password" name="password"/>
	<input type="password" placeholder="Re-enter password" id="password2" name="password2"/>
    <input type="submit" name="register-btn" value="Sign up"/> 
	</form>
</div>
</body>

</html>