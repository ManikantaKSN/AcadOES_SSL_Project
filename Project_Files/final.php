<!DOCTYPE HTML>
<html>
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
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
body {
	        color:#0000ff;
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

<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="subjectsdata";
 $conn=mysqli_connect($servername, $username, $password,$db); 
session_start();
$cc1=$_SESSION['cc'];
$a=$_SESSION['answer1'];
$b=$_SESSION['answer2'];
$c=$_SESSION['answer3'];
$d=$_SESSION['answer4'];
$e=$_SESSION['answer5'];
$f=$_SESSION['answer6'];
$g=$_SESSION['answer7'];
$h=$_SESSION['answer8'];
$i=$_SESSION['answer9'];
$en=$_SESSION['eno'];
if(isset($_POST['submit10']))
{
$_SESSION['answer10']=$_POST['ans10'];
$j=$_SESSION['answer10'];
}

$answers=array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
$correctanswers=array(10);
$sql="SELECT `correctanswer` FROM `$cc1` ";
$result = mysqli_query($conn, $sql);
$i=0;
  while($row = mysqli_fetch_assoc($result)){
    $correctanswers[$i]= $row['correctanswer'];
    $i++;
  }
$m=0;
$marks=0;
for($m=0;$m<10;$m+=1){
  
    if(($correctanswers[$m])==($answers[$m])){
     $marks+=1;
     echo "<div class='container'> Your answer to Question no. ".($m+1)." is correct .You gain 1 mark. Correct answer:".$answers[$m]."<br></div>";
    }
    elseif($answers[$m]==NULL){
        $marks+=0;
        echo "<div class='container'> You havent attempted this question ".($m+1)." You gain no marks.Your answer=null <br>Correct answer:".$correctanswers[$m]."<br></div>";
    }
    else{
        $marks-=0.5;
        echo "<div class='container'> Your answer to Question no. ".($m+1)." is incorrect You lose 0.5 mark . Your answer:".$answers[$m]."<br> Correct answer:".$correctanswers[$m]."<br></div>";
    }
    

}
// echo "Marks secured=".$marks;
// echo "hi<br>";
$ron=$_SESSION['rono'];
// echo $en."<br>";
// echo $cc1."<br>";
// $sql="INSERT INTO $x (qno,question, optiona, optionb, optionc, optiond, correctanswer) 
// VALUES ('$qno','$q', '$a', '$b', '$c', '$d', '$o')";
$sqlw="SELECT * FROM `resultsof$cc1` WHERE `rollno`=$ron";
$resultw = mysqli_query($conn, $sqlw);

// // Find the number of records returned
$numw = mysqli_num_rows($resultw);
if($numw==0){
$sqlu="INSERT INTO `resultsof$cc1`(rollno) VALUES($ron)";
$resulte= mysqli_query($conn, $sqlu);
// echo $resulte;
if($resulte){
  // echo "rollno added sucessfully<br>";
}
else{
   echo "<br>unable to add rollno beasuse of error--->".mysqli_error($conn);
} 
}
else{
  // echo "added already<br>";
}
// echo $marks;

$sqlv=" update `resultsof$cc1` set `$en`= ".$marks." WHERE `rollno`=$ron ";
// echo $sqlv;
$resultk= mysqli_query($conn, $sqlv);
if($resultk){
  // echo "marks created sucessfully<br>";
}
else{
   echo "<br>unable to enter marks beasuse of error--->".mysqli_error($conn);
} 
$sqla="SELECT * FROM `$cc1`";
$resulta= mysqli_query($conn, $sqla);
echo '<table border=1 width="50%">';
echo '<tr><th>qno</th><th>question</th><th>optiona</th><th>optionb</th><th>optionc</th><th>optiond</th></tr>';
while($row = mysqli_fetch_assoc($resulta)){
  // echo var_dump($row);
  // echo "question no " .$row['qno'] ."<br>". $row['question'] ."<br>". $row['optiona'].$row['optionb'].$row['optionc'].$row['optiond'];
  // echo "<br>";
  echo '<tr><td>'.$row['qno'].'</td><td>'.$row['question'].'</td><td>'.$row['optiona'].'</td><td>'.$row['optionb'].'</td><td>'.$row['optionc'].'</td><td>'.$row['optiond'].'</td></tr>'; 
}


?>

<!-- 
<form action="st" method="POST">
  <input type="submit" name="submit" value="view result" />
</form> -->

<script>
            function going()
            {
                location.href="viewresult.php";
            }
        </script>
<button type="button" id="bbb" value="viewresult" onclick="going()">VIEW RESULT </button><br><br>
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