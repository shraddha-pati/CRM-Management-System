<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

<div class="page-wrapper">
    
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Fee List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Action</th>

                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Course Name</th>
                                        <th>Course Duration</th>
                                        <th>Course Duedate</th>
                                        <th>Total Fee</th>
                                        <th>Fee Paid</th>
                                        <th>Remaining Fee</th>
                                        <th>Mode of Payment</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($fee as $row):
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td>
                                                <?php echo '<a href="' . base_url('/Admin/Fee/edit/') . $row['id'] . '"><div style="width: 60px; border:1px solid #2962ff;text-align:center;border-radius:5px;background-color: #2962ff !important;;color:white">Edit</div></a>' ?> <br>
                                                <?php echo '<a href="' . base_url('/Admin/Fee/delete/') . $row['id'] . '"><div style="width: 60px; border:1px solid red;text-align:center;border-radius:5px;background-color: red !important;;color:white">Delete</div></a>' ?>
                                            </td>
                                            <td><?php echo $row['sid'] ?></td>
                                            <td> <?php echo $row['sname'] ?></td>
                                            <td> <?php echo $row['cname'] ?></td>
                                            <td> <?php echo $row['duration'] ?></td>
                                            <td> <?php echo $row['duedate'] ?></td>
                                            <td> <?php echo $row['totalfee'] ?></td>
                                            <td> <?php echo $row['paidfee'] ?></td>
                                            <td> <?php echo $row['totalfee'] - $row['paidfee'] ?></td>
                                            <td> <?php echo $row['mode'] ?></td>


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
    