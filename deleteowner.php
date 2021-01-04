<!doctype html>
<html>
  <head>
  <title>PetsAdd </title>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
  }
.topnav {
  overflow: hidden;
  background-color:rgba(44, 130, 201, 1);
  height: 70px;
   border: 3px solid #3333ff
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    outline:#4d4dff solid 5px;
    background: #FAFAFA;
    width: 100%;
    margin:5px ;
    
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th{
  background-color:rgba(44, 130, 201, 1);
}


.custombutton{
  margin:25px;
  
}
input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin:8px ;
    border: 2px solid blue;
    background:transparent;
}

</style>
<body>
<div class="topnav">
<a class="active" href="home.php"><img src="ic_add_pet.png"></a>
            <a href="owner.php">Owner</a>
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
$owner_id=$_POST["t1"];

$Query2="select count(*) from owner where Owner_Id='$owner_id'";
$Execute = mysqli_query($conn,$Query2);
$count = mysqli_fetch_row($Execute);


if($count[0]==1)
{ 
    
    $sql = "DELETE FROM owner WHERE Owner_Id='$owner_id'";
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
border: 3px solid blue;background-color: rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;"formaction="owner.php">Back</button>
</form>
<body>
<html>