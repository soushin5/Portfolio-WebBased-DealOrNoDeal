<html>
   <head>
      <link rel="stylesheet" type="text/css" href="StyleSheet.css">
   </head>
<body>
<h1> Sign-up Success!</h1>

<?php 

	$valid = true;
	$name = strtolower(trim($_POST["name"]));
	$pass = trim($_POST["password"]);

	$cookie_name = "user_list";
	$cookie_value;
	$mess; 
	$set = false;

	//if there is no cookie set it!
	if(!isset($_COOKIE[$cookie_name])) {
		$cookie_value = array();
		setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 15), "/");
		$cookie_value = json_decode($_COOKIE[$cookie_name]);

	//retrieve cookies if it's set!		
	}else{
		$cookie_value = json_decode($_COOKIE[$cookie_name], true);
		$set = true;
	}

	//if cookies is still not set. . SET AN ERROR
	if(!isset($_COOKIE[$cookie_name])) {
		$mess = "Error: Cannot set cookies!!!";
		$valid = false; 
	}

	//if cannot retrieve cookie. SET AN ERROR
	if(!$set) {
		$mess = "Error: Cannot retrieve cookies!!!";
		$valid = false; 

	//cookie was retrieved	
	}else{
		if(array_key_exists($name, $cookie_value)){
			$mess = "Error: ".$name." already exist!!!";
			$valid = false; 
		}else{
			$cookie_value[$name] = $pass;
			setcookie($cookie_name, json_encode($cookie_value, true), time() + (86400 * 15), "/");
		}
	}


	if($valid){
		echo
		'<div>
			<p class="fly">Thank you for signing up, '.$_POST["name"].'!</p>
			<p>
			   <a class="data" href="login.php">Now click here to log in.</a>
			</p>
		</div>';
	}else{

		echo
		'<div>
			<p style="color:red">'.$mess.'</p>
			<a class="data" href="signup.php">Click to go back to sign-up page</a>
		</div>';
	}

?>

</body>
</html>
