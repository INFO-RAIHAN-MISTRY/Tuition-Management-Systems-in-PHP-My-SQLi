</<?php 

	session_start();
	include'../db_conn.php';
	$email = $_GET['email'];

	$deleteQuery = mysqli_query($conn, "DELETE FROM `students` WHERE student_email='$email'");

	if ($deleteQuery) {

		$_SESSION['delete_msg'] = "Course Successfully Deleted.";
		header('location:./students.php');
	}else{
		?>
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					<strong>Oops,</strong> Course doesn't delete!!
				</div>
		<?php
	}

 ?>