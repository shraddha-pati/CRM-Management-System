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
                         <h4 class="card-title">Student Attendence List</h4>




                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table" id="example">
                                     <thead class="bg-success text-white" style="background-color: #2962ff !important;">
                                         <tr>
                                             <th scope="col">Student ID</th>
                                             <th scope="col">Full Name</th>
                                             <th scope="col">Attendence</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php foreach ($StudentData as $student): ?>
                                             <tr>
                                                 <td><?= $student['StudentId']; ?></td>
                                                 <td><?= $student['firstname'] . ' ' . $student['middlename'] . ' ' . $student['lastname']; ?></td>
                                                 <?php
                                                    $joiningdate = $student['joiningdate'];
                                                    $duration = $student['duration'];

                                                    $joiningMonth = date('m', strtotime($joiningdate));
                                                    $joiningDay = date('d', strtotime($joiningdate));
                                                    $joiningYear = date('Y', strtotime($joiningdate));

                                                    if ($joiningDay > 1) {
                                                        $duration++; 
                                                    }

                                                    $monthsLinks = [];
                                                    for ($i = 1; $i <= $duration; $i++) {
                                                        if ($joiningMonth > 12) {
                                                            $joiningMonth = 1;
                                                            $joiningYear++;
                                                        }

                                                        // Get the month name
                                                        $dateObj = DateTime::createFromFormat('!m', $joiningMonth);
                                                        $monthName = $dateObj->format('M');

                                                        // Store the month name and month details for generating the link
                                                        $monthsLinks[] = [
                                                            'monthName' => $monthName,
                                                            'month' => $joiningMonth,
                                                            'year' => $joiningYear
                                                        ];

                                                        // Increment the month for the next iteration
                                                        $joiningMonth++;
                                                    }
                                                    ?>
                                                 <td>
                                                     <?php foreach ($monthsLinks as $monthLink): ?>
                                                        <?php  

$monthName = 'Dec';

// Mapping of month names to their respective month numbers
$months = [
    'Jan' => 1,
    'Feb' => 2,
    'Mar' => 3,
    'Apr' => 4,
    'May' => 5,
    'Jun' => 6,
    'Jul' => 7,
    'Aug' => 8,
    'Sep' => 9,
    'Oct' => 10,
    'Nov' => 11,
    'Dec' => 12
];

// Convert month name to month number
$monthNumber = $months[ $monthLink['monthName']];

// echo $monthNumber;  // Output: 12


                                                         ?>
                                                         <a href="<?php echo base_url('/Student/attendance/document/' . $monthNumber . '/'.$monthLink['year'].'/'.$student['studentId'].''); ?>">View(<?php echo $monthLink['monthName']; ?> <?php echo $monthLink['year']; ?>)</a><br>
                                                     <?php endforeach; ?>
                                                 </td>
                                             </tr>
                                         <?php endforeach; ?>
                                     </tbody>

                                 </table>
                             </div>
                         </div>
                     </div>

                 </div>