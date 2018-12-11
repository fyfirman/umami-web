<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->
		<h2 class="signMenu active">Login</h2>
		<a href="register"><h2 class="signMenu inactive underlineHover">Register</h2></a>

		<!-- Icon -->
		<div id="messages" class="fadeIn first">
			<?php if($this->session->userdata('register_status')){
				echo "User berhasil dibuat. Silahkan login."; 
				$this->session->sess_destroy();
			}?>
			<?php if($this->session->userdata('forgot_status')){
				echo "Password berhasil direset. Silahkan login."; 
				$this->session->sess_destroy();
			}?>
		</div>

		<!-- Login Form -->
		<form class="login" action="<?= base_url('login/login_action');?>" method="post">
			<input type="text" id="login" class="fadeIn second signForm" name="username" placeholder="Username">
			<input type="password" id="password" class="fadeIn third signForm" name="password" placeholder="Password">
			<input type="submit" id="signButton" class="fadeIn fourth" value="Login">
		</form>

		<!-- Remind Passowrd -->
		<div id="formFooter">
			<a href="<?= base_url('forgot-password');?>">Forgot Password?</a>
		</div>

	</div>
</div>