<?php

function userExists($username) {
	// global keywords is used to access a global variable from within a function
	global $connect;

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$query = $connect->query($sql);
	if($query->num_rows > 0) {
		return true;
	} else {
		return false;
	}

	$connect->close();
	// close the database connection
}

function emailExists($email) {
	// global keywords is used to access a global variable from within a function
	global $connect;

	$sql = "SELECT * FROM users WHERE email = '$email'";
	$query = $connect->query($sql);
	if($query->num_rows > 0) {
		return true;
	} else {
		return false;
	}

	$connect->close();
	// close the database connection
}

function emailExists_d($email) {
	// global keywords is used to access a global variable from within a function
	global $connect;

	$sql = "SELECT * FROM designer WHERE email = '$email'";
	$query = $connect->query($sql);
	if($query->num_rows > 0) {
		return true;
	} else {
		return false;
	}

	$connect->close();
	// close the database connection
}

function registerUser() {

	global $connect;

	$nama_user = $_POST['nama_user'];
  $no_hp = $_POST['no_hp'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$salt = salt(32);
	$newPassword = makePassword($password, $salt);
	if($newPassword) {
		$sql = "INSERT INTO users (nama_user, no_hp, username, email, password, salt) VALUES ('$nama_user', '$no_hp', '$username', '$email', '$newPassword', '$salt')";
		$query = $connect->query($sql);
		if($query === TRUE) {
			return true;
		} else {
			return false;
		}
	} // /if

	$connect->close();
	// close the database connection
} // register user funtion

function salt($length) {
	return mcrypt_create_iv($length);
}

function makePassword($password, $salt) {
	return hash('sha256', $password.$salt);
}

function userdata($username) {
	global $connect;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();
	if($query->num_rows == 1) {
		return $result;
	} else {
		return false;
	}

	$connect->close();
	// close the database connection
}



function login($username, $password) {
	global $connect;
	$userdata = userdata($username);

	if($userdata) {
		$makePassword = makePassword($password, $userdata['salt']);
		$sql = "SELECT * FROM users WHERE BINARY username = '$username' AND BINARY password = '$makePassword'";
		$query = $connect->query($sql);

		if($query->num_rows == 1) {
			return true;
		} else {
			return false;
		}
	}

	$connect->close();
	// close the database connection
}

function getUserDataByUserId($id) {
	global $connect;

	$sql = "SELECT * FROM users WHERE id = $id";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();
	return $result;

	$connect->close();
}


function users_exists_by_id($id, $username) {
	global $connect;

	$sql = "SELECT * FROM users WHERE username = '$username' AND id != $id";
	$query = $connect->query($sql);
	if($query->num_rows >= 1) {
		return true;
	} else {
		return false;
	}

	$connect->close();
}


function logged_in() {
	if(isset($_SESSION['id'])) {
		return true;
	} else {
		return false;
	}
}

function not_logged_in() {
	if(isset($_SESSION['id']) === FALSE) {
		return true;
	} else {
		return false;
	}
}

function logout() {
	if(logged_in() === TRUE){
		// remove all session variable
		session_unset();

		// destroy the session
		session_destroy();

		header('location: ../index.php');
	}
}

function passwordMatch($id, $password) {
	global $connect;

	$userdata = getUserDataByUserId($id);

	$makePassword = makePassword($password, $userdata['salt']);

	if($makePassword == $userdata['password']) {
		return true;
	} else {
		return false;
	}

	// close connection
	$connect->close();
}

function changePassword($id, $password) {
	global $connect;

	$salt = salt(32);
	$makePassword = makePassword($password, $salt);

	$sql = "UPDATE users SET password = '$makePassword', salt = '$salt' WHERE id = $id";
	$query = $connect->query($sql);

	if($query === TRUE) {
		return true;
	} else {
		return false;
	}
}


function updateInfo($id) {
	global $connect;

	$username = $_POST['username'];
	$nama_user = $_POST['nama_user'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];

	$sql = "UPDATE users SET username = '$username', nama_user = '$nama_user', email = '$email', no_hp = '$no_hp' WHERE id = $id";
	$query = $connect->query($sql);
	if($query === TRUE) {
		return true;
	} else {
		return false;
	}
}


?>
