<div class="content">
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
</div>