
<!doctype html>
<html>
<head>
        <title>Petproducts </title>
        <style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
}
.topnav {
  overflow: hidden;
  background-color: #f44336;
  height: 70px;
  border: 3px solid #ff0000;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}

.topnav-right {
  float: right;
} 
fieldset { 
  background: #FAFAFA;
	padding: 10px;
   margin:auto;
   max-width:450px;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid  #f44336;


}

    </style>     
</head>
<body>
<div class="topnav">
            <a class="active" href="home.php"><img src="ic_add_pet.png"></a>
            <a href="productsadd.php">pets products</a>
            <div class="topnav-right">
              <a href="signout.php">signout</a>
            </div>
          </div>
    <form>
        <button type="submit" formaction="product.php" style="margin:15px;height: 30px;width: 100px;
        cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;">back</button>
</form>
<form method="post" action="productsadd.php"> 
<fieldset> 
   <input type="text" name="id" placeholder=" Enter product_id" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
  <input type="text" name="name" placeholder=" Enter product name" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
  <input type="text" name="cost" placeholder=" Enter product cost" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" min="0" required>
  <br><br>
  <input type="text" name="belong" placeholder=" which pet category it belongs to" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
  <input type="submit" name="submit" value="save" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px; cursor:pointer;background-color:#f44336">&ensp; 
</fieldset>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
// define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_corner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$id = $_POST["id"];
  $name = $_POST["name"];
  $belongs = $_POST["belong"];
  $cost = $_POST["cost"];




$sql = "INSERT INTO product( Product_id,P_name,P_cost,P_for)
VALUES ('$id','$name','$cost','$belongs')";
if ($conn->query($sql) == TRUE) {
  echo'<div>
  <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">New record of id='
  .$id. ' inserted successfully</h1>
     </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>