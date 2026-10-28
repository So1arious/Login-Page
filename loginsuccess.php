<!DOCTYPE HTML>
<?php
	session_start();
	$username="user";
	$password="password";
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
		header("location:loginsucess.php");
	}
	if(isset($_POST['username']) && isset($_POST['password'])) {
		if($_POST['username']==$username && $_POST['password']==$password) {
			$_SESSION['loggedin']=true;
		}
		else {
			echo "Username or passwordis incorrect";
		}
	}
?>
<html>

<!--loginsuccess.php-->
<!DOCTYPE HTML>
<?php
	session_start();
	if(!
isset($_SESSION['LOGGEDIN']||$_SESSION['loggedin']==false){
		header("location:index.php");
	}
?>
<html>
<body>
<h3> You have logged in successfully!</h3>
</body>
</html>

