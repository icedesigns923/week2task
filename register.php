<?php

// if(isset($_POST['reg_user'])){
	
// 	session_start();

// 	$_SESSION['username'] = $_POST['username'];
// 	$_SESSION['email'] = $_POST['email'];
// 	$_SESSION['password_1'] = $_POST['password_1'];
// 	$_SESSION['password_2'] = $_POST['password_2'];
	
// 	echo $_SESSION['username'];
// 	echo $_SESSION['email'];
// 	echo $_SESSION['password_1'];
// 	echo $_SESSION['password_2'];
	

// //validate username
// 	if(empty($_POST['username'])){
// 		echo 'username required <br />';
// 	} else {
// 		echo htmlspecialchars($_POST['username']);
// 	}

// 	//validate Email
// 	if(empty($_POST['email'])){
// 		echo 'email required <br />';
// 	} else {
// 		echo htmlspecialchars($_POST['email']);
// 	}

// 	//validate password_1
// 	if(empty($_POST['password_1'])){
// 		echo 'password required <br />';
// 	} else {
// 		echo htmlspecialchars($_POST['password_1']);
// 	}

// 	//validate password_2
// 	if(empty($_POST['password_2'])){
// 		echo 'password required <br />';
// 	} else {
// 		echo htmlspecialchars($_POST['password_2']);
// 	}


// 	if(!empty($_POST['reg_user'])){
// 		echo 'Registration NOT successful <br />';
// 	} else {
// 		echo 'Registration successful';
// 	}

// 	//if ($password_1 != $password_2) {
// 	//array_push($errors, "The two passwords do not match");
//   //}
// }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP </title>
  
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="index.php">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value= "">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
