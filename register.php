<!doctype html>
<html>
<head>
        <title>Register </title>   
</head>
<body>
  
<form method="post" action="register.php">  
<fieldset>
<input type="text" name="id" placeholder="Enter the customer id"  required>
  <br><br>
 <input type="text" name="name" placeholder="Enter customer name"  required>
  <br><br>
   <input type="text" name="email" placeholder="Enter customer email"  required>
  <br><br>
  <input type="text" name="number" placeholder="Enter customer number"  required>
  <br><br>
    <input type="password" name="pass" placeholder="Enter password"  required>
  <br><br>
  <input type="submit" name="submit" value="Register" >  
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
  $email= $_POST["email"];
  $number = $_POST["number"];
  $pass = $_POST["pass"];


$sql = "INSERT INTO customer( Cust_Id,Cust_name,Cust_Email,Cust_Number,Cust_Pass)
VALUES ('$id','$name','$email','$number','$pass')";
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