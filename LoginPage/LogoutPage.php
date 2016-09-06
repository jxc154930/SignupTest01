<?php 
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo "Logout Page"?></title>
</head>
<body>
<h1>Logged Out!</h1>
<?php 
	if(!isset($_SESSION['first_name'])){
		header("Location: http://127.0.0.1/php/WebProject01/LoginPage/LoginPage.php");
		exit();
	}else{
		$_SESSION = array();
		session_destroy();
		setcookie(session_name(), '', time()-300,'/','',0); // this will make sure cookie is dead
		echo"You are logged out<br/>";
	}
?>
<a href="http://127.0.0.1/php/WebProject01/LoginPage/LoginPage.php">Logout</a>;

</body>
</html>