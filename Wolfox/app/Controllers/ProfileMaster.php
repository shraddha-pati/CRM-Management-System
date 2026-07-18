<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use App\Models\FeeModel;
use App\Models\StarWeekModel;



class ProfileMaster extends BaseController
{
    public function index()
    {
        echo view('/Student/index');
    }
    public function account()
    {

        $session = session();
        $id = $session->get('id');

        $AdmissionModel = new AdmissionModel();
        // $data['StudentData']=$AdmissionModel->where('id',$id)->first();
        $StarWeekModel = new StarWeekModel();
        $studentData = $AdmissionModel->where('id', $id)->first();

        $db = \Config\Database::connect();
        $FeeModel = new FeeModel();

        // Subquery to get the latest fee record for each student
        $subQuery = $db->table('fee')
            ->select('MAX(id) as id, sid')
            ->groupBy('sid')
            ->getCompiledSelect();
        //print_r($subQuery);exit;
        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
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
            ->findAll();

            $data['starStudent'] = $StarWeekModel
            ->select('starweek.*, admission.profile, admission.id as admission_id')  
            ->join('admission', 'admission.batchid = starweek.batch', 'left')  
            ->where('starweek.batch', $studentData['batchid']) 
            ->orderBy('starweek.id', 'DESC')  
            ->first();
        // print_r($data['StudentData']);
        // echo($data['remainingfee']);exit;
        echo view('/Student/Header');

        echo view('/Student/profile', $data);
    }
}
