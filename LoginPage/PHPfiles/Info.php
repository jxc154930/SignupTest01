<?php 
	$firstName = @$_POST["first_name"];
	$lastName  = @$_POST["last_name"];
	$password  = @$_POST["password"];
	$passcheck = @$_POST["passcheck"];
	$account   = @$_POST["account"];
	
	// everything requires atleast 5 characters
	// everything requires atleast a lowercase letter
	// password requires atleast 1 a-z/A-Z/0-9
	// password now requires special characters [!@#$\%^&]
	$boolFirstName = preg_match("%(?=.*[a-z||A-Z])^[a-zA-Z]{1,30}$%", stripslashes($firstName)); 
	$boolLastName  = preg_match("%(?=.*[a-z||A-Z])^[a-zA-Z]{1,30}$%", stripslashes($lastName));
	$boolPassword  = preg_match("%(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$\%^&])^[a-zA-Z0-9!@#$\%^&]{6,30}$%", stripslashes($password));
	$boolAccount   = preg_match("%(?=.*[a-z])^[a-zA-Z0-9]{6,30}$%", stripslashes($account));
	
	
	if($boolFirstName && $boolLastName && $boolPassword && $boolAccount && ($password == $passcheck)){

		DEFINE("DBUSER", "root");
		DEFINE("DBPW", "j1324sjj");
		DEFINE("DBHOST", "localhost");
		DEFINE("DBNAME", "websiteUser");
			
		$conn = new mysqli(DBHOST, DBUSER, DBPW, DBNAME);
		if($conn->connect_error){
			die("failed to connect" . $conn->connect_error);
		}
		
		$query1 = "SELECT * FROM users WHERE account='$account'";
		$result1 = mysqli_query($conn, $query1);
		if(mysqli_affected_rows($conn) >= 1){
			header("Location: http://127.0.0.1/php/WebProject01/LoginPage/RegisterPage.php");
			mysqli_close($conn);
			exit();
		}
		
		
		$getData = "\"" . $firstName . "\"," . "\"" . $lastName . "\"," . "SHA(\"" . $password . "\")," . "\"" . $account . "\"," . "NULL, 0";
		
		$query = "INSERT INTO users VALUES(" . $getData  . ")"; 
	
		$result = $conn->query($query) or die("Could not query: " . mysqli_error($conn));
	
		echo"Congratulations $firstName $lastName, your account: $account has been set!";
		mysqli_close($conn);
		exit();
	}else{
		header("Location: http://127.0.0.1/php/WebProject01/LoginPage/RegisterPage.php");
	}
?>

<html><head><title><?php echo "Account info";?></title></head>
<body>
<form action="/php/WebProject01/LoginPage/LoginPage.php" method="post">
	<input type="submit" value="return"/>
</form>
</body>
</html>