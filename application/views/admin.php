<?php include('header.php') ?>

  <title>Admin Panel</title>
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
                <a rel="tooltip" title="Admin Panel" data-placement="bottom" href="<?php echo base_url();?>admin/" class="btn btn-white btn-simple btn-just-icon">
                  <i class="fa fa-bar-chart"></i>
                </a>
              </li>
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
          }else{
            ?>
            <li>
              <a rel="tooltip" title="Log In" data-placement="bottom" href="<?php echo base_url();?>login/" class="btn btn-white btn-simple btn-just-icon">
                <i class="fa fa-user"></i>
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
  <br><br>
  <br><br>
  <br><br>
  <br><br>

  <div class="wrapper">
    <div class="main main-raised">
      <div class="section section-basic">
        <div class="container">
          <div class="title">
            <h2>Posts</h2>
          </div>

          <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th class="text-right">Views</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $i = 1;
                foreach ($data->result() as $row) {
              ?>
                <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td><?php echo $row->judul; ?></td>
                    <td><?php echo $row->kategori; ?></td>
                    <td><?php echo $row->post_by; ?></td>

                    <td class="text-right"><?php echo $this->db->where('id_post', $row->id_post)->get('views')->num_rows(); ?> views</td>
                    <td class="td-actions text-right">
                        <button id="<?php echo $row->id_post; ?>" type="button" title="Edit Posts" class="btn btn-success btn-simple btn-xs konfirmasi-edit" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button id="<?php echo $row->id_post; ?>" type="button" title="Remove" class="btn btn-danger btn-simple btn-xs konfirmasi-hapus"  data-toggle="modal" data-target="#myModal1">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>

              <?php
                $i++;
                }
              ?>

            </tbody>
        </table>
        </div>
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
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Apakah anda yakin ingin mengedit post ini?</h4>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-default btn-simple" data-dismiss="modal">Tidak</a>
        <a id="ya-edit" href="#" class="btn btn-info btn-simple">Ya</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Apakah anda yakin ingin menghapus post ini?</h4>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-default btn-simple" data-dismiss="modal">Tidak</a>
        <a id="ya-hapus" href="#" class="btn btn-info btn-simple">Ya</a>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>

<script>
  $(document).ready(function(){
    $(".konfirmasi-edit").click(function(){
      var id = $(this).attr('id');
      $("#ya-edit").attr('href',"<?php echo base_url(); ?>admin/edit/"+id);
    });
    $(".konfirmasi-hapus").click(function(){
      var id = $(this).attr('id');
      $("#ya-hapus").attr('href',"<?php echo base_url(); ?>/admin/hapus/"+id);
    });
  });
</script>

<?php include('footer.php') ?>
