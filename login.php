<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>ShipStation Login</title>
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
		<form  class="form" id="login" method="POST">
			<p class="login-text" style="padding-bottom: 30px;">Login to Your ShipStation Account</p>
			<div class="form__input-group">
				<input type="email" class="form__input" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form__input-group">
				<input type="password" class="form__input" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="form__input-group">
				<button name="submit" class="form__button">Login</button>
			</div>
			<p class="form__text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>