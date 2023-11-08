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
     if(isset($_POST['deleteexam'])){
        $x=$_SESSION['name'];
     }
     $sql="DELETE FROM `$x` ";
     if (mysqli_query($conn, $sql)) {
        echo "Exam deleted successfully";
      } 
      else {
        echo "Error: " . $conn->error;
      }
      $conn->close();
      ?>
      <a href="subjectenterpage.php">GO back to Exam page</a>
     </body>
</html>