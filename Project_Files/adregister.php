
<!DOCTYPE HTML>
<html>

<head>
<!-- <link rel="stylesheet" href="styles.css"> -->
<style>
            form{
            width: 50%;
            }
            legend {
                display: block;
                padding-left: 10px;
                padding-right: 10px;
                border: 3px solid green;
                background-color:tomato;
                color:white;;
            }
            input[type="text"] {
                width:250px;
                margin:5px 0px;
            }
           
.button {
  display: inline-block;
  /* padding: 15px 25px; */
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 5px;
  /* box-shadow: 0 9px #999; */
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

        </style>
        </head>
</head>
<body style="background-color:#e4f9f5;text-align:center;"
                 >
  <fieldset style="margin-right:50%";>
    <legend>REGISTER HERE</legend>
<form method="POST" style="text-align:left">
        name:<input  type="text" name="name" required /><br><br>
        E-mail:<input type="email" name="uname" required /><br><br>
        password:<input type="password" name="pass" required /><br><br>
	Choose the course:<br>
	<input type="radio" name="course" value="cs101">CS101<br>
	<input type="radio" name="course" value="cs102">CS102<br>
	<input type="radio" name="course" value="cs103">CS103<br>
	<input type="radio" name="course" value="cs104">CS104<br>
	<input type="radio" name="course" value="cs105">CS105<br><br>
  
  <button class="button">SUBMIT</button>


</fieldset>
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
  $sql = "CREATE TABLE IF NOT EXISTS adminaccounts (
   name varchar(68),
   email varchar(68),
   password varchar(68),
   cname varchar(68)
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
            $cn=$_POST['course'];
            $sql = "INSERT INTO adminaccounts VALUES ('$fname','$lname','$age','$cn')";
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
	location.href = "index.php";	
	}

</script>
<div style="margin-left:200px;
margin-top :20px;
"> 
<button Value="login" onclick="back()" class="button">Go To Admin Page</button>	
</div>
 
    
      <p style="text-align:center;margin-top :240px">© Acad OES.</p>
  

        </body>
</html>