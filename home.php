<!doctype html>
<html>
    <head>
        <title>
            Petshop
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;

    background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
  /*background-color:rgba(43, 3, 3, 0.945);*/
  
}
.topnav {
  overflow: hidden;
  background-color:rgb(0, 0, 0);
  height: 70px;
  border: 2px solid black;
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
.topnav-center {
  float: center;
  text-align: center;
}

.topnav-right {
  float: right;
}
.button {
    background-color: #000000; /* Green */
    border: none;
    color: white;
    padding: 32px 64px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 100px 50px;
    -webkit-transition-duration: 0.2s; /* Safari 0.4*/
    transition-duration: 0.2s;/*0.4*/
    cursor: pointer;
}
.screen
{
  
    background-size: cover;
    width:100%;
    height:600px;
}

.button1 {
    color:white; /* black*/
    border: 3px solid #4CAF50;
    border-radius: 5px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    color: white; 
    border-radius: 5px;
    border: 3px solid rgba(31, 58, 147, 1);
}

.button2:hover {
    background-color:rgba(31, 58, 147, 1);
    color: white;
}

.button3 {
    color: white; 
    border-radius: 5px;
    border: 3px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    color: white;
    border-radius: 5px;
    border: 3px solid rgba(249, 105, 14, 1);
}

.button4:hover {background-color:rgba(249, 105, 14, 1);
 color:white;
}

.button5 {
    color: white;
    border-radius: 5px;
    border: 3px solid #b40a70;
}

.button5:hover {
    background-color:#8d2663;
    color: white;
}


.button7 {
    color: white;
    border-radius: 5px;
    border: 3px solid #b40a70;
}

.button7:hover {
    background-color:#8d2663;
    color: white;
}



</style>
    </head>
    <body>

        <div class="topnav">
            <a class="active" href="home.php"><img src=ic_add_pet.png></a>
            <a class="topnav-center" href="home.php">Pets Bazar dashboard</a>
            <div class="topnav-right">
              <a href="index.php">Signout</a>
            </div>
          </div>
      

       
     <div class="screen">      
     <form>
          
            <button class="button button1"  type="submit" formaction="Pets.php">PetDetail</button>
            <button class="button button2"  type="submit" formaction="Owner.php">Owners</button>
            <button class="button button3"  type="submit" formaction="product.php">Pets Product</button>
             <button class="button button7"  type="submit" formaction="customer.php">Customer</button>
      
        
     </form> 
    </div>

    </body>
   
</html>