<?php
	include'./header.php';
?>	

<?php
	
	$email = $_GET['email'];
	$selectQuery = mysqli_query($conn, "SELECT * FROM `students` WHERE student_email = '$email'");
	$result = mysqli_fetch_assoc($selectQuery);

	if (isset($_POST['submit'])) {
		$emailId = $_GET['email'];
		$student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
		$student_email = mysqli_real_escape_string($conn, $_POST['student_email']);
		$student_phone = mysqli_real_escape_string($conn, $_POST['student_phone']);
		$student_address = mysqli_real_escape_string($conn, $_POST['student_address']);
		$student_identity = mysqli_real_escape_string($conn, $_POST['student_identity']);
		$student_identity_number = mysqli_real_escape_string($conn, $_POST['student_identity_number']);

		$updateQuery = mysqli_query($conn, "UPDATE `students` SET `student_name`='$student_name',`student_email`='$student_email',`student_phone`='$student_phone',`student_address`='$student_address',`student_identity`='$student_identity',`student_identity_number`='$student_identity_number' WHERE student_email = '$emailId'");

		if ($updateQuery) {
			$_SESSION['msg'] = "Student Successfully Updated";
			header('location:./students.php');
		}else{
			?>
				<div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Oops,</strong> Student doesn't update !!
                </div>
			<?php
		}
	}

?>

	<div class="container py-5">
    		<div class="row d-flex justify-content-center">
    			<div class="col-md-12 align-middle">
		    		<div class="text-center mb-3">
		    			<h4>Update Student & Course</h4>
		    		</div>
		    		<form action="" method="post">
					    <div class="row">
					    	<div>
					    		<h4>Basic Information</h4>
					    		<p>(You Update or Change this row)</p>
					    	</div>
					    	<div class="form-group col-md-6">
						      <label for="exampleInputName" class="form-label mt-4">Full Name</label>
						      <input type="text" name="student_name" class="form-control" id="exampleInputName" value="<?php echo $result['student_name']; ?>" readonly>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
						      <input type="email" name="student_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['student_email']; ?>" readonly>
						      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						    </div>
					    </div>
					    <div class="row">
					    	<div class="form-group col-md-6">
						      <label for="exampleInputName" class="form-label mt-4">Mobile Number</label>
						      <input type="number" name="student_phone" class="form-control" id="exampleInputName" value="<?php echo $result['student_phone']; ?>" placeholder="Enter Phone Number without +91" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="exampleInputEmail1" class="form-label mt-4">Permanent Address</label>
						      <input type="text" name="student_address" class="form-control" id="exampleInputEmail1" value="<?php echo $result['student_address']; ?>" aria-describedby="emailHelp" placeholder="Enter Your Permanent Address" required>
						    </div>
					    </div>
					    <div class="row">
					    	<div class="form-group col-md-6">
						      <label for="exampleSelect1" class="form-label mt-4">Select Identity Card Type</label>
						      <select class="form-select" id="exampleSelect1" name="student_identity">
						      	<option><?php echo $result['student_identity']; ?></option>
						        <option value="Adhar Card">Adhar Card</option>
						        <option value="Pan Card">Pan Card</option>
						        <option value="Passport">Passport</option>
						        <option value="Votar ID Card">Votar Id Card</option>
						        <option value="Driving Licence">Driving Licence</option>
						      </select>
						    </div>
						    <div class="form-group col-md-6">
							    <label for="" class="form-label mt-4">Id Card Number</label>
							    <input type="text" name="student_identity_number" class="form-control" id="" value="<?php echo $result['student_identity_number']; ?>" required>
							</div>
						</div>

					    <div class="row mt-5">
					    	<div>
					    		<h4>Assigned Course</h4><p>(You Can't Update or Change this row)</p>
					    	</div>
					    	<div class="form-group col-md-4">
						      <label class="form-label mt-4">Course Name</label>
						      <input type="" name="course_name" class="form-control" id="exampleInputEmail1" value="<?php echo $result['student_course']; ?>" readonly>
						    </div>
						    <div class="form-group col-md-4">
						      <label class="form-label mt-4">Course Price(Monthly)</label>
						      <input type="" name="course_price" class="form-control" id="" value="<?php echo $result['student_course_price']; ?>" required readonly>
						    </div>
						    <div class="form-group col-md-4">
						      <label class="form-label mt-4">Course Duration</label>
						      <input type="" name="course_duration" class="form-control" value="<?php echo $result['course_duration']; ?>"  required readonly>
						    </div>
					    </div>
					    <div class="form-group text-center m-5">
					    		<div class="mt-3">
						    	<input type="submit" name="submit" class="btn btn-outline-primary" value="Update Student">
						    </div>
					    </div>
		    		</form>
		    	</div>
    		</div>
    	</div>

<?php
	include'./footer.php';
?>