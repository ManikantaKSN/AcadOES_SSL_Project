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
</head>
<body>
<button value="logout" id="out" onclick="back()" ><h3>LOGOUT</h3></button> 
    <h1 text-align:center> Course Page</h1>
<?php
 //connecting to database
 $servername = "localhost";
 $username = "root";
 $password = "";
 //create a connection
 $conn=mysqli_connect($servername, $username, $password);
 //checking connnection
 if(!$conn){
    die("sorry we failed to connect<br>: ".mysqli_connect_error());
 }
 else{
//     echo"connected<br>";
  }
   $sql="CREATE DATABASE IF NOT EXISTS subjectsdata";
 $result=mysqli_query($conn,$sql);
 if($result){
//     echo "database created sucessfully<br>";
 }
 else{
    echo "<br>unable to craete database beasuse of error--->".mysqli_error($conn);
 }
  ?>
 <div class="container" >
  <form method="POST" action="rough.php">
  <label for="uname" id="sss"><b> Enter-course:</b></label>
  <!-- <form method="POST" action="insertquestionpaper.php"> -->
  <input type="text" name="sub_name"  id="sss" required /> <br><br><br>
  <input type="submit" name="submit" id="bbb"><br>  

<!-- </form> -->
</div>
</form>
 <!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To HOME PAGE</h3></button><br><br><br> -->
 
 <script>
function back()
  {
  location.href = "index.php";  
  }
// function goin()
// {
//   location.href = "try.php";
// }
 </script>
 

 
<!-- <a href="try.php">GO back</a> -->
</body>
</html>
