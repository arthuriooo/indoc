?> <script>alert();</script> <?php







// $choice = '';
// if (isset($_POST['docChoice'])) {
// 	$choice = 'doctors';
// }
// if (isset($_POST['patChoice'])) {
// 	$choice = 'clients';
// }

// if (isset($_POST['register'])) {
// 	$firstname = $_POST['firstname'];
// 	$lastname = $_POST['lastname'];
// 	$password = $_POST['password'];
// 	$email = $_POST['email'];

// 	$compareEmail = 'SELECT email from ' . $choice . ' WHERE email=:email';
// 	$addNewUser = 'INSERT INTO ' . $choice . ' VALUES (\'\', :firstname, :lastname, :password, :email)';

	
// 	if (preg_match('/[a-zA-Zа-яА-Я]+/', $firstname)) {
// 		if (strlen($password) >= 6 && strlen($password) <= 60) {
// 			if (filter_var($email, filter_validate_email)) {
// 				if (!DB::query($compareEmail, array(':email'=>email))) {
// 					DB::query($addNewUser, array(':firstname' => $firstname, ':lastname' => $lasstname, ':password' => password_hash($password, PASSWORD_BCRYPT), ':email' => $email));
// 				} else {
// 					echo "email in use";
// 				}
// 			}
// 		} else {
// 			echo 'invalid password';
// 		}
// 	} else {
// 		echo "invalid username";
// 	}
// }