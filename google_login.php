<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Prometium | home - Shared on themelock.com</title>

	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">

	<meta name="google-signin-client_id" content="1017708463380-7tftsvibp5tuhj3gsc9mli7nf6cn85op.apps.googleusercontent.com">

	<script src="https://apis.google.com/js/platform.js" async defer></script>


	<link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/lib/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/lib/slick/slick.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600%7CRaleway:400,600%7CWork+Sans:400,500%7CVarela+Round">
	<link rel="stylesheet" href="assets/css/main.css">

	    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">

<style type="text/css">
	.g-signin2{
		margin-left: 300px;
		margin-top: 100px;
	}

	.data{
		display: none;
	}


</style>
	
</head>
<body>
   


<main class="homepage">
	<div class="container">
		<div class="widget widget1 text-center drag-this-up">
			<h4 class="pretitle">Getting a Professional Home Tutor is easier than you think</h4>
			<center><p>TOBA helps you connect with qualified tutors in your area to master<br/> the subjects, skills and exams that matter to you</p></center>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-4">
					<div class="image-holder">
						<img src="assets/img/banner-1-1.png" alt="Banner image">
					</div>
					<h6>Tell us where you need help.</h6>
					<p>
	Connect with professionals in all subjects and skills you might want to learn.					
	</p>
				</div>
				<div class="col-md-4">
					<div class="image-holder">
						<img src="assets/img/banner-1-2.png" alt="Banner image">
					</div>
					<h6>Tutor Matching</h6>
					<p>
						We offer you the perfect tutor to work with your qualifications and requirements.
					</p>
				</div>
				<div class="col-md-4">
					<div class="image-holder">
						<img src="assets/img/banner-1-3.png" alt="Banner image">
					</div>
					<h6>Meet Your Tutor</h6>
					<p>
						Take a convenient time to meet your tutor and start your lessons.
					</p>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="g-signin2" data-onsuccess="onSignIn"></div>
				<div class="data">
					<p>Profile Details</p>
					<img id="pic" class="img-circle" width="100" height="100"/>
					<p>Email address</p>
					<p id="email" class="alert alert-danger"></p>
					<!--<button onclick="signOut()" class="btn btn-danger">Signout</button>-->
				</div>
				
			</div>
		</div>
	</div>

	<br><br><br>
	<div class="container">
		<div class="row" id="Div1">
			<div class="col-md-4">
			<h1>first div</h1>
				
			</div>
		</div>
		<br/>

		<div class="row">
			<div class="col-md-4">
					<button onclick="switchVisible()"; id="Button1" style="padding-left: 10px; padding-right: 10px;" class="btn btn-primary">Quality Assurance</button>

			</div>
		</div>

		<br/>

			<div class="row" id="Div2" style="padding-bottom: 100px; display: none;">
			<div class="col-md-4">
				<label style="color: black">Quality Assurance</label>
						<select name="qa">
							<option >pilih ukuran</option>
							<option value="11">M</option>
						</select>
			</div>
		</div>
	</div>

	

</main>

<script type="text/javascript">
	function onSignIn(googleUser){
		var profile=googleUser.getBasicProfile();
		$(".g-signin2").css("display","none");
		$(".data").css("display","block");
		$("#pic").attr('src',profile.getImageUrl());
		$("#email").text(profile.getEmail());
	}

/**	function signOut(){
		var auth2 =gapi.auth2.getAuthInstance();
		auth2.signOut().then(function(){

			alert("You have been succesfully signed out");

			$(".g-signin2").css("display","block");
			$(".data").css("display","none");
		}); **/
	}
</script>

<script type="text/javascript">
	function switchVisible() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
}
</script>

<script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/lib/slick/slick.min.js"></script>
<script src="assets/lib/visible/visible.js"></script>
<script src="assets/js/main.js"></script>

      
        <script src="js/flickity.min.js"></script>
        <script src="js/easypiechart.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/granim.min.js"></script>
        <script src="js/jquery.steps.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>

</body>
</html>