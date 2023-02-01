<?php
	include'header.php';
?>

<div class="container mt-3">
		<div class="page-title">
            <h3>View Student Report
            </h3>
        </div>
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
			      <th scope="col" class="text-center">View Report</th>
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
				                    <a href="./report_view.php?email=<?php echo $result['student_email']; ?>" data-toggle="tooltip" data-placement="botom" title="View Report" class="btn btn-outline-success btn-sm">Report</a>
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