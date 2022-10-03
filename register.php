<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM login WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO login (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>ShipStation Registration</title>
</head>

<body class="login__page">
	<div class="login__background">
        <pre class="login__message">
			A whole new way to manage your
			eCommerce Store!</pre>
        <img src="images/login.png" class="login__image" width="500.4px" height="416.64px">
    </div>
	<div class="login__container">
		<h1 class="form__logo">ShipStation</h1>
		<form action="" method="POST" class="form" id="login">
            <p class="login-text" style="margin-bottom: 20px;">Create Your ShipStation Account</p>
			<div class="form__input-group">
				<input type="text" class="form__input" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="form__input-group">
				<input type="email" class="form__input" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form__input-group">
				<input type="password" class="form__input" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form__input-group">
				<input type="password" class="form__input" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="form__input-group">
				<button name="submit" class="form__button">Register</button>
			</div>
			<p class="login-text">Already Have an Account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>