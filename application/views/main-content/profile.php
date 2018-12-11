<section>
	<div class="container profile-container">  
		<div class="title-wrapper">
			<h1>Profil</h1>
		</div>
		<div class="bio-wrapper">
			<table>
				<tr>
					<td>Username</td>
					<td><?= $biodata->nama_user?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?= $biodata->email?></td>
				</tr>
			</table>
		</div>
		<div class="button-wrapper row">
			<a href="<?= base_url('profile/delete_action')?>">
				<div id="delete-button" class="col-md-2 col-sm-6">
					Hapus Akun 
				</div>
			</a>
		</div>
	</div>
</section>