<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  // if session is not set this will redirect to login page
  if( isset($_SESSION['hack'])!="" ) {
    header("Location: stage4main.php");
    exit;
  }

	$error = false;

	if( isset($_POST['hbtn']) )
	{
	  $hpass = trim($_POST['hpass']);
	  $hpass = strip_tags($hpass);
	  $hpass = htmlspecialchars($hpass);
		 if(empty($hpass))
		 {
		   $error = true;
		   $passError = "Please enter your password.";
		 }

	if (!$error)
		{

		  $res=mysql_query("SELECT h0id, onlypass FROM hak0 WHERE h0id='1'");
		  $row=mysql_fetch_array($res);
		  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

		  if( $count == 1 && $row['onlypass']==$hpass )
		  {
			  $_SESSION['hack'] = $row['h0id'];
			  //header("Location: stage4check()");
			  header("Location: stage4main.php");
		  }
		  else
		  {
			  $errMSG = "Incorrect Credentials, Try again...";
		  }

		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		stage 4
	</title>
	<link rel="icon" href="images/favicon.png">
	<link href="style/stage4.css" rel="stylesheet">
	<script src="js/change.js"></script>

</head>
<body>


	<h2 style="text-decoration: underline; text-align: center;">ATM PIN</h2>
	  <p>You must read it. <b>Please <a href="file/read.txt">click here</a></b></p>
	<img src="images/purce.jpg" width="200" height="200">
	<img class="top" src="images/purce.jpg" width="200" height="200">
<!-- Trigger/Open The Modal -->
		<br>
  <center>
	  	<span style="color:#eee"><?php// echo $passError; ?></span>
	  <br>
		<button id="myBtn" class="button">Start</button>
  </center>

<!-- form -->
<div id="id01" class="modal">

  <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">


	   <div class="container">
			<div class="">

				<img src="images/atm.png" width="300" height="300" alt="Avatar" class="avatar">
			</div >



				<input type="password" placeholder="Enter Password" name="hpass" required>

				<br>


				<button type="submit" name="hbtn" class="button">Login</button>
			</div>




  </form>
</div>


<script>
// Get the modal
//var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

	// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

/* When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

 When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
</script>
	<br>

	<footer>
			<div align="center">
				<font color="black">
					<b> &copy</b> Copyright&nbsp;@&nbsp;&nbsp;<b>W_Tech_C - 2017 ...</b>&nbsp;&nbsp;&nbsp;&nbsp; Developed with ❤ by <b>Two Bitz</b>
				</font>
			</div>
		</footer>

</body>
</html>
