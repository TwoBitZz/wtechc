
<!DOCTYPE html>
<html>
	<head>
		<title>
			stage 3
		</title>
		<link href="style/down.css" rel="stylesheet" type="text/css" />
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
	</head>

	<body>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
			   <h1>Stage 3</h1>

				   	<div class="tab" >
								<div align="center">
						 			<h3>1. ഈ ചിത്രത്തിലെ Grey കളറിൻ്റെ Pixel എത്ര ? </h3>
							  	<br>
										<img src="images/pixel.jpg" height="450" width="550">
							  </div>
						</div>

						<div class="tab" >
								<div align="center">
		   						<h3>2. ഈ ചിത്രത്തെ കുറിച്ച് നിങ്ങൾക്കു അറിയാവുന്നത് വിവരിക്കുക  ?</h3>
									<br>
							   		<img src="" height="450" width="550">
								</div>
					  </div>

						 <div class="tab" >
							 <div align="center">
		   						<h3>3. താഴെ ഉള്ള file ൻ്റെ correct extention പറയുക </h3>
					   		  <br>
								</div>
					   		<center>
									<a href= download>
										 <div class="content">
      										<a href="file/file.pdf" download="file.pdf" class="btn left">
												<span class="left icon icon-cloud-download">
													<span class="slant-left"></span>
												</span>
												<span class="right title">Download Now</span>
											 </a>
										</div>
									</a>
					  	</center>

						</div>

							<div class="tab" >
								<div align="center">
		   						<h3>4. QR code Read ചെയ്യുക  ?</h3>
									<br>
								</div>
					   		<center>
					   			<img src="images/qrcode.png">
								</center>

							</div>

							<div style="overflow:auto;">
						    <div style="float:right;">
						      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
						    </div>
						  </div>

				<div style="text-align:center;margin-top:40px;">
			    <span class="step"></span>
			    <span class="step"></span>
			    <span class="step"></span>
			    <span class="step"></span>

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
