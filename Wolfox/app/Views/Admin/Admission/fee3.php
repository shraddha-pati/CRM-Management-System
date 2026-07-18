<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <form action="<?php echo base_url('/Admin/Admission/fee3save') ?>" method="post" id="feeform">
                                    <div class="card-body">
                                        <h4 class="card-title">Fee Status Form</h4>
                                    </div>
                                    <hr>
                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row p-t-20">
                                                <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $StudentData['sid'] ?>" hidden>

                                                <input type="text" id="totalfee" class="form-control" name="totalfee" value="<?php echo $StudentData['fee'] ?>" hidden>

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
                                                            <!-- <option value="online">Online</option> -->
                                                            <option value="cash">Cash</option>
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

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var modeSelect = document.getElementById("mode");
                        var transactionIdContainer = document.getElementById("transactionIdContainer");
                        var paidfeeInput = document.getElementById("paidfee");
                        var remainingfeeInput = document.getElementById("remainingfee");
                        var feeForm = document.getElementById("feeform");

                        // Show transaction ID field if mode is online
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

                                // Swal.fire({
                                //     icon: 'error',
                                //     title: 'Invalid Installment',
                                //     text: 'Next Installment cannot be greater than the Remaining Fee!',
                                //     confirmButtonText: 'OK'
                                // });
                                // return false;
                            }
                            else
                            {
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

            </div>
        </div>
    </div>
</div>