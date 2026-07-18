<div class="page-wrapper">

    <div class="page-breadcrumb">
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Interview Call Form</h4>

                        <form class="m-t-30" action="<?php echo base_url('Admin/InterviewCall/save') ?>" method="POST">
                            <div class="row">

            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Middle Name</label>
                                        <input type="text" class="form-control" name="MiddleName" id="MiddleName" placeholder="Middle Name">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Last Name</label>
                                        <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No</label>
                                        <input type="text" class="form-control" name="Phoneno" id="Phoneno" placeholder="Phoneno ">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company Name</label>
                                        <input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="CompanyName">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-success">
                                        <label class="control-label">Interview Mode</label>

                                        <select class="form-control custom-select" id="Mode" name="Mode[]">
                                            <option value="Online">Online</option>
                                            <option value="Offline">Offline</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" id="Date" name="Date">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" class="form-control" id="Role" name="Role">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" id="Status" name="Status">
                                    </div>
                                </div>


                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap Modal -->
<div class="modal fade" id="successModal1" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Notification</h5>
            </div>
            <div class="modal-body">
                <?= session()->getFlashdata('id'); ?>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to Show Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if (session()->getFlashdata('id')) : ?>
            var successModal = new bootstrap.Modal(document.getElementById('successModal1'));
            successModal.show();
            setTimeout(() => {
                successModal.hide();
            }, 1000); // Auto-close after 3 seconds
        <?php endif; ?>
    });
</script>

<!-- <script>
//const addButton = document.getElementById("btn");
const container = document.getElementById("container");

    container.addEventListener("click", function(event) {
		
		if(event.target && event.target.id === "addButton")
		{
			const item=event.target.closest(".item");
		
		if(item)
		{
			const clone=item.cloneNode(true);
			const inputs=clone.querySelectorAll("input,textarea");
			inputs.forEach(input => input.value ="");
		
             const removeButton=clone.querySelector(".removeButton");
              removeButton.addEventListener("click",function(){
				  clone.remove();
			  })
			 
			 container.appendChild(clone);
		}
		}
		});
		
		container.addEventListener("click",function(event){
			
			if(event.target && event.target.classList.contains("removeButton"))
			{
				const item=event.target.closest(".item");
				
				if(item)
				{
				item.remove();
				}				
					
				}
		
		});
		</script> -->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<script>
    function datafetch() {

        const stdid = $("#Studentid").val();

        $.ajax({
            url: `<?php echo base_url('/Admin/InterviewCall/fetch/'); ?>${stdid}`,
            type: "GET",
            dataType: "json",

            success: function(response) {
                console.log(response);

                try {
                    const data = response;
                    if (data.status === "success" && data.data) {
                        $("#FirstName").val(data.data.firstname);
                        $("#MiddleName").val(data.data.middlename);
                        $("#LastName").val(data.data.lastname);
                    } else {
                        console.error("Invalid response format");
                    }
                } catch (error) {
                    console.error("Error parsing JSON response", error);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
            }
        });
    }
</script>