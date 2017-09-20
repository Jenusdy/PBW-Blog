  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function(){
      $(".all").show();
      $(".btn-all").click(function(){
          $(".all").fadeIn();
      });
      $(".btn-python").click(function(){
          $(".all").fadeOut();
          $(".Python").fadeIn();
      });
      $(".btn-r").click(function(){
          $(".all").fadeOut();
          $(".R").fadeIn();
      });
      $(".btn-java").click(function(){
          $(".all").fadeOut();
          $(".Java").fadeIn();
      });
      $(".btn-c-plus-plus").click(function(){
          $(".all").fadeOut();
          $(".C++").fadeIn();
      });
      $(".btn-mysql").click(function(){
          $(".all").fadeOut();
          $(".MySQL").fadeIn();
      });
      $(".btn-blog").click(function(){
          $(".all").fadeOut();
          $(".Blog").fadeIn();
      });
      $(".btn-other").click(function(){
          $(".all").fadeOut();
          $(".Other").fadeIn();
      });
    });

  </script>

  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/material.min.js"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url();?>assets/js/nouislider.min.js" type="text/javascript"></script>

  <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

  <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-kit.js" type="text/javascript"></script>
</html>
