<!-- <div class="content">
	<h1> LOGIN </h1>
	<form action="action_page.php">
		<div class="container">
			<center>
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required></br>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required></br>
			</center>
			<center><button type="submit">Login</button></center>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<span class="psw"><a href="#">Forgot password?</a></span>
		</div>
	</form>
</div> -->

<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->
		<h2 class="signMenu active">Login</h2>
		<h2 class="signMenu inactive underlineHover">Register</h2>

		<!-- Icon -->
		<div class="fadeIn first">
			<!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
		</div>

		<!-- Login Form -->
		<form class="login">
			<input type="text" id="login" class="fadeIn second signForm" name="login" placeholder="Username">
			<input type="password" id="password" class="fadeIn third signForm" name="login" placeholder="Password">
			<input type="submit" id="signButton" class="fadeIn fourth" value="Log In">
		</form>

		<!-- Remind Passowrd -->
		<div id="formFooter">
			<a href="#">Forgot Password?</a>
		</div>

	</div>
</div>