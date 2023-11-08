<!DOCTYPE HTML>
<html>
<body>
    <?php
    session_start();
    // require 'examdetails.php';
         $servername = "localhost";
         $username = "root";
         $password = "";
         $db="subjectsdata";
         $conn=mysqli_connect($servername, $username, $password,$db);
    // $conn=mysqli_connect($servername, $username, $password,$db);
  $x=$_SESSION['name'];
  // echo $x;
  $qno=$_POST['questionno'];
  $q=$_POST['question'];
  $a=$_POST['optiona'];
  $b=$_POST['optionb'];
  $c=$_POST['optionc'];
  $d=$_POST['optiond'];
  $o=$_POST['correctanswer'];
//  echo $q.$a.$b.$c.$d.$o.$x;
  // $a=$_POST['optiona'];
  // $b=$_POST['optionb'];
  // $c=$_POST['optionc'];
  // $d=$_POST['optiond'];
  // $o=$_POST['correctoption'];
//   $sql = "INSERT INTO cs201 (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// INSERT INTO `g203` (`qno`, `question`, `option a`, `option b`, `option c`, `option d`, `correct option`)
//  VALUES ('1', '1+1', '5', '5', '5', '5', '2');

   $sql="INSERT INTO $x (qno,question, optiona, optionb, optionc, optiond, correctanswer) 
   VALUES ('$qno','$q', '$a', '$b', '$c', '$d', '$o')";
   $result=mysqli_query($conn,$sql);
  //  echo $result;

   if ($result) {
      echo "New record created successfully";
    } 
    else {
      echo "Error is :". mysqli_error($conn);
    }  
  // echo $x;
?>

<form method="POST" action="createquestionpaper.php">
<button type = "submit" name = 'backbutton'>ADD_QUESTION</button>
</form>
</body>
</html>