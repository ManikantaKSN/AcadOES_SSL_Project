
<!DOCTYPE HTML>
<html>
<head>
<!-- <link rel="stylesheet" href="styles.css"> -->
<style>
            /* form{
            width: 50%;
            }
            legend {
                display: block;
                padding-left: 10px;
                padding-right: 10px;
                border: 3px solid green;
                background-color:tomato;
                color:white;;
            } */

            body {
	       color:black;
	         text-align:center;
           background-color:#e4f9f5;
	/* background-image:url("img5.jpg"); */
          background-repeat:no-repeat;
        /* background-size:100%; */
                  }
/* 
            label {
              padding-top:50px;
              padding-left:20px;
              font-size:25px;
            }
            input[type="text"] {
                margin-top:-100px;
                width:250px;
                margin-left:170px;
                height:30px;
              
            } */
            
            .container{
              padding-top:50px;
        margin-left:33%;
        border:4px solid green;
        border-radius:15px;
        background-color:#136a8a;       
        width:30%;
        height:10%;
        opacity:0.98;
        padding-bottom:50px;
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
        width:550px;

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
/* .button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
} */
#bbb{
        background-color:white;
        border-radius:4px;
        color:black;
        font-size:15px;
        margin-top:20px;
        margin-left:27px;
 
}

        </style>
</head>
<body>
<button value='logout' id='out' onclick='back()' ><h3>LOGOUT</h3></button>

  <h1>COURSE PAGE</h1>
<?php
session_start();
 if (isset($_POST['submit'])) {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="stcredentials";
   $conn = new mysqli($servername, $username, $password,$dbname);
     $x=$_POST['uname'];
     $y=$_POST['pass'];

     $sql="SELECT * FROM `staccounts` WHERE (email='$x')&&(password='$y')";
     $result=$conn->query($sql);
     if ($result->num_rows > 0) {
         while ($row =$result-> fetch_assoc()) {
           echo "<h1>Welcome ".$row['name']."</h1><br><br>";
           $_SESSION['rono']=$row['rollno'];
         }
        echo" <div class='container'> <form method='POST' action='start.php'>

          <datalist id='course'>
          <select name='course'>
          <option value='cs101'>CS101</option>
          <option value='cs102'>CS102</option>
          <option value='cs103'>CS103</option>
          <option value='cs104'>CS104</option>
          <option value='cs105'>CS105</option>
          </select> <br>
          </datalist>
          <label for 'course' > <b>SELECT COURSE:</label>
          <input type='text' name='course' list='course' required/><br>
          <input type='submit' name='submit' id='bbb' value='Go'>
          </form></div>";
          

        }
         else{
           echo " invalid credentials." ;
           echo "<button value='logout' onclick='back()' ><h3>BACK</h3></button> ";
         }
            }
?>
 <!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br><br> -->
 <!-- <button value="logout" onclick="back()" ><h3>LOGOUT</h3></button>  -->
<?php
if(isset($_POST['subm'])){


  // echo "<button value='logout' onclick='back()' ><h3>LOGOUT</h3></button> ";
        echo"<div class='container'> <form method='POST' action='start.php'>
         
          <label for 'course' > <b>SELECT COURSE:</label>
          <datalist id='course'>
          <select name='course'>
          <option value='cs101'>CS101</option>
          <option value='cs102'>CS102</option>
          <option value='cs103'>CS103</option>
          <option value='cs104'>CS104</option>
          <option value='cs105'>CS105</option>
          </select> <br>
          </datalist>
          <input type='text' name='course' list='course' required/><br>
          <input type='submit' id='bbb' name='submit' value='Go'>
          </form> </div>";
}
?>
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