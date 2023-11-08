
<!DOCTYPE HTML>
<html>
<head>
<style>
body {
	color:lime;
	text-align:center;
        background-color:#e4f9f5;
	/* background-image:url("img5.jpg"); */
        background-repeat:no-repeat;
        background-size:100%;
}
.container{
        margin-left:33%;
        border:4px solid white;
        border-radius:15px;
        background-color:#136a8a;       
        width:35%;
        height:20%;
        opacity:0.98;
        padding-bottom:2%;
}
h1{     
        margin-left:30%;
        text-align:center;
        color:Red;
        font-family:Garamond;
        font-size:50px;
        border: 4px solid blue;
        border-radius:24px;
        background-color:rgba(240,240,240,1);
        width:600px;

}
h3{
        /* padding-top:5%; */
        color:yellow;
        font-size:45px;
        /* background:3px red solid; */
}
#sss{
        font-size:25px;
        /* text-align:left; */
        margin-right:0px;
}
#bbb{
        background-color:white;
        border-radius:4px;
        color:black;
        font-size:20px;
}
#two{
        float:left;
        width:auto;
        padding-left:30%px;
        margin-left:50px;
}
p {
        font-family:monospace;
        font-size:20px;
}
/* button{
        background-color: red;
        border-radius: 8px;

  color: white;
  padding: 14px 20px;
  margin: 8px;
  border: 3px solid white;
  cursor: pointer;
  font-size:20px;
  /* width: 100%; */
/* }
button:hover {
  opacity: 0.9;
} */ 
#out {  
      margin-left:94%;
      margin-top:0%;
      border:3px solid black;
      border-radius:8px;
      position:relative;
      font-size:25px;
    }
</style>
</head>
<body>
<button value="login" id="out" onclick="back()">LOGIN</button> 
  <h1>Registration Page</h1>


  <div class="container">
<form method="POST">
       <br><br> name:<input type="text" id ="bbb" name="name" required /><br><br>
	roll-no:<input type="text" id ="bbb" name="rno" required /><br><br>
        E-mail:<input type="email" id ="bbb" name="uname" required /><br><br>
        password:<input type="password" id ="bbb" name="pass" required /><br><br>
        submit:<input type="submit"  id ="bbb" name="submit"><br>
        </div>
</form>
 








<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// else{echo"connected";}
// sql to create database
$sql="CREATE DATABASE IF NOT EXISTS stcredentials";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $dbname = "stcredentials";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);}
  $sql = "CREATE TABLE IF NOT EXISTS staccounts (
   name varchar(68),
   rollno varchar(68),
   email varchar(68),
   password varchar(68)
   )";
        if ($conn->query($sql) === TRUE) {
          // echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        } 

        if (isset($_POST['submit'])) {
            $fname=$_POST['name'];
            $lname=$_POST['uname']; 
	    $rollno=$_POST['rno'];  
            $age=$_POST['pass'];
            $sql = "INSERT INTO staccounts VALUES ('$fname','$rollno','$lname','$age')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }  
         }
        $conn->close();
        ?>
        <br>
        <!-- <a href="admin.php">admin page</a>   -->




        <script>
function back()
	{
	location.href = "loginst.php";	
	}

</script>
<!-- <div style="margin-left:200px;
margin-top :20px;
">  -->
<!-- <button value="login" onclick="back()"><- Go to Log-in page</button> 	 -->

        </body>
</html>