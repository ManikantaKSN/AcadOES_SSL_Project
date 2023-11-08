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
     $x=$_POST['enterdeletequestion'];
     echo $x ;
     $a=$_SESSION['name'];
//   $sql = " DELETE FROM 'rajesh' WHERE question = 5 ";
  $sql= "DELETE FROM `$a` WHERE qno= '$x' ";

  echo mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<form method="POST" action="createquestionpaper.php">
<button type = "submit" name = 'backbutton'>DELETE_ANOTHER_QUESTION</button>
</form>
</body>
</html>