<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  // it will never let you open index(login) page if session is set
  if ( isset($_SESSION['user'])!="" ) {
    header("Location: home.php");
    exit;
  }

  $error = false;

  if( isset($_POST['btn-login']) ) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    // prevent sql injections / clear user invalid inputs

    if(empty($email)){
      $error = true;
      $emailError = "Please enter your email address.";
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
      $error = true;
      $emailError = "Please enter valid email address.";
    }

    if(empty($pass)){
      $error = true;
      $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

      $password = hash('sha256', $pass); // password hashing using SHA256

      $res=mysql_query("SELECT userid, username, userpass FROM users WHERE useremail='$email'");
      $row=mysql_fetch_array($res);
      $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

      if( $count == 1 && $row['userpass']==$password ) {
        $_SESSION['user'] = $row['userid'];
        header("Location: home.php");
      } else {
        $errMSG = "Incorrect Credentials, Try again...";
      }

    }

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <link rel="icon" href="images/favicon.png">
    <title>W_Tech_C : : Home</title>

    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="style/style1.css" rel="stylesheet" type="text/css" />
    <script src="js/func.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.dimensions.js"></script>

</head>

<body >

          <div class="wrap">
  			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
    				<h3 >Login</h3>
            <hr />
             <?php
              if ( isset($errMSG) ) {

              ?>
              <div style="color:#eee">
                <div >
                  <?php echo $errMSG; ?>
                </div>
              </div>
                <?php
                 }
                ?>
    				<input type="email" name="email" placeholder="Your Email"  value="<?php echo $email; ?>" maxlength="40" required autofocus>
            <!--<span style="color:#eee"><?php //echo $emailError; ?></span>-->
            <input type="password" name="pass" placeholder="Password"  required />
    				<!--<span style="color:#eee"><?php //echo $passError; ?></span>-->
            <button type="submit" name="btn-login" value="Login">Log In</button>


  				</form>


			</div>

  </body>
</html>
