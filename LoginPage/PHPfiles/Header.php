<link rel="stylesheet" type="text/css" href="CSSfiles/Headercss.css"/>
<div class="header">
	<div class="loginContainer">
		<h1 id="logo">llllllllllllllllllll</h1>
		<div class="loginTab">
			<form action="/php/WebProject01/LoginPage/PHPfiles/Login.php" method="post">			
				<div id="login">
					<p>Account:
						<input type="text" name="account" size=24 value=""/>
					</p>
				</div>
				<div id="password">
					<p>Password:
						<input type="password" name="password" size=24 value=""/>
					</p>
				
				</div>
				<div id="submit">
					<p>
						<input type="submit" name="submitted" value="Log in"/>
					</p>
				</div>
			</form>
			<div id="Forgot">
				<form action="http://127.0.0.1/php/WebProject01/SignUpPage.php" method="post">
					<p>
						<input type="submit" name="SignUp" value="Forgot account?"/>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>