<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<!-- <div class="contact1-pic js-tilt" data-tilt> -->
				<!-- <img src="images/img-01.png" alt="IMG"> -->
			<!-- </div> -->

			<form class="contact1-form validate-form" action="mail.php" method="POST">
				<span class="contact1-form-title">
					Hospitals Details 
				</span>

				<table>
				
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="hospital_name" placeholder="Hospital Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="hospital_registration" placeholder="Hospital_registration">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="address" placeholder="Address">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="landmark" placeholder="Landmark">
					<span class="shadow-input1"></span>
				</div>
				
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="locality" placeholder="Locality">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="pincode" placeholder="Pincode">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="latitude" placeholder="Latitude">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="longitude" placeholder="Longitude">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="facility_type" placeholder="Facility Type">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="state" placeholder="State">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="district" placeholder="District">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="taluka" placeholder="Taluka">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" name="block" placeholder="Block">
					<span class="shadow-input1"></span>
				</div>
				</table>
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit" value="send">
						<span>
						 Submit 
						<!-- <input type="submit" value="Send"> -->
							<!-- Send Email -->
							 <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  -->
						</span>
						
						<!-- <input type="reset" value="Clear"> -->
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
