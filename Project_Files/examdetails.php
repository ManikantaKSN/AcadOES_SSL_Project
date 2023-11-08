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
$_SESSION['name']=$_POST['sub_name'];
// echo $_SESSION['name'];
     if(isset($_POST['submit'])){
 $x=$_POST['sub_name'];
// $sql ="CREATE TABLE IF NOT EXISTS  `subjectsdata`.`$x` (`qno` INT(6) NOT NULL AUTO_INCREMENT , `question` TEXT NOT NULL , `optiona` TEXT NOT NULL , `optionb` TEXT NOT NULL , `optionc` TEXT NOT NULL , `optiond` TEXT NOT NULL , `correctoption` TEXT NOT NULL , PRIMARY KEY (`qno`))";
 $sql="CREATE TABLE IF NOT EXISTS `subjectsdata`.`$x` (`qno` INT(25) NOT NULL AUTO_INCREMENT , `question` VARCHAR(250) NOT NULL , `optiona` VARCHAR(250) NOT NULL , `optionb` VARCHAR(250) NOT NULL , `optionc` VARCHAR(250) NOT NULL , `optiond` VARCHAR(250) NOT NULL , `correctanswer` VARCHAR(250) NOT NULL , PRIMARY KEY (`qno`))";
$result=mysqli_query($conn,$sql);
if($result){
     echo "table created sucessfully<br>";
  }
   else{
      echo "<br>unable to craete table beasuse of error--->".mysqli_error($conn);
  } }
  ?>
 <form method="POST" action="createquestionpaper.php">
 <button type = "submit" name = 'addexam'>ADD EXAM</button><br><br>
 <!-- <button type = "submit" name = 'viewexamresult'>VIEW EXAM RESULT</button><br><br> -->
 <!-- <button type = "submit" name = 'updateexam'>UPDATE EXAM</button><br><br> -->
 </form>
</body>
 </html>
 