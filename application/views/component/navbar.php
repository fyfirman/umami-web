<!-- Navbar -->
<nav class="container nav-desktop">
  <!-- Left -->
   <div id="hello-message" class="col-md-4">
        <?php $login = true; ?> <!-- debug code -->
        <?php if($login):?>
          Halo fyfirman!
        <?php else: ?>
          <a href="<?php echo base_url()?>login">Login</a>
        <?php endif ?>
    </div>
    <!-- Logo -->
    <div id="brand-logo" class="col-md-4 col-xs-6">
      <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/assets/img/umami-logo.png" style="width: 80px"></a>
    </div>

     <!-- logout -->
    <div id="log" class="col-md-4 col-xs-6">
      <a href="">Logout <i class="fa fa-sign-out"></i></a>
    </div>
</nav>