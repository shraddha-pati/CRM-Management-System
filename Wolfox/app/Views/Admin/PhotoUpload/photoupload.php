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
                <h4 class="page-title">Photo Upload</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">

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
                        <h4 class="card-title">Photo Upload Form</h4>


                        <form action="<?= site_url('/Admin/photoupload/save') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">

                                    <div class="col-md-6">
                                        <label for="BatchTime">Batch Name</label>
                                        <select name="BatchTime" id="BatchTime" class="form-control">
                                            <!-- <option value="">Select Batch Time</option> -->
                                            <?php foreach ($BatchData as $row) : ?>
                                                <option value="<?php echo  $row['batchid'] ?>">
                                                    <?php echo $row['month'] ?> <?php echo $row['batchname'] . '     ' . date("h:i A", strtotime($row['starttime'])) . '-' . date("h:i A", strtotime($row['endtime'])) ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <label class="control-label">Category</label>

                                        <select class="form-control custom-select" id="Category" name="Category">
                                            <option value="Event">Event</option>
                                            <option value="Festival">Festival</option>
                                            <option value="Internship">Internship Last Day</option>
                                            <option value="Birthday">Birthday Celebration</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <div id="container">
                                        <div class="row item">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control" name="images[]" multiple>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <lable style="color:white;"></lable><br>
                                                <button type="button" class="btn btn-success ms-2" id="addButton">+</button>
                                                <button type="button" class="btn btn-danger ms-2 removeButton">-</button>
                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit"  class="btn btn-primary" style="border:1px solid #2962ff;background-color: #2962ff;">Upload</button>

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





<script>
    const container = document.getElementById("container");

    // Delegate the click event for "Add" buttons to the container
    container.addEventListener("click", function(event) {
        if (event.target && event.target.id === "addButton") {
            // Select the closest .item and clone it
            const item = event.target.closest(".item");
            if (item) {
                const clone = item.cloneNode(true);

                // Clear all input and textarea values in the cloned item
                const inputs = clone.querySelectorAll("input, textarea");
                inputs.forEach(input => input.value = "");

                // Ensure the cloned item's remove button works
                const removeButton = clone.querySelector(".removeButton");
                removeButton.addEventListener("click", function() {
                    clone.remove();
                });

                // Append the cloned item to the container
                container.appendChild(clone);
            }
        }
    });

    // Add event listener for "Remove" buttons
    container.addEventListener("click", function(event) {
        if (event.target && event.target.classList.contains("removeButton")) {
            const item = event.target.closest(".item");
            if (item) {
                item.remove();
            }
        }
    });
</script>