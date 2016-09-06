<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="CSSfiles/Main.css"/>
	<script src = "JSfiles/TestPost.js"></script>	
	<title><?php echo "llllllllll"?></title>
</head>
<body>
<?php include"PHPfiles/Header.php"?>

<div id="bod01">
	<p>
		<img src ="lemon.jpg" id="lemon"/>
	</p>

	<div>
		Enter numbers to divide:
		<input id="testNum01" type="text" size=20/>
		<input id="testNum02" type="text" size=20/>
		<input id="submit01" type="submit" value="submit" onclick="testFunc(document.getElementById('answer'))
														testingShit(document.getElementById('answer'))"/><br/>
		<span id="answer"></span>
	</div>

	<p>Create cookie:
		<input type="text" id="testCreateCookie" onkeypress="onSubmit()"/>
	</p>
	<p id="displayCookies"></p>

</div>

<?php include"PHPfiles/SignUp.php"?>
</body>
</html>