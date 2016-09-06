<link rel="stylesheet" type="text/css" href="CSSfiles/SignUp.css"/>
<script src="JSfiles/TestPost.js"></script>
<div class="SignUp">
	<div id="heading">
		<h1>Sign Up</h1>
	</div>
	<div class="info">
		<form action="/php/WebProject01/LoginPage/PHPfiles/Info.php" method="post">
			<div id="firstName">
				<input type="text" name="first_name" value="" placeholder="First name" />
			</div>
			<div id="lastName">
				<input type="text" name="last_name" value="" placeholder="Last name"/>
			</div>
			<div id="password">
				<input type="password" name="password" value="" placeholder="Password"/>
			</div>
			<div id="passcheck">
				<input type="password" name="passcheck" value="" placeholder="Retype your password"/>
			</div>
			<div id="account">
				<input type="text" name="account" value="" placeholder="Account name"/>
			</div>
			<div id="submit">
				<input type="submit" value="Sign Up!"/>
			</div>
		</form>
	</div>
</div>