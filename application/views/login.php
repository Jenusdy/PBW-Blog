<?php include('header.php'); ?>

		<title>Login</title>
</head>

<body class="signup-page">
	 <div class="wrapper">
		<div class="header header-filter" style="background-image: url('<?php echo base_url();?>assets/img/background2.jpeg'); background-size: cover; background-position: top center;">
			<div class="container">

				<?php
					$info = $this->session->flashdata('info');
					if(!empty($info)){

				?>
				<div class="alert alert-danger">
					<div class="container-fluid">
						<div class="alert-icon">
						<i class="material-icons">error_outline</i>
						</div>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><i class="material-icons">clear</i></span>
						</button>
						<b>Error Alert:</b> Email atau password anda salah .... !
					</div>
	 		 </div>

			 <?php
				 }
			 ?>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup" style="background-color:rgba(255, 255, 255, 0.65)">
							<form class="form" method="POST" action="<?php echo base_url();?>login/get_login">
								<div class="content">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input id="email" name="email" type="text" class="form-control" placeholder="Email...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input id="password" name="password" type="password" placeholder="Password..." class="form-control" />
									</div>

								</div>
								<div class="footer text-center">
									<button href="#pablo" type="submit" class="btn btn-simple btn-primary btn-lg">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div>


</body>

<?php include('footer.php');?>
