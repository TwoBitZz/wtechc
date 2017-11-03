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

 		$an2 = trim($_POST['an2']);
 		$an2 = strip_tags($an2);
 		$an2 = htmlspecialchars($an2);

 		$an3 = trim($_POST['an3']);
 		$an3 = strip_tags($an3);
 		$an3 = htmlspecialchars($an3);

 		$an4 = trim($_POST['an4']);
 		$an4 = strip_tags($an4);
 		$an4 = htmlspecialchars($an4);

 		$an5 = trim($_POST['an5']);
 		$an5 = strip_tags($an5);
 		$an5 = htmlspecialchars($an5);

 		$an6 = trim($_POST['an6']);
 		$an6 = strip_tags($an6);
 		$an6 = htmlspecialchars($an6);

 		$an7 = trim($_POST['an7']);
 	  $an7 = strip_tags($an7);
 		$an7 = htmlspecialchars($an7);

 		$an8 = trim($_POST['an8']);
 		$an8 = strip_tags($an8);
 		$an8 = htmlspecialchars($an8);

 		$an9 = trim($_POST['an9']);
 		$an9 = strip_tags($an9);
 		$an9 = htmlspecialchars($an9);

 		$an10 = trim($_POST['an10']);
 		$an10 = strip_tags($an10);
 		$an10 = htmlspecialchars($an10);
 /* --------------------------------------------------------------*/

 		 if(!empty($nam))
 		 	{
 			// check data exist or not
 				$query = "SELECT m1 FROM stg2 WHERE username='$nam'";
 				$result = mysql_query($query);
 				$count = mysql_num_rows($result);

 			  	if($count!=0)
 			  	{
 					$error1 = true;
 					$stg1Error = "Answer is already exist";
 				}

 			}
 		 // if there's no error, continue to data entry
 		 if( !$error1  )
 		 {
 			 //$ans=1;
 			$query = "INSERT INTO stg2(username,m1,m2,m3,m4,m5,m6,m7,m8,m9,m10) VALUES('$nam','$an1','$an2','$an3','$an4','$an5','$an6','$an7','$an8','$an9','$an10')";
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
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
  height: 15px;
  width: 15px;
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
</style>
<body>

<form id="regForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <h1>Stage 2</h1>
  <!-- One "tab" for each step in the form: -->

  <div class="tab">
    <h3 > 1. What is 50% of 40% of 3450 ?</h3>
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an1" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 2. Find missing numbers <br> C 81 , E 64 , ... 49 , I ... ?</h3>
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an2" >
  						<br>

  	</div>
    <br>

  </div>

  <div class="tab">
    <h3 > 3. If 30% of number is 12.6 find the number ?</h3>
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an3" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 4. What number must be added to 6 , 16 , 8 ,... to get an average of 32 ?</h3>
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an4" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 5. A father has 30 years older than his son, He will be three times as old as his son after 5 years, What is the father's age ?</h3>
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an5" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 6. Find the missing element ?</h3>
    <img src="images/mat1.png" height="500" width="500" alt="">
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an6" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 7. Find the missing element ?</h3>
    <img src="images/mat2.png" height="500" width="500" alt="">
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an7" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 8. Find the missing element ?</h3>
    <img src="images/mat3.png" height="500" width="500" alt="">
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an8" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 9. Find the missing element ?</h3>
    <img src="images/mat4.png" height="500" width="500" alt="">
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an9" >
  						<br>

  	</div>
    <br>
  </div>

  <div class="tab">
    <h3 > 10. Find the missing element ?</h3>
    <img src="images/mat5.png" height="500" width="500" alt="">
    <div align="center">
  						<input class="_6v " type="text" placeholder="Your Answer" name="an10" >
  						<br>

  	</div>
    <br>
  </div>

<div class="tab">
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="submit" name="btn-submit" >Submit</button>
    </div>
  </div>
</div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
    <span class="step" id="nextBtn" onclick="nextPrev(1)"></span>
  </div>
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
