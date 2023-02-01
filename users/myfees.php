<?php include'header.php'; ?>

	<div class="container py-3">
		<div class="col-md-12">
			<div class="row">
					    	<div>
					    		<h4>Fees Information</h4>
					    	</div>
					    	<?php
                                                	$email = $_SESSION['st_email'];
                                                	$selectQuery = mysqli_query($conn, "SELECT `total_fees`,`pending_fees` FROM `students` WHERE student_email = '$email'");
                                                	$row = mysqli_fetch_assoc($selectQuery);
													
                                                ?>
					    	<div class="form-group col-md-6">
						      <label for="exampleInputName" class="form-label mt-4">Total Fees</label>
						      <input type="" name="" class="form-control" id="exampleInputName" value="<?php echo $row['total_fees']; ?>" readonly>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="exampleInputEmail1" class="form-label mt-4">Pending Fees</label>
						      <input type="" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['pending_fees']; ?>" readonly>
						    </div>
					    </div>
		</div>

	</div>
	<div class="container py-3">
    <div class="page-title">
            <h3>View Transction Record 
            </h3>
        </div>
    <div class="table-responsive py-2">
      <table class="table table-bordered table-hover">
        <thead class="mt-3">
          <tr>
            <th scope="col">Transac_ID</th>
            <th scope="col">Date</th>
            <th scope="col">Purpose</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>

          <?php
            $email = $_SESSION['st_email'];
            $selectQuery = mysqli_query($conn, "SELECT * FROM `transactions` WHERE student_email='$email'");

            while ($result = mysqli_fetch_assoc($selectQuery)) {
              ?>
                <tr class="table-active">
                  <td><?php echo($result['trans_id']); ?></td>
                  <td><?php echo($result['date']); ?></td>
                  <td><?php echo($result['fees_remark']); ?></td>
                  <td><?php echo($result['fees']); ?></td>
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