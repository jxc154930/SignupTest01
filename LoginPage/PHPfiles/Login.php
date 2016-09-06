<?php 
session_start();

DEFINE("DBUSER", "root");
DEFINE("DBHOST", "localhost");
DEFINE("DBPW", "j1324sjj");
DEFINE("DBNAME", "websiteUser");

$dbc = new mysqli(DBHOST, DBUSER, DBPW, DBNAME);
if($dbc->connect_error){
	die("Could not connect to database" . mysqli_error($dbc));
}

if(isset($_POST["submitted"])){
	if(preg_match("%^[a-zA-Z0-9]{6,30}$%", stripslashes(trim($_POST["account"])))){
		$u = mysqli_escape_string($dbc, ($_POST["account"]));
	}else{
	$u = FALSE;
	}
	
	if(preg_match("%^[a-zA-Z0-9!@#$\%^&]{6,30}$%", stripslashes(trim($_POST["password"])))){
		$p = mysqli_escape_string($dbc, ($_POST["password"]));
	}else{
	$p = FALSE;
	}
	
	if($u && $p){
		$query = "SELECT * FROM users WHERE account='$u' AND password=SHA('$p')";
		$results = $dbc->query($query);
		if(mysqli_affected_rows($dbc) == 1){
			$row = mysqli_fetch_array($results);
			mysqli_free_result($results);
			$_SESSION['first_name'] = $row[0];
			$_SESSION['last_name'] = $row[1];
			$_SESSION['password'] = $row[3];
			$_SESSION['user_id'] = $row[4];
			
			$tokenID= rand(10000, 9999999);
			$_SESSION['token_id'] = $tokenID;
			$query2= "UPDATE users SET token_id = $tokenID WHERE user_id = '$_SESSION[user_id]'";
			$results2 = mysqli_query($dbc, $query2);
			
			session_regenerate_id();
			
			header("Location: http://127.0.0.1/php/WebProject01/UserPage/FrontPage.php");
			mysqli_close($dbc);
			exit();
		}else{
			header("Location: http://127.0.0.1/php/WebProject01/LoginPage/RegisterPage.php");
			mysqli_close($dbc);
			exit();
		}
	}else{
	header("Location: http://127.0.0.1/php/WebProject01/LoginPage/RegisterPage.php");	
	mysqli_close($dbc);
	exit();
	}
}

?>



?>