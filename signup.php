<?php

require 'connection.php';

if(count($_POST)>0) {
$username = mysqli_real_escape_string($dbhandle, $_POST["username"] );
$password = mysqli_real_escape_string($dbhandle, $_POST["password"] );
$email = mysqli_real_escape_string($dbhandle, $_POST["email"] );
$dateOfBirth = mysqli_real_escape_string($dbhandle, $_POST["dob"] );
$stmt = mysqli_stmt_init($dbhandle);
$safe_query  = "CALL  register(?,?,?,?)";
mysqli_stmt_prepare($stmt,$safe_query);
mysqli_stmt_bind_param($stmt, "ssss", $username,$password,$dateOfBirth,$email);
$auth=	mysqli_stmt_execute($stmt);
//$result = mysqli_stmt_get_result($stmt);
//$count = mysqli_num_rows($result);

}
?>
 <?php if($auth): ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>HackMe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
<div class="hero is-fullheight is-primary">
	<div class="hero-body">
		<div class="container">
		    <div class="columns is-centered"> <div class="column is-4">
				<div class="container">
					<div class="box has-text-centered">
					<h1 class=" subtitle is-5 has-text-dark">You Created an account<b class="has-text-primary">Successfully</b></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script>
    window.location.replace("https://websecurity101-1.000webhostapp.com/");
</script>
<?php endif; ?>
<?php
mysqli_close ( $dbhandle );
?>
