<?php
	$username = $_SESSION['username'];
?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                        <h5 class="card-title text-primary">Welcome Mr. <?php echo $username; ?> ! 🎉</h5>

                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>