<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
	$error = false;

  if( isset($_POST['hbtn']) ) 
  { 
	  
  	$hname = trim($_POST['hname']);
    $hname = strip_tags($hname);
    $hname = htmlspecialchars($hname);
    
    $hpass = trim($_POST['h1pass']);
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
    
		  $res=mysql_query("SELECT hid, hname, hpass FROM hak WHERE hid='1'");
		  $row=mysql_fetch_array($res);
		  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
      
		  if( $count == 1 && $row['hpass']==$hpass ) 
		  {
			  $_SESSION['hack'] = $row['hid'];
			  //header("Location: stage4check()");
			  header("Location: stage42.php");
		  } 
		  else 
		  {
			  $errMSG = "Incorrect Credentials, Try again...";
		  }
        
	  }
  }/*
$usr="use";
$pss="pass";
if( isset($_POST['hbtn']) ) 
  { 
	  $hname = trim($_POST['hname']);
	  $hname = strip_tags($hname);
	  $hname = htmlspecialchars($hname);
    
	  $hpass = trim($_POST['hpass']);
	  $hpass = strip_tags($hpass);
	  $hpass = htmlspecialchars($hpass);
	  
	  if($hname==$usr and $hpass==$pss)
		{
			header("Location: adminrslt.php");
		}
		else
		{
		   $error = true;
		   $passError = "username and password is wrong !-- try again";
		}*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Log in..
		</title>
		<link rel="icon" href="images/favicon.png">
		<link href="style/stage41.css" rel="stylesheet">
	</head>
	<body>
		<form class="padd" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
	  		
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="images/admin.png" width="100" height="100" alt="Avatar" class="avatar">
			</div>

	  	  <div class="container">
 
			  <input type="text" placeholder="Enter Username" name="hname" required>
			  <br>
			
			  <input type="password" placeholder="Enter Password" name="h1pass"  required>
		
			  <br>
		

			  <button type="submit" name="hbtn" class="button">Login</button>
		  </div>


  
  </form>
	</body>
</html>

