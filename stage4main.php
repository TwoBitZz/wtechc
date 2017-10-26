<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // it will never let you open index(login) page if session is set
if ( !isset($_SESSION['hack']) ) {
    header("Location: stage4.php");
    exit;
  }
	// select loggedin users detail
		$res=mysql_query("SELECT * FROM hak0 WHERE h0id=".$_SESSION['hack']);
		$userRow=mysql_fetch_array($res);


	
?>
hi sabeel

<?php ob_end_flush(); ?>