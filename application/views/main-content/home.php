<!-- header -->
<header class="header col-md-12">
  <div class="container">
    <h1>Unduh Materi-Materi IT!</h1>
  </div>
</header>
    
<!-- Body -->
<div class="content">
<div class="container">
  <?php for ($i=1; $i <= 7; $i++): ?>
    <div class="list-materi row">
      <h3>Semester <?php echo $i?></h3>
      <div class="row">
        <?php foreach ($matkul as $obj):?>
          <?php if ($obj['semester'] == $i): ?>
            <a class="col-md-4" href="<?php echo base_url()?>materi/<?php echo $obj['id_matkul']?>">
                <div class="materi" style=""><?php echo $obj['nama_matkul']; ?></div>
            </a>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
  <?php endfor ?>
</div>
</div>