<?php
	include'./header.php';
?>

<?php 

	if (isset($_POST['submit'])) {
		
		$student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
		$student_email = mysqli_real_escape_string($conn, $_POST['student_email']);
		$student_phone = mysqli_real_escape_string($conn, $_POST['student_phone']);
		$student_address = mysqli_real_escape_string($conn, $_POST['student_address']);
		$student_identity = mysqli_real_escape_string($conn, $_POST['student_identity']);
		$student_identity_number = mysqli_real_escape_string($conn, $_POST['student_identity_number']);
		$student_course = mysqli_real_escape_string($conn, $_POST['student_course']);
		$student_course_price = mysqli_real_escape_string($conn, $_POST['student_course_price']);
		$course_duration = mysqli_real_escape_string($conn, $_POST['course_duration']);

		$total_fees = $student_course_price*$course_duration;
		$pending_fees = $total_fees - 0;


		$selectQuery2 = mysqli_query($conn, "SELECT * FROM `students` WHERE student_email = '$student_email'");
		if (mysqli_num_rows($selectQuery2) > 0) {
			?>
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				  <strong>Oops, This is already a Student !!</strong>
				</div>				
			<?php
		}else{
			$insertQuery = mysqli_query($conn, "INSERT INTO `students`(`student_name`, `student_email`, `student_phone`, `student_address`, `student_identity`, `student_identity_number`, `student_course`,`student_course_price`,`course_duration`, `total_fees`, `pending_fees`) VALUES ('$student_name','$student_email','$student_phone','$student_address','$student_identity','$student_identity_number','$student_course','$student_course_price','$course_duration','$total_fees','$pending_fees')");

				if ($insertQuery) {
					$_SESSION['msg'] = "Student Successfully Created !";
					header('location:./students.php');
				}else{
					?>
						<div class="alert alert-dismissible alert-danger">
						  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
						  <strong>Oops, There are some problems. Try again !!</strong>
						</div>				
					<?php
				}
		}

	}

?>

<div class="container py-5">
    		<div class="row d-flex justify-content-center">
    			<div class="col-md-12 align-middle">
		    		<div class="text-center mb-3">
		    			<h4>Add Student & Assign Course</h4>
		    		</div>
		    		<form action="" method="post">
					    <div class="row">
					    	<div>
					    		<h4>Basic Information</h4>
					    	</div>
					    	<?php 
					    		
					    			$studentEmail = $_GET['email'];
					    			$selectQuery = mysqli_query($conn, "SELECT * FROM `student_reg` WHERE st_email = '$studentEmail'");
					    			$result = mysqli_fetch_assoc($selectQuery);
					    		
					    	?>

					    	<div class="form-group col-md-6">
						      <label for="exampleInputName" class="form-label mt-4">Full Name</label>
						      <input type="text" name="student_name" class="form-control" id="exampleInputName" value="<?php echo $result['st_name']; ?>" readonly>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
						      <input type="email" name="student_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['st_email']; ?>" readonly>
						      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						    </div>
					    </div>
					    <div class="row">
					    	<div class="form-group col-md-6">
						      <label for="exampleInputName" class="form-label mt-4">Mobile Number</label>
						      <input type="number" name="student_phone" class="form-control" id="exampleInputName" placeholder="Enter Phone Number without +91" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="exampleInputEmail1" class="form-label mt-4">Permanent Address</label>
						      <input type="text" name="student_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Permanent Address" required>
						    </div>
					    </div>
					    <div class="row">
					    	<div class="form-group col-md-6">
						      <label for="exampleSelect1" class="form-label mt-4">Select Identity Card Type</label>
						      <select class="form-select" id="exampleSelect1" name="student_identity">
						        <option value="Adhar Card">Adhar Card</option>
						        <option value="Pan Card">Pan Card</option>
						        <option value="Passport">Passport</option>
						        <option value="Votar ID Card">Votar Id Card</option>
						        <option value="Driving Licence">Driving Licence</option>
						      </select>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="exampleInputEmail1" class="form-label mt-4">Identity Card Number</label>
						      <input type="text" name="student_identity_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Identity Card Number" required>
						    </div>
					    </div>

					    <div class="row mt-5">
					    	<div>
					    		<h4>Assign Course</h4>
					    	</div>
					    	<div class="form-group col-md-4">
						      <label for="exampleSelect1" class="form-label mt-4">Select Course</label>
						      <select class="form-select" id="exampleSelect1" name="student_course">
						      	<option selected>Select Course</option>
						        <?php 
						        	$selectQuery1 = mysqli_query($conn, "SELECT * FROM `courses` WHERE 1");

						        	while ($courses = mysqli_fetch_array($selectQuery1)) {
						        		?>
						        			<option value="<?php echo $courses['c_name']; ?>"><?php echo $courses['c_name'];  ?> </option>
						        		<?php
						        	}
						        ?>
						      </select>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="exampleSelect1" class="form-label mt-4">Select Price According to Course</label>
						      <select class="form-select" id="exampleSelect1" name="student_course_price">
						      	<option selected>Select Price</option>
						        <?php 
						        	$selectQuery1 = mysqli_query($conn, "SELECT * FROM `courses` WHERE 1");

						        	while ($courses = mysqli_fetch_array($selectQuery1)) {
						        		?>
						        			<option value="<?php echo $courses['c_price']; ?>"><?php echo $courses['c_name'];  ?>  Price - (<small> <?php echo $courses['c_price']; ?>)</small> </option>
						        		<?php
						        	}
						        ?>
						      </select>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="exampleSelect1" class="form-label mt-4">For How many Months</label>
						      <select class="form-select" id="exampleSelect1" name="course_duration">
						        <option value="1">1</option>
						        <option value="2">2</option>
						        <option value="3">3</option>
						        <option value="4">4</option>
						        <option value="5">5</option>
						        <option value="6">6</option>
						        <option value="7">7</option>
						        <option value="8">8</option>
						        <option value="9">9</option>
						        <option value="10">10</option>
						        <option value="11">11</option>
						        <option value="12">12</option>
						        <option value="13">13</option>
						        <option value="14">14</option>
						        <option value="15">15</option>
						      </select>
						    </div>
					    </div>
					    <div class="form-group text-center m-5">
					    		<div class="mt-3">
						    	<input type="submit" name="submit" class="btn btn-outline-primary" value="Create Student">
						    </div>
					    </div>
		    		</form>
		    	</div>
    		</div>
    	</div>

<?php 
	include'footer.php';
?>