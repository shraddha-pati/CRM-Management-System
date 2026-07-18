<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

<div class="page-wrapper">
    
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mentor List</h4>

                        <form action="<?php echo base_url('/Admin/Mentor/mentorfilter') ?>">
                                 <div class="row">
                                     <div class="col-md-6" style="margin-bottom:30px;">
                                         <label for="BatchTime">College </label>
                                         <select name="collegeid" id="collegeid" class="form-control">
                                             <option value="">Select College </option>
                                             <?php 
                                             foreach ($CollegeData as $row) :
                                              ?>
                                                 <option value="<?php echo $row['id']; ?>">
                                                     <?php echo $row['collegename']; ?>
                                                 </option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>

                                     <div class="col-md-2 " style="margin-top:25px;margin-bottom:30px;">

                                         <button type="submit" class="form-control btn-primary">Filter</button>

                                     </div>



                                 </div>

                             </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                    <tr>
                                        <th>Sr.no</th>
                                        <!-- <th>Action</th> -->

                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>College Name</th>
                                        <th>Year</th>
                                        <th>Mentor Name</th>
                                        <th>Contact Number</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mentor as $row):
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td> <?php echo $row['StudentId'] ?></td>
                                            <td> <?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?> <?php echo $row['lastname'] ?></td>
                                            <td> <?php echo $row['collegename'] ?></td>
                                            <td> <?php echo $row['year'] ?></td>
                                            <td> <?php echo $row['mentorname'] ?></td>
                                            <td> <?php echo $row['mentornumber'] ?></td>


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
    