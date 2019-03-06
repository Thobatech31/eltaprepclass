<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Travcut.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Site Description Here">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />

	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js">
	<link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style type="text/css">
		/* Latest compiled and minified CSS included as External Resource*/

		/* Optional theme */

		/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/
		body {
			margin-top:0px;
		}
		.stepwizard-step p {
			margin-top: 0px;
			color:#666;
		}
		.stepwizard-row {
			display: table-row;
		}
		.stepwizard {
			display: table;
			width: 100%;
			position: relative;
		}
		.stepwizard-step button[disabled] {
			/*opacity: 1 !important;
			filter: alpha(opacity=100) !important;*/
		}
		.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
			opacity:1 !important;
			color:#bbb;
		}
		.stepwizard-row:before {
			top: 14px;
			bottom: 0;
			position: absolute;
			content:" ";
			width: 100%;
			height: 1px;
			background-color: #ccc;
			z-index: 0;
		}
		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}
		.btn-circle {
			width: 30px;
			height: 30px;
			text-align: center;
			padding: 6px 0;
			font-size: 12px;
			line-height: 1.428571429;
			border-radius: 15px;
		}
		.panel-title{
			color: white;
		}
		.row{
			padding-right: 10px;
			padding-left: 10px;
		}
		#textStyle{
			color:#0276FD;
			font-weight: bold;
		}
	</style>
</head>
<body style="background-image: url('img/inner-6.jpg')">
<a id="start"></a>
<div class="nav-container ">
	<div class="bar bar--sm visible-xs">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-2">
					<a href="index.php">
						<img class="logo logo-dark" alt="logo" src="img/logo-dark.png" />
						<img class="logo logo-light" alt="logo" src="img/logo-light.png" />
					</a>
				</div>
				<div class="col-xs-9 col-sm-10 text-right">
					<a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
						<i class="icon icon--sm stack-interface stack-menu"></i>
					</a>
				</div>
			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
	</div>
	<!--end bar-->
	<nav id="menu2" class="bar bar-2 hidden-xs bar--transparent bar--absolute" data-scroll-class='90vh:pos-fixed'>
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-sm-2 hidden-xs">
					<div class="bar__module">
						<a href="index.php">
							<img class="logo logo-dark" alt="logo" src="img/logo-dark.png" />
							<img class="logo logo-light" alt="logo" src="img/logo-light.png" />
						</a>
					</div>
					<!--end module-->
				</div>
				<div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">
					<div class="bar__module">


						<a href="#">
							<i class="socicon socicon-instagram icon icon--xs"></i>
							<span class="btn-primary" style="color: white; font-size: 15px; margin-left: 10px; border-radius: 7px;">
                                       +2348162977243
                                    </span>
						</a>
					</div>
					<!--end module-->
					<div class="bar__module">
						<a class="btn btn--sm btn--primary type--uppercase" href="index.php">
                                    <span class="btn__text">
                                        Get A Tutor
                                    </span>
						</a>
					</div>
					<!--end module-->

				</div>

			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
	</nav>
	<!--end bar-->
</div>
<div class="main-container">
	<section>

		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="stepwizard">
					<div class="stepwizard-row setup-panel">
						<div class="stepwizard-step col-xs-4">
							<a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
							<p style="color: white; font-weight: bold; font-size: 15px;">Personal Information</p>
						</div>

						<div class="stepwizard-step col-xs-4">
							<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
							<p style="color: white; font-weight: bold; font-size: 15px;">Wor Experience</p>
						</div>
						<div class="stepwizard-step col-xs-4">
							<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
							<p style="color: white; font-weight: bold; font-size: 15px;">Document Upload</p>
						</div>
					</div>
				</div><br/>

				<form role="form">
					<div class="panel panel-primary setup-content" id="step-1">
						<div class="panel-heading">
							<h3 class="panel-title" style="font-weight: bold">TUTOR REGISTRATION PAGE</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<label>First Name</label>
									<input type="text" name="first_name" placeholder="Enter Your First Name" />
								</div>

								<div class="col-md-6">
									<label>Last Name</label>
									<input type="text" name="last_name" placeholder="Enter Your Last Name" />
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Sex </label>
									<div class="input-select">
										<select>
											<option selected="" value="Default">Select An Option</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label>Date of Birth</label>
									<input type="text" name="dob" placeholder="DD/MM/YY" />
								</div>

							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
									<input type="text" name="email" placeholder="Enter Your Email" />
								</div>

								<div class="col-md-6">
									<label>Phone Number</label>
									<input type="text" name="phone_no" placeholder="Enter Your Phone Number" />
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-10">
									<label>Address</label>
									<textarea cols="5" rows="2" placeholder="Please input location where you will be coming from"></textarea>
								</div>

							</div><br/>


							<center><h5 id="textStyle">EDUCATIONAL QUALIFICATION</h5></center>

							<div class="row">
								<div class="col-md-6">
									<label>Name of school or institute</label>
									<input type="text" name="text"  placeholder="Enter Name of school" />

								</div>

								<div class="col-md-6">
									<label>Course of Study</label>
									<input type="text" name="text"  placeholder="Enter Course of Study" />

								</div>


							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Degree</label>
									<input type="text" name="text"  placeholder="Enter your Degree" />

								</div>

								<div class="col-md-6">
									<label>Degree D ate</label>
									<input type="text" name="date" class="datepicker" placeholder="Choose a date" />

								</div>


							</div><br/>

							<a href="#" class="btn btn-primary nextBtn pull-right" >NEXT</a>
						</div>
					</div>



					<div class="panel panel-primary setup-content" id="step-2">
						<div class="panel-heading">
							<h3 class="panel-title">TUTOR REGISTRATION PAGE</h3>
						</div>
						<div class="panel-body">

							<div class="row">
								<div class="col-md-6">
									<label>Name of company/ organization   </label>
									<input type="text" name="name" placeholder="Enter Name of company" />
								</div>

								<div class="col-md-6">
									<label>Job Role</label>
									<input type="text" name="job_role" placeholder="Enter Job Role" />
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Start Date</label>
									<input type="text" name="date" class="datepicker" placeholder="Choose a date" />
								</div>

								<div class="col-md-6">
									<label>End Date</label>
									<input type="text" name="date" class="datepicker" placeholder="Choose a date" />
								</div>
							</div><br/>

							<center><h5 id="textStyle">TEACHING EXPERIENCE</h5></center>

							<div class="row">
								<div class="col-md-12">
									<label>How long have you been teaching? </label>
									<div class="input-select">
										<select name="states_of_nigeria" id="select">
											<option selected="" value="Default">Select An Option</option>
											<option value="0-1years">0-1years</option>
											<option value="2-4years">2-4years</option>
											<option value="4-6years">4-6years</option>
											<option value="7-9 years">7-9 years</option>
											<option value="10+ years">10+ years</option>
										</select>
									</div>
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-12">
									<label>What class of student do you teach?</label><br/>
									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">SS Class</span>
											<input type="radio" name="SS_Class" value="SS_Class" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">Undergraduate</span>
											<input id="radio-input-2" type="radio" name="Undergraduate" value="Undergraduate" />
											<label for="radio-input-2"></label>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">Adults</span>
											<input id="radio-input-4" type="radio" name="Adults" value="Adults" />
											<label for="radio-input-4"></label>
										</div>
									</div>
								</div>

							</div><br/>

							<div class="row">
								<div class="col-md-12">
									<label>Where should lesson hold </label>
									<div class="input-select">
										<select name="states_of_nigeria" id="select">
											<option selected="" value="Default">Select An Option</option>
											<option value="ikeja">ikeja</option>
											<option value="2-4years">Lekki</option>
											<option value="4-6years">Ikotun</option>
										</select>
									</div>
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-10">
									<label>Let your client know you</label>
									<textarea cols="5" rows="4" placeholder="Tell about yourself"></textarea>
								</div>

							</div><br/>

							<div class="row">
								<label style="font-size: 13px;">Select a subject you teach </label><br/>
								<div class="col-md-12">
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">SAT Math</span>
											<input type="radio" name="SAT Math" value="SAT Math" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">SAT reading/writing</span>
											<input id="radio-input-2" type="radio" name="SAT reading/writing" value="SAT reading/writing" />
											<label for="radio-input-2"></label>
										</div>
									</div>


									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">GRE Quantitative</span>
											<input id="radio-input-2" type="radio" name="GRE Quantitative" value="GRE Quantitative" />
											<label for="radio-input-2"></label>
										</div>
									</div>

									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">GMAT Quantitative</span>
											<input id="radio-input-2" type="radio" name="GMAT Quantitative" value="GMAT Quantitative" />
											<label for="radio-input-2"></label>
										</div>
									</div>


								</div>

								<div class="col-md-12">
									<div class="col-sm-2">
										<div class="input-radio">
											<span class="input__label">TOEFL</span>
											<input type="radio" name="TOEFL" value="TOEFL" />
											<label></label>
										</div>
									</div>

									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">IELTS</span>
											<input id="radio-input-4" type="radio" name="IELTS" value="IELTS" />
											<label for="radio-input-4"></label>
										</div>
									</div>


									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">GMAT verbal/analytical</span>
											<input id="radio-input-4" type="radio" name="GMAT verbal/analytical" value="GMAT verbal/analytical" />
											<label for="radio-input-4"></label>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">GMAT verbal Reasoning/analytical</span>
											<input id="radio-input-2" type="radio" name="GMAT verbal/analytical" value="GMAT verbal/analytical" />
											<label for="radio-input-2"></label>
										</div>
									</div>
								</div>


							</div><br/>

							<a href="#" class="btn btn-primary nextBtn pull-right">NEXT</a>
						</div>
					</div>


					<div class="panel panel-primary setup-content" id="step-3">
						<div class="panel-heading">
							<h3 class="panel-title">TUTOR REGISTRATION PAGE</h3>
						</div>
						<div class="panel-body">
							<div class="row">
									<h3 align="center" id="textStyle">Profile photo</h3>
									<h5 id="textStyle">Qualities</h5>
									<div class="col-md-8">
										<p>Photo should be bright and <br/>
										Background must look presentable<br/>
										Do not upload a passport photo, pdf, scanned or framed photo<br/>
										Photo should be of high quality, friendly and professional
										</p>
									</div>

								<div class="col-md-4">
									<label>Upload Your Photo</label>
									<input type="file" name="file" placeholder="Upload your photo" />
								</div>
							</div><br/>

							<div class="row">
								<h5 id="textStyle">ID verification</h5>
								<div class="col-md-12">
									<p>Upload your ID for verification. Kindly note after the verification we will delete your ID
										from our database.

									</p>

									<center><input style="width: 250px;" type="file" name="file" placeholder="Upload your photo" /></center>
								</div>

							</div><br/>


							<a href="#" class="btn btn-success pull-right" type="submit">Submit application</a>

						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</section>

	<?php require('include/footerReg.php');?>

</body>
</html>