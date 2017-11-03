<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  // it will never let you open index(login) page if session is set
  if ( !isset($_SESSION['hack']) ) {
      header("Location: stage4main.php");
      exit;
    }
  // select loggedin users detail
    $res=mysql_query("SELECT * FROM hak1 WHERE hid=".$_SESSION['hack1']);
    $userRow=mysql_fetch_array($res);

    // if session is not set this will redirect to login page
    if( isset($_SESSION['hack2'])!="" ) {
      header("Location: stage42.php");
      exit;
    }

	$error = false;

  if( isset($_POST['hbtn']) )
  {

  	$hname = trim($_POST['hname']);
    $hname = strip_tags($hname);
    $hname = htmlspecialchars($hname);

    $hpass = trim($_POST['hpass']);
    $hpass = strip_tags($hpass);
    $hpass = htmlspecialchars($hpass);

	 if(empty($hname))
	 {
      $error = true;
      $hnameError = "Please enter input.";
	 }

	   if(empty($hpass))
	   {
		   $error = true;
		   $passError = "Please enter your password.";
	   }

	  //no err pls contenue
	  if (!$error)
	  {

		  $res=mysql_query("SELECT hid, hname, hpass FROM hak2 WHERE hid='1'");
		  $row=mysql_fetch_array($res);
		  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

		  if( $count == 1 && $row['hpass']==$hpass )
		  {
			  $_SESSION['hack2'] = $row['hid'];
			  //header("Location: stage4check()");
			  header("Location: stage42.php");
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

  <center>
    <h2 style="text-decoration: underline; text-align: center;">Available Balance :- 2500</h2>

      <span style="color:#eee"><?php// echo $passError; ?></span>
    <br>
    <button id="myBtn" class="button">Transfer</button>
  </center>

<div id="id01" class="modal">
  <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

	   <div class="container">
			<div class="">
        <h1>ATM PIN</h1>
			</div >

        <input type="text" placeholder="Enter username" name="hname" required>

				<input type="password" placeholder="Enter Password" name="hpass" required>

				<br>


				<button type="submit" name="hbtn" class="button">Transfer</button>
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
</script>
	<br>

	<footer>
			<div align="center">
				<font color="black">
					<b> &copy</b> Copyright&nbsp;@&nbsp;&nbsp;<b>W_Tech_C - 2017 ...</b>&nbsp;&nbsp;&nbsp;&nbsp; Developed with ❤ by <b><a target="_blank" href="http://www.twobits.ml">TwoBitZz</a></b>
				</font>
			</div>
		</footer>

</body>
</html>

<?php ob_end_flush(); ?>
