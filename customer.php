<html>
    <head>
        <title>Customer </title>
        <style>
            body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
}
.topnav {
  overflow: hidden;
  background-color:#8d2663;
  height: 70px;
  border: 3px solid #b40a70;
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
    outline:#b40a70 solid 5px;
    width: 100%;
    margin:5px ;
    background: #FAFAFA;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th{
  background-color:#8d2663;
}



.custombutton{
  margin:25px;
  
}input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin:8px ;
    border: 2px solid red;
    background:transparent;
    color:#000000;        
}


</style>    
</head>
<body>
<div class="topnav">
            <a class="active" href="home.php"><img src="ic_add_pet.png"></a>
            <a href="customer.php">Customers</a>
            <div class="topnav-right">
              <a href="index.php">signout</a>
            </div>
          </div>
          <div class="custombutton">         
<form>

<button  style="margin-left:500px; height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid  #b40a70;background-color: #8d2663;color:#f2f2f2;font-size:15px;" formaction="customerupdate.php">update customer</button>
</form>
</div>
    <?php
   
$con = mysqli_connect("localhost","root","","pet_corner");//change username and password according to your server settings
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select * from customer ");
echo "<table>";
echo "<tr>
<th>Cust_Username</th>
<th>Cust_name</th>
<th>Cust_Email</th>
<th>Cust_Number</th>
<th>Cust_Pass</th>
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


</body>
</html>