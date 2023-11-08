<!DOCTYPE HTML>
<html>
<head>
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
            body {
	       color:black;
	       text-align:center;
        background-color:#e4f9f5;
	/* background-image:url("img5.jpg"); */
        background-repeat:no-repeat;
        background-size:100%;
}
#sss{
        font-size:25px;
        /* text-align:left; */
        margin-right:0px;
}
#bbb{
        background-color:white;
        border-radius:4px;
        color:black;
        font-size:15px;
        /* margin-top:20px; */
 
}
#out {  
      margin-left:94%;
      margin-top:0%;
      border:3px solid black;
      border-radius:8px;
      position:relative;
  
    }
        </style>
        </head>
        <body >
        <?php 
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db="subjectsdata";
        $conn=mysqli_connect($servername, $username, $password,$db);
        // echo $_POST['submit'];
        // echo "<br>hi";
        if(isset($_POST['submit'])){
        $_SESSION['eno']=$_POST['examno'];
$d=$_SESSION['eno'];
 $x=$_SESSION['name'];
 $sq="alter table `resultsof$x` add `$d` FLOAT(25)";
 $result2=mysqli_query($conn,$sq);
if($result2){
    echo "column added successfully";
}
else {
    echo "column not added paper already added";
}}
 ?>
<h1>Question paper Setting Page</h1>
<form method="POST" action="insertquestionpaper.php">

  <fieldset>
  <legend> enter question</legend>
  <br>
   QUESTION NO:<input type="textarea"  name="questionno" required /><br><br>
  <label>ENTER QUESTION:</label>
  <input type="textarea"  name="question" required /> <br><br><br>
 </fieldset>

<br><br>
<fieldset> 
  <legend> enter options </legend>
ENTER OPTION A:<input type="text" name='optiona' required/><br><br>
ENTER OPTION B:<input type="text"  name='optionb' required/><br><br>
ENTER OPTION C:<input type="text" name='optionc' required/><br><br>
ENTER OPTION D:<input type="text" name='optiond' required/><br><br>
ENTER CORRECT OPTION:<input type="text" name='correctanswer' required/><br><br>
<button  type = "submit" name = 'submitquestion' id="bbb"> SUBMIT QUESTION</button>
</fieldset>
</form>
<br>
<br>
<fieldset style="
    margin-right: 50% ";
>
<legend> delete question </legend>
<form  method="POST" action="deletequestion.php">
ENTER QUESTION NO TO DELETE:<input type="text"  name='enterdeletequestion' required/><br><br>
<input type="submit" name="submit1" id="bbb"><br> 
     </form>
  </fieldset>
<br>
<br>
  <fieldset style="
    margin-right: 50% " ;>
<legend> modify Question </legend>
<form method="POST" action="modifyquestion.php">
<label for="qmodify"> <b>column_modify :</label>
<datalist id="qmodify">
  <select name="qmodify">
  <option value="question">question</option>
 <option value="optiona">optiona</option>
 <option value="optionb">optionb</option>
 <option value="optionc">optionc</option>
 <option value="optiond">optiond</option>
 <option value="correctanswer">correctanswer</option>
  </select> <br>
</datalist>
<input type="text" name="qmodify" list="qmodify"><br>

 ENTER NEW VALUE :<input type="text" name='enternewvalue' required/><br><br>
 ENTER QUESTION NO TO MODIFY:<input type="text" name='mq' required/> <br><br>
<input type="submit"  id="bbb" name="submit2"><br> 
     </form>
  </fieldset>
  <br><br>
  <fieldset  style="margin-right: 50% ";>
    <br>
<legend> delete exam </legend>
<form method="POST" action="deleteexam.php">
<input type="submit" id="bbb" name='deleteexam'/><br><br> 
     </form>
  </fieldset>
  <!-- <form method="POST" action="coursedetails.php">
<button type = "submit" name = 'backbutton'>GO_COURSE_PAGE</button>
</form> -->
<button style="margin-top:50px;"type="button" id ="sss" onclick="backing()">Go Back</a>
</div>
<script>
  function backing()
  {
    location.href = "subjectenterpage.php";
  }
</script>
<!-- <form method="POST" action="final.php">
  positivemarks:<input type ="number" name="pos" ><br>
   negativemarks:<input type ="number" name="nos" ><br>
   <input type="submit" name="submit11"><br> 

          </form>  -->
 <button value="GOTO-EXAM"  id= "out" onclick="goin()" ><h3>TO COURSE PAGE</h3></button><br><br><br>
 <!-- <button value="logout" onclick="back()" ><h3>LOGOUT</h3></button>  -->
 <script>
// function back()
//   {
//   location.href = "admin.php";  
//   }
function goin()
{
  location.href = "coursedetails.php";
}
 </script>

</body>
 </html>  