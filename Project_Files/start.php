<!DOCTYPE html>
<html>
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
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
        font-size:15px;
        margin-top:20px;
        margin-left:27px;
        /* text-align:left; */
 
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
        margin-right:18%;
}
.container{
        margin-left:32.5%;
        align:center;
        color:black;
        border:4px solid white;
        border-radius:15px;
        background-color:#ffb84d;       
        width:35%;
        height:20%;
        opacity:0.98;
        padding-top:2%;
        padding-bottom:2%;
}
h2{
  text-align:center;
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
        <h1>Exam page</h1>
   <?php
   session_start();
   if(isset($_POST['submit']))
   {
   $_SESSION['cc']=$_POST['course'];


//    echo  "<button value='logout' onclick='back()' ><h3>LOGOUT</h3></button> ";
   }
//    $k=$_SESSION['cc'];
   
   ?> 
    <!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br><br> -->

 <script>
function back()
  {
  location.href = "loginst.php";  
  }
// function goin()
// {
//   location.href = "tryst.php";
// }
 </script>
   
        <script>
            function going()
            {
                location.href="1.php";
            }
        </script>
        <div class="container">
<button type="button" value="Start Exam" id="bbb" onclick="going()">Start Exam </button>
        </div><br><br><br>
<div class="container">
<form method="POST" action="results.php">
    exam no:<input type="number" name="no" required/>
    <input type="submit" id="bbb" value="examresults" name="sub"/>
</form>

<!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To HOME page</h3></button><br><br><br> -->
<form action="tryst.php" method="POST">
<input type="submit" name="subm" id="bbb" value="Go To HOME page">
        </div>
</form>
</body>
</html>