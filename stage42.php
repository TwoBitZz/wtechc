<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  // it will never let you open index(login) page if session is set
if ( !isset($_SESSION['hack2']) ) {
    header("Location: stage41.php");
    exit;
  }
	// select loggedin users detail
		$res=mysql_query("SELECT * FROM hak2 WHERE hid=".$_SESSION['hack2']);
		$userRow=mysql_fetch_array($res);

    // if session is not set this will redirect to login page
    if( isset($_SESSION['hack3'])!="" ) {
      header("Location: stage43.php");
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

        $res=mysql_query("SELECT hid, hpass FROM hak3 WHERE hid='1'");
        $row=mysql_fetch_array($res);
        $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

        if( $count == 1 && $row['hpass']==$hpass )
        {
          $_SESSION['hack3'] = $row['hid'];
          //header("Location: stage4check()");
          header("Location: stage43.php");
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


  <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">


	   <div class="container">
			<div class="">
        <h1>404f6d06ff586a8d1f7349dd6433</h1>
        <h3>key : hello </h3>
      </div >



				<input type="password" placeholder="Enter Password" name="hpass" required>

				<br>


				<button type="submit" name="hbtn" class="button">Login</button>
			</div>




  </form>

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
