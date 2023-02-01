<?php include'header.php'; ?>

	<div class="container mt-3 mb-3">
		<div class="page-title">
            <h3>My Courses
            </h3>
        </div>
		<div class="table-responsive mt-5">
			<table class="table table-bordered table-hover">
			  <thead class="mt-3">
			    <tr>
			      <th scope="col">Course Name</th>
			      <th scope="col">Course Price<small class="text-muted">(Monthly)</small></th>
			      <th scope="col">Course Duration<small class="text-muted">(Month)</small></th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  			
			  				<?php
			  				$email = $_SESSION['st_email'];
			  				$selectQuery1 = mysqli_query($conn, "SELECT `student_course`, `student_course_price`, `course_duration` FROM `students` WHERE student_email = '$email'");
			  				while ($result = mysqli_fetch_assoc($selectQuery1)) {
			  					?>
			  					<tr class="table-active">
			  					  <td><?php echo $result['student_course']; ?></td>
							      <td><?php echo $result['student_course_price']; ?></td>
							      <td><?php echo $result['course_duration']; ?></td>
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

<?php include'footer.php'; ?>