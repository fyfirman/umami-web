<script>
var match_password = function() {
	if (document.getElementById('password').value == document.getElementById('confirm-password').value) {
		document.getElementById('message').style.color = 'green';
		document.getElementById('message').innerHTML = '';
		document.getElementById('signButton').disabled = '';
		document.getElementById('signButton').style.backgroundColor = '';
		
	} else {
		document.getElementById('signButton').disabled = 'disabled';
		document.getElementById('signButton').style.backgroundColor = '#ccc';
		document.getElementById('message').style.color = 'red';
		document.getElementById('message').innerHTML = "Password didn't match";
	}
}
</script>

<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->
		<a href="login"><h2 class="signMenu inactive underlineHover">Login</h2></a>
		<h2 class="signMenu active">Register</h2>

		<!-- Icon -->
		<div class="fadeIn first">
			<!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
		</div>

		<!-- Login Form -->
		<form class="login" action="<?= base_url('register/register_action');?>" method="post">
			<input type="text" id="login" class="fadeIn second signForm" name="username" placeholder="Username">
			<input type="email" id="email" class="fadeIn third signForm" name="email" placeholder="Email">
			<input type="password" id="password" class="fadeIn fourth signForm" name="password" placeholder="Password" onkeyup='match_password();'>
			<input type="password" id="confirm-password" class="fadeIn fifth signForm" name="confirm-password" placeholder="Confirm Password" onkeyup='match_password();'>
			<br><span id="message"></span><br>
			<input type="submit" id="signButton" class="fadeIn sixth" value="Register">
		</form>

		<!-- Remind Passowrd -->
		<!-- <div id="formFooter">
			<a href="#">Forgot Password?</a>
		</div> -->

	</div>
</div>

<script>
document.getElementById('signButton').disabled = 'disabled';
document.getElementById('signButton').style.backgroundColor = '#ccc';
</script>