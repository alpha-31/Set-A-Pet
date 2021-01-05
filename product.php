
<html>
    <head>
        <title>Products </title>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    outline: #ff0000 solid 5px;
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
    background-color:#f44336;
}


.custombutton{
  margin:25px;
  
}input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin: 8px ;
    border: 2px solid red;
    background:transparent;
}        
            
    </style>     
</head>
<body>
<div class="topnav">
            <a class="active" href="home.php"><img src="ic_add_pet.png"></a>
            <a href="product.php">Products</a>
            <div class="topnav-right">
              <a href="index.php">signout</a>
            </div>
          </div>
          <div class="custombutton">          
<form>
<button  style="height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" formaction="productsadd.php">Add new product</button>
<button  style="margin-left:900px; height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" formaction="productupdate.php">update product</button>
</form>
</div>
    <?php
   
$con = mysqli_connect("localhost","root","","pet_corner");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select * from product ");
echo "<table border size=4>";
echo "<tr>
<th>Product_Id</th>
<th>P_name</th>
<th>P_cost</th>
<th>P_for</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>
<form action="deleteproducts.php" method="post">
    <input type="text" name="t1" placeholder="Enter the id to delete" required >
    <input  style="width:75px;height:44px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" type="submit" value="delete">
</form> 

</body>
</html>