<?php
	include'header.php';
?>

<div class="container mt-3">
		<div class="page-title text-center">
            <h3>All Transactions
            </h3>
        </div>
		<div class="table-responsive my-5">
			<table class="table table-bordered table-hover">
			  <thead class="mt-3">
			    <tr>
			      <th scope="col">Transaction id</th>
			      <th scope="col">STUDENT Name</th>
			      <th scope="col">STUDENT Email</th>
			      <th scope="col">Fees</th>
			      <th scope="col">Date</th>
			      <th scope="col">Get Invoice</th>
			    </tr>
			  </thead>
			  <tbody>

							<?php

								$selectQuery = mysqli_query($conn, "SELECT * FROM `transactions` WHERE 1");

								while ($result = mysqli_fetch_assoc($selectQuery)) {
									?>
										<tr class="table-active">
									      <td><?php echo $result['trans_id']; ?></td>
									      <td><?php echo $result['student_name']; ?></td>
									      <td><?php echo $result['student_email']; ?></td>
									      <td><?php echo $result['fees']; ?></td>
									      <td><?php echo $result['date']; ?></td>
									      <td class="text-center">
									      	<a href="./transc_report.php?tid=<?php echo $result['trans_id']; ?>" type="button" class="btn btn-outline-info btn-rounded" data-toggle="tooltip" data-placement="botom" title="Generate Invoice"><i class="fa-solid fa-file-invoice fa-2x p-2"></i></a>
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