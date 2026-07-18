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
                        <h4 class="card-title">Photo Upload Form</h4>


                        <form action="<?= site_url('/Admin/photoupload/update') ?>" method="post">
                            <div class="row">

                                <div class="form-group">
                                    <label for="firstName1">id</label>
                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $image['id'] ?>" readonly>
                                </div>
                            </div>



                            <div class="col-md-6">

                                <label for="BatchTime">Batch Name</label>
                                <select name="BatchTime" id="BatchTime" class="form-control">
                                    <!-- <option value="">Select Batch Time</option> -->
                                    <?php foreach ($BatchData as $row) : ?>
                                        <option value="<?php echo  $row['batchid'] ?>">
                                            <?php echo $row['batchname'] . '     ' . date("h:i A", strtotime($row['starttime'])) . '-' . date("h:i A", strtotime($row['endtime'])) ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="date" id="date">
                        </div>
                    </div>




                    <!--<div class="col-md-6">
                <div class="form-group">
                    <label>Subtitledescription</label>
                    <br>
                    <input type="File" class="form-control" name="Subtitledescription[]" id="Subtitledescription" style="width:100%;" >
                </div>
            </div>-->




                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" style="border:1px solid #2962ff;background-color: #2962ff;">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- row -->
<!-- .row -->

</div>
</div>