<html>
<head>
        <title>Animals </title>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
  }
.topnav {
  overflow: hidden;
  background-color: #4CAF50;
  height: 70px;
  border: 3px solid green;
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


</style>
<body>
<div class="topnav">
<a class="active" href="home.html"><img src="ic_add_pet.png"></a>
            <a href="Pets.php">Pets</a>
          </div>
<?php

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
$pet_id=$_POST["t1"];

$Query2="select count(*) from pets where Pet_Id='$pet_id'";
$Execute = mysqli_query($conn,$Query2);
$count = mysqli_fetch_row($Execute);


if($count[0]==1)
{ 
    
    $sql = "DELETE FROM pets WHERE Pet_Id='$pet_id'";
    if ($conn->query($sql) == TRUE) {
        echo '<div>
    <h1 style="color:#f2f2f2;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;">Data deleted successfully</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    echo '<div>
    <h1 style="color:#f2f2f2;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;"> Data not found</h1>
       </div>';
}
$conn->close();
?>
<form>
    <button type="submit"  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"formaction="Pets.php">Back</button>
</form>
<body>
<html>