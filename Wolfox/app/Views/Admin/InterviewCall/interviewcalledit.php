<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Interview Call Form</h4>

                        <form class="m-t-30" action="<?php echo base_url('Admin/InterviewCall/update') ?>" method="POST">
                            <div class="row">

                                <div class="col-md-12" style="display:none">
                                    <!-- <label for="exampleInputName"> Id</label> -->
                                    <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp" placeholder="Enter Id" value="<?php echo $interviewdata['id'] ?>" hidden>
                                </div>

                                <div class="col-md-12">
                                    <!-- <label for="exampleInputName">Student Id</label> -->
                                    <input type="text" class="form-control" id="studentid" name="studentid" aria-describedby="emailHelp" placeholder="Enter Id" value="<?php echo $interviewdata['studentid'] ?>" hidden>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="Enter Name" value="<?php echo $interviewdata['firstname'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Middle Name</label>
                                        <input type="text" class="form-control" name="MiddleName" id="MiddleName" placeholder="Middle Name" value="<?php echo $interviewdata['middlename'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Last Name</label>
                                        <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name" value="<?php echo $interviewdata['lastname'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company Name</label>
                                        <input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="CompanyName" value="<?php echo $interviewdata['companyname'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-success">
                                        <label class="control-label">Interview Mode</label>

                                        <select class="form-control custom-select" id="mode" name="mode">
                                            <option value="Online" <?= ($interviewdata['mode'] == 'Online') ? 'selected' : '' ?>>Online</option>
                                            <option value="Offline" <?= ($interviewdata['mode'] == 'Offline') ? 'selected' : '' ?>>Offline</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" id="Date" name="Date" value="<?php echo $interviewdata['date'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" class="form-control" id="Role" name="Role" value="<?php echo $interviewdata['role'] ?>">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" id="Status" name="Status" value="<?php echo $interviewdata['status'] ?>">
                                    </div>
                                </div>






                                <div class="row">
                                    <!-- <?php
                                            // 	for ($i = 0; $i < $len; $i++)
                                            // 	{
                                            // 	echo'<div class="col-md-4">';
                                            //  echo'<div class="form-group">';
                                            //       echo'<label for="exampleInputPassword1">Company Name</label>';
                                            //         echo'<input type="text" class="form-control" name="companyname[]" id="companyname"  value=" '.$CompanyName_json[$i].'">';
                                            //     echo'</div>';
                                            // 	echo'</div>';
                                            // }
                                            ?> -->


                                    <?php
                                    //for ($i = 0; $i < $len; $i++)
                                    // 		{
                                    // 		echo'<div class="col-md-4">';
                                    //    echo'<div class="form-group">';
                                    //           echo'<label for="exampleInputPassword1">Interview Mode</label>';
                                    //             echo'<input type="text" class="form-control" name="mode[]" id="mode" value=" '.$Mode_json[$i].'">';
                                    //         echo'</div>';
                                    // 		echo'</div>';
                                    // 	}
                                    ?>


                                    <?php
                                    //for ($i = 0; $i < $len; $i++)
                                    //  		{
                                    //  		echo'<div class="col-md-4">';
                                    //    echo'<div class="form-group">';
                                    //           echo'<label for="exampleInputPassword1">Date</label>';
                                    //             echo'<input type="text" class="form-control" name="date[]" id="date"  value=" '.$Date_json[$i].'">';
                                    //         echo'</div>';
                                    // 	echo'</div>';
                                    // 	}
                                    ?>


                                    <?php
                                    // 		for ($i = 0; $i < $len; $i++)
                                    // 		{
                                    // 		echo'<div class="col-md-4">';
                                    //    echo'<div class="form-group">';
                                    //           echo'<label for="exampleInputPassword1">Role</label>';
                                    //             echo'<input type="text" class="form-control" name="role[]" id="role" value=" '.$Role_json[$i].'">';
                                    //         echo'</div>';
                                    // 		echo'</div>';
                                    // 	}
                                    ?>


                                    <?php
                                    // 		for ($i = 0; $i < $len; $i++)
                                    // 		{
                                    // 		echo'<div class="col-md-4">';
                                    //    echo'<div class="form-group">';
                                    //           echo'<label for="exampleInputPassword1">Status</label>';
                                    //             echo'<input type="text" class="form-control" name="status[]" id="status"  value=" '.$Status_json[$i].'">';
                                    //         echo'</div>';
                                    // 		echo'</div>';
                                    // 	}
                                    ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>