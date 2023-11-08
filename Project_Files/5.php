<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  text-align:center;
}
h2{
  text-align:center;
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
</style>
</head>
<body>
<h1>question paper</h1>
<h2 id="demo"></h2>
<?php
session_start();

//   echo ""$x;


$x=$_SESSION['time'];
?>
<script>
// Set the date we're counting down to
// var x="Jan 5, 2024 15:37:25";
var x = "<?php echo $x?>";
var countDownDate = new Date(x).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =  hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<?php
// session_start();
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db="subjectsdata";
     $conn=mysqli_connect($servername, $username, $password,$db);
     if($conn){
        // echo "database conneted sucessfully";
     }
     else{
        die("sorry unable to connecte to database because:".mysqli_connect_error());
     }
     if(isset($_POST['submit4'])){

     $_SESSION['answer4']=$_POST['ans4'];}
     $cc1=$_SESSION['cc'];
     $sql = "SELECT * FROM `$cc1` WHERE `qno`=5 ";
     $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<div class='container' > <h2>QUESTION" .$row['qno'] . "</h2><br><h2>" . $row['question']. "</h2><br><h3>a)" . $row['optiona'] ."</h3><h3>b)". $row['optionb']."</h3><h3> c)". $row['optionc']."</h3><h3>d)". $row['optiond']. "</h3><br>"; 
          $conn->close();
     ?>  
     <form method="POST" action="6.php">
      <input type="text" id="bbb" placeholder="enter option" name="ans5">
      <br>
      <input type ="submit" id="bbb" name="submit5"value="submit&next"><br><br>
      <input type ="submit" id="bbb" name="submit104" value="next"><br><br>
      <input type ="reset" id="bbb" name="reset"><br>

</form>

<form action="4.php" method="POST">
<input type ="submit" id="bbb" name="submit4" value="previous"><br>
</form>
<?php 
if(isset($_POST['submit5'])){
$ram=$_SESSION['answer5'] ;
echo "<h3>your current answer is : $ram</h3>";}
?>
</div>
</body>
</html>
