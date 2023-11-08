<!DOCTYPE HTML>
<html>
<style>
body {
	color:lime;
	text-align:center;
        background-color:#e4f9f5;
	/* background-image:url("img5.jpg"); */
        background-repeat:no-repeat;
        background-size:100%;
}

    </style>
<body>
<button value="login" id="out" onclick="back()">LOGOUT</button> 

<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['time']=$_POST['birthdaytime'];
    echo "<h1>".$_SESSION['time']."</h1>";
    echo "<h1>EXAM IS STARTED</h1>";
}
?>
        <script>
function back()
	{
	location.href = "index.php";	
	}

</script>
</body>
</html>
