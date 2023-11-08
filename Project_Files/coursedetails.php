<!DOCTYPE HTML>
<html>
<body>
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
        </head>
        <body>
<button value="logout" id="out" onclick="back()" ><h3>LOGOUT</h3></button> 
        <h1 text-align:center> Course Details</h1>
    <?php
    session_start();
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db="subjectsdata";
     $conn=mysqli_connect($servername, $username, $password,$db);
     if(isset($_POST['submit'])){
// $_SESSION['name']=$_POST['sub_name'];
// echo $_SESSION['name'];
     
 $x=$_SESSION['name'];
// $sql ="CREATE TABLE IF NOT EXISTS  `subjectsdata`.`$x` (`qno` INT(6) NOT NULL AUTO_INCREMENT , `question` TEXT NOT NULL , `optiona` TEXT NOT NULL , `optionb` TEXT NOT NULL , `optionc` TEXT NOT NULL , `optiond` TEXT NOT NULL , `correctoption` TEXT NOT NULL , PRIMARY KEY (`qno`))";
 $sql="CREATE TABLE IF NOT EXISTS `subjectsdata`.`$x` (`qno` INT(25) NOT NULL , `question` VARCHAR(250) NOT NULL , `optiona` VARCHAR(250) NOT NULL , `optionb` VARCHAR(250) NOT NULL , `optionc` VARCHAR(250) NOT NULL , `optiond` VARCHAR(250) NOT NULL , `correctanswer` VARCHAR(250) NOT NULL)";
 $sqlz="CREATE TABLE IF NOT EXISTS `subjectsdata`.`resultsof$x` (`rollno` INT(25) NOT NULL )";
 $result=mysqli_query($conn,$sql);
 $result1=mysqli_query($conn,$sqlz);
if($result){
    //  echo "coursetable created sucessfully<br>";
  }
   else{
      echo "<br>unable to create table beasuse of error--->".mysqli_error($conn);
  } 
  if($result1){
    // echo "resulttable created sucessfully<br>";
 }
  else{
     echo "<br>unable to create table beasuse of error--->".mysqli_error($conn);
 } 


// if(isset($_POST['ram'])){
//   echo "hello";
// }

  echo "<h2>"."welcome to course ". $x."</h2>";}
  ?>



<div class="container" >
<h2>exam conduct page</h2>

 <form method="POST" action="createquestionpaper.php">
 <label for="uname" id="sss"><b>Enter exam number</b></label>
 <input type='text' name='examno' id="sss" required/><br><br>
 <!-- <input type = "submit" name = 'addexam' value='CREATEEXAM'><br>
 <input type = "submit" name = 'submit' ><br> -->

 <input type = "submit" name = 'submit' id="bbb">CREATE EXAM<br><br>
 </form>





 </div>
 <div class="container" >
 
 <form method="POST" action="resultview.php">
 <b>exam no:</b><input type="number" name="sub" required/>
 <button type = "submit" name = 'resulttable' id="bbb">VIEW RESULT</button><br><br>

 </form>

  <script>
function back1()
  {
  location.href = "subjectenterpage.php";  
  }

 </script>
 
<div> 
 <button value="login" id="bbb"onclick="back1()">HOME_PAGE</button>  
</div>

</div>
        </body>

</html>
 <!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br><br> -->
 
 <script>
function back()
  {
  location.href = "index.php";  
  }
// function goin()
// {
//   location.href = "subjectenterpage.php";
// }
 </script>
<div class="container">
<h2>Show a Date and Time Control</h2>
<form action="practice.php" method="POST">
  <label for="birthdaytime">EXAM (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime">
  <input type="submit" name ="submit">
</div>
</form>
</body>
 </html>
 