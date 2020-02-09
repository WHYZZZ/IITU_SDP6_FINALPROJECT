<!DOCTYPE html>
<html>
<head>
  <title>Sign up</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Sign up</h1>

  <div class="link-buttons">
    <a href="home.php">Home page</a>
    <a href="login.php">Sign In</a>
  </div>
  <br>

<form class="registration-form" action="registration.php" method="post">
  <div class="input-container">
    <input type="text" placeholder="Name" name="f_name"/><br>
    <input type="text" placeholder="Surname" name="s_name"/><br>
    <input type="email" placeholder="Email" name="email_1"/><br>
    <input type="password" placeholder="Password" name="password_1"/><br>
    <input type="text" placeholder="Phone number" name="phone"/><br>

    <div id="selectcountry">
      <h4>Choose your country:</h4>
        <select name="country">
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="USA">USA</option>
          <option value="Russia">Russia</option>
          <option value="Japan">Japan</option>
          <option value="South Korea">South Korea</option>
        </select></br>
    </div>

    <button name="submit" > Enter</button>
  </div>
</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdp6";
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])){
 $fname = $_POST['f_name'];
 $sname = $_POST['s_name'];
 $email = $_POST['email_1'];
 $pwd= $_POST['password_1'];
 $phone = $_POST['phone'];
 $countryname = $_POST['country'];
 $sql =
 "INSERT INTO account(email, password, fname, sname, country, phone)
 VALUES('$email','$pwd','$fname','$sname', '$countryname', '$phone')";
  if ($conn->query($sql) === TRUE) {
   echo "";

} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
}






?>

</body>

</html>
