<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    #message {
        display: none;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
    }

    .success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
</style>
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
            <!--<div class="col-5 align-self-center">
                <h4 class="page-title">Edit Details</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CMS</li>
                        </ol>
                    </nav>
                </div>
            </div>-->

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
                        <h4 class="card-title">Company Information Edit Form</h4>
                        <!-- <h6 class="card-subtitle"> All with bootstrap element classies </h6> -->
                        <form class="m-t-30 " action="<?= base_url('/Admin/companylist/update') ?>" method="post" enctype="multipart/form-data">
                            <!-- <form id="updateForm"> -->
							<div class="form-group col-md-4">

                                    <!--<label for="exampleInputEmail1">ID</label>-->
                                    <input type="text" name="id" id="id" value="<?php echo $companydata['id'] ?>" class="form-control" aria-describedby="emailHelp" placeholder="" readonly style="display:none">

                                </div>
                            <div class="row">
                                
                                <div class="form-group col-md-6">

                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="text" name="name" id="name" value="<?php echo $companydata['name'] ?>" class="form-control" aria-describedby="emailHelp" placeholder="Company Name" required>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="exampleInputEmail1">CIN Number</label>
                                    <input type="text" name="cinno" id="cinno" value="<?php echo $companydata['cinno'] ?>" class="form-control" aria-describedby="emailHelp" placeholder="CIN No." required>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Email1</label>
                                    <input type="email" name="email1" id="email1" value="<?php echo $companydata['email1'] ?>" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" class="form-control" placeholder="Email1" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Email2</label>
                                    <input type="email" name="email2" id="email2" value="<?php echo $companydata['email2'] ?>" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" class="form-control" placeholder="Email2" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">1. Phone Number</label>
                                    <input type="tel" name="phonenum1" id="phonenum1" value="<?php echo $companydata['phonenum1'] ?>" pattern="[6 7 8 9][0-9]{9}" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">2. Phone Number</label>
                                    <input type="tel" name="phonenum2" id="phonenum2" value="<?php echo $companydata['phonenum2'] ?>" pattern="[6 7 8 9][0-9]{9}" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">CEO Name</label>
                                    <input type="text" name="ceoname" id="ceoname" value="<?php echo $companydata['ceoname'] ?>" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">CTO Name</label>
                                    <input type="text" name="ctoname" id="ctoname" value="<?php echo $companydata['ctoname'] ?>" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" name="address" id="address" value="<?php echo $companydata['address'] ?>" class="form-control" placeholder="Address" required>
                                </div>
  
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">logo</label>
                                    <input type="file" name="logo" id="logo" value="<?php echo $companydata['logo'] ?>" class="form-control" placeholder="Address" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">headerimage</label>
                                    <input type="file" name="headerimage" id="headerimage" value="<?php echo $companydata['headerimage'] ?>" class="form-control" placeholder="Address" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">footerimage</label>
                                    <input type="file" name="footerimage" id="footerimage" value="<?php echo $companydata['footerimage'] ?>" class="form-control" placeholder="Address" >
                                </div>

                                
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">backgroundimage</label>
                                    <input type="file" name="backgroundimage" id="backgroundimage" value="<?php echo $companydata['backgroundimage'] ?>" class="form-control" placeholder="Address" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">CompanyStamp1</label>
                                    <input type="file" name="companystamp1" id="companystamp1" value="<?php echo $companydata['companystamp1'] ?>" class="form-control" placeholder="Address" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">ComapanyStamp2</label>
                                    <input type="file" name="companystamp2" id="companystamp2" value="<?php echo $companydata['companystamp2'] ?>" class="form-control" placeholder="Address" >
                                </div>






                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
   

    <!-- <script>
        $(document).ready(function(){
            $("#updateForm").submit(function(e){
                e.preventDefault(); // Prevent default form submission

                $.ajax({
                    url: " //base_url('/companylistupdate') ?>", // Update URL
                    type: "POST",
                    data: $(this).serialize(), // Send form data
                    dataType: "json",
                    success: function(response) {
                        let msgBox = $("#message");
                        if (response.status === "success") {
                            msgBox.removeClass("error").addClass("success").text(response.message).fadeIn();
                        } else {
                            msgBox.removeClass("success").addClass("error").text(response.message).fadeIn();
                        }
                        setTimeout(() => { msgBox.fadeOut(); }, 3000); // Hide message after 3 seconds
                    },
                    error: function() {
                        alert("Something went wrong!");
                    }
                });
            });
        });
    </script>
           -->