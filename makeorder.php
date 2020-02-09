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
 $brand = $_POST['brand'];
 $model = $_POST['model'];
 $sql =
 "INSERT INTO order (custid, itemid)
SELECT a.custid, i.itemid FROM account a, item i
where i.itemid=
(select i2.itemid from item i2
where brand=$brand and model=$model)
and
a.custid=2";
  if ($conn->query($sql) === TRUE) {
   echo "";

} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
}






?>

</body>

</html>
