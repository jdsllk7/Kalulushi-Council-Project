<?php

	include 'connect.php';
	include 'vars.php';

	
	// signup
	if (isset($_POST["signup"]) 
		&& isset($_POST["first_name"]) 
		&& isset($_POST["last_name"]) 
		&& isset($_POST["business_name"]) 
		&& isset($_POST["business_email"]) 
		&& isset($_POST["phone_number"]) 
		&& isset($_POST["tpin_number"]) 
		&& isset($_POST["reg_number"]) 
		&& isset($_POST["nrc_number"]) 
		&& isset($_POST["password"])) {
		
		$first_name = $_POST['first_name'];
    	$last_name = $_POST['last_name'];
		$business_name = $_POST["business_name"];
		$business_email = $_POST["business_email"];
		$phone_number = $_POST["phone_number"];
		$tpin_number = $_POST["tpin_number"];
		$reg_number = $_POST["reg_number"];
		$nrc_number = $_POST["nrc_number"];
		$password = $_POST["password"];
		
		//insert
		$sql = "INSERT INTO users (
						first_name, 
						last_name, 
						business_name, 
						business_email, 
						phone_number, 
						tpin_number, 
						reg_number, 
						nrc_number, 
						password
						) VALUES (
							'$first_name',
							'$last_name',
							'$business_name',
							'$business_email',
							'$phone_number',
							'$tpin_number',
							'$reg_number',
							'$nrc_number',
							'$password'
							)";

		$data = mysqli_query($conn,"SELECT * from users WHERE tpin_number='$tpin_number' AND business_email='$business_email' AND password='$password'");

		if (mysqli_num_rows($data) == 0 && !isset($_COOKIE["password"]) && mysqli_query($conn, $sql)) {

			$id = mysqli_insert_id($conn);

			setcookie('id', $id, time() + (86400 * 30), "/");
			setcookie('first_name', $_POST['first_name'], time() + (86400 * 30), "/");
			setcookie('last_name', $_POST['last_name'], time() + (86400 * 30), "/");
			setcookie('business_name', $_POST['business_name'], time() + (86400 * 30), "/");
			setcookie('business_email', $_POST['business_email'], time() + (86400 * 30), "/");
			setcookie('phone_number', $_POST['phone_number'], time() + (86400 * 30), "/");
			setcookie('tpin_number', $_POST['tpin_number'], time() + (86400 * 30), "/");
			setcookie('reg_number', $_POST['reg_number'], time() + (86400 * 30), "/");
			setcookie('nrc_number', $_POST['nrc_number'], time() + (86400 * 30), "/");
			setcookie('password', $_POST['password'], time() + (86400 * 30), "/");

			header('Location:dashboard.php#login_good');

		}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
		}








	// login
	}elseif(isset($_POST["login"])
		&& isset($_POST["business_email"])
		&& isset($_POST["password"])){
		
		$business_email = $_POST['business_email'];
		$password = $_POST['password'];

		$data = mysqli_query($conn,"SELECT * FROM users WHERE business_email='$business_email' AND password='$password'");

		if (mysqli_num_rows($data) == 1 ) {

			$user = mysqli_fetch_assoc($data);

			setcookie('id', $user['id'], time() + (86400 * 30), "/");
			setcookie('first_name', $user['first_name'], time() + (86400 * 30), "/");
			setcookie('last_name', $user['last_name'], time() + (86400 * 30), "/");
			setcookie('business_name', $user['business_name'], time() + (86400 * 30), "/");
			setcookie('business_email', $user['business_email'], time() + (86400 * 30), "/");
			setcookie('phone_number', $user['phone_number'], time() + (86400 * 30), "/");
			setcookie('tpin_number', $user['tpin_number'], time() + (86400 * 30), "/");
			setcookie('reg_number', $user['reg_number'], time() + (86400 * 30), "/");
			setcookie('nrc_number', $user['nrc_number'], time() + (86400 * 30), "/");
			setcookie('password', $user['password'], time() + (86400 * 30), "/");

			if($user['business_email'] == 'admin@admin.com' && $user['password'] == '1234'){
				header('Location:index_admin.php#login_admin');
			}else{
				header('Location:dashboard.php#login_good');
			}

		}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
		}










	// profile
	}elseif (isset($_POST["profile"]) 
		&& isset($_POST["first_name"]) 
		&& isset($_POST["last_name"]) 
		&& isset($_POST["business_name"]) 
		&& isset($_POST["business_email"]) 
		&& isset($_POST["phone_number"]) 
		&& isset($_POST["tpin_number"]) 
		&& isset($_POST["reg_number"]) 
		&& isset($_POST["nrc_number"]) 
		&& isset($_POST["password"])) {
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$business_name = $_POST["business_name"];
		$business_email = $_POST["business_email"];
		$phone_number = $_POST["phone_number"];
		$tpin_number = $_POST["tpin_number"];
		$reg_number = $_POST["reg_number"];
		$nrc_number = $_POST["nrc_number"];
		$password = $_POST["password"];

		// update
		$sql = "UPDATE users SET 
					first_name='$first_name', 
					last_name='$last_name', 
					business_name='$business_name', 
					business_email='$business_email', 
					phone_number='$phone_number', 
					tpin_number='$tpin_number', 
					reg_number='$reg_number', 
					nrc_number='$nrc_number', 
					password='$password' 
					WHERE 
					tpin_number='$tpin_number'";
		
		if (mysqli_query($conn, $sql)) {

			setcookie('first_name', $_POST['first_name'], time() + (86400 * 30), "/");
			setcookie('last_name', $_POST['last_name'], time() + (86400 * 30), "/");
			setcookie('business_name', $_POST['business_name'], time() + (86400 * 30), "/");
			setcookie('business_email', $_POST['business_email'], time() + (86400 * 30), "/");
			setcookie('phone_number', $_POST['phone_number'], time() + (86400 * 30), "/");
			setcookie('tpin_number', $_POST['tpin_number'], time() + (86400 * 30), "/");
			setcookie('reg_number', $_POST['reg_number'], time() + (86400 * 30), "/");
			setcookie('nrc_number', $_POST['nrc_number'], time() + (86400 * 30), "/");
			setcookie('password', $_POST['password'], time() + (86400 * 30), "/");

			header('Location:dashboard.php#edit_good');

		}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!!!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
		}











	// log_out
	}elseif(isset($_POST["log_out"])){

		setcookie('id', '', time() - 3600, "/");
		setcookie('first_name', '', time() - 3600, "/");
		setcookie('last_name', '', time() - 3600, "/");
		setcookie('business_name', '', time() - 3600, "/");
		setcookie('business_email', '', time() - 3600, "/");
		setcookie('phone_number', '', time() - 3600, "/");
		setcookie('tpin_number', '', time() - 3600, "/");
		setcookie('reg_number', '', time() - 3600, "/");
		setcookie('nrc_number', '', time() - 3600, "/");
		setcookie('password', '', time() - 3600, "/");

		header('Location:../index.php#log_out');

	}