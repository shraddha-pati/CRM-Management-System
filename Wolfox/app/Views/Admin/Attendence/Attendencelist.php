
       
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
                        <h4 class="page-title">Attendence</h4>
                        <div class="d-flex align-items-center">
                           <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>-->
                        </div>
                    </div>
                    <!--<div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                        </div>
                    </div>
                </div>-->
              </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
        


            <div class="row">

      
    

            <?php if (!empty($batches)) : ?>
    <?php foreach ($batches as $batch) : ?>
        <div class="col-sm-3" style="height:150px;background-color:aquamarine;margin-left:15px;margin-top:15px;">
            <a href="<?= base_url('/Admin/Attendence/slist/' . $batch['batchid']); ?>" style="text-decoration: none; color: inherit;">
                <div>
                    <h1 style="text-align:center;padding:10px;font-size:20px"><?= $batch['batchname']; ?></h1>
                    <h4 style="margin-top: 10px;text-align:center">
                        <?= date("h:i A", strtotime($batch['starttime'])) . ' - ' . date("h:i A", strtotime($batch['endtime'])); ?>
                    </h4>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="text-center">No batches found.</div>
<?php endif; ?>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            </div>