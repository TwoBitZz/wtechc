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

		if(isset($_POST['an1']))
		{
				$an1 = $_POST['an1'];

				 if ($an1 == "node js")
				 {
					 $an1 = "1";
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

		}

		if(isset($_POST['an2']))
		{
				$an2 = $_POST['an2'];

				 if ($an2 == "Light Amblification by Stimulated Emission of Radiation")
				 {
					 $an2 = "1";
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

		}

		if(isset($_POST['an3']))
		{
				$an3 = $_POST['an3'];

				 if ($an3 == "Microsoft")
				 {
					 $an3 = "1";
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

		}

		if(isset($_POST['an4']))
		{
				$an4 = $_POST['an4'];

				 if ($an4 == "X1")
				 {
					 $an4 = "1";
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

		}

		if(isset($_POST['an5']))
		{
				$an5 = $_POST['an5'];

				 if ($an5 == "Main memmory")
				 {
					 $an5 = "1";
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

		}

		if(isset($_POST['an6']))
		{
				$an6 = $_POST['an6'];

				 if ($an6 == "Herman Hollerith")
				 {
					 $an6 = "1";
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

		}

		if(isset($_POST['an7']))
		{
				$an7 = $_POST['an7'];

				 if ($an7 == "Object Charecter Reader")
				 {
					 $an7 = "1";
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

		}

		if(isset($_POST['an8']))
		{
				$an8 = $_POST['an8'];

				 if ($an8 == "Carbon Copy")
				 {
					 $an8 = "1";
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

		}

		if(isset($_POST['an9']))
		{
				$an9 = $_POST['an9'];

				 if ($an9 == "ARPANET")
				 {
					 $an9 = "1";
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

		}

		if(isset($_POST['an10']))
		{
				$an10 = $_POST['an10'];

				 if ($an10 == "125 Kilo bytes")
				 {
					 $an10 = "1";
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

		}

		if(isset($_POST['an11']))
		{
				$an11 = $_POST['an11'];

				 if ($an11 == "John Napier")
				 {
					 $an11 = "1";
				 }
				 else if (empty($an11))
		 		 {
		 			$error = true;
		 			$an11 ="0";
		 		 }
		 			else
		 			{
		 				$an11 ="0";
		 			}

		}

		if(isset($_POST['an12']))
		{
				$an12 = $_POST['an12'];

				 if ($an12 == "Apple")
				 {
					 $an12 = "1";
				 }
				 else if (empty($an12))
		 		 {
		 			$error = true;
		 			$an12 ="0";
		 		 }
		 			else
		 			{
		 				$an12 ="0";
		 			}

		}

		if(isset($_POST['an13']))
		{
				$an13 = $_POST['an13'];

				 if ($an13 == "Nedungadi Bank")
				 {
					 $an13 = "1";
				 }
				 else if (empty($an13))
		 		 {
		 			$error = true;
		 			$an13 ="0";
		 		 }
		 			else
		 			{
		 				$an13 ="0";
		 			}

		}

		if(isset($_POST['an14']))
		{
				$an14 = $_POST['an14'];

				 if ($an14 == "Data Diddling")
				 {
					 $an14 = "1";
				 }
				 else if (empty($an14))
		 		 {
		 			$error = true;
		 			$an14 ="0";
		 		 }
		 			else
		 			{
		 				$an14 ="0";
		 			}

		}

		if(isset($_POST['an15']))
		{
				$an15 = $_POST['an15'];

				 if ($an15 == "Cyber Squatting")
				 {
					 $an15 = "1";
				 }
				 else if (empty($an15))
		 		 {
		 			$error = true;
		 			$an15 ="0";
		 		 }
		 			else
		 			{
		 				$an15 ="0";
		 			}

		}

		if(isset($_POST['an16']))
		{
				$an16 = $_POST['an16'];

				 if ($an16 == "1.3 Seconds")
				 {
					 $an16 = "1";
				 }
				 else if (empty($an16))
		 		 {
		 			$error = true;
		 			$an16 ="0";
		 		 }
		 			else
		 			{
		 				$an16 ="0";
		 			}

		}

		if(isset($_POST['an17']))
		{
				$an17 = $_POST['an17'];

				 if ($an17 == "Object Charecter Reader")
				 {
					 $an17 = "1";
				 }
				 else if (empty($an17))
		 		 {
		 			$error = true;
		 			$an17 ="0";
		 		 }
		 			else
		 			{
		 				$an17 ="0";
		 			}

		}

		if(isset($_POST['an18']))
		{
				$an18 = $_POST['an18'];

				 if ($an18 == "Carbon Copy")
				 {
					 $an18 = "1";
				 }
				 else if (empty($an18))
		 		 {
		 			$error = true;
		 			$an18 ="0";
		 		 }
		 			else
		 			{
		 				$an18 ="0";
		 			}

		}

		if(isset($_POST['an19']))
		{
				$an19 = $_POST['an19'];

				 if ($an19 == "ARPANET")
				 {
					 $an19 = "1";
				 }
				 else if (empty($an9))
		 		 {
		 			$error = true;
		 			$an19 ="0";
		 		 }
		 			else
		 			{
		 				$an19 ="0";
		 			}

		}

		if(isset($_POST['an20']))
		{
				$an20 = $_POST['an20'];

				 if ($an20 == "125 Kilo bytes")
				 {
					 $an20 = "1";
				 }
				 else if (empty($an20))
		 		 {
		 			$error = true;
		 			$an20 ="0";
		 		 }
		 			else
		 			{
		 				$an20 ="0";
		 			}

		}


/* --------------------------------------------------------------*/

		 if(!empty($nam))
		 	{
			// check data exist or not
				$query = "SELECT m1 FROM stg1 WHERE username='$nam'";
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
			$tot=$an1 + $an2 + $an3 + $an4 + $an5 + $an6 + $an7 + $an8 + $an9 + $an10 + $an11 + $an12 + $an13 + $an14 + $an15 + $an16 + $an17 + $an18 + $an19 + $an20 ;
			 // if there's no error, continue to data entry
		 if( !$error1  )
		 {
			 //$ans=1;

			$query = "INSERT INTO stg1(username,m1,m2,m3,m4,m5,m6,m7,m8,m9,m10,m11,m12,m13,m14,m15,m16,m17,m18,m19,m20,tot) VALUES('$nam','$an1','$an2','$an3','$an4','$an5','$an6','$an7','$an8','$an9','$an10','$an11','$an12','$an13','$an14','$an15','$an16','$an17','$an18','$an19','$an20','$tot')";

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

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <link rel="icon" href="images/favicon.png">

<style>
* {
	box-sizing: border-box;
}
body {
	background-color: #f1f1f1;
}
#regForm {
	background-color: #ffffff;
	margin: 100px auto;
	font-family: Raleway;
	padding: 40px;
	width: 50%;
	min-width: 300px;
}
h1 {
	text-align: center;
}
input {
	padding: 10px;
	width: 100%;
	font-size: 17px;
	font-family: Raleway;
	border: 1px solid #aaaaaa;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
	background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
	display: none;
}
button {
	background-color: #4CAF50;
	color: #ffffff;
	border: none;
	padding: 10px 20px;
	font-size: 17px;
	font-family: Raleway;
	cursor: pointer;
}
button:hover {
	opacity: 0.8;
}
#prevBtn {
	background-color: #bbbbbb;
}
/* Make circles that indicate the steps of the form: */
.step {
	height: 9px;
	width: 9px;
	margin: 0 2px;
	background-color: #bbbbbb;
	border: none;
	border-radius: 50%;
	display: inline-block;
	opacity: 0.5;
}
.step.active {
	opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
	background-color: #4CAF50;
}
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
</head>
<body >
 		<form id="regForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
			<h1>Stage 1</h1>
			<div class="tab">
				<h3 > 1. സെർവർ സൈഡ് Scripting  ഭാഷ ഏതാണ് ?</h3>
						<label class="container">java script
							<input type="radio" value="java script" id="nextBtn" onclick="nextPrev(1)" name="an1">
							<span class="checkmark"></span>
						</label>
						<label class="container">JQuery
							<input type="radio" value="JQuery" id="nextBtn" onclick="nextPrev(1)" name="an1">
							<span class="checkmark"></span>
						</label>
						<label class="container">node js
							<input type="radio" value="node js" id="nextBtn" onclick="nextPrev(1)" name="an1">
							<span class="checkmark"></span>
						</label>
						<label class="container">Ajax
							<input type="radio" value="Ajax" id="nextBtn" onclick="nextPrev(1)" name="an1">
							<span class="checkmark"></span>
						</label>
   			<br>
			</div>

			<div class="tab">
				<h3 > 2. LASER - ന്റെ പൂർണ  രൂപം എന്താണ് ?</h3>
					<label class="container">Lence Amblitude by Stimulated Emulssion of Radiation
						<input type="radio" value="Lence Amblitude by Stimulated Emulssion of Radiation" id="nextBtn" onclick="nextPrev(1)" name="an2">
						<span class="checkmark"></span>
					</label>
					<label class="container">Light Amblification by Stimulated Emission of Radiation
						<input type="radio" value="Light Amblification by Stimulated Emission of Radiation" id="nextBtn" onclick="nextPrev(1)" name="an2">
						<span class="checkmark"></span>
					</label>
					<label class="container">Light Amblitude by System Emulssion of Range
						<input type="radio" value="Light Amblitude by System Emulssion of Range" id="nextBtn" onclick="nextPrev(1)" name="an2">
						<span class="checkmark"></span>
					</label>
					<label class="container">Lence Amblification by State Emission of Rase
						<input type="radio" value="Lence Amblification by State Emission of Rase" id="nextBtn" onclick="nextPrev(1)" name="an2">
						<span class="checkmark"></span>
					</label>
			<br>
		</div>

		<div class="tab">
			<h3 > 3. ഏതു കമ്പനി ആണ് വിൻഡോസ്‌ നിർമ്മിച്ചത് ?</h3>
	   				<label class="container">Windows
							<input type="radio" value="Windows" id="nextBtn" onclick="nextPrev(1)" name="an3">
							<span class="checkmark"></span>
						</label>
						<label class="container">Microsoft
							<input type="radio" value="Microsoft" id="nextBtn" onclick="nextPrev(1)" name="an3">
							<span class="checkmark"></span>
						</label>
						<label class="container">Infosys
							<input type="radio" value="Infosys" id="nextBtn" onclick="nextPrev(1)" name="an3">
							<span class="checkmark"></span>
						</label>
						<label class="container">Wipro
							<input type="radio" value="Wipro" id="nextBtn" onclick="nextPrev(1)" name="an3">
							<span class="checkmark"></span>
						</label>
				</div>

				<div class="tab">
					<h3 > 4. ആൻഡ്രോയിഡ്  വിന്ഡോസ് അപ്പ്ലിക്കേഷൻസ് ഒരേ സമയം സ്‌പോർട്ട്  ചെയ്യുന്ന രീതിയിൽ Nokia  ആദ്യമായി  നിർമിച്ച  മോഡൽ  ഏത്  ?</p>

							<label class="container">X1
								<input type="radio" value="X1"id="nextBtn" onclick="nextPrev(1)" name="an4">
								<span class="checkmark"></span>
							</label>
							<label class="container">N73
								<input type="radio" value="N73"id="nextBtn" onclick="nextPrev(1)" name="an4">
								<span class="checkmark"></span>
							</label>
							<label class="container">Lumia 540
								<input type="radio" value="Lumia 540"id="nextBtn" onclick="nextPrev(1)" name="an4">
								<span class="checkmark"></span>
							</label>
							<label class="container">Nokia 101
								<input type="radio" value="Nokia 101"id="nextBtn" onclick="nextPrev(1)" name="an4">
								<span class="checkmark"></span>
							</label>

			</div>

			<div class="tab">
				<h3 > 5. primary Memory യുടെ മറ്റൊരു നാമം ?</h3>

				<label class="container">Hard disc
					<input type="radio" value="Hard disc"id="nextBtn" onclick="nextPrev(1)" name="an5">
					<span class="checkmark"></span>
				</label>
				<label class="container">Pen drive
					<input type="radio" value="Pen drive"id="nextBtn" onclick="nextPrev(1)" name="an5">
					<span class="checkmark"></span>
				</label>
				<label class="container">C drive
					<input type="radio" value="C drive"id="nextBtn" onclick="nextPrev(1)" name="an5">
					<span class="checkmark"></span>
				</label>
				<label class="container">Main memmory
					<input type="radio" value="Main memmory"id="nextBtn" onclick="nextPrev(1)" name="an5">
					<span class="checkmark"></span>
				</label>

			</div>


			<div class="tab">
				<h3 > 6. Punch Card കണ്ടുപിടിച്ചതാര് ? </h3>

				<label class="container">Mr Dagan nor
					<input type="radio" value="Mr Dagan nor" id="nextBtn" onclick="nextPrev(1)" name="an6">
					<span class="checkmark"></span>
				</label>
				<label class="container">Herman Hollerith
					<input type="radio" value="Herman Hollerith" id="nextBtn" onclick="nextPrev(1)" name="an6">
					<span class="checkmark"></span>
				</label>
				<label class="container">Mr Alan Thomas
					<input type="radio" value="Mr Alan Thomas" id="nextBtn" onclick="nextPrev(1)" name="an6">
					<span class="checkmark"></span>
				</label>
				<label class="container">Dr Aboorna Jodrimayi
					<input type="radio" value="Dr Aboorna Jodrimayi" id="nextBtn" onclick="nextPrev(1)" name="an6">
					<span class="checkmark"></span>
				</label>

			</div>


			<div class="tab">
				<h3 > 7. OCR ന്റെ പൂർണരൂപം ?</h3>

				<label class="container">Opening Chapter Reading
					<input type="radio" value="Opening Chapter Reading" id="nextBtn" onclick="nextPrev(1)" name="an7">
					<span class="checkmark"></span>
				</label>
				<label class="container">Object Charecter Renaming
					<input type="radio" value="Object Charecter Renaming" id="nextBtn" onclick="nextPrev(1)" name="an7">
					<span class="checkmark"></span>
				</label>
				<label class="container">Object Chapter Reader
					<input type="radio" value="Object Chapter Reader" id="nextBtn" onclick="nextPrev(1)" name="an7">
					<span class="checkmark"></span>
				</label>
				<label class="container">Object Charecter Reader
					<input type="radio" value="Object Charecter Reader" id="nextBtn" onclick="nextPrev(1)" name="an7">
					<span class="checkmark"></span>
				</label>
					</div>


					<div class="tab">
						<h3 > 8. ഈമെയിലിൽ ഉള്ള CC എന്നതിൻ്റെ  പൂർണരൂപം ?</h3>

						<label class="container">Commannd Class
							<input type="radio" value="Commannd Class" id="nextBtn" onclick="nextPrev(1)" name="an8">
							<span class="checkmark"></span>
						</label>
						<label class="container">Command Case
							<input type="radio" value="Command Case" id="nextBtn" onclick="nextPrev(1)" name="an8">
							<span class="checkmark"></span>
						</label>
						<label class="container">Carbon Copy
							<input type="radio" value="Carbon Copy" id="nextBtn" onclick="nextPrev(1)" name="an8">
							<span class="checkmark"></span>
						</label>
						<label class="container">Carbon Case
							<input type="radio" value="Carbon Case" id="nextBtn" onclick="nextPrev(1)" name="an8">
							<span class="checkmark"></span>
						</label>

					</div>

					<div class="tab">
						<h3 > 9. ആദ്യത്തെ Computer Network ന്റെ നാമം എന്തായിരുന്നു ?</h3>

						<label class="container">ZYGONET
							<input type="radio"value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an9">
							<span class="checkmark"></span>
						</label>
						<label class="container">CORPANET
							<input type="radio" value="CORPANET"id="nextBtn" onclick="nextPrev(1)" name="an9">
							<span class="checkmark"></span>
						</label>
						<label class="container">ARPANET
							<input type="radio" value="ARPANET"id="nextBtn" onclick="nextPrev(1)" name="an9">
							<span class="checkmark"></span>
						</label>
						<label class="container">SUPERNET
							<input type="radio" value="SUPERNET"id="nextBtn" onclick="nextPrev(1)" name="an9">
							<span class="checkmark"></span>
						</label>

			</div>


			<div class="tab">
				<h3 > 10. 1 Mega bits = _____ Kilo bytes ?</h3>

				<label class="container">1024 Kilo bytes
					<input type="radio" value="1024 Kilo bytes"id="nextBtn" onclick="nextPrev(1)" name="an10">
					<span class="checkmark"></span>
				</label>
				<label class="container">1000 Kilo bytes
					<input type="radio" value="1000 Kilo bytes"id="nextBtn" onclick="nextPrev(1)" name="an10">
					<span class="checkmark"></span>
				</label>
				<label class="container">125 Kilo bytes
					<input type="radio" value="125 Kilo bytes"id="nextBtn" onclick="nextPrev(1)" name="an10">
					<span class="checkmark"></span>
				</label>
				<label class="container">135 Kilo bytes
					<input type="radio" value="135 Kilo bytes"id="nextBtn" onclick="nextPrev(1)" name="an10">
					<span class="checkmark"></span>
				</label>

			</div>
			<div class="tab">
				<h3 > 11. ലോഗരിതം കണ്ടുപിടിച്ചതാര് ?</h3>
						<label class="container">John Napier
							<input type="radio" value="John Napier" id="nextBtn" onclick="nextPrev(1)" name="an11">
							<span class="checkmark"></span>
						</label>
						<label class="container">Sabeer Battiya
							<input type="radio" value="Sabeer Battiya" id="nextBtn" onclick="nextPrev(1)" name="an11">
							<span class="checkmark"></span>
						</label>
						<label class="container">C V Raman
							<input type="radio" value="C V Raman" id="nextBtn" onclick="nextPrev(1)" name="an11">
							<span class="checkmark"></span>
						</label>
						<label class="container">karthaus
							<input type="radio" value="karthaus" id="nextBtn" onclick="nextPrev(1)" name="an11">
							<span class="checkmark"></span>
						</label>
   			<br>
			</div>

			<div class="tab">
				<h3 > 12. ആദ്യത്തെ കമ്പ്യൂട്ടർ വൈറസിന്റെ പേര്  ?</h3>
					<label class="container">Trojan
						<input type="radio" value="Trojan"id="nextBtn" onclick="nextPrev(1)" name="an12">
						<span class="checkmark"></span>
					</label>
					<label class="container">Apple
						<input type="radio" value="Apple"id="nextBtn" onclick="nextPrev(1)" name="an12">
						<span class="checkmark"></span>
					</label>
					<label class="container">Malware
						<input type="radio" value="Malware"id="nextBtn" onclick="nextPrev(1)" name="an12">
						<span class="checkmark"></span>
					</label>
					<label class="container">BluBerry
						<input type="radio" value="BluBerry"id="nextBtn" onclick="nextPrev(1)" name="an12">
						<span class="checkmark"></span>
					</label>
			<br>
		</div>

		<div class="tab">
			<h3 > 13.  കേരളത്തിലെ ആദ്യ ബാങ്ക് ഏതാണ് ?</h3>
	   				<label class="container">Malabar Bank
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an13">
							<span class="checkmark"></span>
						</label>
						<label class="container">SBI
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an13">
							<span class="checkmark"></span>
						</label>
						<label class="container">Nedungadi Bank
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an13">
							<span class="checkmark"></span>
						</label>
						<label class="container">Kerala Karshika Bank
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an13">
							<span class="checkmark"></span>
						</label>
				</div>

				<div class="tab">
					<h3 > 14. കംപ്യൂട്ടർ പ്രൊസസിങ് നടക്കുന്നതിന് മുൻപ് Input Dataയിൽ മാറ്റം വരുത്തുന്നതിന് പറയുന്ന പേര് ?</p>

							<label class="container">Key Wrapping
								<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an14">
								<span class="checkmark"></span>
							</label>
							<label class="container">Input stealing
								<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an14">
								<span class="checkmark"></span>
							</label>
							<label class="container">Data Hacking
								<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an14">
								<span class="checkmark"></span>
							</label>
							<label class="container">Data Diddling
								<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an14">
								<span class="checkmark"></span>
							</label>

			</div>

			<div class="tab">
				<h3 > 15. ഒരു Domain name രണ്ട് പേർ അവകാശപ്പെടുന്നതിന്ന് പറയുന്ന പേര് ?</h3>

				<label class="container">Cyber Squatting
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an15">
					<span class="checkmark"></span>
				</label>
				<label class="container">Cyber Vandalism
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an15">
					<span class="checkmark"></span>
				</label>
				<label class="container">Data Diddling
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an15">
					<span class="checkmark"></span>
				</label>
				<label class="container">Domain Conflict
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an15">
					<span class="checkmark"></span>
				</label>

			</div>


			<div class="tab">
				<h3 > 16. ചന്ദ്രനിൽ നിന്നുള്ള പ്രകാശം ഭൂമിയിൽ എത്താൻ വേണ്ട സമയം എത്ര? </h3>

				<label class="container">1.111 Seconds
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an16">
					<span class="checkmark"></span>
				</label>
				<label class="container">1.03 Seconds
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an16">
					<span class="checkmark"></span>
				</label>
				<label class="container">1.3 Seconds
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an16">
					<span class="checkmark"></span>
				</label>
				<label class="container">1.2 Seconds
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an16">
					<span class="checkmark"></span>
				</label>

			</div>


			<div class="tab">
				<h3 > 17. ലോകത്തിലെ ഏറ്റവും സുരക്ഷിത നഗരമായി തെരഞ്ഞെടുക്കപ്പെട്ട രാജ്യം ?</h3>

				<label class="container">Singapore
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an17">
					<span class="checkmark"></span>
				</label>
				<label class="container">London
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an17">
					<span class="checkmark"></span>
				</label>
				<label class="container">Tokyo<!--W-->
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an17">
					<span class="checkmark"></span>
				</label>
				<label class="container">Delhi
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an17">
					<span class="checkmark"></span>
				</label>
					</div>


					<div class="tab">
						<h3 > 18. EXIF ന്റെ പൂർണ്ണരൂപം ?</h3>

						<label class="container">Executable Image File Finish
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an18">
							<span class="checkmark"></span>
						</label>
						<label class="container">Executable Image File Format
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an18">
							<span class="checkmark"></span>
						</label>
						<label class="container">Exchangeable Image File Format<!--W-->
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an18">
							<span class="checkmark"></span>
						</label>
						<label class="container">Exchangeable Image Fine Finish
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an18">
							<span class="checkmark"></span>
						</label>

					</div>

					<div class="tab">
						<h3 > 19. what is the size of int datatype for 32 bit system ?</h3>

						<label class="container">1 Byte
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an19">
							<span class="checkmark"></span>
						</label>
						<label class="container">2 Bytes
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an19">
							<span class="checkmark"></span>
						</label>
						<label class="container">4 Bytes<!--w-->
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an19">
							<span class="checkmark"></span>
						</label>
						<label class="container">8 Bytes
							<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an19">
							<span class="checkmark"></span>
						</label>

			</div>


			<div class="tab">
				<h3 > 20. Red Fort നിർമ്മിച്ച വ്യക്തി ?</h3>

				<label class="container">Shajahan<!--w-->
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an20">
					<span class="checkmark"></span>
				</label>
				<label class="container">Akbar
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an20">
					<span class="checkmark"></span>
				</label>
				<label class="container">Jahangir
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an20">
					<span class="checkmark"></span>
				</label>
				<label class="container">Sher Shah
					<input type="radio" value="ZYGONET"id="nextBtn" onclick="nextPrev(1)" name="an20">
					<span class="checkmark"></span>
				</label>

			</div>

			<div class="tab">
			<div style="overflow:auto;">
				<div style="float:right;">
					<button type="submit" name="btn-submit" >Next</button>
				</div>
			</div>
		</div>

<div style="text-align:center;margin-top:40px;">
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
</div
	</form>
	<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the crurrent tab

	function showTab(n) {
	  // This function will display the specified tab of the form...
	  var x = document.getElementsByClassName("tab");
	  x[n].style.display = "block";
	  //... and fix the Previous/Next buttons:
	  if (n == 0) {
	    document.getElementById("prevBtn").style.display = "none";
	  } else {
	    document.getElementById("prevBtn").style.display = "inline";
	  }
	  if (n == (x.length - 1)) {
	    document.getElementById("nextBtn").innerHTML = "Submit";
	  } else {
	    document.getElementById("nextBtn").innerHTML = "Next";
	  }
	  //... and run a function that will display the correct step indicator:
	  fixStepIndicator(n)
	}

	function nextPrev(n) {
	  // This function will figure out which tab to display
	  var x = document.getElementsByClassName("tab");
	  // Exit the function if any field in the current tab is invalid:
	  if (n == 1 && !validateForm()) return false;
	  // Hide the current tab:
	  x[currentTab].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab = currentTab + n;
	  // if you have reached the end of the form...
	  if (currentTab >= x.length) {
	    // ... the form gets submitted:
	    document.getElementById("regForm").submit();
	    return false;
	  }
	  // Otherwise, display the correct tab:
	  showTab(currentTab);
	}

	function validateForm() {
	  // This function deals with validation of the form fields
	  var x, y, i, valid = true;
	  x = document.getElementsByClassName("tab");
	  y = x[currentTab].getElementsByTagName("input");
	  // A loop that checks every input field in the current tab:
	  for (i = 0; i < y.length; i++) {
	    // If a field is empty...
	    if (y[i].value == "") {
	      // add an "invalid" class to the field:
	      y[i].className += " invalid";
	      // and set the current valid status to false
	      valid = false;
	    }
	  }
	  // If the valid status is true, mark the step as finished and valid:
	  if (valid) {
	    document.getElementsByClassName("step")[currentTab].className += " finish";
	  }
	  return valid; // return the valid status
	}

	function fixStepIndicator(n) {
	  // This function removes the "active" class of all steps...
	  var i, x = document.getElementsByClassName("step");
	  for (i = 0; i < x.length; i++) {
	    x[i].className = x[i].className.replace(" active", "");
	  }
	  //... and adds the "active" class on the current step:
	  x[n].className += " active";
	}
	</script>

</body>
</html>
<?php ob_end_flush(); ?>
