<?php
	include'./header.php';
?>

	<div class="container py-5">
		    			<div class="row d-flex justify-content-center">
		    				<div class="col-md-6">
		    					<div class="text-center">
					    			<h4>Update Course</h4>
					    		</div>
					    	<form action="" method="post">
					    		<?php
					    			$coursename = $_GET['cname'];

					    			$selectQuery = mysqli_query($conn, "SELECT * FROM `courses` WHERE c_name = '$coursename'");
					    			$result = mysqli_fetch_assoc($selectQuery);

					    			if (isset($_POST['submit'])) {
										$coursen = $_GET['cname'];
										$c_name = mysqli_real_escape_string($conn, $_POST['c_name']);
										$c_sub = mysqli_real_escape_string($conn, $_POST['c_sub']);
										$c_price = mysqli_real_escape_string($conn, $_POST['c_price']);

										$updateQuery = mysqli_query($conn, "UPDATE `courses` SET `c_name`='$c_name',`c_sub`='$c_sub',`c_price`='$c_price' WHERE c_name = '$coursen'");
										if ($updateQuery){
											$_SESSION['msg'] = "Course Successfully Updated.";
											?>
											<script type="text/javascript">
											window.location.href = './courses.php';
											</script>
											<?php
										}else{
											?>
												<div class="alert alert-dismissible alert-danger">
												  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
												  <strong>Oops, Course doesn't update !!</strong>
												</div>
											<?php
										}
									}

					    		?>

							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Course Name</label>
							      <input type="name" name="c_name" class="form-control" id="exampleInputName" value="<?php echo $result['c_name'];?>" placeholder="Enter Course Name" required readonly>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Course Subjects</label>
							      <input type="name" name="c_sub" class="form-control" id="exampleInputName" value="<?php echo $result['c_sub'];?>" placeholder="Python, Java, c, c++" required>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Course Price(Monthly)</label>
							      <input type="number" name="c_price" class="form-control" id="exampleInputName" value="<?php echo $result['c_price'];?>" placeholder="Enter Course Price" required>
							    </div>
							    
							  <div class="form-group text-center">
					    		<div class="mt-3">
							    	<input type="submit" name="submit" class="btn btn-outline-primary" value="Update Course">
							    </div>
						      </div>
						      
				    		</form>
				    	</div>
		    			</div>
		    		</div>

<?php
	include'./footer.php';
?>