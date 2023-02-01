<?php
	include'./db_conn.php';
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
			header('location:./register.php?emailmsg='.$messege);
		}
		else{
			if ($password === $cpassword) {
				
				$insertQuery = mysqli_query($conn, "INSERT INTO `student_reg`(`st_name`, `st_email`, `st_pass`, `st_cpass`, `st_check`) VALUES ('$st_name','$st_email','$stPasswordHashing','$stConfirmPasswordHashing','$st_check')");

				if ($insertQuery) {
					$messege = "Registration Successfull, Now you can Login yourself";
					header('location:./register.php?smsg='.$messege);
				}
				else{
					$messege = "Registration Error, Please try again !";
					header('location:./register.php?emsg='.$messege);
				}

			}
			else{
				$messege = "Password doesn't match, Please try again !";
				header('location:./register.php?pmsg='.$messege);
			}
		}
	}


	if (isset($_POST['login-submit'])) {
		
		$st_email = mysqli_real_escape_string($conn, $_POST['st_email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$selectQuery2 = mysqli_query($conn, "SELECT * FROM `student_reg` WHERE st_email = '$st_email'");

		if (mysqli_num_rows($selectQuery2)) {
			$dataFetchQuery = mysqli_fetch_assoc($selectQuery2);
			$st_password = $dataFetchQuery['st_pass'];
			$st_role = $dataFetchQuery['st_role'];

			$_SESSION['st_email'] = $dataFetchQuery['st_email'];
			$_SESSION['st_role'] = $dataFetchQuery['st_role'];

			$matchPassword = password_verify($password, $st_password);

			if ($matchPassword) {
				if ($st_role == 'admin') {
					$_SESSION['msg'] = "Successfully Logged In";
					header('location:./admin/index.php');
				}else{
					$_SESSION['msg'] = "Successfully Logged In";
					header("location:./users/index.php");
				}
			}else{
				$messege = "Password Incorrect !, Please try again !";
				header('location:./login.php?pmsg='.$messege);
			}
		}else{
			$messege = "Email id doesn't exist !, Please try again !";
			header('location:./login.php?emsg='.$messege);
		}
	}


?>