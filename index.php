<?php
  //session
  if(isset($_POST['reg_user'])){
	
	session_start();

	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['password_1'] = $_POST['password_1'];
	$_SESSION['password_2'] = $_POST['password_2'];
	
	

//validate username
	if(empty($_POST['username'])){
		echo 'username required <br />';
	} else {
		echo $_SESSION['username'];
	}

	//validate Email
	if(empty($_POST['email'])){
		echo 'email required <br />';
	} else {
		echo $_SESSION['email'];
	}

	//validate password_1
	if(empty($_POST['password_1'])){
		echo 'password required <br />';
	} else {
		echo $_SESSION['password_1'];
	}

	//validate password_2
	if(empty($_POST['password_2'])){
		echo 'password required <br />';
	} else {
		echo $_SESSION['password_2'];
	}


	if(!empty($_POST['reg_user'])){
		echo 'Registration NOT successful <br />';
	} else {
		echo 'Registration successful';
	}

	if($_SERVER['QUERY_STRING'] == 'nousername'){
			session_unset();
		 }

	//if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
  //}
}

  
//cookies
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>

<p><a href="login.php"> Go to Login Page </a> </p>