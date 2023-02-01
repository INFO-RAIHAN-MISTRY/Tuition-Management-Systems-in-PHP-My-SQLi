<?php 
	include'header.php';
?>
	<?php

								if (isset($_POST['submit'])) {
									
									$c_name = mysqli_real_escape_string($conn, $_POST['c_name']);
									$c_sub = mysqli_real_escape_string($conn, $_POST['c_sub']);
									$c_price = mysqli_real_escape_string($conn, $_POST['c_price']);

									$seleQuery = mysqli_query($conn, "SELECT * FROM `courses` WHERE c_name = '$c_name'");

									if (mysqli_num_rows($seleQuery) > 0) {
										?>
											<div class="alert alert-dismissible alert-danger">
											  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
											  <strong>Course already Exist !, Please give a uniq course name.</strong>
											</div>				
										<?php
									}else{
										$insertQuery = mysqli_query($conn, "INSERT INTO `courses`(`c_name`, `c_sub`, `c_price`) VALUES ('$c_name','$c_sub','$c_price')");

										if ($insertQuery) {
											?>
												<div class="alert alert-dismissible alert-success">
												  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
												  <strong>Course Successfully added.</strong>
												</div>				
											<?php
										}else{
											?>
												<div class="alert alert-dismissible alert-danger">
												  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
												  <strong>Course Doesn't addd due to some problem !</strong>
												</div>				
											<?php
										}
									}
								}

							?>
	<div class="container mt-3 mb-3">
		<div class="page-title">
            <h3>Courses
                <button type="button" class=" btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus p-2"></i> Add Course</button>
            </h3>
        </div>
        <?php
        if (isset($_SESSION['msg'])) {
        	?>
        		<div class="alert alert-dismissible alert-success">
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					<strong>Welldone,</strong> <?php echo $_SESSION['msg']; ?>
				</div>
        	<?php
        	
        	unset($_SESSION['msg']);
        }
        ?>
        <?php
        if (isset($_SESSION['delete_msg'])) {
        	?>
        		<div class="alert alert-dismissible alert-success">
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					<strong>Welldone,</strong> <?php echo $_SESSION['delete_msg']; ?>
				</div>
        	<?php
        	
        	unset($_SESSION['delete_msg']);
        }
        ?>
		<div class="table-responsive mt-5">
			<table class="table table-bordered table-hover">
			  <thead class="mt-3">
			    <tr>
			      <th scope="col">Course ID</th>
			      <th scope="col">Course Name</th>
			      <th scope="col">Course Subjects</th>
			      <th scope="col">Course Price<small class="text-muted">(Monthly)</small></th>
			      <th scope="col" class="text-center">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  			
			  				<?php

			  				$selectQuery1 = mysqli_query($conn, "SELECT * FROM `courses` WHERE 1");
			  				while ($result = mysqli_fetch_assoc($selectQuery1)) {
			  					?>
			  					<tr class="table-active">
			  					  <td><?php echo $result['id'] ?></td>
							      <td><?php echo $result['c_name'] ?></td>
							      <td><?php echo $result['c_sub'] ?></td>
							      <td><?php echo $result['c_price'] ?></td>
									<td>
					                    <a href="./course_edit.php?cname=<?php echo $result['c_name']; ?>" data-toggle="tooltip" data-placement="botom" title="Update Course" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-edit fa-2x"></i></a>
					                    <a href="./course_delete.php?cname=<?php echo $result['c_name'];?>" data-toggle="tooltip" data-placement="botom" title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash fa-2x"></i></a>
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
		        <h5 class="modal-title">ADD Course</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true"></span>
		        </button>
		      </div>
		      	
		    		<div class="row d-flex justify-content-center">
		    			<div class="col-md-10">
					    	<form action="" method="post">
							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Course Name</label>
							      <input type="name" name="c_name" class="form-control" id="exampleInputName" placeholder="Enter Course Name" required>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Course Subjects</label>
							      <input type="name" name="c_sub" class="form-control" id="exampleInputName" placeholder="Python, Java, c, c++" required>
							    </div>
							    <div class="form-group">
							      <label for="exampleInputName" class="form-label mt-4">Course Price(Monthly)</label>
							      <input type="number" name="c_price" class="form-control" id="exampleInputName" placeholder="Enter Course Price" required>
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