<!DOCTYPE HTML>
<html>
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
        padding-top:2%;
        padding-bottom:2%;
}
  
            input[type="text"] {
                width:250px;
                margin:5px 0px;
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
h2{
  color:black;
}
#sss{
        font-size:30px;
        /* text-align:left; */
        margin-right:0px;
}
#bbb{
        background-color:white;
        border-radius:4px;
        color:black;
        font-size:20px;
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
  
<button value="logout" id="out" onclick="back()" ><h3>LOGOUT</h3></button> 
<h1> YOUR RESULT </h1>
<?php
session_start();
$en=$_SESSION['eno'];
$cc1=$_SESSION['cc'];
$ron=$_SESSION['rono'];
$servername = "localhost";
$username = "root";
$password = "";
$db="subjectsdata";
$conn=mysqli_connect($servername, $username, $password,$db);
$sqli="SELECT `$en` FROM `resultsof$cc1` WHERE `rollno`='$ron' ";
$result = mysqli_query($conn, $sqli);
$num = mysqli_num_rows($result);
// echo $num;
if($num>0){

    while($row = mysqli_fetch_assoc($result))
    {
     echo " <h2>Roll no:$ron </h2> ";
     echo  "<h2>Marks: $row[$en]</h2>";
    }
    $num-=1;

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