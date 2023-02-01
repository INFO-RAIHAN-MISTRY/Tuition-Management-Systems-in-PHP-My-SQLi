<?php
	include'header.php';
?>

<?php 
	$email = $_GET['email'];
	$selectQuery = mysqli_query($conn, "SELECT * FROM `students` WHERE student_email = '$email'");
	$result = mysqli_fetch_assoc($selectQuery);

?>


<section>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6">
				<div class="card mb-4">
					<div class="card-header">
						<h5>Student Basic Details</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Full Name</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_name']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Email Id</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_email']; ?></p>
							</div>
						</div>				
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Phone Number</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_phone']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Address</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_address']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">ID Card Type</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_identity']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">ID Card Number</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_identity_number']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card mb-4">
					<div class="card-header">
						<h5>Student Course Details</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Course Name</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_course']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Course Price</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['student_course_price']; ?></p>
							</div>
						</div>				
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Course Duration</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['course_duration']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Course Fees</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['total_fees']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Pending Fees</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['pending_fees']; ?></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<p class="mb-0">Date Of Joining</p>
							</div>
							<div class="col-sm-9">
								<p class="text-muted mb-0"><?php echo $result['date']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-end">
			<a href="./students.php" class="btn btn-outline-primary">Close</a>
		</div>
	</div>
</section>


<?php
	include'footer.php';
?>