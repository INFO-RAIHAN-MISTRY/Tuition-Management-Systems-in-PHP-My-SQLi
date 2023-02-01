<?php

	include'./header.php';

?>

	<?php
        if (isset($_SESSION['msg'])) {
            ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Welldone,</strong> <?php echo $_SESSION['msg']; ?> as <?php echo $_SESSION['st_email']; ?>[<small><?php echo $_SESSION['st_role']; ?></small>]
                </div>
            <?php
            
            unset($_SESSION['msg']);
        }
        ?>

	<div class="content">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-center">
                                                <i class="fa-solid fa-users fa-3x p-2"></i></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-center mt-2">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Students</p>
                                                <?php
                                                	$selectQuery = mysqli_query($conn, "SELECT * FROM `students`");
                                                	if ($total_students = mysqli_num_rows($selectQuery)) {
                                                		echo '<span class="number">'.$total_students.'</span>';
                                                	}
                                                	else{
                                                		echo '<span class="number">no data</span>';
                                                	}
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="text-center my-2">
                                            <a href="#" title="Link">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="fa fa-money-bill fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-center mt-2">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Fees</p>
                                                <?php
                                                $sum = 0;
                                                	$selectQuery = mysqli_query($conn, "SELECT `total_fees` FROM `students`");
                                                	while($row = mysqli_fetch_assoc($selectQuery)){
													    $sum += $row['total_fees'];
													}
													echo $sum;
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="text-center my-2">
                                            <a href="#" title="Link">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="fa fa-money-bill fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-center mt-2">
                                            <div class="detail">
                                                <p class="detail-subtitle">Pending Fees</p>
                                                <?php
                                                $sum = 0;
                                                	$selectQuery = mysqli_query($conn, "SELECT `pending_fees` FROM `students`");
                                                	while($row = mysqli_fetch_assoc($selectQuery)){
													    $sum += $row['pending_fees'];
													}
													echo $sum;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="text-center my-2">
                                            <a href="#" title="Link">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="fa-solid fa-book fa-3x mt-2"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-center mt-2">
                                            <div class="detail">
                                                <p class="detail-subtitle">Courses</p>
                                                <?php
                                                	$selectQuery = mysqli_query($conn, "SELECT * FROM `courses`");
                                                	if ($total_courses = mysqli_num_rows($selectQuery)) {
                                                		echo '<span class="number">'.$total_courses.'</span>';
                                                	}
                                                	else{
                                                		echo '<span class="number">No Data</span>';
                                                	}
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="text-center my-2">
                                            <a href="#" title="Link">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                    <div class="page-title">
                        <h5>Recent Activities</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Table</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Transaction ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Amount</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            	<?php 

                                            		$selectQuery = mysqli_query($conn, "SELECT * FROM `transactions` WHERE 1");

                                            		while ($result = mysqli_fetch_assoc($selectQuery)) {
                                            			?>
                                            			<tr>
		                                                    <th><?php echo $result['trans_id']; ?></th>
		                                                    <td><?php echo $result['student_name']; ?></td>
		                                                    <td><?php echo $result['student_email']; ?></td>
		                                                    <td><?php echo $result['fees']; ?></td>
                                                            <td><?php echo $result['fees_remark']; ?></td>
		                                                </tr>

                                            			<?php
                                            		}

                                            	?>
                                                
                                            </tbody>
                                            <script>
												$(document).ready(function () {
											    $("table").DataTable()
											});
											</script>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>

<?php

	include'./footer.php';

?>