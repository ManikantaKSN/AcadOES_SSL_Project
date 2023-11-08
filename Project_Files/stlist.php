
<!DOCTYPE HTML>
<html>
<head>
<style>
    table,
    th,
    td {
        border: 3.5px solid black;
        font-size: 18px;
        width: auto;
    }

    tr {
        background-color: rgba(180, 180, 180, 0.6)
    }

    h1 {
        color: black;
        font-family: Garamond;
        text-align: center;
        font-size: 50px;
    }

    th {
        background-color: #ffff33;
        color: rgb(100, 100, 100);
        border-radius: 10px;
        font-family: Georgia, serif;
        text-align: center;
        width: auto;
    }

    /* body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url("4.jpeg");
        text-align: center;
    } */

    td {
        border-radius: 10px;
        font-family: monospace;
        padding: : auto;
        text-align: center;
    }

    table {
        /* margin-top: 50px;
        margin-left: 560px; */
        /* margin-top:10%; */
        position:relative;
        left:28%;
        width: 18cm;
        height: 9cm;
        align: center;
        border-radius: 10px;
        text-align: center;
    }

    #button {
      align:center;
      margin-top:40px;
      margin-left:42%;
      font-size:25px;
      border:3px solid black;
      border-radius:8px;
    }

    #out {  
      margin-left:94%;
      margin-top:0%;
      border:3px solid black;
      border-radius:8px;
      position:relative;
  
    }
    </style>

</head>
<body style="background-color:#ccffff;">
<button value="logout" id="out" onclick="back()" ><h3>LOGOUT</h3></button> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stcredentials";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<h1>Students List</h1><br>";

$sql = "SELECT * FROM staccounts";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo "<table border=1 width=65%>";
  echo "<tr><th>Name</th><th>RollNo</th><th>Email</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["name"]."</td><td>".$row["rollno"]."</td><td>".$row["email"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
<form action=" try.php" method ="POST">
  <input type="submit" id="button" value="Go To HOME page" name="mani"/>
</form>
 <!-- <b value="GOTO-EXAM" onclick="goin()" ><h3>Go To HOME page</h3></button><br><br> -->
 <script>
function back()
  {
  location.href = "index.php";  
  }
function goin()
{
  location.href = "try.php";
}
 </script>
</body>
</html>

