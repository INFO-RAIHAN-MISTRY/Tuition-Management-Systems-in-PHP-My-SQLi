<?php 
	include'header.php';
?>

	<div class="container mt-3">
		<div class="page-title">
            <h3>Total Students
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
		<div class="table-responsive my-5">
			<table class="table table-bordered table-hover">
			  <thead class="mt-3">
			    <tr>
			      <th scope="col">STUDENT NAME</th>
			      <th scope="col">STUDENT EMAIL</th>
			      <th scope="col">STUDENT PHONE</th>
			      <th scope="col">STUDENT COURSE</th>
			      <th scope="col">TOTAL FEES</th>
			      <th scope="col">PENDING FEES</th>
			      <th scope="col" class="text-center">UPDATE/VIEW</th>
			      <th scope="col" class="text-center">DELETE</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php
			  		$selectQuery = mysqli_query($conn, "SELECT * FROM `students` WHERE 1");

			  		while ($result = mysqli_fetch_assoc($selectQuery)) {
			  			?>
			  				<tr class="table-active">
						      <td><?php echo($result['student_name']); ?></td>
						      <td><?php echo($result['student_email']); ?></td>
						      <td><?php echo($result['student_phone']); ?></td>
						      <td><?php echo($result['student_course']); ?></td>
						      <td><?php echo($result['total_fees']); ?></td>
						      <td><?php echo($result['pending_fees']); ?></td>
								<td class="text-center">
				                    <a href="./students_update.php?email=<?php echo $result['student_email']; ?>" data-toggle="tooltip" data-placement="botom" title="Update" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-edit fa-2x"></i></a>
				                    <a href="./student_view.php?email=<?php echo $result['student_email']; ?>" data-toggle="tooltip" data-placement="botom" title="View" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-eye fa-2x"></i></a>
				                </td>
				                <td class="text-center">
				                	<a href="./student_delete.php?email=<?php echo $result['student_email']; ?>" data-toggle="tooltip" data-placement="botom" title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash fa-2x"></i></a>
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

<?php 
	include'footer.php';
?>