<?php
	include'header.php';
?>

		<div class="container mt-3">
		<div class="page-title text-center">
            <h3>Collect Fees from Students
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
        if (isset($_SESSION['errmsg'])) {
        	?>
        		<div class="alert alert-dismissible alert-danger">
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					<strong>Welldone,</strong> <?php echo $_SESSION['errmsg']; ?>
				</div>
        	<?php
        	
        	unset($_SESSION['errmsg']);
        }

        ?>
		<div class="table-responsive my-5">
			<table class="table table-bordered table-hover">
			  <thead class="mt-3">
			    <tr>
			      <th scope="col">STUDENT NAME</th>
			      <th scope="col">STUDENT EMAIL</th>
			      <th scope="col">STUDENT COURSE</th>
			      <th scope="col">TOTAL FEES</th>
			      <th scope="col">PENDING FEES</th>
			      <th scope="col">Status</th>
			      <th scope="col" class="text-center">Action</th>
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
						      <td><?php echo($result['student_course']); ?></td>
						      <td><?php echo($result['total_fees']); ?></td>
						      <td><?php echo($result['pending_fees']); ?></td>
						      <td><?php if ($result['pending_fees'] == 0) {
						      	?>
						      	<span class="badge rounded-pill bg-success">Success</span>
						      	<?php
						      } else{
						      	?>
						      	<span class="badge rounded-pill bg-danger">Pending</span>
						      	<?php
						      }

						  ?></td>
				                <td class="text-center">
				                	<a href="./fees_collection.php?email=<?php echo $result['student_email']; ?>" type="button" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-money-check-dollar fa-2x p-2"></i>Collect</a>
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