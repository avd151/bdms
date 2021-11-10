<?php

//include header file
include('include/header.php');

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the Blood, Save the life</h1>
				<p class="text-center">Your droplets of blood may create an ocean of happiness!</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
						<option>Select City</option>
						<option value="Ahmednagar">Ahmednagar</option>
						<option value="Akola">Akola</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Beed">Beed</option>
						<option value="Chandrapur">Chandrapur</option>
						<option value="Dhule">Dhule</option>
						<option value="Jalna">Jalna</option>
						<option value="Kolhapur">Kolhapur</option>
						<option value="Latur">Latur</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Nanded">Nanded</option>
						<option value="Nashik">Nashik</option>
						<option value="Pune">Pune</option>
						<option value="Raigad">Raigad</option>
						<option value="Ratnagiri">Ratnagiri</option>
						<option value="Sangli">Sangli</option>
						<option value="Satara">Satara</option>
						<option value="Solapur">Solapur</option>
						<option value="Thane">Thane</option>
					</select>
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
						<option>Select Blood Group</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.

				We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
			</p>
			<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('include/footer.php');
?>