<?php
	include'header.php';
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
                                            <div class="icon-big text-center">
                                                <i class="fa fa-money-bill fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-center mt-2">
                                            <div class="detail">
                                                <p class="detail-subtitle">My Total Fees</p>
                                                <?php
                                                	$email = $_SESSION['st_email'];
                                                	$selectQuery = mysqli_query($conn, "SELECT `total_fees` FROM `students` WHERE student_email = '$email'");
                                                	$row = mysqli_fetch_assoc($selectQuery);

                                                	echo $row['total_fees'];
													
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
                                                	$email = $_SESSION['st_email'];
                                                	$selectQuery = mysqli_query($conn, "SELECT `pending_fees` FROM `students` WHERE student_email = '$email'");
                                                	$row = mysqli_fetch_assoc($selectQuery);
                                                	if ($row['pending_fees'] == 0) {
                                                		echo "course complete. No fees Due";
                                                	}else{
                                                		echo $row['pending_fees'];
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
                </div>


<?php
	include'footer.php';
?>