<div class="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <form action="<?php echo base_url('/Admin/Notification/update') ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <h4 class="card-title">Notification Form</h4>
                                    </div>
                                    <hr>
                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="form-group" hidden>
                                                <label class="control-label">id</label>
                                                <input type="text" id="message" class="form-control" placeholder="" name="id" value="<?php echo $notification['id'] ?>"
                                                    title="Message should only contain letters." required>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Message</label>
                                                        <input type="text" id="message" class="form-control" placeholder="" name="message" value="<?php echo $notification['message'] ?>"
                                                            title="Message should only contain letters." required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Select Batch</label>
                                                        <select name="batchid" id="batchid" class="form-control">
                                                            <option value="">Select Batch Time</option>
                                                                 <option value="<?php echo $notification['batchid'] ?>" >
                                                                    <?php echo $notification['batchname'] ?> <?php echo '(' ?> <?php echo date('h:i A', strtotime($notification['starttime']))  ?> To <?php echo date('h:i A', strtotime($notification['endtime']))  ?> <?php echo ')' ?>
                                                                </option>
                                                         </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <div class="card-body">
                                                <button href="CategoryList.html" type="submit" class="btn btn-primary"> Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Notification</h5>
                            </div>
                            <div class="modal-body">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript to Show Modal -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        <?php if (session()->getFlashdata('error')) : ?>
                            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                            successModal.show();
                            setTimeout(() => {
                                successModal.hide();
                            }, 1000); // Auto-close after 3 seconds
                        <?php endif; ?>
                    });
                </script>
            </div>