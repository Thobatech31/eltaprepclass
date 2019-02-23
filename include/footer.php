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
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="js/jquery-3.1.1.min.js"></script>
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

<script type="text/javascript">
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-success').addClass('btn-default');
                $item.addClass('btn-success');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-success').trigger('click');
    });
</script>