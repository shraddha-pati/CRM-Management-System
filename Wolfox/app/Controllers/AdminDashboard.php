<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use App\Models\BatchModel;
use App\Models\InterviewModel;
use App\Models\ClientModel;
use App\Models\CourseModel;

class AdminDashboard extends BaseController
{
	public function list()
	{
		// 	$AdmissionModel = new AdmissionModel();
		//  $inquiry=$AdmissionModel->where('MONTH(inquirydate)')->countAllResults();
		//  print_r( $inquiry);exit;

		$AdmissionModel = new AdmissionModel();
		$currentMonth = date('m');

		$inquiryCount = $AdmissionModel
			->where("MONTH(inquirydate) =", $currentMonth, false)
			->countAllResults();

		//print_r($inquiryCount);exit;
		$data['inquiryCount'] = $inquiryCount;


		$AdmissionModel = new AdmissionModel();
		$currentMonth = date('m');

		$joiningcount = $AdmissionModel->where("MONTH(joiningdate) =", $currentMonth, false)->countAllResults();
		//print_r( $joiningcount );exit;
		$data['joiningcount'] = $joiningcount;


		$AdmissionModel = new AdmissionModel();
		$currentMonth = date('m');
		$pendingcount = $AdmissionModel->where("MONTH(nextdate) =", $currentMonth, false)->countAllResults();
		//print_r( $pendingcount );exit;
		$data['pendingcount'] = $pendingcount;

		$AdmissionModel = new AdmissionModel();
		$currentMonth = date('m');
		$rejectcount = $AdmissionModel->where('status', 2)->countAllResults();
		//print_r( $rejectcount );exit;
		$data['rejectcount'] = $rejectcount;


		$AdmissionModel = new AdmissionModel();
		$currentMonth = date('m');
		$totaladmission = $AdmissionModel->where("MONTH(inquirydate)=", $currentMonth, false)->countAllResults();
		//print_r( $totaladmission );exit;
		$data['totaladmission'] = $totaladmission;

		
		$BatchModel = new BatchModel();
		//$currentMonth = date('m'); 
		$batchdata = $BatchModel->countAllResults();
		//print_r( $batchdata );exit;
		$data['batchdata'] = $batchdata;


		$CourseModel = new CourseModel();
		$coursedata = $CourseModel->countAllResults();
		//print_r( $coursedata );exit;
		$data['coursedata'] = $coursedata;



		$InterviewModel = new InterviewModel();
		$interviewdata = $InterviewModel->countAllResults();
		//print_r( $interviewdata );exit;
		$data['interviewdata'] = $interviewdata;

		$ClientModel = new ClientModel();
		$clientdata = $ClientModel->countAllResults();
		//print_r( $clientdata );exit;
		$data['clientdata'] = $clientdata;



		echo view('Admin/Header');
		echo view('Admin/Dashboard/dashboard', $data);
		//echo view ('Admin/Footer');

	}
}
