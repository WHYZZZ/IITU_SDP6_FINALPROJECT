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
    <a href="item.php">Product info</a>
  </div>
  <br>

  <form class="products" action="makeorder.php" method="post">
    <div class="input-container">

      <input type="text" placeholder="Brand" name="brand"><br>

      <br>

      <input type="text" placeholder="Model" name="model"><br>

      <br>



        <button name="submit" >Make order</button>
      <br>

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
 "INSERT INTO order(custid, itemid)
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
