<html>
   <head>
      <link rel="stylesheet" type="text/css" href="StyleSheet.css">
   </head>
<body>
<h1>Log-In Success!</h1>

<?php  
    session_start();
	$name = strtolower(trim($_POST["name"]));
	$pass = trim($_POST["password"]);
	$cookie_value;
	$cookie_name = "user_list";
	$valid = true;
	$mess;
	$set = false;

	//if there's no cookie. SET AN ERROR
	if(!isset($_COOKIE[$cookie_name])) {
		$mess = "ERROR: no users exist!";
		$valid = false;

	}else{
		//retrieve cookies!!!
		$cookie_value = json_decode($_COOKIE[$cookie_name], true);

		if(array_key_exists($name, $cookie_value)){
			$passCode = $cookie_value[$name];
			if(!($pass == $passCode)){
				$mess = "Error: Password invalid";
				$valid = false;
			}
		}else{
			$mess = "Error: ".$name." doesn't exist!!!";
			$valid = false;
		}
	}
	if($valid){
		$_SESSION['user']=$name; //THIS IS IMPORTANT TO REMEMBER THE CURRENT USER
        echo
		'<div>
				<a class="dataL" href="gameChoose.php"> Click here to play</a>
		</div>';
	}else{

		echo
		'<div>
			<p style="color:red">'.$mess.'</p>
			<a class="rPage" href="login.php">Click to go back to log-in page</a>
		</div>';
	}

	
?>

</body>
</html>
