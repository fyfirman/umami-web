<!-- Navbar -->
<nav class="container">
  <ul class="navtampil">

    <div class="col-md-4">
      <li class="nav-item navbar-left">
        <?php $login = true; ?> <!-- debug code -->
        <?php if($login):?>
          Halo fyfirman!
        <?php else: ?>
          <a href="<?php echo base_url()?>login">Login</a>
        <?php endif ?>
      </li>
    </div>
    <!-- Logo -->
    <div class="col-md-4">
      <li class="nav-item"><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/assets/img/umami-logo.png" style="width: 80px"></a></li>
    </div>
  </ul>
</nav>