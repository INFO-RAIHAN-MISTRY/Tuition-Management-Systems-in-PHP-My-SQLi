<?php 
	include'header.php';
?>
	<?php

	if (isset($_POST['submit'])) {
		
		$st_name = mysqli_real_escape_string($conn, $_POST['st_name']);
		$st_email = mysqli_real_escape_string($conn, $_POST['st_email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
		$st_check = mysqli_real_escape_string($conn, $_POST['st_check']);

		$stPasswordHashing = password_hash($password, PASSWORD_BCRYPT);
		$stConfirmPasswordHashing = password_hash($cpassword, PASSWORD_BCRYPT);

		$selectQuery1 = mysqli_query($conn, "SELECT * FROM `student_reg` WHERE st_email = '$st_email'");

		if (mysqli_num_rows($selectQuery1) > 0) {
			?>
			<div class="alert alert-dismissible alert-danger">
			  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			  <strong>Oops Email already Exist !</strong>
			</div>				
		<?php
		}
		else{
			if ($password === $cpassword) {
				
				$insertQuery = mysqli_query($conn, "INSERT INTO `student_reg`(`st_name`, `st_email`, `st_pass`, `st_cpass`, `st_check`) VALUES ('$st_name','$st_email','$stPasswordHashing','$stConfirmPasswordHashing','$st_check')");

				if ($insertQuery) {
					?>
					<div class="alert alert-dismissible alert-success">
					  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					  <strong>New user added successfully !</strong>
					</div>				
				<?php
				}
				else{
					?>
						<div class="alert alert-dismissible alert-danger">
						  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
						  <strong>Registration Error !</strong>
						</div>				
					<?php
				}

			}
			else{
				?>
						<div class="alert alert-dismissible alert-danger">
						  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
						  <strong>Oops, Password missmached !!</strong>
						</div>				
					<?php
			}
		}
	}

?>
	<div class="container width-100 mt-3">
		<div class="page-title">
            <h3>Total Users
                <button type="button" class=" btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus p-2"></i> Add User</button>
            </h3>
        </div>
		<div class="table-responsive my-5">
			<table class="table table-bordered table-hover">
			  <thead class="mt-3">
			    <tr>
			      <th scope="col">Full Name</th>
			      <th scope="col">User Email</th>
			      <th scope="col">User Role</th>
			      <th scope="col">User Checked</th>
			      <th scope="col">Date of joining</th>
			      <th scope="col" class="text-center">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php

			  		$seleQuery = mysqli_query($conn, "SELECT * FROM `student_reg` WHERE 1");

			  		while ($result = mysqli_fetch_assoc($seleQuery)) {
			  			?>
			  			<tr class="table-active">
					      <td><?php echo $result['st_name']; ?></td>
					      <td><?php echo $result['st_email']; ?></td>
					      <td><?php echo $result['st_role']; ?></td>
					      <td><?php echo $result['st_check']; ?></td>
					      <td><?php echo $result['date']; ?></td>
							<td class="text-center">
			                    <a href="students_create.php?email=<?php echo $result['st_email']; ?>" data-toggle="tooltip" data-placement="botom" title="Create Student" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-user-plus fa-2x"></i></a>
			                </td>
					    </tr>
			  			<?php
			  		}

			  	?>
			    
				</tbody>
			</table>
		</div>
	</div>
				<script>
					$(document).ready(function () {
				    $("table").DataTable()
				});
				</script>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">ADD USER</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true"></span>
		        </button>
		      </div>
		      	
		    		<div class="row d-flex justify-content-center">
		    			<div class="col-md-10">
					    	<form action="" method="post">
							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Full Name</label>
							      <input type="name" name="st_name" class="form-control" id="exampleInputName" placeholder="Enter Your Name" required>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
							      <input type="email" name="st_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
							      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
							      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputConfirmPassword1" class="form-label mt-4">Confirm Password</label>
							      <input type="password" name="cpassword" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password" required>
							    </div>
							    <div class="form-check mt-3">
						        <input class="form-check-input" name="st_check" type="checkbox" value="checked" id="flexCheckChecked" required>
						        <label class="form-check-label" for="flexCheckChecked">
						          I accept all of the Term & Conditions.
						        </label>
						      </div>
							  <div class="modal-footer">
							  	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
						      </div>
				    		</form>
				    	</div>
		    		</div>
		    	</div>  
		    </div>
	  </div>
	</div>





<?php 
	include'footer.php';
?>