<?php include'./header.php'; ?>

<?php

	if (isset($_POST['submit'])) {
		
		$transac_id = uniqid('trx');
		$student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
		$student_email = mysqli_real_escape_string($conn, $_POST['student_email']);
		$pending_fees = mysqli_real_escape_string($conn, $_POST['pending_fees']);
		$fees = mysqli_real_escape_string($conn, $_POST['fees']);
		$remark = mysqli_real_escape_string($conn, $_POST['fees_remark']);


		if ($fees > $pending_fees) {
			$_SESSION['errmsg'] = "Fees not collect because your fees greater than pending fees";
			header('location:./fees.php');
		}else{
			$selectQuery = mysqli_query($conn, "SELECT * FROM `students` WHERE student_email = '$student_email'");
			$row = mysqli_fetch_assoc($selectQuery);
			$total_fee = $row['total_fees'];

			if ($row['pending_fees'] > 0) {
				
				$insertQuery = mysqli_query($conn, "INSERT INTO `transactions`(`trans_id`, `student_name`, `student_email`, `fees`, `fees_remark`) VALUES ('$transac_id','$student_name','$student_email','$fees','$remark')");
				$selectQuery = mysqli_query($conn, "SELECT sum(`fees`) AS totalpaid FROM `transactions` WHERE student_email='$student_email'");
				$fetch = mysqli_fetch_assoc($selectQuery);

				$total_paid = $fetch['totalpaid'];
				$total_balance = $total_fee-$total_paid;

				$updateQuery = mysqli_query($conn, "UPDATE `students` SET `pending_fees`='$total_balance' WHERE student_email='$student_email'");
				
				$_SESSION['msg'] = "Fees Successfully Collect.";
				header('location:./fees.php');
			}
		}
	}

?> 

					<div class="container">
		    			<div class="col-md-12">
					    	<form action="" method="post">
					    		<div class="text-center mt-3">
					    			<h4>Collect Fees</h4>
					    		</div>
							    <div class="row">
							    	<?php
							    		$email = $_GET['email'];

							    		$selectQuery2 = mysqli_query($conn, "SELECT * FROM `students` WHERE student_email='$email'");
							    		$result = mysqli_fetch_assoc($selectQuery2);
							    	?>

							    	<div class="form-group col-md-6">
								      <label for="exampleInputName" class="form-label mt-4">Student Name</label>
								      <input name="student_name" class="form-control" id="student_name"
								      value="<?php echo $result['student_name']; ?>" placeholder="Enter Course Name" readonly required>
								    </div>
								    <div class="form-group col-md-6">
								      <label for="exampleInputName" class="form-label mt-4">Student Email</label>
								      <input name="student_email" class="form-control" id="student_email" value="<?php echo $result['student_email']; ?>" placeholder="Student Email" readonly required>
								    </div>
							    </div>
							    <div class="row">
							    	<div class="form-group col-md-6">
								      <label for="exampleInputName" class="form-label mt-4">Total Fees</label>
								      <input name="total_fees" class="form-control" id="total_fees" value="<?php echo $result['total_fees']; ?>" placeholder="Total fees" readonly required>
								    </div>
								    <div class="form-group col-md-6">
								      <label for="exampleInputName" class="form-label mt-4">Pending Fees</label>
								      <input name="pending_fees" class="form-control" id="pending_fees" value="<?php echo $result['pending_fees']; ?>" placeholder="Pending Fees" readonly required>
								    </div>
							    </div>
							    <div class="row">
							    	<div class="form-group col-md-6">
								      <label for="exampleInputName" class="form-label mt-4">Fees Amount</label>
								      <input type="number" name="fees" class="form-control" id="" placeholder="Enter Amount" required>
								    </div>
								    <div class="form-group col-md-6">
								      <label for="exampleSelect1" class="form-label mt-4">Remark(Payment Notes)</label>
								      <select class="form-select" id="exampleSelect1" name="fees_remark" required>
								      	<option selected>Select Purpose</option>
								        <option value="Monthly Fees">Monthly Fees</option>
								        <option value="Advance Fees">Advance Fees</option>
								        <option value="Exam Fees">Exam Fees</option>
								        <option value="Yearly Fees">Yearly Fees</option>
								        <option value="Other Fees">Other Fees</option>
								      </select>
								    </div>
							    </div>
							    
							  <div class="form-group text-end m-5">
					    		<div class="mt-3">
							    	<input type="submit" name="submit" class="btn btn-outline-primary" value="Collect fees">
							    </div>
						    </div>
						      
				    		</form>
				    	</div>
		    		</div>

<?php include'footer.php'; ?>