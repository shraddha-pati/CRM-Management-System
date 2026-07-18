<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use App\Models\CollegeModel;

class SeniorMaster extends BaseController
{
    public function index()
    {
        $admissionModel = new AdmissionModel();
        $collegeModel = new CollegeModel();
    
        $session = session();
        $studentId = $session->get('id');
    
        if (!$studentId) {
            return redirect()->to('/login')->with('error', 'Student not found');
        }
    
        $loggedInStudent = $admissionModel->find($studentId);
    
        if (!$loggedInStudent || !isset($loggedInStudent['collegeid'])) {
            return redirect()->to('/error')->with('error', 'College ID not found in student record.');
        }
    
        $collegeId = $loggedInStudent['collegeid'];
        $collegeRecord = $collegeModel->find($collegeId);
    
        if (!$collegeRecord || !isset($collegeRecord['collegename'])) {
            return redirect()->to('/error')->with('error', 'College name not found.');
        }
    
        $collegeName = $collegeRecord['collegename'];
        $currentYear = date("Y");
    
        
        $students = $admissionModel
            ->select('admission.firstname, admission.middlename, admission.lastname, 
                      admission.profile, collegename.collegename, admission.id,
                      YEAR(admission.joiningdate) as admission_year')
            ->join('collegename', 'collegename.id = admission.collegeid')
            ->where('admission.collegeid', $collegeId) 
            ->where('admission.id !=', $studentId)
            ->where('YEAR(admission.joiningdate) <', $currentYear) 
            ->orderBy('admission.firstname', 'ASC')
            ->findAll();
    
       
        $message = empty($students) ? "No senior students found in your college." : "";
        echo view('/Student/Header');
        echo view('Student/seniorlist', [
            'students' => $students,
            'collegeName' => $collegeName,
            'message' => $message
        ]);
    }
    
}    