<?php 
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo "Front Page"?></title>
</head>
<body>
<h1>Welcome!</h1>

<?php 
DEFINE("DBUSER", "root");
DEFINE("DBPW", "j1324sjj");
DEFINE("DBHOST", "localhost");
DEFINE("DBNAME", "websiteUser");

$dbc = new mysqli(DBHOST, DBUSER, DBPW, DBNAME);
if($dbc->connect_error){
	die("Could not connect to database" . mysqli_error($dbc));
}

if(isset($_SESSION['first_name'])){
	$sql= "SELECT token_id FROM users WHERE user_id='$_SESSION[user_id]'";
	$result = mysqli_query($dbc, $sql) or die("Could not connect");

	if(mysqli_affected_rows($dbc) == 1){
		$rows = mysqli_fetch_array($result);
		mysqli_free_result($result);
		mysqli_close($dbc);
		
		if($_SESSION['token_id'] == $rows[0]){
			echo "Welcome, {$_SESSION['first_name']}!<br/>" ;
			
		}else{
			header("Location: http://127.0.0.1/php/WebProject01/LoginPage/LogoutPage.php");
		}
	}
}else{
	echo"Could not connect to session";
}

echo '<a href="http://127.0.0.1/php/WebProject01/LoginPage/LogoutPage.php">Logout</a>';
?>


</body>
</html>