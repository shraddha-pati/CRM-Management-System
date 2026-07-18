 
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
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Batch Time List</h4>
                                 <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Action</th>
                                                 
                                                <th>File Name</th>
                                                <th>Document</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($DocumentData as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td>
                                                <a href="<?php echo base_url('/Admin/Document/delete/'.$row['id'].'')?>"><div style="width: 60px; border:1px solid red;text-align:center;border-radius:5px;background-color: red !important;;color:white">Delete</div></a></td>

                                                <td><?php echo $row['filename'] ?></td> 
                                                <td> <?php echo $row['file'] ?></td>
                                        
                                            </tr>
                                            <?php 
                                            endforeach;
                                            ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
           