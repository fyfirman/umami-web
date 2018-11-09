<!-- header -->
<header>
    <h1 style="font-size: 72px; color:white;">Unduh Materi-Materi IT!</h1>
    <form>
      <input type="text" name="search" placeholder="Apa yang Kamu Cari?" size=75px  style="height: 48px; text-indent: 15px;">
      <button class="search-button"style="height: 45px">
        <i class="fa fa-search"></i>
      </button>
    </form>
        
  </header>
    
<!-- Body -->
<div class="content">
<div class="container"> 
  <?php for ($i=0; $i < 7; $i++): ?>
    <div class="list-materi row">
      <h3>Semester <?php echo $i+1?></h3>
      <div>
          <div class="row">
            <a class="col-md-4" href="#">
                <div class="materi" style="">Language</div>
            </a>
            <a class="col-md-4" href="#">
                <div class="materi" style="">Language</div>
            </a>
            <a class="col-md-4" href="#">
                <div class="materi" style="">Language</div>
            </a>
          </div>
          <div class="row">
            <a class="col-md-4" href="#">
                <div class="materi" style="">Language</div>
            </a>
            <a class="col-md-4" href="#">
                <div class="materi" style="">Language</div>
            </a>
            <a class="col-md-4" href="#">
                <div class="materi" style="">Language</div>
            </a>
          </div>
      </div>   
    </div>
  <?php endfor ?>
</div>
</div>