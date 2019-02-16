<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GMAT</title>
  <?php require('include/header.php');?>
    </head>
    <body class=" ">
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
                                <a href="index.html">
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
                                    <span class="btn__text" style="color: white; font-size: 15px; margin-left: 10px;">
                                       08162977243
                                    </span>
                                </a>
                            </div>
                            <!--end module-->
                            <div class="bar__module">
                             <div class="modal-instance">
                                <a class="btn modal-trigger" href="gmatReg.php">
                                    <span class="btn__text">
                                        GET A TUTOR
                                    </span>
                                </a>
                                <div class="modal-container">
                                    <div class="modal-content">
                                        <section class="unpad ">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="boxed boxed--lg bg--white text-center feature">
                                                            <div class="modal-close modal-close-cross"></div>
                                                            <h3>Get a Profdessional Tutor</h3>
                                                         <p>Join us to connect with quality tutors and clients</p>
                                                            <div class="feature__body">
                                                                <form>
                                                                   <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">First Name</label>
                                                                            <input type="text" name="firstname" placeholder="Enter Your First Name" />
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">Surname</label>
                                                                            <input type="text" name="surname" placeholder="Enter Your Surname" />
                                                                        </div>
                                                                    </div>

                                                                     <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">Email</label>
                                                                            <input type="text" name="email" placeholder="Enter Your Email" />
                                                                        </div>

                                                                         <div class="col-md-6">
                                                                            <label style="float: left">Phone Number</label>
                                                                            <input type="text" name="phone_no" placeholder="Enter Your Phone Number" />
                                                                        </div>
                                                                    
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">State of Residence</label>
                                                                            <input type="text" name="phone_no" placeholder="Enter Your Phone Number" />
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                             <label style="float: left">Location</label>
                                                                           <div class="input-select">
                                                                                <select>
                                                                                    <option selected="" value="Default">Select An Option</option>
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">what to ,earn</label>
                                                                            <input type="text" name="phone_no" placeholder="Enter Your Phone Number" />
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                             <label style="float: left">Duration</label>
                                                                           <div class="input-select">
                                                                                <select>
                                                                                    <option selected="" value="Default">Select An Option</option>
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                       <div class="row">
                                                                         <div class="col-md-6">
                                                                                <label style="float: left">Coonfirm Password</label>
                                                                                <input type="password" name="cpassword" placeholder="Re-enter Your Password" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label style="float: left">Password</label>
                                                                                <input type="Password" name="password" placeholder="Enter Your Password" />
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        <br/>

                                                                 <center> <a href="#" style="color: white;" class="btn btn--primary">Submit</a></center>
                                                                </form>
                                                                <span class="type--fine-print block">Dont have an account yet?
                                                                    <a href="#">Create account</a>
                                                                </span>
                                                                <span class="type--fine-print block">Forgot your username or password?
                                                                    <a href="#">Recover account</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end of row-->
                                            </div>
                                            <!--end of container-->
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!--end of modal instance-->
                                

                            <div class="modal-instance">
                                <a class="btn modal-trigger" href="#">
                                    <span class="btn__text">
                                        BECOME A TUTOR
                                    </span>
                                </a>
                                <div class="modal-container">
                                    <div class="modal-content">
                                        <section class="unpad ">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="boxed boxed--lg bg--white text-center feature">
                                                            <div class="modal-close modal-close-cross"></div>
                                                            <h3>WELCOME HOME</h3>
                                                         <p>Join Tuteria to connect with quality tutors and clients</p>
                                                            <div class="feature__body">
                                                                <form>
                                                                   <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">First Name</label>
                                                                            <input type="text" name="firstname" placeholder="Enter Your First Name" />
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">Surname</label>
                                                                            <input type="text" name="surname" placeholder="Enter Your Surname" />
                                                                        </div>
                                                                    </div>

                                                                     <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label style="float: left">Email</label>
                                                                            <input type="text" name="email" placeholder="Enter Your Email" />
                                                                        </div>
                                                                    
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label style="float: left">Phone Number</label>
                                                                            <input type="text" name="phone_no" placeholder="Enter Your Phone Number" />
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                             <label style="float: left">Sex</label>
                                                                           <div class="input-select">
                                                                                <select>
                                                                                    <option selected="" value="Default">Select An Option</option>
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                       <div class="row">
                                                                         <div class="col-md-6">
                                                                                <label style="float: left">Coonfirm Password</label>
                                                                                <input type="password" name="cpassword" placeholder="Re-enter Your Password" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label style="float: left">Password</label>
                                                                                <input type="Password" name="password" placeholder="Enter Your Password" />
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        <br/>

                                                                 <center> <a href="#" style="color: white;" class="btn btn--primary">Submit</a></center>
                                                                </form>
                                                                <span class="type--fine-print block">Dont have an account yet?
                                                                    <a href="#">Create account</a>
                                                                </span>
                                                                <span class="type--fine-print block">Forgot your username or password?
                                                                    <a href="#">Recover account</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end of row-->
                                            </div>
                                            <!--end of container-->
                                        </section>
                                    </div>
                                </div>
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
        <div class="main-container">
            <section class="imagebg parallax" data-scrim-top="9" data-overlay="4">
                <div class="background-image-holder">
                    <img alt="background" src="img/education-3.jpg" />
                </div>
                 <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="cta">
                                <h2>GMAT</h2>
                                <p>
									You are one step close to achieving your dreams to study abroad with a scholarship. Let our tutors help you achieve a 1200+ score.
                                </p>
                                <a class="btn btn--primary type--uppercase" href="gmatReg.php">
                                    <span class="btn__text">
                                        GET A TUTOR
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
           
          
            <section class="text-center bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <h2>What makes us different?</h2>
                            <p class="lead">
                                Our vision is for strong and resilient students where all have adequate access to the support structures required to succeed. Browse features below to find out more.
                            </p>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="switchable bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="accordion accordion--oneopen accordion-2 switchable__text">
                                <li class="active">
                                    <div class="accordion__title">
                                        <span class="h5">Campus Life</span>
                                    </div>
                                    <div class="accordion__content">
                                        <p class="lead">
                                            Stack follows the BEM naming convention that focusses on logical code readability that is reflected in both the HTML and CSS. Interactive elements such as accordions and tabs follow the same markup patterns making rapid development easier for developers and beginners alike.
                                        </p>
                                        <p class="lead">
                                            Add to this the thoughtfully presented documentation, featuring code highlighting, snippets, class customizer explanation and you've got yourself one powerful value package.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion__title">
                                        <span class="h5">Study Support</span>
                                    </div>
                                    <div class="accordion__content">
                                        <p class="lead">
                                            Stack offers a clean and contemporary to suit a range of purposes from corporate, tech startup, marketing site to digital storefront. Elements have been designed to showcase content in a diverse yet consistent manner.
                                        </p>
                                        <p class="lead">
                                            Multiple font and colour scheme options mean that dramatically altering the look of your site is just clicks away &mdash; Customizing your site in the included Variant Page Builder makes experimenting with styles and content arrangements dead simple.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion__title">
                                        <span class="h5">Qualification</span>
                                    </div>
                                    <div class="accordion__content">
                                        <p class="lead">
                                            Medium Rare is an elite author known for offering high-quality, high-value products backed by timely and personable support. Recognised and awarded by Envato on multiple occasions for producing consistently outstanding products, it's no wonder over 20,000 customers enjoy using Medium Rare templates.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <!--end accordion-->
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <img alt="Image" class="border--round box-shadow-wide" src="img/education-4.jpg" />
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="unpad">
                <div class="row--gapless">
                    <div class="col-sm-4 col-xs-6">
                        <a href="#" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="3">
                                <div class="background-image-holder">
                                    <img alt="background" src="img/education-5.jpg" />
                                </div>
                                <h4 class="pos-vertical-center">Future Students</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="#" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder">
                                    <img alt="background" src="img/education-6.jpg" />
                                </div>
                                <h4 class="pos-vertical-center">Current Students</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="#" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder">
                                    <img alt="background" src="img/education-7.jpg" />
                                </div>
                                <h4 class="pos-vertical-center">Alumni</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <footer class="space--sm footer-2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 col-xs-6">
                            <h6 class="type--uppercase">Company</h6>
                            <ul class="list--hover">
                                <li>
                                    <a href="#">About Company</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                                <li>
                                    <a href="#">Locations</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Work With Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6">
                            <h6 class="type--uppercase">Developers</h6>
                            <ul class="list--hover">
                                <li>
                                    <a href="#">Developer Center</a>
                                </li>
                                <li>
                                    <a href="#">API Reference</a>
                                </li>
                                <li>
                                    <a href="#">Downloads</a>
                                </li>
                                <li>
                                    <a href="#">Tools</a>
                                </li>
                                <li>
                                    <a href="#">Developer Blog</a>
                                </li>
                                <li>
                                    <a href="#">Developer Forums</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6">
                            <h6 class="type--uppercase">Support</h6>
                            <ul class="list--hover">
                                <li>
                                    <a href="#">Help Center</a>
                                </li>
                                <li>
                                    <a href="#">Live Chat</a>
                                </li>
                                <li>
                                    <a href="#">Downloads</a>
                                </li>
                                <li>
                                    <a href="#">Press Kit</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6">
                            <h6 class="type--uppercase">Locations</h6>
                            <ul class="list--hover">
                                <li>
                                    <a href="#">Melbourne</a>
                                </li>
                                <li>
                                    <a href="#">London</a>
                                </li>
                                <li>
                                    <a href="#">New York</a>
                                </li>
                                <li>
                                    <a href="#">San Francisco</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Stack Inc.</span>
                            <a class="type--fine-print" href="#">Privacy Policy</a>
                            <a class="type--fine-print" href="#">Legal</a>
                        </div>
                        <div class="col-sm-6 text-right text-left-xs">
                            <ul class="social-list list-inline list--hover">
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-google icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-facebook icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-instagram icon icon--xs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
        </div>
    <?php require('include/footer.php');?>
    </body>
</html>