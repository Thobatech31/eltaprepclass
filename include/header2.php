<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title></title>
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
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

	<style>
		#post{
			position: relative;
			cursor: pointer;
		}

		#post:hover .post-s{
			width: 210px;
		}

		#post img{
			display: block;
		}

		.post-s{
			width: 0;
			height: 140px;
			background-color: white;
			position: absolute;
			top: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			overflow: hidden;
			transition: 0.7s ease;
		}
		.post-s p{
			color: black;
			font-weight: bold;
			font-size: 12px;

			padding: 10px 30px;
		}
		#header{
			color:#0276FD;
			font-weight: bold;
			font-size: 22px;
		}

		#textStyle{
			color:#0276FD;
			font-weight: bold;
		}

		#footerStyle{
			color:white;
			font-weight: bold;
		}

		#footerList{
			color:antiquewhite;

		}
	</style>

</head>
<body class=" " data-smooth-scroll-offset='180'>
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

						<a class="btn btn-primary" href="#GetTutor">
                                    <span class="btn__text" style="color:white">
                                        GET A TUTOR
                                    </span>
						</a>
					</div>
					<!--end of modal instance-->


					<div class="modal-instance">
						<a class="btn " href="tutorpage.php">
                                    <span class="btn__text">
                                        BECOME A TUTOR
                                    </span>
						</a>

					</div>
					<!--end of modal instance-->

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