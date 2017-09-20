<?php include('header.php') ?>

<?php
	foreach ($data->result() as $row) {
?>

	<title><?php echo $row->judul; ?> </title>
</head>

<body class="tutorial-page">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="http://www.jenusdy.web.id">
           <div class="logo-container">
                <div class="logo">
                    <img src="<?php echo base_url();?>assets/img/logo.jpg" alt="Jenusdy FM">
                </div>
                <div class="brand">
                    Jenusdy FM
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url().$row->foto;?>">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center"><?php echo $row->judul ?></h1>
					<h6 class="title text-center" style="margin: 2px" ><i class="fa fa-clock-o">  </i> <?php echo $row->create_at ?>  ||  <i class="fa fa-pencil"></i> Posted by  <?php echo $row->post_by ?>  ||   <i class="fa fa-eye"></i>  <?php echo $view ?> views</h6>

				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
      <div class="container">
				<div class="container">
					<br><br><br>
					<?php echo $row->body; ?>
				</div>
	    </div>
				<br><br>
	</div>
<footer class="footer footer-transparent">
    <div class="container">
        <div class="copyright">
            @<?php echo date("Y"); ?>, Jenusdy FM made with love
        </div>
    </div>
</footer>

</body>

<?php
	}
?>

<?php include('footer.php') ?>
