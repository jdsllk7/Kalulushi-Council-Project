<?php
	$error_msg = 'Sorry could not connect to server...';
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'council_db';

	// CREATE CONNECTION
	$conn = mysqli_connect($servername, $username, $password);
	
	// CHECK CONNECTION
	if (!$conn) {
		die($error_msg);
	}

	// CREATE THE DATABASE
	// $sql = "drop DATABASE IF EXISTS $db";
	$sql = "CREATE DATABASE IF NOT EXISTS $db";
	if (mysqli_query($conn, $sql)) {
		$conn = mysqli_connect($servername, $username, $password, $db);
	} else {
		die($error_msg);
	}

	include 'vars.php';
	
	
	$sql = "CREATE TABLE IF NOT EXISTS users (
			id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			first_name VARCHAR(30) NOT NULL,
			last_name VARCHAR(30) NOT NULL,
			business_name VARCHAR(30) NOT NULL,
			business_email VARCHAR(30) NOT NULL,
			phone_number VARCHAR(30) NOT NULL,
			tpin_number VARCHAR(30) NOT NULL,
			reg_number VARCHAR(30) NOT NULL,
			nrc_number VARCHAR(30) NOT NULL,
			password VARCHAR(200) NOT NULL
			)";
			// $sql = "DROP TABLE IF EXISTS users";
			mysqli_query($conn, $sql);

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
					'admin',
					'admin',
					'admin',
					'admin@admin.com',
					'admin',
					'admin',
					'admin',
					'admin',
					'1234'
					)";

			$data = mysqli_query($conn,"SELECT * from users WHERE business_email='admin@admin.com'");
			if (isset($data) && mysqli_num_rows($data) == 0){
				mysqli_query($conn, $sql);
			}
 
 
			



			// business_form
			$sql = "CREATE TABLE IF NOT EXISTS business_form (
				id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				first_name VARCHAR(200),
				last_name VARCHAR(200),
				dob VARCHAR(200),
				nrc VARCHAR(200),
				postal VARCHAR(200),
				physical VARCHAR(200),
				business_name VARCHAR(200),
				business_type VARCHAR(200),
				business_area VARCHAR(200),
				stand_no VARCHAR(200),
				street VARCHAR(200),
				town VARCHAR(200),
				sign_password VARCHAR(200),
				date date,
				user_id BIGINT(20) NOT NULL,
				form_status VARCHAR(20) DEFAULT 'pending'
				)";
				// $sql = "DROP TABLE IF EXISTS business_form";
				mysqli_query($conn, $sql);


			// fire_form
			$sql = "CREATE TABLE IF NOT EXISTS fire_form (
				id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				first_name VARCHAR(200),
				last_name VARCHAR(200),
				postal VARCHAR(200),
				stand_no VARCHAR(200),
				street VARCHAR(200),
				town VARCHAR(200),
				leaseholder VARCHAR(200),
				physical VARCHAR(200),
				floors VARCHAR(200),
				building_no VARCHAR(200),
				stuff_no VARCHAR(200),
				persons_no VARCHAR(200),
				type VARCHAR(200),
				quantity VARCHAR(200),
				phone VARCHAR(200),
				report VARCHAR(200),
				inspected_by VARCHAR(200),
				authority VARCHAR(200),
				date date,
				approved VARCHAR(200),
				user_id BIGINT(20) NOT NULL,
				form_status VARCHAR(20) DEFAULT 'pending'
				)";
				// $sql = "DROP TABLE IF EXISTS fire_form";
				mysqli_query($conn, $sql);
 
 

				// health_form
				$sql = "CREATE TABLE IF NOT EXISTS health_form (
					id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					postal VARCHAR(200),
					plot_road VARCHAR(200),
					first_name VARCHAR(200),
					last_name VARCHAR(200),
					date date,
					sign_password VARCHAR(200),
					user_id BIGINT(20) NOT NULL,
					form_status VARCHAR(20) DEFAULT 'pending'
					)";
					// $sql = "DROP TABLE IF EXISTS health_form";
					mysqli_query($conn, $sql);
 
 
				// liquor_form
				$sql = "CREATE TABLE IF NOT EXISTS liquor_form (
					id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					to_licencing_luthority VARCHAR(200),
					full_authority VARCHAR(200),
					physical VARCHAR(200),
					grant_renewal VARCHAR(200),
					licence_in_respect VARCHAR(200),
					business_name VARCHAR(200),
					postal VARCHAR(200),
					gazette_dated date,
					newspaper VARCHAR(200),
					issue_date date,
					sign_password VARCHAR(200),
					user_id BIGINT(20) NOT NULL,
					form_status VARCHAR(20) DEFAULT 'pending'
					)";
					// $sql = "DROP TABLE IF EXISTS liquor_form";
					mysqli_query($conn, $sql);



				// petroleum_form
				$sql = "CREATE TABLE IF NOT EXISTS petroleum_form (
					id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					first_name VARCHAR(200),
					last_name VARCHAR(200),
					postal VARCHAR(200),
					licence_type VARCHAR(200),
					name_position VARCHAR(200),
					description VARCHAR(200),
					quantity VARCHAR(200),
					storage VARCHAR(200),
					quantity1 VARCHAR(200),
					conditions VARCHAR(200),
					unknown VARCHAR(200),
					fee VARCHAR(200),
					phone VARCHAR(200),
					sign_password VARCHAR(200),
					approved VARCHAR(200),
					user_id BIGINT(20) NOT NULL,
					form_status VARCHAR(20) DEFAULT 'pending'
					)";
					// $sql = "DROP TABLE IF EXISTS petroleum_form";
					mysqli_query($conn, $sql);
 


				// scrap_form
				$sql = "CREATE TABLE IF NOT EXISTS scrap_form (
					id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					first_name VARCHAR(200),
					last_name VARCHAR(200),
					postal VARCHAR(200),
					business_name VARCHAR(200),
					stand_no VARCHAR(200),
					street VARCHAR(200),
					street_no VARCHAR(200),
					town VARCHAR(200),
					sign_password VARCHAR(200),
					status VARCHAR(200),
					date date,
					user_id BIGINT(20) NOT NULL,
					form_status VARCHAR(20) DEFAULT 'pending'
					)";
					// $sql = "DROP TABLE IF EXISTS scrap_form";
					mysqli_query($conn, $sql);
 

					
				// manufacturing_form
				$sql = "CREATE TABLE IF NOT EXISTS manufacturing_form (
					id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					first_name VARCHAR(200),
					last_name VARCHAR(200),
					postal VARCHAR(200),
					business_name VARCHAR(200),
					stand_no VARCHAR(200),
					street VARCHAR(200),
					town VARCHAR(200),
					stand_no1 VARCHAR(200),
					street1 VARCHAR(200),
					town1 VARCHAR(200),
					description VARCHAR(200),
					unknown VARCHAR(200),
					unknown1 VARCHAR(200),
					unknown2 VARCHAR(200),
					date VARCHAR(200),
					sign_password VARCHAR(200),
					user_id BIGINT(20) NOT NULL,
					form_status VARCHAR(20) DEFAULT 'pending'
					)";
					// $sql = "DROP TABLE IF EXISTS manufacturing_form";
					mysqli_query($conn, $sql);
 

