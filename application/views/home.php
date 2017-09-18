<?php include('header.php') ?>

		<title>Home</title>
	</head>

	<body class="index-page">
		<!-- Navbar -->
		<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="http://www.jenusdy.web.id">
						<div class="logo-container">
							<div class="logo">
								<img src="<?php echo base_url();?>assets/img/logo.jpg" alt="Jenusdy FM" rel="tooltip" title="<b>Statistisi</b>" data-placement="bottom" data-html="true">
							</div>
							<div class="brand">
								Jenusdy
							</div>


						</div>
					</a>
				</div>

				<div class="collapse navbar-collapse" id="navigation-index">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a rel="tooltip" title="Follow me on Twitter" data-placement="bottom" href="https://twitter.com/JenusdyFM" target="_blank" class="btn btn-white btn-simple btn-just-icon">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a rel="tooltip" title="Add me on Facebook" data-placement="bottom" href="https://www.facebook.com/fawcet.jenusdy" target="_blank" class="btn btn-white btn-simple btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
						</li>
						<li>
							<a rel="tooltip" title="Connect with me on LinkedIn" data-placement="bottom" href="https://www.linkedin.com/in/fawcet-jenusdy-466447136/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<?php
							if(!empty($this->session->userdata('email'))){
						?>
								<li>
									<a rel="tooltip" title="Write a Post" data-placement="bottom" href="<?php echo base_url();?>post" class="btn btn-white btn-simple btn-just-icon">
										<i class="fa fa-pencil"></i>
									</a>
								</li>
								<li>
									<a rel="tooltip" title="Sign Out" data-placement="bottom" href="<?php echo base_url();?>login/sign_out" class="btn btn-white btn-simple btn-just-icon">
										<i class="fa fa-sign-out"></i>
									</a>
								</li>

						<?php
							}
						?>


					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

		<!-- Start Wrapper -->
		<div class="wrapper">

			<!-- Start Main Landing Page -->
			<div class="header" style="background-image: url('<?php echo base_url();?>assets/img/background2.jpeg');">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="brand">
								<h1>Data Science</h1>
								<h3>Python . R . SAS . Excel . SPSS . MySQL </h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Main Landing Page -->

			<div class="main main-raised">
				<div class="section section-basic">
					<div class="container">
						<div class="title">
							<h2>Posts</h2>
						</div>

						<div class="title">
                <h3><small> Pick your categories </small></h3>
            </div>
            <div class="row center">
                <div class="col-md-8 col-md-offset-3">
                    <button class="btn">All</button>
                    <button class="btn btn-primary">Python</button>
                    <button class="btn btn-info">R</button>
                    <button class="btn btn-success">SPSS</button>
                    <button class="btn btn-warning">EXCEL</button>
                    <button class="btn btn-danger">MySQL</button>
                </div>
            </div>
					</div>
				</div>

				<div>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="header header-success">
									<!-- Tabs with icons on Card -->
									<div class="card card-nav-tabs">
										<div class="col-sm-12 center-cropped img">
											<h4 style="text-align:center">Judul</h4>
											<img src="<?php echo base_url();?>assets/img/background1.png" alt="Rounded Image" class="img-rounded img-responsive">
										</div>
										<div class="content">
											<p>Data science, also known as data-driven science, is an interdisciplinary field about scientific methods, processes, and systems to extract knowledge or insights ...</p>
										</div>
										<div class="col-md-12 col-md-offset-3 col-sm-12 col-sm-offset-5 center">
	                      <button class="btn">Read More</button>
										</div>
									</div>

								</div>
								<!-- End Tabs with icons on Card -->
							</div>

						</div>
					</div>
				</div>
				<!-- End Section Tabs -->

				<div class="row sharing-area text-center">
		      <h3>Thank you for supporting us!</h3>
					<a href="#" class="btn btn-github">
		          <i class="fa fa-github"></i>
		      	Star
		      </a>
				</div>

				</br>
				</br>
			</div>
			<footer class="footer">
				<div class="container">
					<div class="copyright pull-right">
						@<?php echo date("Y"); ?>, made with <i class="material-icons">favorite</i> by Jenusdy FM
					</div>
				</div>
			</footer>
		</div>

		<!-- Sart Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<i class="material-icons">clear</i>
						</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-simple">Nice Button</button>
						<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--  End Modal -->


	</body>

<?php include('footer.php') ?>
