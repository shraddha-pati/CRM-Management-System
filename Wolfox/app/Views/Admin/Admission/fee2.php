<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <form action="<?php echo base_url('/Admin/Admission/fee2save') ?>" method="post" id="feeform">
                                    <div class="card-body">
                                        <h4 class="card-title">Fee Status Form</h4>
                                    </div>
                                    <hr>
                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row p-t-20">
                                                <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $StudentData['sid'] ?>" hidden>

                                                <input type="text" id="totalfee" class="form-control" name="totalfee" value="<?php echo $StudentData['fee'] ?>" hidden>
                                                <?php if ($StudentData['mode'] == 'online') { ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">View Payment Screenshot</label>
                                                            <a href="<?php echo base_url('/uploads/feedocument/' . $StudentData['sid'] . '/' . $StudentData['filename']) ?>"><i class="fas fa-eye" data-toggle="modal" data-target="#paymentScreenshotModal" style="cursor: pointer;"><?php  ?></i></a>
                                                            <!-- <input type="text" id="filename" class="form-control" name="filename" value="<?php echo $StudentData['remainingfee'] ?>" readonly> -->
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Remark</label>
                                                        <!-- <input type="text" id="paidfee" class="form-control" name="paidfee" required> -->
                                                            <select name="confirmstatus" id="confirmstatus" class="form-control" style="border-radius:12px;width:90px;">
                                                                <option value="">Select</option>
                                                                <option value="1">Fee Document Verified Successfully.</option>
                                                                <option value="2">Invalid Fee Document, Please enter updated document.</option>
                                                            </select>

                                                            <input name="remark" id="remark" value="" hidden>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Remaining Fee</label>
                                                        <input type="text" id="remainingfee" class="form-control" name="remainingfee" value="<?php echo $StudentData['remainingfee'] ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Next Installment</label>
                                                        <input type="text" id="paidfee" class="form-control" name="paidfee" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mode of Payment:</label>
                                                        <select class="form-control custom-select" name="mode" id="mode">
                                                            <option value="">--Select Payment Mode--</option>
                                                            <?php if ($StudentData['mode'] == 'online') { ?>
                                                                <option value="online">Online</option>
                                                            <?php } elseif ($StudentData['mode'] == '') { ?>
                                                                <option value="cash">Cash</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="" id="transactionIdContainer" style="display:none;">
                                                        <div class="form-group">
                                                            <label for="transactionid">Transaction Id <span>(if mode is online)</span></label>
                                                            <input type="text" class="form-control" name="transactionid" id="transactionid" placeholder="Enter Transaction Id" value="<?php echo $StudentData['transactionid'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <div class="card-body">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popup" style="display: none; position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); background: rgba(240, 27, 27, 0.8); color: white; padding: 20px; border-radius: 10px;">
                    <b> Installment Should not be greater than remainig fee !</b>
                </div>
                <!-- <div class="modal fade" id="paymentScreenshotModal" tabindex="-1" role="dialog" aria-labelledby="paymentScreenshotModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="paymentScreenshotModalLabel">Payment Screenshot</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="" class="img-fluid" alt="Payment Screenshot">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var modeSelect = document.getElementById("mode");
                        var transactionIdContainer = document.getElementById("transactionIdContainer");
                        var paidfeeInput = document.getElementById("paidfee");
                        var remainingfeeInput = document.getElementById("remainingfee");
                        var feeForm = document.getElementById("feeform");

                        modeSelect.addEventListener("change", function() {
                            if (modeSelect.value === "online") {
                                transactionIdContainer.style.display = "block";
                            } else {
                                transactionIdContainer.style.display = "none";
                            }
                        });

                        function validateFee() {
                            const paidfee = parseFloat(paidfeeInput.value) || 0;
                            const remainingfee = parseFloat(remainingfeeInput.value) || 0;

                            if (paidfee > remainingfee) {

                                showPopup();
                                $("#feeform").data("phone-exists", true);

                            } else {
                                $("#feeform").data("phone-exists", false);

                            }

                            $(document).ready(function() {
                                $("#feeform").on("submit", function(event) {
                                    if ($(this).data("phone-exists")) {
                                        event.preventDefault();
                                    }
                                });
                            });

                            return true;
                        }

                        paidfeeInput.addEventListener("input", function() {
                            validateFee();
                        });

                        feeForm.addEventListener("submit", function(event) {
                            if (!validateFee()) {
                                event.preventDefault();
                            } else {}
                        });
                    });
                </script>

                <script>
                    function showPopup() {
                        let popup = document.getElementById("popup");
                        popup.style.display = "block";

                        setTimeout(() => {
                            popup.style.display = "none";
                        }, 1500); // 1000ms = 1 second
                    }
                </script>
                <script>
                    document.getElementById('confirmstatus').addEventListener('change', function() {
                        var remarkText = this.options[this.selectedIndex].text;
                        document.getElementById('remark').value = remarkText;
                    });
                </script>
            </div>
        </div>
    </div>
</div>