<?php include('header.php') ?>

	<title>Write a Post</title>
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
	<div class="header header-filter" style="background-image: url('<?php echo base_url();?>assets/img/ubuntu.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">Write a Post</h1>
				</div>
			</div>
		</div>
	</div>

<?php
	foreach ($data->result() as $row) {
?>
	<div class="main main-raised">
		<div class="section">
			<?php echo form_open_multipart('post/write_post/'.$row->id_post) ?>

				<div class="form content">

					<div class="input-group">
						<span class="input-group-addon">
						</span>
						<input id="judul" name="judul" type="text" value="<?php echo $row->judul; ?>" class="form-control" placeholder="Judul...">
						<input id="kode" name="kode" type="text" value="edit" class="form-control" placeholder="Judul..."readonly>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
						</span>
						Kategori
						<select name="kategori">
					    <option value="Python">Python</option>
					    <option value="R">R</option>
							<option value="Java">Java</option>
							<option value="C++">C++</option>
					    <option value="SPSS">SPSS</option
							<option value="Statistika">Statistika</option>
					    <option value="MySQL">MySQL</option>
							<option value="Blog">Blog</option>
							<option value="Other">Other</option>
					  </select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
						</span>
						<textarea id="editor1" name="body" type="text" class="form-control" placeholder="Isi..."><?php echo $row->body; ?></textarea>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon">
						</span>
						<input id="foto" name="foto" type="file" class="upload" />
					</div>

					<div class="footer text-center">
						<button href="#pablo" type="submit" class="btn btn-simple btn-primary btn-lg" style="background-color:rgba(124, 120, 118, 0.71)">Post</button>
					</div>

					<?php
					$this->session->set_flashdata('url_foto', $row->foto);
					//Redirect kehalaman login
					?>

				</div>
				<?php echo form_close(); ?>
    </div>
	</div>

<?php
	}
?>
</div>

<footer class="footer footer-transparent">
    <div class="container">
        <div class="copyright">
            @<?php echo date("Y"); ?>, Jenusdy FM made with love
        </div>
    </div>
</footer>

</body>
<script>
	CKEDITOR.replace('editor1');
</script>
<?php include('footer.php') ?>
