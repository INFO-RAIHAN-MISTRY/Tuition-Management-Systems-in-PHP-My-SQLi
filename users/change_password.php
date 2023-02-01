<?php include'header.php'; ?>

	<div class="container py-3">
		<div class="col-md-12">
			<?php

									if (isset($_POST['submit'])) {
										$old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
										$new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);


										$useremail = $_SESSION['st_email'];
										$selectQuery = mysqli_query($conn, "SELECT * FROM `student_reg` WHERE st_email = '$useremail'");

										$passwordhash = password_hash($new_pass, PASSWORD_BCRYPT);

										$passwordQuery = mysqli_fetch_assoc($selectQuery);
										$hashPassword = $passwordQuery['st_pass'];
										$matchPassword = password_verify($old_pass, $hashPassword);
										if ($matchPassword) {
											$updateQuery = mysqli_query($conn, "UPDATE `student_reg` SET `st_pass`='$passwordhash' WHERE 1");

											if ($updateQuery) {
												?>
												<div class="alert alert-dismissible alert-success">
													<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
													<strong>Welldone,</strong> Password Updated !
												</div>
												<?php
											}else{
												?>
												<div class="alert alert-dismissible alert-danger">
													<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
													<strong>Oops,</strong> Password doesn't Update !!
												</div>
												<?php
											}
										}else{
											?>
											<div class="alert alert-dismissible alert-danger">
													<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
													<strong>Oops,</strong> Password Incorrect !!
												</div>
											<?php
										}
									}


								?>
			<form action="" method="post">
				<div class="row">
						<div>
						 <h4>Change Password</h4>
						</div>
						<div class="form-group col-md-4">
							 <label for="exampleInputName" class="form-label mt-4">Old Password</label>
							 <input type="password" name="old_pass" class="form-control" id="exampleInputName">
						</div>
						<div class="form-group col-md-4">
							 <label for="exampleInputEmail1" class="form-label mt-4">New Password</label>
							 <input type="password" name="new_pass" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group col-md-4 mt-5">
							<input type="submit" name="submit" class="btn btn-outline-primary" value="Change Password">
						</div>	
				</div>
			</form>
		</div>
	</div>

<?php include'footer.php'; ?>