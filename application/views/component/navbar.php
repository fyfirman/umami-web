<?php $login = $this->session->userdata('status');?>
<!-- Navbar -->
<div class="container-fluid nav">
  <nav class="container nav-desktop">
    <!-- Left -->
    <div id="hello-message" class="col-md-4">
          <?php if($login):?>
            Halo <a href="<?php echo base_url()."profile/".$this->session->userdata('id_user');?>"><?= $this->session->userdata('username')?></a>!
          <?php endif ?>
      </div>
      <!-- Logo -->
      <div id="brand-logo" class="col-md-4 col-xs-6">
        <a href="<?= base_url()?>"><img src="<?= base_url()?>/assets/img/umami-logo.png" style="width: 80px"></a>
      </div>

      <!-- logout -->
      <div id="log" class="col-md-4 col-xs-6">
        <?php if($login):?>
          <a href="<?= base_url('logout')?>">Logout <i class="fa fa-sign-out"></i></a>
        <?php else: ?>
          <a href="<?= base_url('login')?>">Login <i class="fa fa-sign-in"></i></a>
        <?php endif ?>
        
      </div>
  </nav>
</div>