
<html>
    <head>
        <title>Owner </title>
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
 <div class="custombutton">   
<form>
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid blue;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;"formaction="owneradd.php">Add new 

owner</button>

<button   style="margin-left:900px; height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid blue;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;" 

formaction="ownerupdate.php">update owner</button>
</form>
</div>
    <?php
   
$con = mysqli_connect("localhost","root","","pet_corner");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"SELECT * FROM owner");
echo "<table border size=5>";
echo "<tr>
<th>Owner_Id</th>
<th>Pet_Id</th>
<th>Owner_name</th>
<th>Owner_Email</th>
<th>Owner_Number</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    <td>$arr[4]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>

<div class="lastblock" style="margin-top:25px;">
<form action="deleteowner.php" method="post">
    <input  id="dbutton" type="text" name="t1" placeholder="Enter the id to delete" required>
    <input  style="width:75px;height:44px;cursor:pointer;border-radius:15px;
border: 3px solid blue;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;"type="submit" value="Delete">
</form> 
</div>
</body>
</html>