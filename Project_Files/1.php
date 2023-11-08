<!-- ycvaiybciubviyihsbcib
cbpisbdvugs viubsYV
bvisboydv
osvubsdib
vosbdvbsdbihsdbvhisbodvb -->

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
</style>
</head> 
<body>

<h1>question paper</h1>
<h2 id="demo"></h2>
<?php
session_start();
$x=$_SESSION['time'];
// echo $x;
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
  document.getElementById("demo").innerHTML =hours + "h "
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
        echo "database conneted sucessfully";
     }
     else{
        die("sorry unable to connecte to database because:".mysqli_connect_error());
     }
   
   //   $cx=$_POST['course'];
     $cx=$_SESSION['cc'];
     $sql = "SELECT * FROM `$cx` WHERE `qno`=1 ";
     $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<div class='container' > <h2>QUESTION" .$row['qno'] . "</h2><br><h2>" . $row['question']. "</h2><br><h3>a)" . $row['optiona'] ."</h3><h3>b)". $row['optionb']."</h3><h3> c)". $row['optionc']."</h3><h3>d)". $row['optiond']. "</h3><br>";  
     $conn->close();
     ?>  
     <form  method="POST" action="2.php">
      <input type="text" id="bbb" name="ans1" placeholder="enter option">
      
      <br>
      <input type ="submit" id="bbb" name="submit1" value="Submit&next"><br>
      <input type ="submit" id="bbb" name="submit100" value="next"><br>
      <br>
      <input type ="reset" id="bbb" name="reset"><br>
      
      </form>
      </div>
     <?php
      
      if(isset($_POST['submit1'])){
      $ram=$_SESSION['answer1'] ;
      echo "<h3>your current answer is : $ram</h3>";
      
      }
      
      
      ?>

</body>
</html>
