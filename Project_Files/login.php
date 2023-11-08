
<!DOCTYPE HTML>
<html>
<body>
<?php
 if (isset($_POST['submit'])) {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="credentials";
   $conn = new mysqli($servername, $username, $password,$dbname);
     $x=$_POST['uname'];
     $y=$_POST['pass'];
       // $sql="SELECT name FROM accounts WHERE (email='$hold_mail')&&(pass='$hold_pass') ";
       //   $result=$conn->query($sql);
     $sql="SELECT * FROM `accounts` WHERE (username='$x')&&(password='$y')";
     $result=$conn->query($sql);
     if ($result->num_rows > 0) {
         while ($row =$result-> fetch_assoc()) {
           echo "<h1>welcome".$row['name']." sir</h1>";
         }}
         else{
           echo " invalid credentials." ;
         }
            }
?>

</body>
</html>


