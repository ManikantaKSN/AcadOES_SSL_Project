<!-- manikanta -->
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<!-- <link rel="stylesheet" href="styles.css"> -->
<style>
            form{
            width: 50%;
            }
            legend {
                display: block;
                padding-left: 10px;
                padding-right: 10px;
                border: 3px solid green;
                background-color:tomato;
                color:white;;
            }
            input[type="text"] {
                width:250px;
                margin:5px 0px;
            }
           
.button {
  display: inline-block;
  /* padding: 15px 25px; */
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color:#24B48FFF;
  background-color:#D9B48FFF ;
  border: none;
  border-radius: 5px;
  /* box-shadow: 0 9px #999; */
}
#out {  
      margin-left:94%;
      margin-top:0%;
      border:3px solid black;
      border-radius:8px;
      position:relative;
  
    }
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

        </style>
</head>
<body style="background-color:#e4f9f5;">
<?php
session_start();

 if (isset($_POST['submit'])) {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="credentials";
   $conn = new mysqli($servername, $username, $password,$dbname);
     $x=$_POST['uname'];
     $y=$_POST['pass'];
     $sql="SELECT * FROM `adminaccounts` WHERE (email='$x')&&(password='$y')";
     $result=$conn->query($sql);
     if ($result->num_rows > 0) {
         while ($row =$result-> fetch_assoc()) {
          $_SESSION['sn']=$row['name'];
          echo "<h1 '>Welcome ".$_SESSION['sn']."</h1>";
         }
         echo "  <fieldset style='margin-top:100px;margin-right:15%;margin-left:15%' > <legend>SELECT</legend><button value='StudentList' onclick='listit()' class='button'><h3>Student List</h3></button><br><br><button value='GOTO-EXAM' onclick='goin()' class='button'><h3>TO EXAM PAGE</h3></button><br><br>
         <button value='logout' onclick='back()'class='button' ><h3>LOGOUT</h3></button></fieldset>";
        
        
        }
         else{
           echo " invalid credentials." ;
           echo "<button value='logout' onclick='back()' ><h3>BACK</h3></button> ";
         }
         
            }
?>
 <p><br></p>
<?php

if(isset($_POST['mani'])){
  echo "  <fieldset> <legend>YOU ARE THINKING!</legend><button value='StudentList' onclick='listit()' class='button'><h3>Student List</h3></button><br><br><button value='GOTO-EXAM' onclick='goin()' class='button'><h3>TO EXAM PAGE</h3></button><br><br><br>
  <button value='logout' onclick='back()'class='button' ><h3>LOGOUT</h3></button></fieldset>";
}


?>
    
 <!-- <button value="StudentList" onclick="listit()"><h3>Student List</h3></button><br><br> -->
 <!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br>
 <button value="logout" onclick="back()" ><h3>LOGOUT</h3></button>  -->
 
 <script>
 
function back()
  {
  location.href = "index.php";  
  }
function goin()
{
  location.href = "subjectenterpage.php";
}
function listit()
{
  location.href="stlist.php";
}
 </script>
 <p style="text-align:center;">© Acad OES.</p>
</body>
</html>

