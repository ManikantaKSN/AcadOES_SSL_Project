<!DOCTYPE HTML>
<html>
<body>
    <?php
    session_start();
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db="subjectsdata";
     $conn=mysqli_connect($servername, $username, $password,$db); 
     $y=$_POST['qmodify'];
     $z=$_POST['enternewvalue'];
     $x=$_POST['mq'];
    //  echo $x ;
    //  echo $y ;
    //  echo $z ; 
$a=$_SESSION['name'];
     $sql="UPDATE `$a` SET $y = '$z' WHERE qno = '$x' ";

     if (mysqli_query($conn, $sql)) {
       echo "Question updated successfully";
     } 
     else {
       echo "Error updating record: " . $conn->error;
     }
     
     $conn->close();
     ?>
     <form method="POST" action="createquestionpaper.php">
<button type = "submit" name = 'backbutton'>AGAIN_MODIFY_QUESTION</button>
</form>
</body>
</html>