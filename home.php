<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }
  // select loggedin users detail
  $res=mysql_query("SELECT * FROM users WHERE userid=".$_SESSION['user']);
  $userRow=mysql_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">    
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <link rel="icon" href="images/favicon.png">

    <title><?php echo $userRow['username']; ?></title>

    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="style/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="style/home.css" rel="stylesheet" type="text/css" />
    <script src="js/change.js"></script>
	
	<style>
		
		.button1:hover {
			background-color: #3e8e41
		 }

		.button1:active {
			background-color: #3e8e41;
			box-shadow: 0 5px #666;
			transform: translateY(4px);
		 }
	</style>
</head>


<body>
<div class="row">
  <div class="col-md-9">
     <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">

            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <b class="headfont">W_Tech_C</b></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">

          <ul class="nav navbar-nav navbar-right">
            
            <li class="active">
              <a href="#" class="navbar-brand" data-toggle="active" role="button" aria-haspopup="true" aria-expanded="true">
                    <span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['useremail']; ?>&nbsp;

              <ul class="nav navbar-nav">

                <li ><a href="#" >Home</a></li>

                <li><a href="about.html" target="_blank">About</a></li>

               

                <li ><a href="logout.php?logout" class="active">&nbsp;Sign Out</a></li>

              </ul>

            </li>
          </ul>
  
        </div>
      </div>
     </nav>
  </div>
 <!--<div class="sidebar">-->
   <div class="col-md-4">
    <div class ="bs-example">
      <div id="list-group">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="javascript:stage1()" class="list-group-item" class="font1">
            <span class="font1"> Stage 1 </span><span class="badge" >10</span>
        </a>
        <br>
        <a href="javascript:stage2()" class="list-group-item">
            <span class="font1"> Stage 2 </span> <span class="badge" c>10</span>
        </a>
        <br>
        <a href="javascript:stage3()" class="list-group-item">
            <span class="font1"> Stage 3 </span><span class="badge" >04</span>

        </a>
        <br>
        <a href="javascript:stage4()" class="list-group-item" >
            <span class="font1"> Stage 4 </span><span class="badge">01</span>
        </a>
        <br>
		  <div >
      		<button id="btnfin" style="width: 20;padding: 15px 40px;font-size: 24px;text-align: center;cursor: pointer;outline: none;color: #fff;background-color: #4CAF50;border: none;border-radius: 15px;box-shadow: 0 9px #999;"> Final Submit </button>
		  </div>
      </div>
    </div>
   </div>
  <div class="col-md-8">
  <iframe class="othtml" src="about.html" name="frame">  
 </iframe> 
 </div>
	
</div> 
</body>
</html>                                   
<?php ob_end_flush(); ?>



