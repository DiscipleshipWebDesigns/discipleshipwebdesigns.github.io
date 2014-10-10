<?php
function redirect_to($new_location){
	header("Location:" . $new_location);
	exit();
}

function confirm_query($result_set){
		if(!$result_set){
			die("Database query failed");
		}

	}
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }   
	}
function find_admin_by_username($email) {
		global $db;
		$safe_username = mysqli_real_escape_string($db, $email);
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "WHERE username = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($db, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			$_SESSION["message"] = "Username not found.";
			return null;
		}
	}
function attempt_login($email, $password) {
		// $_SESSION["message"]="test";
		$admin = find_admin_by_username($email);
		//echo $password;
		if ($admin) {
			//echo $admin['passphrase'];
			//echo $password;
			// found admin, now check password
			if(crypt($password, $admin['passphrase']) == $admin['passphrase']){
				// $user =$facebook->getUser();
				// if($user):
				// 	$logoutUrl = $facebook -> getLogoutUrl();
				// 	echo '<a href="logout.php">logout</a>';
				// else:
				// 	$loginUrl = $facebook -> getLoginUrl(array('scope'=>'email','redirect_uri'=>'http://localhost/~jdodom21/OnTrackMoney/signup.php'));
				// 	echo '<a href="', $loginUrl, '">Sign Up with Facebook </a>';
				// endif;
				return $admin;
			} else {
				// password does not match
				return false;
			}
		} else {
			// admin not found
			return false;
		}
	}
	function logged_in() {
		//$_SESSION["message"]="test";
		return isset($_SESSION['admin_id']);
	}
	function confirm_logged_in() {
		if (!isset($_SESSION['email'])) {
			
			redirect_to("index.php");
		}
	}
	function updateDates($date1, $date2, $id){
		global $db;
		echo "<p>test</p>".$id;
		$query = "UPDATE accounts SET dueDate = '{$date1}', `paidDate` = '{$date2}' WHERE `accounts`.`id`={$id}; ";
		echo $query;
		$result = mysqli_query($db, $query);
		confirm_query($result);
		if ($result){
			//$_SESSION["message"] = "Account Updated!";
			// $_SESSION["message"] = $query;
			redirect_to("home.php");
		}else{
			//$_SESSION["message"] = "Missing Required Field/s. Please make sure the required fields are not blank.";
			//redirect_to('edit.php?id={$id}');

		}
	}

?>