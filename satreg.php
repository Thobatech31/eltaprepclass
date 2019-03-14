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
						<a class="btn btn--sm btn--primary type--uppercase" href="tutorpage.php">
                                    <span class="btn__text">
                                        Become A Tutor
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
							<p style="color: white; font-weight: bold; font-size: 15px;">Exam Details</p>
						</div>

						<div class="stepwizard-step col-xs-4">
							<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
							<p style="color: white; font-weight: bold; font-size: 15px;">Personal Information</p>
						</div>
						<div class="stepwizard-step col-xs-4">
							<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
							<p style="color: white; font-weight: bold; font-size: 15px;">Lesson Deatails</p>
						</div>
					</div>
				</div><br/>

				<form role="form">
					<div class="panel panel-primary setup-content" id="step-1">
						<div class="panel-heading">
							<h3 class="panel-title">SAT REGISTRATION PAGE</h3>
						</div>
						<div class="panel-body" style=" overflow-style: auto; overflow:scroll;">
							<p style="font-size: 12px; color:#0276FD;">LET US HELP YOU REACH THAT TARGET SCORE WITH OUR EXPERIENCED TUTORS</p>
							<div class="row">
								<div class="col-md-6">
									<label>Which SAT exam do you intend sitting for? </label>
									<div class="input-select">
										<select>
											<option selected="" value="Default">Select An Option</option>
											<option value="Yes">General training </option>
											<option value="Academics">Academics</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label>What is the Purpose of Exam</label>
									<div class="input-select">
										<select required/>
										<option selected="" value="Default">Select An Option</option>
										<option value="Yes">Undergraduate admission</option>
										<option value="Immigration">English Proficiency</option>

										</select>
									</div>
								</div>

							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>When do you plan to start your studies? </label>
									<div class="input-select">
										<select>
											<option selected="" value="Default">Select An Option</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
											<option value="Later">Later</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label>Target Score</label>
									<input type="text" name="target_score" placeholder="Enter Target Score" />
								</div>

							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Country </label>
									<div class="input-select">
										<select name="Country">
											<option value="" selected="selected">Select Country</option>
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Territories">French Southern Territories</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-bissau">Guinea-bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											<option value="Korea, Republic of">Korea, Republic of</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macao">Macao</option>
											<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											<option value="Moldova, Republic of">Moldova, Republic of</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="Netherlands Antilles">Netherlands Antilles</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russian Federation">Russian Federation</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Helena">Saint Helena</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia and Montenegro">Serbia and Montenegro</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="Taiwan, Province of China">Taiwan, Province of China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-leste">Timor-leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Viet Nam">Viet Nam</option>
											<option value="Virgin Islands, British">Virgin Islands, British</option>
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											<option value="Wallis and Futuna">Wallis and Futuna</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label>Others</label>
									<input type="text" name="others" placeholder="" />
								</div>

							</div><br/>

							<center><h5 style="color:#0276FD;">Your current educational details</h5></center>

							<div class="row">
								<div class="col-md-6">
									<label>Expected exam date</label>
									<input type="text" name="date" class="datepicker" placeholder="Choose a date" />

								</div>

								<div class="col-md-6">
									<label>Have you written any prep exam before? </label>
									<div class="input-select">
										<select>
											<option selected="" value="Default">Select An Option</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>

							</div><br/>


							<div class="row">
								<div class="col-md-12">
									<label>What area do you need tutoring in?</label><br/>
									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">Maths</span>
											<input id="radio-input-2" type="radio" name="radio" value="Math" />
											<label for="radio-input-2"></label>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">Writing</span>
											<input id="radio-input-3" type="radio" name="radio" value="Writing" />
											<label for="radio-input-3"></label>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="input-radio">
											<span class="input__label">Reading</span>
											<input id="radio-input-4" type="radio" name="radio" value="Reading" />
											<label for="radio-input-4"></label>
										</div>
									</div>
								</div>

							</div><br/>


							<a href="#" class="btn btn-primary nextBtn pull-right" >NEXT</a>
						</div>
					</div>


					<div class="panel panel-primary setup-content" id="step-2">
						<div class="panel-heading">
							<h3 class="panel-title">SAT REGISTRATION PAGE</h3>
						</div>
						<div class="panel-body">
							<p>PERSONAL/CONTACT INFORMATION</p>

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
									<label>Location</label>
									<input type="text" name="Location" placeholder="Enter Your Location" />
								</div>

								<div class="col-md-6">
									<label>Street Address</label>
									<input type="text" name="Address" placeholder="Enter Your Street Address" />
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
									<input type="email" name="Email" placeholder="Enter Your Email" />
								</div>

								<div class="col-md-6">
									<label>Phone No</label>
									<input type="text" name="phone_no" placeholder="Enter Your Phone No" />
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-12">
									<label>State</label>
									<div class="input-select">
										<select name="states_of_nigeria" id="select">
											<option selected="" value="Default">Select An Option</option>
											<option>Outside Nigeria</option>
											<option value="Abuja">ABUJA FCT</option>
											<option value="Abia">ABIA</option>
											<option value="Adamawa">ADAMAWA</option>
											<option value="Akwa ibom">AKWA IBOM</option>
											<option value="Anambra">ANAMBRA</option>
											<option value="Bauchi">BAUCHI</option>
											<option value="Bayelsa">BAYELSA</option>
											<option value="Benue">BENUE</option>
											<option value="Borno">BORNO</option>
											<option value="Cross river">CROSS RIVER</option>
											<option value="Delta">DELTA</option>
											<option value="Ebonyi">EBONYI</option>
											<option value="Edo">EDO</option>
											<option value="Ekiti">EKITI</option>
											<option value="Enugu">ENUGU</option>
											<option value="Gombe">GOMBE</option>
											<option value="Imo">IMO</option>
											<option value="Jigawa">JIGAWA</option>
											<option value="Kaduna">KADUNA</option>
											<option value="Kano">KANO</option>
											<option value="Katsina">KATSINA</option>
											<option value="Kebbi">KEBBI</option>
											<option value="Kogi">KOGI</option>
											<option value="Kwara">KWARA</option>
											<option value="Lagos">LAGOS</option>
											<option value="Nassarawa">NASSARAWA</option>
											<option value="Niger">NIGER</option>
											<option value="Ogun">OGUN</option>
											<option value="Ondo">ONDO</option>
											<option value="Osun">OSUN</option>
											<option value="Oyo">OYO</option>
											<option value="Plateau">PLATEAU</option>
											<option value="Rivers">RIVERS</option>
											<option value="Sokoto">SOKOTO</option>
											<option value="Taraba">TARABA</option>
											<option value="Yobe">YOBE</option>
											<option value="Zamfara">ZAMFARA</option>
										</select>
									</div>
								</div>
							</div><br/>
							<a href="#" class="btn btn-primary nextBtn pull-right">NEXT</a>
						</div>
					</div>

					<div class="panel panel-primary setup-content" id="step-3">
						<div class="panel-heading">
							<h3 class="panel-title">SAT REGISTRATION PAGE</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12"><br/>
									<label style="font-size: 16px; color:#0276FD;">What days do you want to have your lesson?</label><br/>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Monday</span>
											<input type="radio" name="Monday" value="Monday" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Tuesday</span>
											<input type="radio" name="Tuesday" value="Tuesday" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Wednesday</span>
											<input type="radio" name="Wednesday" value="Wednesday" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Thursday</span>
											<input type="radio" name="Thursday" value="Thursday" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Friday</span>
											<input type="radio" name="Friday" value="Friday" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Saturday</span>
											<input type="radio" name="Saturday" value="Saturday" />
											<label></label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-radio">
											<span class="input__label">Sunday</span>
											<input type="radio" name="Sunday" value="Sunday" />
											<label></label>
										</div>
									</div>

								</div>

							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Start Date</label>
									<input type="text" name="date" class="datepicker" placeholder="Choose a date" />
								</div>

								<div class="col-md-6">
									<label>Duration</label>
									<div class="input-select">
										<select>
											<option selected="" value="Default">Select An Option</option>
											<option value="1 week">1 week</option>
											<option value="2 weeks">2 weeks</option>
											<option value="3 weeks">3 week</option>
											<option value="4 weeks">4 weeks</option>
										</select>
									</div>
								</div>
							</div><br/>

							<div class="row">
								<div class="col-md-6">
									<label>Hours Per day </label>
									<input type="text" name="start_date" placeholder="E" />
								</div>

								<div class="col-md-6">
									<label>Time</label>
									<div class="input-select">
										<select>
											<option selected="" value="Default">Select An Option</option>
											<option value="8am">8am</option>
											<option value="9am">9am</option>
											<option value="10am">10am</option>
											<option value="11am">11am</option>
											<option value="12pm">12pm</option>
											<option value="1pm">1pm</option>
											<option value="2pm">2pm</option>
											<option value="3pm">3pm</option>
											<option value="4pm">4pm</option>
											<option value="5pm">5pm</option>
											<option value="6pm">6pm</option>
											<option value="7pm">7pm</option>
											<option value="8pm">8pm</option>
											<option value="9pm">9pm</option>
										</select>
									</div>
								</div>
							</div><br/>
							<a href="#" class="btn btn-success pull-right" type="submit">Submit</a>

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