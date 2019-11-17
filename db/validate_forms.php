<?php

	include 'connect.php';
	include 'vars.php';

	$user_id = $_COOKIE["id"];

	
	// business_from
	if (isset($_POST["business_form_btn"]) 
		&& isset($_POST["first_name"]) 
		&& isset($_POST["last_name"]) 
		&& isset($_POST["dob"]) 
		&& isset($_POST["nrc"]) 
		&& isset($_POST["postal"]) 
		&& isset($_POST["physical"]) 
		&& isset($_POST["business_name"]) 
		&& isset($_POST["business_type"]) 
		&& isset($_POST["business_area"]) 
		&& isset($_POST["stand_no"]) 
		&& isset($_POST["street"]) 
		&& isset($_POST["town"]) 
		&& isset($_POST["sign_password"]) 
		&& isset($_POST["date"])) {


		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$dob = $_POST["dob"];
		$nrc = $_POST["nrc"];
		$postal = $_POST["postal"];
		$physical = $_POST["physical"];
		$business_name = $_POST["business_name"];
		$business_type = $_POST["business_type"];
		$business_area = $_POST["business_area"];
		$stand_no = $_POST["stand_no"];
		$street = $_POST["street"];
		$town = $_POST["town"];
		$sign_password = $_POST["sign_password"];
		$date = $_POST["date"];


		//insert
		$sql = "INSERT INTO business_form (
						first_name,
						last_name,
						dob,
						nrc,
						postal,
						physical,
						business_name,
						business_type,
						business_area,
						stand_no,
						street,
						town,
						sign_password,
						date,
						user_id
						) VALUES (
							'$first_name',
							'$last_name',
							'$dob',
							'$nrc',
							'$postal',
							'$physical',
							'$business_name',
							'$business_type',
							'$business_area',
							'$stand_no',
							'$street',
							'$town',
							'$sign_password',
							'$date',
							'$user_id'
							)";

		if (mysqli_query($conn, $sql)) {

			header('Location:dashboard.php#form_submitted');

		}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
		}
	








	// fire_form_btn
	}elseif(isset($_POST["fire_form_btn"])
		&& isset($_POST["first_name"])
		&& isset($_POST["last_name"])
		&& isset($_POST["postal"])
		&& isset($_POST["stand_no"])
		&& isset($_POST["street"])
		&& isset($_POST["town"])
		&& isset($_POST["leaseholder"])
		&& isset($_POST["physical"])
		&& isset($_POST["floors"])
		&& isset($_POST["building_no"])
		&& isset($_POST["stuff_no"])
		&& isset($_POST["persons_no"])
		&& isset($_POST["type"])
		&& isset($_POST["quantity"])
		&& isset($_POST["phone"])
		&& isset($_POST["report"])
		&& isset($_POST["inspected_by"])
		&& isset($_POST["authority"])
		&& isset($_POST["date"])
		&& isset($_POST["approved"])){


		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$postal = $_POST['postal'];
		$stand_no = $_POST['stand_no'];
		$street = $_POST['street'];
		$town = $_POST['town'];
		$leaseholder = $_POST['leaseholder'];
		$physical = $_POST['physical'];
		$floors = $_POST['floors'];
		$building_no = $_POST['building_no'];
		$stuff_no = $_POST['stuff_no'];
		$persons_no = $_POST['persons_no'];
		$type = $_POST['type'];
		$quantity = $_POST['quantity'];
		$phone = $_POST['phone'];
		$report = $_POST['report'];
		$inspected_by = $_POST['inspected_by'];
		$authority = $_POST['authority'];
		$date = $_POST['date'];
		$approved = $_POST['approved'];
		
	

		//insert
		$sql = "INSERT INTO fire_form (
						first_name,
						last_name,
						postal,
						stand_no,
						street,
						town,
						leaseholder,
						physical,
						floors,
						building_no,
						stuff_no,
						persons_no,
						type,
						quantity,
						phone,
						report,
						inspected_by,
						authority,
						date,
						approved,
						user_id
						) VALUES (

							'$first_name',
							'$last_name',
							'$postal',
							'$stand_no',
							'$street',
							'$town',
							'$leaseholder',
							'$physical',
							'$floors',
							'$building_no',
							'$stuff_no',
							'$persons_no',
							'$type',
							'$quantity',
							'$phone',
							'$report',
							'$inspected_by',
							'$authority',
							'$date',
							'$approved',
							'$user_id'
							)";

			if (mysqli_query($conn, $sql)) {

			header('Location:dashboard.php#form_submitted');

			}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
			}










	}elseif(isset($_POST["health_form_btn"])
		&& isset($_POST["postal"])
		&& isset($_POST["plot_road"])
		&& isset($_POST["first_name"])
		&& isset($_POST["last_name"])
		&& isset($_POST["date"])
		&& isset($_POST["sign_password"])){

			$postal = $_POST['postal'];
			$plot_road = $_POST['plot_road'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$date = $_POST['date'];
			$sign_password = $_POST['sign_password'];

	
			//insert
			$sql = "INSERT INTO health_form (
				postal,
				plot_road,
				first_name,
				last_name,
				date,
				sign_password,
				user_id
				) VALUES (

					'$postal',
					'$plot_road',
					'$first_name',
					'$last_name',
					'$date',
					'$sign_password',
					'$user_id'
					)";

			if (mysqli_query($conn, $sql)) {

			header('Location:dashboard.php#form_submitted');

			}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
			}
	
	
	
	

	
	}elseif(isset($_POST["liquor_form_btn"])
		&& isset($_POST["to_licencing_luthority"])
		&& isset($_POST["full_authority"])
		&& isset($_POST["physical"])
		&& isset($_POST["grant_renewal"])
		&& isset($_POST["licence_in_respect"])
		&& isset($_POST["business_name"])
		&& isset($_POST["postal"])
		&& isset($_POST["gazette_dated"])
		&& isset($_POST["newspaper"])
		&& isset($_POST["issue_date"])
		&& isset($_POST["sign_password"])){

			$to_licencing_luthority = $_POST['to_licencing_luthority'];
			$full_authority = $_POST['full_authority'];
			$physical = $_POST['physical'];
			$grant_renewal = $_POST['grant_renewal'];
			$licence_in_respect = $_POST['licence_in_respect'];
			$business_name = $_POST['business_name'];
			$postal = $_POST['postal'];
			$gazette_dated = $_POST['gazette_dated'];
			$newspaper = $_POST['newspaper'];
			$issue_date = $_POST['issue_date'];
			$sign_password = $_POST['sign_password'];

			

	
			//insert
			$sql = "INSERT INTO liquor_form (
				to_licencing_luthority,
				full_authority,
				physical,
				grant_renewal,
				licence_in_respect,
				business_name,
				postal,
				gazette_dated,
				newspaper,
				issue_date,
				sign_password,
				user_id
				) VALUES (
					'$to_licencing_luthority',
					'$full_authority',
					'$physical',
					'$grant_renewal',
					'$licence_in_respect',
					'$business_name',
					'$postal',
					'$gazette_dated',
					'$newspaper',
					'$issue_date',
					'$sign_password',
					'$user_id'
					)";

			if (mysqli_query($conn, $sql)) {

			header('Location:dashboard.php#form_submitted');

			}else{
			echo'<script>';
				echo '$(document).ready(function () {
						var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
						M.toast({ html: text });
					});';
			echo'</script>';
			}
	
	
	
	

	
	}elseif(isset($_POST["petroleum_form_btn"])
		&& isset($_POST["first_name"])
		&& isset($_POST["last_name"])
		&& isset($_POST["postal"])
		&& isset($_POST["licence_type"])
		&& isset($_POST["name_position"])
		&& isset($_POST["description"])
		&& isset($_POST["quantity"])
		&& isset($_POST["storage"])
		&& isset($_POST["quantity1"])
		|| isset($_POST["conditions"])
		&& isset($_POST["unknown"])
		&& isset($_POST["fee"])
		&& isset($_POST["phone"])
		&& isset($_POST["sign_password"])
		&& isset($_POST["approved"])){

			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$postal = $_POST['postal'];
			$licence_type = $_POST['licence_type'];
			$name_position = $_POST['name_position'];
			$description = $_POST['description'];
			$quantity = $_POST['quantity'];
			$storage = $_POST['storage'];
			$quantity1 = $_POST['quantity1'];
			$conditions = $_POST['conditions'];
			$unknown = $_POST['unknown'];
			$fee = $_POST['fee'];
			$phone = $_POST['phone'];
			$sign_password = $_POST['sign_password'];
			$approved = $_POST['approved'];
			

			

	
			//insert
			$sql = "INSERT INTO petroleum_form (
				first_name,
				last_name,
				postal,
				licence_type,
				name_position,
				description,
				quantity,
				storage,
				quantity1,
				conditions,
				unknown,
				fee,
				phone,
				sign_password,
				approved,
				user_id
				) VALUES (
					'$first_name',
					'$last_name',
					'$postal',
					'$licence_type',
					'$name_position',
					'$description',
					'$quantity',
					'$storage',
					'$quantity1',
					'$conditions',
					'$unknown',
					'$fee',
					'$phone',
					'$sign_password',
					'$approved',
					'$user_id'
					)";

			if (mysqli_query($conn, $sql)) {

				header('Location:dashboard.php#form_submitted');

			}else{
				echo'<script>';
					echo '$(document).ready(function () {
							var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
							M.toast({ html: text });
						});';
				echo'</script>';
			}
	
	
	
	

	
	}elseif(isset($_POST["scrap_form_btn"])
		&& isset($_POST["first_name"])
		&& isset($_POST["last_name"])
		&& isset($_POST["postal"])
		&& isset($_POST["business_name"])
		&& isset($_POST["stand_no"])
		&& isset($_POST["street"])
		&& isset($_POST["street_no"])
		&& isset($_POST["town"])
		&& isset($_POST["sign_password"])
		&& isset($_POST["status"])
		&& isset($_POST["date"])){

			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$postal = $_POST['postal'];
			$business_name = $_POST['business_name'];
			$stand_no = $_POST['stand_no'];
			$street = $_POST['street'];
			$street_no = $_POST['street_no'];
			$town = $_POST['town'];
			$sign_password = $_POST['sign_password'];
			$status = $_POST['status'];
			$date = $_POST['date'];
			

			

	
			//insert
			$sql = "INSERT INTO scrap_form (
				first_name,
				last_name,
				postal,
				business_name,
				stand_no,
				street,
				street_no,
				town,
				sign_password,
				status,
				date,
				user_id
				) VALUES (
					'$first_name',
					'$last_name',
					'$postal',
					'$business_name',
					'$stand_no',
					'$street',
					'$street_no',
					'$town',
					'$sign_password',
					'$status',
					'$date',
					'$user_id'
					)";

			if (mysqli_query($conn, $sql)) {

				header('Location:dashboard.php#form_submitted');

			}else{
				echo'<script>';
					echo '$(document).ready(function () {
							var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
							M.toast({ html: text });
						});';
				echo'</script>';
			}
	
	
	
	

	
	}elseif(isset($_POST["manufacturing_form_btn"])
		&& isset($_POST["first_name"])
		&& isset($_POST["last_name"])
		&& isset($_POST["postal"])
		&& isset($_POST["business_name"])
		&& isset($_POST["stand_no"])
		&& isset($_POST["street"])
		&& isset($_POST["town"])
		&& isset($_POST["stand_no1"])
		&& isset($_POST["street1"])
		&& isset($_POST["town1"])
		&& isset($_POST["description"])
		&& isset($_POST["unknown"])
		&& isset($_POST["unknown1"])
		&& isset($_POST["unknown2"])
		&& isset($_POST["date"])
		&& isset($_POST["sign_password"])){

			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$postal = $_POST['postal'];
			$business_name = $_POST['business_name'];
			$stand_no = $_POST['stand_no'];
			$street = $_POST['street'];
			$town = $_POST['town'];
			$stand_no1 = $_POST['stand_no1'];
			$street1 = $_POST['street1'];
			$town1 = $_POST['town1'];
			$description = $_POST['description'];
			$unknown = $_POST['unknown'];
			$unknown1 = $_POST['unknown1'];
			$unknown2 = $_POST['unknown2'];
			$date = $_POST['date'];
			$sign_password = $_POST['sign_password'];
			
			
			//insert
			$sql = "INSERT INTO manufacturing_form (
				first_name,
				last_name,
				postal,
				business_name,
				stand_no,
				street,
				town,
				stand_no1,
				street1,
				town1,
				description,
				unknown,
				unknown1,
				unknown2,
				date,
				sign_password,
				user_id
				) VALUES (
					'$first_name',
					'$last_name',
					'$postal',
					'$business_name',
					'$stand_no',
					'$street',
					'$town',
					'$stand_no1',
					'$street1',
					'$town1',
					'$description',
					'$unknown',
					'$unknown1',
					'$unknown2',
					'$date',
					'$sign_password',
					'$user_id'
					)";

			if (mysqli_query($conn, $sql)) {

				header('Location:dashboard.php#form_submitted');

			}else{
				echo'<script>';
					echo '$(document).ready(function () {
							var text = "<span><span class=\'red-text\'>STATUS:</span> Please Enter Form Correctly!</span>";
							M.toast({ html: text });
						});';
				echo'</script>';
			}
	
	
	
	

	
	}//


















	// business review
	if(isset($_POST["b_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE business_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../business_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["b_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE business_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../business_applicants_admin.php#form_denied');
		}
	
	// fire review
	}elseif(isset($_POST["f_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE fire_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../fire_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["f_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE fire_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../fire_applicants_admin.php#form_denied');
		}

	// health review
	}elseif(isset($_POST["h_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE health_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../health_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["h_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE health_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../health_applicants_admin.php#form_denied');
		}

	// liquor review
	}elseif(isset($_POST["l_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE liquor_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../liquor_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["l_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE liquor_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../liquor_applicants_admin.php#form_denied');
		}

	// petroleum review
	}elseif(isset($_POST["p_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE petroleum_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../petroleum_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["p_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE petroleum_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../petroleum_applicants_admin.php#form_denied');
		}
	
	// scrap review
	}elseif(isset($_POST["s_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE scrap_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../scrap_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["s_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE scrap_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../scrap_applicants_admin.php#form_denied');
		}
	
	// manufacturing review
	}elseif(isset($_POST["m_form_btn_approve"])){

		$id = $_POST["id"];
		$sql = "UPDATE manufacturing_form SET form_status='approved' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../manufacturing_applicants_admin.php#form_approved');
		}

	}elseif(isset($_POST["m_form_btn_deny"])){
		$id = $_POST["id"];
		$sql = "UPDATE manufacturing_form SET form_status='denied' WHERE user_id='$id'";
		if (mysqli_query($conn, $sql)) {
			header('Location:../manufacturing_applicants_admin.php#form_denied');
		}
	}