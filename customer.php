<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>





  <div class="card">
    <img src="images/joker.jpg" alt="John" >
    <h1>Yelzhan Zhakypzhanov</h1>
    <p>yz@mail.ru</p>
    <p>77777777</p>

    <p><button onclick="window.location.href='editpage.php'">Edit</button></p>


    <a href="home.php">Log Out</a>
  </div>



  <div class="link-buttons">

    <a href="makeorder.php">Make order</a>
    <a href="showorder.php">Show order</a>
  </div>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sdp6";
  $conn = new mysqli($servername, $username, $password, $dbname);



  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }
  






  ?>

</body>

</html>
