<html>
   <head>
      <link rel="stylesheet" type="text/css" href="StyleSheet.css">
   </head>
<body>
   <h1>Log-In</h1>
      <fieldset>
	   <form action="login-submit.php" method="post"> 
	     <div>
				<p>
					<strong>Username</strong>
					<INPUT TYPE="text" NAME="name" SIZE="17" MAXLENGTH="20" required>
				</p>
				<p>
					<strong>Password:</strong>
					<INPUT TYPE="Password" NAME="password" SIZE="17" MAXLENGTH="20" required>
				</p>
				<br>
				<input class="data" type="submit" value="Log in">
	      </div>
		  <p>
		     <a class="rules" href="signup.php">  Sign up</a> 
	      </p>
       </form>
	</fieldset>
</body>
</html>