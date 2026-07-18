<?php

namespace App\Controllers;


use App\Models\AdmissionModel;
use App\Models\CourseModel;
use App\Models\BatchModel;
use App\Models\CmsModel;
use App\Models\FeeModel;
use App\Models\CollegeModel;
use App\Models\BranchModel;


class Letter extends BaseController
{
    public function index()
    {
        $session = session();
        $studentid = $session->get('id');
        $AdmissionModel = new AdmissionModel();

        $data['StudentData'] = $AdmissionModel
            ->select('admission.*, admission.socialflag')
            ->where('admission.id', $studentid)
            ->first();
        
            $data['showModal'] = isset($data['StudentData']) && empty($data['StudentData']['socialflag']);
            $data['studentId'] = $studentid;
        // $data['showModal'] = isset($data['StudentData']) && empty($data['StudentData']['socialflag']);
       
       
       
        $db = \Config\Database::connect();
        $subQuery = $db->table('fee')
            ->select('MAX(id) as id, sid')
            ->groupBy('sid')
            ->getCompiledSelect();

        $AdmissionModel = new AdmissionModel();
        
        $data['StudentData'] = $AdmissionModel
            ->select('admission.*, admission.id AS studid, fee.*, course.course, course.fee, batch.batchname, batch.starttime, batch.endtime, branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join("($subQuery) as latest", 'latest.sid = admission.id', 'left')
            ->join('branch', 'branch.id = admission.branchid', 'left')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('fee', 'fee.id = latest.id', 'left')
            ->where('admission.status', 1)
            ->where('admission.flag', 1)
            ->orderBy('admission.id', 'DESC')
            ->find($studentid);


        // Initialize variables
        // $hasPaidSomeAmount = false;
        // $hasPaidFullAmount = false;
        // $hasCompletedCourse = false;

        // if ($admissionData) {
        //     $hasPaidSomeAmount = ($admissionData->paidfee > 0);
        //     $hasPaidFullAmount = ($admissionData->paidfee >= $admissionData->totalfee);

        //     // Calculate Course End Date
        //     $courseEndDate = date('Y-m-d', strtotime($admissionData->joiningdate . ' + ' . $admissionData->duration . ' days'));

        //     // Check if Course is Completed
        //     $hasCompletedCourse = (date('Y-m-d') >= $courseEndDate);
        // }

        // Pass these variables to the view
        // $data = [
        //     'Admissiondata' => $admissionData,
        //     'hasPaidSomeAmount' => $hasPaidSomeAmount,
        //     'hasPaidFullAmount' => $hasPaidFullAmount,
        //     'hasCompletedCourse' => $hasCompletedCourse
        // ];
    //print_r($data['StudentData']);exit;





    echo view('/Student/Header', $data);

        echo view('/Student/letter', $data);
    }
    public function joiningletter($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel->find($id);

        $cmsmodel = new CmsModel();
        $data['companydata'] = $cmsmodel->findAll();


        //echo view('/Admin/Header');
        echo view('/student/joiningletter', $data);
        //print_r($data);exit;
        //echo view('/Admin/Footer');
    }

    public function completionletter($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*,admission.id AS studid, collegename.collegename AS collegename')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')->find($id);

        $CollegeModel = new CollegeModel();
        $data['collegeData'] = $CollegeModel->findAll();

        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();

        $cmsmodel = new CmsModel();
        $data['companydata'] = $cmsmodel->findAll();
        //print_r($data['collegeData']);exit;
        //echo view('/Admin/Header');
        //echo view('/Admin/Admission/completionletter', $data);


        //echo view('/Admin/Header');
        echo view('/student/completionletter', $data);
    }


    public function setSocialFlag()
    {
        $session = session();
        $userId = $session->get('id');
    
        if (!$userId) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'User not logged in']);
        }
    
        $json = $this->request->getJSON();
        $platform = $json->platform ?? '';
    
        $admissionModel = new AdmissionModel();
    
      
        $admissionModel->update($userId, ['socialflag' => $platform]);
    
        return $this->response->setJSON(['status' => 'success', 'platform' => $platform]);
    }
    
}
