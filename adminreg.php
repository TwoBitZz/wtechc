<?php
	ob_start();
	session_start();
	if( isset($_SESSION['user'])!="" ){
		header("Location: home.php");
	}
	include_once 'dbconnect.php';

	$error = false;
z
	if ( isset($_POST['btn-signup']) ) {

		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);

		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);

		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);

		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}

		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}

		// password encrypt using SHA256();
		$password = hash('sha256', $pass);

		// if there's no error, continue to signup
		if( !$error ) {

			$query = "INSERT INTO users(username,useremail,userpass) VALUES('$name','$email','$password')";
			$res = mysql_query($query);

			if ($conn->$res===true) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($pass);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";
			}

		}


	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <link rel="icon" href="images/favicon.png">
    <title>W_Tech_C : : Rgister</title>

    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="style/style1.css" rel="stylesheet" type="text/css" />
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/func.js"></script>
</head>

<body>
<div class="wrap">



    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
            <h3 class="">Sign Up</h3>

        	<hr />


            	<input type="text" name="name"  placeholder="Enter Name" maxlength="50" value="" />

               <?php  echo $nameError; ?>

       			<input type="email" name="email"  placeholder="Enter Your Email" maxlength="40" value="" />

               <?php echo $emailError; ?>

            	<input type="password" name="pass"  placeholder="Enter Password" maxlength="15" />

              <?php echo $passError; ?>

            	<button type="submit" name="btn-signup">Sign Up</button>

            <div>
            	<a href="index.php">Sign in Here...</a>
            </div>



    </form>
</div>


       <footer>     <div align="center">
  <font color="#fff">
	 	<b> &copy</b> Copyright&nbsp;@&nbsp;&nbsp;<b>W_Tech_C - 2017 ...</b>&nbsp;&nbsp;&nbsp;&nbsp; Developed by <b>Sabeel k m :: sabeelmuttil@gmail.com</b>
    </font>
		</div>
   </footer>

</body>
</html>
<?php ob_end_flush(); ?>
