<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Batch Time Form </h4>
                <div class="d-flex align-items-center">

                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!--<h4 class="card-title">General Form</h4>
                                <h6 class="card-subtitle"> All with bootstrap element classies </h6>-->
                        <!-- Batch Form -->
                        <form action="<?php echo base_url('/Admin/Batch/save') ?>" method="POST">

                            <div class="">
                                <!-- Batch Name -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="batchname" class="font-weight-bold">Batch Name</label>
                                            <input type="text" class="form-control" name="batchname" id="batchname" placeholder="Enter Batch Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <label for="exampleInputPassword1">Choose a month:</label>
                                        <select name="month" id="month" class="form-control">
                                            <option>select option</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Start Time -->
                                    <!--<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="starttime" class="font-weight-bold">Start Time</label>
                                            <input type="time" class="form-control" name="starttime" id="starttime">
											<!--<select name="ampm" id="ampm">
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </select>
										</div>
                                    </div>-->
									<div class="col-md-6">
                                        <div class="form-group">
									   <label>Start Time:</label>
    <input type="text" name="starttime" placeholder="hh:mm" required>
    <select name="start_am_pm">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
    </select>
	</div>
                                    </div>
    <div class="col-md-6">
                                        <div class="form-group">
    <label>End Time:</label>
    <input type="text" name="endtime" placeholder="hh:mm" required>
    <select name="end_am_pm">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
    </select>
	</div>
                                    </div>
     </div>
                                    <!-- End Time -->
                                    <!--<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="endtime" class="font-weight-bold">End Time</label>
                                            <input type="time" class="form-control" name="endtime" id="endtime">
											<!--<select name="ampm" id="ampm">
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>-->
 
  <!-- Submit Button -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                           

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- .row -->


        <!-- Row -->
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
	
	<!--<script>
document.getElementById('time').addEventListener('input', function (e) {
    this.value = this.value.replace(/[^0-9:]/g, '').slice(0, 5);
});
</script>-->

	<!--<script>
		document.getElementById('time').addEventListener('change', function() {
    let time = this.value; // HH:MM format
    let hours = parseInt(time.split(':')[0]);
    let minutes = time.split(':')[1];
    let ampm = hours >= 12 ? 'PM' : 'AM';

    if (hours > 12) {
        hours -= 12;
    } else if (hours === 0) {
        hours = 12;
    }

    document.getElementById('ampm').value = ampm;
});

	</script>-->