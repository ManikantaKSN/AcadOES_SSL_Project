<!DOCTYPE HTML>
<html>
<body>
<form method="POST">
        name:<input type="text" name="name"><br>
        username:<input type="text" name="uname"><br>
        password:<input type="password" name="pass"><br>
        submit:<input type="submit" name="submit"><br>
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
else{echo"connected";}
// sql to create database
$sql="CREATE DATABASE IF NOT EXISTS credentials";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $dbname = "credentials";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);}
  $sql = "CREATE TABLE IF NOT EXISTS accounts (
   name varchar(68),
   username varchar(68),
   password varchar(68)
   )";
        if ($conn->query($sql) === TRUE) {
          echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        } 

        if (isset($_POST['submit'])) {
            $fname=$_POST['name'];
            $lname=$_POST['uname'];   
            $age=$_POST['pass'];
            $sql = "INSERT INTO accounts VALUES ('$fname','$lname','$age')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }  
         }
        $conn->close();
        ?>
        <br>
     
<!-- <a href="form.php">loginpage</a> -->

<script>
function back()
	{
	location.href = "form.php";	
	}

</script>
<div style="margin-left:200px;
margin-top :20px;
"> 
<button value="login" onclick="back()"><- Go to login page</button> 	 

</div>
<br>
</body>
</html>