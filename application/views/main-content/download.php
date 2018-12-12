<?php $login = $this->session->userdata('status');?>

<!-- header -->
<header class="header body-download col-md-12" style="">
	<div class="container" style="margin-bottom: 50px;">
		<h1 style="font-size: 50px; color:white; text-align: left;"><?php echo "{$materi->nama_materi}.{$materi->jenis}"?></h1>
		<!-- <p style="color:white; text-align: left;">Mata Kuliah: Sistem Database II</p> -->
	</div>

	<a href="<?php if($login) echo base_url('download/get/'.$materi->id_materi); else echo base_url('login');?>" class="download-button" style=" background: rgba(0,0,0,0); color:white; ">
		<?php if($login) echo "Unduh"; else echo "Kamu belum login!";?>
	</a>
</header>

<!-- <div class="content">
	<div class="container">  
		<h4 style="text-indent: 50px; margin-top:30px; color:#727272;">File lainnya</h4>
		<?php for($i=0; $i<5; $i++): ?>
		<a href="#">
		    <div class="File col-md-2" style="margin-left:0;">
		    	<div align="center" style="margin-top:10px;">
					<div class="circle" >
		        		<h2 style="margin-top: 35px;">PDF</h2>
					</div>
				</div>
				<h4 style="text-align: center; margin-top: 30px; color:#727272;">Nama-Fileeeee....</h4>
		    </div>
		</a>
		<?php endfor ?>
	</div>
</div> -->


