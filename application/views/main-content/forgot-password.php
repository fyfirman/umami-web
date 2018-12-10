<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->
		<h2 class="">Forgot Password</h2>

		<!-- Forgot password Form -->
		<form class="login" action="" method="post">
			<?php echo validation_errors();?>	
			<?php echo form_open('form');?>
			<input type="text" id="" class="fadeIn second signForm" name="username" placeholder="Username">
            <input type="email" id="email" class="fadeIn third signForm" name="email" placeholder="Email">
            <input type="password" id="password" class="fadeIn fourth signForm" name="password" placeholder="New Password" onkeyup='match_password();'>
			<input type="password" id="confirm-password" class="fadeIn fifth signForm" name="confirm-password" placeholder="Confirm New Password" onkeyup='match_password();'>
			<br><span id="message"></span><br>
            <input type="submit" id="signButton" class="fadeIn fourth" value="Reset">
		</form>

	</div>
</div>

<script src="<?php echo base_url()?>assets/js/confirm-password.js""></script>