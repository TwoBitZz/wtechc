<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

	$error = false;
	$res=mysql_query("SELECT * FROM users WHERE userid=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	$nam=$userRow['username'];	

	if ( isset($_POST['btn-submit']) ) 
	{
		
		// clean user inputs to prevent sql injections
		$an1 = trim($_POST['an1']);
		$an1 = strip_tags($an1);
		$an1 = htmlspecialchars($an1);
		if($an1=="node js")
		{
			$an1 ="1";
		}
		else if (empty($an1))
		 {
			$error = true;
			$an1 ="0";
		 }
		else
		{
			$an1 ="0";
		}
		
		$an2 = trim($_POST['an2']);
		$an2 = strip_tags($an2);
		$an2 = htmlspecialchars($an2);
		if($an2=="Light Amblification by Stimulated Emission of Radiation")
		{
			$an2 ="1";
		}
		else if (empty($an2))
		 {
			$error = true;
			$an2 ="0";
		 }
		else
		{
			$an2 ="0";
		}
		
		$an3 = trim($_POST['an3']);
		$an3 = strip_tags($an3);
		$an3 = htmlspecialchars($an3);
		if($an3=="Microsoft")
		{
			$an3 ="1";
		}
		else if (empty($an3))
		 {
			$error = true;
			$an3 ="0";
		 }
		else
		{
			$an3 ="0";
		}
		
		$an4 = trim($_POST['an4']);
		$an4 = strip_tags($an4);
		$an4 = htmlspecialchars($an4);
		if($an4=="X1")
		{
			$an4 ="1";
		}
		else if (empty($an4))
		 {
			$error = true;
			$an4 ="0";
		 }
		else
		{
			$an4 ="0";
		}
		
		$an5 = trim($_POST['an5']);
		$an5 = strip_tags($an5);
		$an5 = htmlspecialchars($an5);
		if($an5=="Main memmory")
		{
			$an5 ="1";
		}
		else if (empty($an5))
		 {
			$error = true;
			$an5 ="0";
		 }
		else
		{
			$an5 ="0";
		}
		
		$an6 = trim($_POST['an6']);
		$an6 = strip_tags($an6);
		$an6 = htmlspecialchars($an6);
		if($an6=="Herman Hollerith")
		{
			$an6 ="1";
		}
		else if (empty($an6))
		 {
			$error = true;
			$an6 ="0";
		 }
		else
		{
			$an6 ="0";
		}
		
		$an7 = trim($_POST['an7']);
		$an7 = strip_tags($an7);
		$an7 = htmlspecialchars($an7);
		if($an7=="Object Charecter Reader")
		{
			$an7 ="1";
		}
		else if (empty($an7))
		 {
			$error = true;
			$an7 ="0";
		 }
		else
		{
			$an7 ="0";
		}
		
		$an8 = trim($_POST['an8']);
		$an8 = strip_tags($an8);
		$an8 = htmlspecialchars($an8);
		if($an8=="Carbon Copy")
		{
			$an8 ="1";
		}
		else if (empty($an8))
		 {
			$error = true;
			$an8 ="0";
		 }
		else
		{
			$an8 ="0";
		}
		
		$an9 = trim($_POST['an9']);
		$an9 = strip_tags($an9);
		$an9 = htmlspecialchars($an9);
		if($an9=="ARPANET")
		{
			$an9 ="1";
		}
		else if (empty($an9))
		 {
			$error = true;
			$an9 ="0";
		 }
		else
		{
			$an9 ="0";
		}
		
		$an10 = trim($_POST['an10']);
		$an10 = strip_tags($an10);
		$an10 = htmlspecialchars($an10);
		if($an10=="125 Kilo bytes")
		{
			$an10 ="1";
		}
		else if (empty($an10))
		 {
			$error = true;
			$an10 ="0";
		 }
		else
		{
			$an10 ="0";
		}
/* --------------------------------------------------------------*/		
	
		 if(!empty($nam))
		 	{
			// check data exist or not
				$query = "SELECT first FROM stg1 WHERE username='$nam'";
				$result = mysql_query($query);
				$count = mysql_num_rows($result);
				
			  	if($count!=0)
			  	{
					$error1 = true;
					$stg1Error = "Answer is already exist";
				}
				/*tottabl
				$query1 = "SELECT * FROM reslt WHERE name='$nam'";
				$result1 = mysql_query($query1);
				$count1 = mysql_num_rows($result1);
				
			  	if($count1!=0)
			  	{
					$err1 = true;
					$rsltError = "Answer is already exist";
				}*/
			}
		$tot=$an1 + $an2 + $an3 + $an4 + $an5 + $an6 + $an7 + $an8 + $an9 + $an10;
		 // if there's no error, continue to data entry
		 if( !$error1  ) 
		 {
			 //$ans=1;
			$query = "INSERT INTO stg1(username,first,two,three,four,five,six,seven,eight,nine,ten,tot) VALUES('$nam','$an1','$an2','$an3','$an4','$an5','$an6','$an7','$an8','$an9','$an10','$tot')";
			$res = mysql_query($query);
				
			if ($conn->$res===true) {
				$errTyp = "success";
				$errMSG = "Successfully entered datas";
				//unset($an1);
				
			}
			 else 
			 {
				$errTyp = "danger";
				$errMSG = "Network problem , try again later...";	
			 }	
				
		 }
	  	

	}	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>stage 1</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/change.js"></script>
	<script src="js/time.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">    
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css"  />
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="style/signin.css" rel="stylesheet">
    <link href="style/home.css" rel="stylesheet" type="text/css" />
    <link href="style/stage1.css" rel="stylesheet" type="text/css" />

</head>
<body >
	
	
	<div>
 		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
			
   			<div class="list-group-item" class="font1">
				<p> 1. സെർവർ സൈഡ് Scripting  ഭാഷ ഏതാണ് ?</p>
	   				<div class="opt">
	   					<ul>
		   					<li>java script </li>
		   					<li>JQuery		</li>
		   					<li>node js		</li>
		   					<li>Ajax		</li>
						</ul>
	   				</div>   
					
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an1" >
						<br>
						
					</div>
   			</div>
   			<br>

   			<div class="list-group-item" class="font1">
				<p> 2. LASER - ൻ്റെ  പൂർണ  രൂപം എന്താണ് ?</p>
	   			<div class="opt">	
					<ul>
						<li>Lence Amblitude by Stimulated Emulssion of Radiation</li>  
						<li>Light Amblification by Stimulated Emission of Radiation</li> 
						<li>Light Amblitude by System Emulssion of Range</li> 
     				    <li>Lence Amblification by State Emission of Rase</li>
					</ul>
				</div>
    			<div align="center">
					<input class="_6v " type="text" placeholder="Your Answer" name="an2">
					<br>
						
	
				</div>
   			</div>
   			<br> 

   			<div class="list-group-item" class="font1">
				<p> 3. ഏതു കമ്പനി ആണ് വിൻഡോസ്‌ നിർമ്മിച്ചത് ?</p>
				<div class="opt">
	   				<ul>
						<li>Windows	 </li>
						<li>Microsoft</li>
						<li>Infosys  </li> 
						<li>Wipro	 </li>
	
       				</ul>
				</div>
				<div align="center">
					<input class="_6v " type="text" placeholder="Your Answer" name="an3">
					<br>
						
	
				</div>
   			</div>
   			<br>
   
   			<div class="list-group-item" class="font1">
				<p> 4. ആൻഡ്രോയിഡ്  വിന്ഡോസ് അപ്പ്ലിക്കേഷൻസ് ഒരേ സമയം സ്‌പോർട്ട്  ചെയ്യുന്ന രീതിയിൽ Nokia  ആദ്യമായി  നിർമിച്ച  മോഡൽ  ഏത്  ?</p>
	   			<div class="opt">
	   				<ul>
						<li>X1		 </li>
						<li>N73		 </li>
						<li>Lumia 540</li> 
						<li>nokia 101</li>
       				</ul>
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an4">
						<br>
						
	
					</div>
   				</div>
			</div> 
   			<br>
   			<div class="list-group-item" class="font1">
				<p> 5. primary Memmory യുടെ മറ്റൊരു നാമം ?</p>
	   			<div class="opt">
	   				<ul>
						<li>Hard disc   </li>
						<li>Pen drive   </li>
						<li>C drive     </li>
						<li>Main memmory</li>
	
       				</ul>
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an5">
						<br>
						
	
					</div>
   				</div>
			</div>
   			<br>
   
   			<div class="list-group-item" class="font1">
				<p> 6. Punch Card എന്ന ഉപകരണത്തിൻ്റെ കണ്ടുപിടിത്തക്കാരന് ആരാണ് ? </p>
	   			<div class="opt">
	   				<ul>
						<li>Mr Dagan nor         </li>
						<li>Herman Hollerith	 </li>
						<li>Mr Alan Thomas       </li> 
						<li>Dr Aboorna Jodrimayi </li> 
	
       				</ul>
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an6">
						<br>
						
	
					</div>
				</div>
			</div>
   			<br>  
   
   			<div class="list-group-item" class="font1">
				<p> 7. OCR ൻ്റെ പൂർണരൂപം ?</p>
	   			<div class="opt">
					<ul>
						<li>Opening Chapter Reading  </li>
						<li>Object Charecter Renaming</li>
						<li>Object Chapter Reader    </li>
						<li>Object Charecter Reader  </li> 
	
       				</ul>
	 				<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an7">
						<br>
						
	
					</div>
				</div>
			</div>
			<br>

			<div class="list-group-item" class="font1">
				<p> 8. ഈമെയിലിൽ ഉള്ള CC എന്നതിൻ്റെ  പൂർണരൂപം ?</p>
				<div class="opt">
					<ul>
						<li>Commannd Class	</li>
						<li>Command Case	</li>
						<li>Carbon Copy		</li> 
						<li>Carbon Case		</li>
	
					</ul>
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an8">
						<br>
						
	
					</div>
				</div>
			</div>
   			<br>    
   
			<div class="list-group-item" class="font1">
				<p> 9. ആദ്യത്തെ Computer Network ൻ്റെ നാമം എന്തായിരുന്നു ?</p>
				<div class="opt">
					<ul>
						<li>ZYGONET  </li> 
						<li>CORPANET </li>
						<li>ARPANET  </li> 
						<li>SUPERNET </li>
	
					</ul>
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an9">
						<br>
						
	
					</div>
				</div>
			</div>
			<br>

			<div class="list-group-item" class="font1">
				<p> 10. 1 Mega bits = _____ Kilo bytes ?</p>
				<div class="opt">
					<ul>
						<li>1024 Kilo bytes	</li>
						<li>1000 Kilo bytes	</li>
						<li>125 Kilo bytes 	</li>
						<li>135 Kilo bytes	</li>
	
					</ul>
					<div align="center">
						<input class="_6v " type="text" placeholder="Your Answer" name="an10">
						<br>
						
	

					</div>
				</div>
			</div>
			<br>
			
			<div align="center" >
				<?php  echo "<div style='color:red;'> $stg1Error</div>" ?>
				<br>
	  			<button class="bttn" type="submit" name="btn-submit" >Submit Answer</button>
			</div>
		</form>

   		<footer>     
			<div align="center">
				<font color="black">
					<b> &copy</b> Copyright&nbsp;@&nbsp;&nbsp;<b>W_Tech_C - 2016 ...</b>&nbsp;&nbsp;&nbsp;&nbsp; Developed by <b>Sabeel k m :: sabeelmuttil@gmail.com</b> 
				</font>
			</div>
		</footer> 

	</div> 
    
</body>
</html>
<?php ob_end_flush(); ?>