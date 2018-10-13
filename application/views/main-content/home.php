<!-- header -->
<header>
    <h1 style="font-size: 50px; color:white;">Unduh Materi-Materi IT!</h1>
    <form>
      <input type="text" name="search" placeholder="Apa yang Kamu Cari?" size=50px  style="border-radius: 5px">
      <button>
        <i class="fa fa-search"></i>
      </button>
    </form>
        
  </header>
    
<!-- Body -->
<div class="container bg-4 text-left" style="margin-bottom: 20px;">  
  <?php for ($i=0; $i < 7; $i++): ?>
    <div class="list-materi row">
      <h3>Semester <?php echo $i+1?></h3>
      <div>
          <div class="row">
            <a href="#">
                <div class="materi col-md-4">Language</div>
            </a>
            <a href="#">
              <div class="materi col-md-4">Language</div>
            </a>  
            <a href="#">
              <div class="materi col-md-4">Language</div>
            </a>   
          </div>
          <div class="row">
            <a href="#">
                <div class="materi col-md-4">Language</div>
            </a>
            <a href="#">
              <div class="materi col-md-4">Language</div>
            </a>  
            <a href="#">
              <div class="materi col-md-4">Language</div>
            </a>
          </div>
      </div>   
    </div>
  <?php endfor ?>
</div>