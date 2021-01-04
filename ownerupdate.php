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
</head>
<body>
<div class="topnav">
            <a class="active" href="home.php"><img src="ic_add_pet.png"></a>
            <a href="Owner.php">Owners</a>
            <div class="topnav-right">
              <a href="index.php">signout</a>
            </div>
          </div>
<form>
    <button type="submit"  formaction="owner.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid blue;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;">Back</button>
</form> 
<form method="post" action="ownerupdate.php">  
<fieldset>
 <input type="text" name="id" placeholder=" Enter owner_id" style="width:100%;height:30px;
   border: 2px solid  blue ; border-radius:3px; background:transparent;" required >
    <br><br>
   <input type="text" name="pid" placeholder="Enter pet_id" style="width:100%;height:30px;
   border: 2px solid  blue; border-radius:3px;background:transparent;" required>
   <br><br>
  
  <input type="text" name="name"  placeholder="Enter owner_name" style="width:100%;height:30px;
   border: 2px solid  blue; border-radius:3px;background:transparent;" required>
  <br><br>
  <input type="email"  name="email"  placeholder="Enter owner_email" style="width:280px;height:30px;
   border: 2px solid  blue; border-radius:3px;background:transparent;" min=".com" required>
  <br><br>
 <input   name="number"  placeholder="Enter owner_number" style="width:300px;height:30px;
   border: 2px solid  blue; border-radius:3px;background:transparent;" min="11" required>
  <br><br>
  <input type="submit" name="submit" value="update" style="width:100%;height:30px;
   border: 2px solid  blue; border-radius:3px;cursor:pointer;background-color:rgba(44, 130, 201, 1)" >&ensp; 
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
  $pid = $_POST["pid"];
  $name= $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
 

  $Query2="select count(*) from owner where Owner_Id='$id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);

  if($count[0]==1)
  {
    $sql = "UPDATE owner SET pet_Id='$pid', Owner_name='$name',Owner_Email='$email',Owner_Number='$number' WHERE Owner_ID='$id'";
    
     if ($conn->multi_query($sql) == TRUE) {
      echo'<div>
      <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">'
      .$id. ' updated successfully</h1>
         </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    echo '<div>
    <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">Given Pet_Id not found</h1>
       </div>';
}


$conn->close();
}

?>