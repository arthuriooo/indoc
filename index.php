<?php 
include('includes/classes/DB.php');

if (isset($_POST['createDoctorAccount'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	if (strlen($password) >= 6 && strlen($password) <= 60) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if (!DB::query('SELECT email FROM doctors WHERE email=:email', array(':email'=>$email))) {
				DB::query('INSERT INTO doctors VALUES (\'\', :firstname, :lastname, :password, :email)', array(':firstname' => $firstname, ':lastname' => $lastname, ':password' => password_hash($password, PASSWORD_BCRYPT), ':email' => $email));
			} else { echo "email in use"; }
		} else { echo 'invalid email'; }
	} else { echo 'invalid password'; }

}

if (isset($_POST['createPatientAccount'])) {
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	if (strlen($password) >= 6 && strlen($password) <= 60) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if (!DB::query('SELECT email FROM patients WHERE email=:email', array(':email'=>$email))) {
				DB::query('INSERT INTO patients VALUES (\'\', :firstname, :lastname, :password, :email)', array(':firstname' => $firstname, ':lastname' => $lastname, ':password' => password_hash($password, PASSWORD_BCRYPT), ':email' => $email));
			} else { echo "email in use"; }
		} else { echo 'invalid email'; }
	} else { echo 'invalid password'; }

}


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>INDOC</title>
	    <meta charset="UTF-8">

	    <link rel="stylesheet" type="text/css" href='./imports/normalize.css'>
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script type='text/javascript' src='./imports/jquery-3.1.1.js'></script>
	    <script type="text/javascript" src="./imports/jquery-css-transform.js"></script>
	    <script type="text/javascript" src="./imports/jquery-animate-css-rotate-scale.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	    <script type="text/javascript" src='./imports/jquery.ui.touch-punch.js'></script>

	    <link rel="stylesheet" type="text/css" href='./style.css'>
	    <script type="text/javascript" src='./main_script.js'></script>
	    <script type="text/javascript" src='./form_script.js'></script>
	</head>
	<body onmousemove="moveYourAss(event)">
		<!-- <p id="coorC">center: 0, 0</p>
		<p id="coorM">mouse: 0,0</p>
		<p id="coorD">difference: 0, 0</p>
		<p id="coorDD">division: 0, 0</p>
		<p id="coorE">style: 0, 0</p> -->
		<div id="back">
			<img id='backImg' src="./back.png">
		</div>
		<div id="doc">
			<img id='docImg' src="./doc.png">
		</div>

		<!-- ----                           ---- -->



		<div id="logoPanel">
			<p id="logo">inDOC</p>
			<p id="explanation">поиск и общение с квалифицированными врачами Москвы</p>
		</div>

		<div id="formPanel">
			<div id="choose">
				<div id="registrationButton">регистрация</div>
				<div id="loginButton">вход</div> 
			</div>
			<div id='signUp' class='forma'>

				<form id="whoAreYou" action="index.php" method="post">
					<span id="docBtn">ВРАЧ</span>
					<span id="patBtn">ПАЦИЕНТ</span>
				</form>

				<div id="hide"></div>

				<form id='signUpForm' action="index.php" method="post">

					<input type="text" name="firstname" placeholder="Имя"><Br>
					<input type="text" name="lastname" placeholder="Фамилия"><Br>
					<input type="password" name="password" placeholder="Пароль"><Br>
					<input type="email" name="email" placeholder="Email"><Br>
					<input id="signUpButton" type="submit" name="" value="Зарегистрироваться">

				</form>
			</div>
			<!-- ---- -->
			<div id="logIn" class='forma'>
				<form id='loginForm' action="index.php" method="post">

					<input type="email" name="email" placeholder="Email"><Br>
					<input type="password" name="password" placeholder="Пароль"><Br>
					<input type="submit" name="login" value="Войти">

				</form>
			</div>

		</div>
		
	</body>
</html>