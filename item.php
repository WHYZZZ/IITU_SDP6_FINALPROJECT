<!DOCTYPE html>
<html>
<head>
  <title>Items</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Find PC</h1>

  <div class="link-buttons">
    <a href="home.php">Home page</a>
    <a href="login.php">Sign In</a>
  </div>
  <br>

  <form class="products" action="item.php" method="post">
    <div class="input-container">
      <input type="text" placeholder="Model" name="getname"><br>
        <button name="res1" >Find PCs</button>
      <br>
      <input type="text" placeholder="RAM" name="getram"><br>
        <button name="res2" >Find PCs</button>
      <br>
      <input type="text" placeholder="CPU" name="getcpu"><br>
        <button name="res3" >Find PCs</button>
      <br>
      <input type="text" placeholder="gpu" name="getgpu"><br>
        <button name="res4" >Find PCs</button>
      <br>

      <p>Select type</p>
      <select name="gettype">
        <option value="desktop" id="desktop">Desktop</option>
        <option value="laptop" id="laptop">Laptop</option>
        <option value="tablet" id="tablet">Tablet</option>
      </select><br>
      <button name="res6" >Find PCs</button><br>

    <input type="text" placeholder="Starting price" name="getinprice"><br>

      <input type="text" placeholder="End Price" name="getenprice"><br>
        <button name="res5" >Find PCs</button>
      <br>

</div>
      </form>


<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdp6";
$conn = new mysqli($servername, $username, $password, $dbname);


$backname = $_POST['getname'];
$backcpu = $_POST['getcpu'];
$backgpu = $_POST['getgpu'];
$backram = $_POST['getram'];
$backtype=$_POST['gettype'];
$backfprice = $_POST['getinprice'];
$backeprice = $_POST['getenprice'];


if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['res1'])){

	$sql_get = "SELECT *FROM item where model = '$backname'";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " Brand: ".$row["brand"]." Model: ".$row["model"]." Country: ".$row["country"]." Type: ".$row["type"]." Ram: ".$row["ram"]." CPU: ".$row["cpu"]." GPU: ".$row["gpu"]." Screen: ".$row["screen"];
      echo " Price: ".$row["price"]." Date: ".$row["assemblydate"];
		}
	}
}

if (isset($_POST['res2'])){

	$sql_get = "SELECT *FROM item where ram = '$backram'";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " Model: ".$row["model"]." Type: ".$row["type"]." Ram: ".$row["ram"]." CPU: ".$row["cpu"]." GPU: ".$row["gpu"]." Screen: ".$row["screen"]." Price: ".$row["price"]." Date: ".$row["proddate"]."<br>";
		}
	}
}

if (isset($_POST['res3'])){

	$sql_get = "SELECT *FROM item where cpu like '$backcpu%'";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " Model: ".$row["model"]." Type: ".$row["type"]." Ram: ".$row["ram"]." CPU: ".$row["cpu"]." GPU: ".$row["gpu"]." Screen: ".$row["screen"]." Price: ".$row["price"]." Date: ".$row["proddate"]."<br>";
		}
	}
}

if (isset($_POST['res4'])){

	$sql_get = "SELECT *FROM item where gpu = '$backgpu'";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " Model: ".$row["model"]." Type: ".$row["type"]." Ram: ".$row["ram"]." CPU: ".$row["cpu"]." GPU: ".$row["gpu"]." Screen: ".$row["screen"]." Price: ".$row["price"]." Date: ".$row["proddate"]."<br>";
		}
	}
}

if (isset($_POST['res5'])){

	$sql_get = "SELECT *FROM item where price between $backfprice and $backeprice";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " Model: ".$row["model"]." Type: ".$row["type"]." Ram: ".$row["ram"]." CPU: ".$row["cpu"]." GPU: ".$row["gpu"]." Screen: ".$row["screen"]." Price: ".$row["price"]." Date: ".$row["proddate"]."<br>";
		}
	}
}

if (isset($_POST['res6'])){

	$sql_get = "SELECT *FROM item where type = '$backtype'";
$result = $conn->query($sql_get);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " Model: ".$row["model"]." Type: ".$row["type"]." Ram: ".$row["ram"]." CPU: ".$row["cpu"]." GPU: ".$row["gpu"]." Screen: ".$row["screen"]." Price: ".$row["price"]." Date: ".$row["assemblydate"]."<br>";
		}
	}
}





?>

</body>

</html>
