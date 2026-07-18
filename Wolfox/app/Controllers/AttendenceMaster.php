<?php

namespace App\Controllers;

use App\Models\AttendanceModel;
use App\Models\BatchModel;
use App\Controllers\DateTime;
use App\Models\AdmissionModel;
// use App\Controllers\DateTime;


use CodeIgniter\Controller;

class AttendenceMaster extends Controller
{
    
    public function list()
    {
        $attendanceModel = new AttendanceModel();
        $data['AttendanceData']=$attendanceModel->findAll();

        $BatchModel = new BatchModel();
        $data['BatchData']=$BatchModel->findAll();


        echo view('/Admin/Header');  
        echo view('/Admin/Attendence/Attendencelist',$data);

        
    }
    public function slist($batchId = null)
    {
        //$attendanceModel = new AttendanceModel();
        $BatchModel = new BatchModel();
        $AdmissionModel = new AdmissionModel();  

        // $month;
 
        // $monthName = date('F', mktime(0, 0, 0, $month, 10)); 

        // if ($month === null) {
        //     $month = date('m'); 
        // }
    
      
        $data['BatchData'] = $BatchModel->findAll();
    
       
        //$data['AttendanceData'] = $attendanceModel->findAll();
    
        //$data['StudentData'] = $AdmissionModel  ->where('batchid', $batchId)  ->where('MONTH(joiningdate)', $month) ->findAll();
        $data['StudentData'] = $AdmissionModel
        ->select('admission.*, batch.*,attendance.*,course.*,admission.id as studentId')
        ->join('batch', 'batch.batchid = admission.batchid')
        ->join('attendance', 'attendance.sid = admission.id')
        ->join('course', 'course.courseid = admission.courseid')

        ->where('admission.batchid', $batchId)
        ->groupBy('admission.id')
         ->findAll();

        //  print_r($data['StudentData']); exit;
    
      //print_r( $data['StudentData']);exit;
        echo view('/Admin/Header');  
        echo view('/Admin/Attendence/StudentList', $data); 
        echo view('/Admin/Footer');  
    }
    


   
    
    public function mlist()
    {
      
        echo view('/Admin/Header');  
        echo view('/Admin/Attendence/Monthlist');
    }

  



public function batchList($month = null)
 {
        $month;
 
     $monthName = date('F', mktime(0, 0, 0, $month, 10)); 

 $BatchModel = new BatchModel();

      //$currentmonth = date('m');


$data['batches'] = $BatchModel
->select('batch.*')
->where('month', $monthName)
->findAll();


// print_r( $data['batches'] );
// exit;
    // $data['month'] = $currentmonth;


echo view('/Admin/Header');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
echo view('/Admin/Attendence/Attendencelist', $data);
echo view('/Admin/Footer');

}


}
