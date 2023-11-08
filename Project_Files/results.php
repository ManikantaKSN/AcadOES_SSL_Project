<!DOCTYPE html>
<html>
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
        color:red;
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
    body {
	color:lime;
	text-align:center;
        background-color:#e4f9f5;
	/* background-image:url("img5.jpg"); */
        background-repeat:no-repeat;
        background-size:100%;
}
    </style>
    <body>
      
    <button value="logout" id="out" onclick="back()" ><h3>LOGOUT</h3></button> 
    <h1>Rank List</h1>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="subjectsdata";
if(isset($_POST['sub'])){
    $k=$_POST['no'];
}

$conn=mysqli_connect($servername, $username, $password,$db);
$x=$_SESSION['cc'];
$r=$_SESSION['rono'];
// echo $x ; echo "<br>";
// echo $k ; echo "<br>";
// echo $r; echo "<br>";
$sqli="SELECT `$k` FROM `resultsof$x` WHERE `rollno`='$r' ";
$result = mysqli_query($conn, $sqli);
$num = mysqli_num_rows($result);
// echo $num;
if($num>0){

    while($row = mysqli_fetch_assoc($result))
    {
    //  echo $r."    ".$row[$k];
    }
    // $num-=1;

}
$y=$_SESSION['eno'];
$sql="SELECT * FROM `resultsof$x` ORDER BY `$y` DESC ";
$resul = mysqli_query($conn, $sql);
$num1 = mysqli_num_rows($resul);
// echo $num1;

$rowno=0;
if($num1>0){
  echo '<table border=1 width="50%">';
  echo '<tr><th>Rank</th><th>Rollno</th><th>marks</th></tr>';
    while($roww = mysqli_fetch_assoc($resul))
    {
    //  echo $roww['rollno']."    ".$roww[$k];
    $rowno=$rowno+1;
    echo '<tr><td>'.$rowno.'</td><td>'.$roww["rollno"].'</td><td>'.$roww[$k].'</td></tr>'; 
    }
    echo '</table>';
    // $num1-=1;
}





?>
<!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br><br> -->
 <script>
function back()
  {
  location.href = "loginst.php";  
  }
// function goin()
// {
//   location.href = "subjectenterpage.php";
// }
 </script>
 </body>
 </html>