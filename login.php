<!DOCTYPE html>
<html>
<head>
  <title>Sign in</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Sign in</h1>

<div class="link-buttons">
  <a href="home.php">Home page</a>
  <a href="registration.php">Sign Up</a>
</div>
<br>

<form class="login-form" action="login.php" method="post">
  <div class="input-container">
    <input type="email" placeholder="Email" name="email_1"/><br>
    <input type="password" placeholder="Password" name="password_1"/><br>
    <button name="submit"> Enter</button>
  </div>
</form>



</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdp6";
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['res1'])){

	$sql_get = "SELECT *FROM item where model = '$backname'";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			if
		}
	}
}
/*if (isset($_POST['submit'])){

 $email = $_POST['email_1'];
 $pwd= $_POST['password_1'];



 $sql_get = "SELECT custid from account
 where email='$email'";
 $result = $conn->query($sql_get);
 $result->fetch_assoc();


 $sqlemailid =
 "SELECT custid from account
 where email='$email'";
 $emailres= mysql_fetch_array($sqlemail);


 $sqlpwdid =
 "SELECT custid from account
 where password='$pwd'";


 $pwdres= mysql_fetch_array($sqlemail);

 if ($emailres==$pwdres) {
   if ($emailres==1) {
     header("Location: admin.php");
     die();
   }
   else{
     header("Location: customer.php");
     die();
   }
 }

}*/



?>

</html>
