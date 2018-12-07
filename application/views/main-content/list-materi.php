<section>
  <div class="container bg-4 text-left" style="margin-bottom: 0px; padding-bottom: 30px;">  
  <h3><?= $matkul->Nama_Matkul ?></h3>
  <h4>Dosen : Akik Hidayat</h4>
  <div id="tabel">
    <?php foreach ($materi as $obj):?>
      <div>
        <a href="<?= base_url()?>download/<?= $obj['id_materi']?>">
          <div class="type-containter type-<?= $obj['jenis'];?>"><h5>PDF</h5></div>
          <div style="margin-top: 5px; text-indent: 20px;">
              <?= $obj['nama_materi']; ?>
          </div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
    

  <div class="center">
    <br>
    </br>
    <div class="pagination">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>
  </div>  
</section>