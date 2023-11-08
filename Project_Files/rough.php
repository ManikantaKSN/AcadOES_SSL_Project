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
#bbb{
        background-color:white;
        border-radius:4px;
        color:black;
        font-size:20px;
        margin-top:20%;
 
}
</style>
<body>
<?php
 session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="credentials";
 $conn=mysqli_connect($servername, $username, $password,$db);
$_SESSION['name']=$_POST['sub_name'];
if(isset($_POST['submit'])){
	$x=$_POST['sub_name'];
	$y=$_SESSION['sn'];
	// echo $y;
	$sql="SELECT * FROM `adminaccounts` WHERE `cname`= '$x' AND `name`='$y'  ";
	$result = mysqli_query($conn, $sql);
	//echo $result;
	$num= mysqli_num_rows($result);
	// echo $num;
if($num){
	echo "course code is correct";
	// echo "<button value='GOTO-EXAM' id='bbb' onclick='goin()' ><h3>Go To EXAM page</h3></button><br><br>";
	echo "<form action='coursedetails.php' method='POST'><input type='submit' id='bbb' name='submit' value='Go To Course Page'></form>";

}
else{
	echo "INVALID CODE";
	echo "<button value='GOTO' onclick='back()' ><h3>Go To COURSE PAGE</h3></button><br><br>";
	
}
}
?>

 <!-- <button value="StudentList" onclick="listit()"><h3>Student List</h3></button><br><br>
 <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br>
 <button value="logout" onclick="back()" ><h3>LOGOUT</h3></button> 
  -->
 <script>
 
function back()
  {
  location.href = "subjectenterpage.php";  
  }
function goin()
{
  location.href = "coursedetails.php";
}
// function listit()
// {
//   location.href="stlist.php";
// }
 </script>
<br>
</body>
</html>