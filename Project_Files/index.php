<!DOCTYPE HTML>
<html>
<head>
  <title>AcadOES-Online Exam Website</title>
<style>
body {
	color:lime;
	text-align:center;
        background-color:#e4f9f5;
	/* background-image:url("img5.jpg"); */
        background-repeat:no-repeat;
        background-size:100%;
}
.container{
        margin-left:33%;
        border:4px solid white;
        border-radius:15px;
        background-color:#136a8a;       
        width:35%;
        height:20%;
        opacity:0.98;
        padding-bottom:10%;
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
        /* padding-top:5%; */
        color:yellow;
        font-size:45px;
        /* background:3px red solid; */
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
        font-size:20px;
}
#two{
        float:left;
        width:auto;
        padding-left:30%px;
        margin-left:50px;
}
p {
        font-family:monospace;
        font-size:20px;
}
button{
        background-color: red;
        border-radius: 8px;

  color: white;
  padding: 14px 20px;
  margin: 8px;
  border: 3px solid white;
  cursor: pointer;
  font-size:20px;
  /* width: 100%; */
}
button:hover {
  opacity: 0.9;
}
</style>
<script>
function geit(){
        location.href="adregister.php";
}
function geeit(){
        location.href="loginst.php";
}
</script>
</head>
<body>
<h1>WELCOME TO "AcadOES"</h1>
<form method="POST" action="try.php" >
<div class="container">
        <!-- <br><br> -->
        <h3> Admin Login </h3>
        <label for="uname" id="sss"><b> E-mail :</b></label>
        <input type="email" name="uname" placeholder="Enter Email" required /><br><br>
        <label for="psw" id="sss"><b>Password:</b></label>
        <input type="password" name="pass" placeholder="Enter password" required /><br><br>
        <input type="submit" name="submit" id="bbb" value="Log-in"><br> </p>
        <!-- <ul style="list-style-type:none"> -->
<div id="two">
	<p style="color:white">Did not register?</p>
        <button type="button" onclick="geit()" style="padding-left:40px;padding-right:40px;">  Register  </button><br>
        </div>
<div id="two">        
	<p style="color:white">Are you a Student?</p>
	<button type="button" onclick="geeit()">GoTo-Student</button>
</div>

</div>
</form>
</body>
</html>