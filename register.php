<?php
	include'./db_conn.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./vendor/bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/bootstrap.css">
	<link href="./vendor/bootswatch.scss" rel="stylesheet/scss" type="text/css">
	<link href="./vendor/variables.scss" rel="stylesheet/scss" type="text/css">
  </head>
  <body>
    	<div class="container py-5">
    		<div class="row d-flex justify-content-center">
    			<div class="col-md-6 align-middle">
		    		<div class="text-center mb-3">
		    			<h4>Register Here !</h4>
		    		</div>
		    		<?php 
		    			if (isset($_GET['smsg'])) {
		    				?>
		    				<div class="alert alert-dismissible alert-success">
								  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								  <strong>Well done!</strong> <?php echo $_GET['smsg']; ?>
								</div>
		    				<?php
		    			}
		    		?>
		    		<?php 
		    			if (isset($_GET['emsg'])) {
		    				?>
		    				<div class="alert alert-dismissible alert-danger">
								  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								  <strong>Oops!</strong> <?php echo $_GET['emsg']; ?>
								</div>
		    				<?php
		    			}
		    		?>
		    		<?php 
		    			if (isset($_GET['pmsg'])) {
		    				?>
		    				<div class="alert alert-dismissible alert-danger">
								  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								  <strong>Oops, </strong> <?php echo $_GET['pmsg']; ?>
								</div>
		    				<?php
		    			}
		    		?>
		    		<?php 
		    			if (isset($_GET['emailmsg'])) {
		    				?>
		    				<div class="alert alert-dismissible alert-danger">
								  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								  <strong>Oops, </strong> <?php echo $_GET['emailmsg']; ?>
								</div>
		    				<?php
		    			}
		    		?>
		    		<form action="./actions.php" method="post">
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
					    <div class="form-group mb-5">
					    		<div class="mt-3">
						    	<input type="submit" name="register-submit" class="btn btn-outline-primary" value="Submit">
						    </div>
						    <div class="mt-3 text-end">
						    	<a href="./index.php">Back to home !</a>
						    	<div class="">
						    		<a href="./login.php">Click here to login !!</a>
						    	</div>
						    </div>
					    	</div>
					    </div>
		    		</form>
		    	</div>
    		</div>
    	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
