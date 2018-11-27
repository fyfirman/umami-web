<!-- header -->
<header>
  <h1 style="">Unduh Materi-Materi IT!</h1>
  <form>
    <input type="text" name="search" placeholder="Apa yang Kamu Cari?" size=75px  style="">
    <button class="search-button"style="height: 45px">
      <i class="fa fa-search"></i>
    </button>
  </form>
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
            <a class="col-md-4" href="#">
                <div class="materi" style=""><?php echo $obj['nama_matkul']; ?></div>
            </a>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
  <?php endfor ?>
</div>
</div>