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

    body {
        background-repeat: no-repeat;
        background-size: 100%;
        /* background-image: url("4.jpeg"); */
        background-color:#e4f9f5;
        text-align: center;
    }

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
    #bbb{
        background-color:white;
        border-radius:4px;
        color:black;
        font-size:15px;
        /* margin-top:20px; */
 
}
    #out {  
      margin-left:94%;
      margin-top:0%;
      border:3px solid black;
      border-radius:8px;
      position:relative;
  
    }
</style>
    <body>
    <button value="logout"  id= "out"   onclick="back()" ><h3>LOGOUT</h3></button> 
<h1>Results</h1> 

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="subjectsdata";
if(isset($_POST['resulttable'])){
    $k=$_POST['sub'];
}
$y=$_SESSION['eno'];
$conn=mysqli_connect($servername, $username, $password,$db);
$x=$_SESSION['name'];
// $r=$_SESSION['rono'];
$sqli="SELECT * FROM `resultsof$x` ORDER BY `$y` DESC ";
$result = mysqli_query($conn, $sqli);
$num = mysqli_num_rows($result);
// echo $num;

$rowno=0;
if($num>0){
  echo '<table border=1 width="50%">';
  echo '<tr><th>Rank</th><th>Rollno</th><th>marks</th></tr>';
    while($row = mysqli_fetch_assoc($result))
    {
    //  echo $row['rollno']."    ".$row[$k];
    $rowno=$rowno+1;
    echo '<tr><td>'.$rowno.'</td><td>'.$row["rollno"].'</td><td>'.$row[$k].'</td></tr>'; 
    }
    echo '</table>';
    // $num-=1;
}
?>
<br><br>
 <button value="GOTO-EXAM"  id="bbb"  onclick="goin()" ><h3>GO TO HOME PAGE</h3></button><br><br><br>
 
 <script>
function back()
  {
  location.href = "index.php";  
  }
function goin()
{
  location.href = "subjectenterpage.php";
}
 </script>
    </body>
</html>
