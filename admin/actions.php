<?php 

	include'../db_conn.php';
	session_start();

	$messege = "";

	// Code For Registration Page 

	if (isset($_POST['register-submit'])) {
		
		$st_name = mysqli_real_escape_string($conn, $_POST['st_name']);
		$st_email = mysqli_real_escape_string($conn, $_POST['st_email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
		$st_check = mysqli_real_escape_string($conn, $_POST['st_check']);

		$stPasswordHashing = password_hash($password, PASSWORD_BCRYPT);
		$stConfirmPasswordHashing = password_hash($cpassword, PASSWORD_BCRYPT);

		$selectQuery1 = mysqli_query($conn, "SELECT * FROM `student_reg` WHERE st_email = '$st_email'");

		if (mysqli_num_rows($selectQuery1) > 0) {
			$messege = "Email already exist, Try using another email !";
			header('location:./users.php?emailmsg='.$messege);
		}
		else{
			if ($password === $cpassword) {
				
				$insertQuery = mysqli_query($conn, "INSERT INTO `student_reg`(`st_name`, `st_email`, `st_pass`, `st_cpass`, `st_check`) VALUES ('$st_name','$st_email','$stPasswordHashing','$stConfirmPasswordHashing','$st_check')");

				if ($insertQuery) {
					$messege = "Registration Successfull, Now you can Login yourself";
					header('location:./users.php?smsg='.$messege);
				}
				else{
					$messege = "Registration Error, Please try again !";
					header('location:./users.php?emsg='.$messege);
				}

			}
			else{
				$messege = "Password doesn't match, Please try again !";
				header('location:./users.php?pmsg='.$messege);
			}
		}
	}

?>
