<?php
	session_start();
	include'../db_conn.php';
	$coursename = $_GET['cname'];

	$deleteQuery = mysqli_query($conn, "DELETE FROM `courses` WHERE c_name='$coursename'");

	if ($deleteQuery) {

		$_SESSION['delete_msg'] = "Course Successfully Deleted.";
		header('location:./courses.php');
	}else{
		?>
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					<strong>Oops,</strong> Course doesn't delete!!
				</div>
		<?php
	}

?>