<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use App\Models\CourseModel;
use App\Models\BatchModel;
use App\Models\InquiryMasterModel;
use App\Models\FeeModel;
use App\Models\CmsModel;
use App\Models\CollegeModel;
use App\Models\BranchModel;
use CodeIgniter\I18n\Time;




class AdmissionMaster extends BaseController
{
    public function add()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();


        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->findAll();


        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/Admission/form', $data);
        //  echo view('/Admin/Footer');
    }

    public function save()
    {

        // echo 'hello';

        @$id = $this->request->getVar('id');
        @$Status = $this->request->getVar('Status');
        @$Remark = $this->request->getVar('Remark');
        @$Date = $this->request->getVar('Date');


        @$FirstName = ucfirst(strtolower($this->request->getVar('FirstName')));
        @$MiddleName = ucfirst(strtolower($this->request->getVar('MiddleName')));
        @$LastName = ucfirst(strtolower($this->request->getVar('LastName')));
        @$Email = $this->request->getVar('Email');
        @$PhoneNo = $this->request->getVar('PhoneNo');
        $WhatsappNo = $this->request->getVar('WhatsappNo');
        @$Gender = $this->request->getVar('Gender');
        @$DOB = $this->request->getVar('DOB');
        // @$CStreet = $this->request->getVar('CStreet');
        // @$CCity = $this->request->getVar('CCity');
        // @$CState = $this->request->getVar('CState');
        // @$CPincode = $this->request->getVar('CPincode');
        @$PStreet = $this->request->getVar('PStreet');
        @$PCity = $this->request->getVar('PCity');
        @$PState = $this->request->getVar('PState');
        @$PPincode = $this->request->getVar('PPincode');
        @$collegeid = $this->request->getVar('collegeid');
        // $collegevillage = $this->request->getVar('collegevillage');
        @$branchid = $this->request->getVar('branchid');
        @$Year = $this->request->getVar('Year');
        @$Batchid = $this->request->getVar('batchid');
        @$courseid = $this->request->getVar('courseid');
        @$guidename = $this->request->getVar('guidename');
        @$digits = substr($WhatsappNo, -4);
        @$Password = 'wolfox@' . $digits;

        $CourseModel = new CourseModel();
        $data2 = $CourseModel->where('courseid', $courseid)->first();
        // print_r($data2);

        //    exit;

        @$JoiningDate = $this->request->getVar('JoiningDate');

        @$date = new \DateTime($JoiningDate);


        $AdmissionModel = new AdmissionModel();
        $data = $AdmissionModel->select('joiningdate')
            ->where('status', 1)
            ->where('flag', 1)
            ->findAll();
        $count = 0;

        $JoiningMonth = date('m', strtotime($JoiningDate));
        $JoiningYear = date('Y', strtotime($JoiningDate));
        //    exit;


        foreach ($data as $employee) {
            $monthToCheck = date("m", strtotime($employee["joiningdate"]));
            $yearToCheck = date("Y", strtotime($employee["joiningdate"]));


            if ($JoiningMonth === $monthToCheck && $JoiningYear === $yearToCheck) {
                $count++;
            }
        }

        $num = $count + 001;
        $num_padded = str_pad($num, 3, '0', STR_PAD_LEFT);

        $month = strtoupper($date->format('M')); // Output: FEB
        $year = $date->format('y');  // Output: 2025

        $StuydentId = 'WFINT' . $year . '' . $month . '' . $num_padded;




        @$OTP = rand('000001', '999999');


        if (isset($Status)) {

            // echo 'hello';

            if ($Status == 0) {

                $pending = [
                    'status' => $Status,
                    'remark' => $Remark,
                    'nextdate' => $Date

                ];
                $AdmissionModel = new AdmissionModel();
                $data = $AdmissionModel->where('id', $id)->update($id, $pending);

                if ($data) {
                    session()->setFlashdata('success', '<b style="color:green;">Student Inquiry Updated Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/list'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/List'));
                }
            } elseif ($Status == 2) {

                $pending = [
                    'status' => $Status,
                    'remark' => $Remark,
                    'flag' => 2
                ];
                $AdmissionModel = new AdmissionModel();
                $data = $AdmissionModel->where('id', $id)->update($id, $pending);

                if ($data) {
                    session()->setFlashdata('success', '<b style="color:green;">Student Inquiry Updated Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/rejectedList'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/List'));
                }
            } elseif ($Status == 1) {



                $StudentSave = [
                    'status' => $Status,
                    'remark' => $Remark,
                    'nextdate' => $Date,
                    'flag' => 1,
                    'courseid' => 1


                ];

                $feesave =
                    [
                        'totalfee' => 0,
                        'sid' => $id
                    ];


                $admissionmodel = new AdmissionModel();
                $data1 = $admissionmodel->where('id', $id)->update($id, $StudentSave);

                $FeeModel = new FeeModel();
                $FeeModel->insert($feesave);
                $fee = $FeeModel->getInsertID();





                if ($data1 && $fee) {
                    session()->setFlashdata('success', '<b style="color:green;">Student Added Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/List'));
                }
            }
        } else {


            $CourseModel = new CourseModel();
            $data2 = $CourseModel->where('courseid', $courseid)->first();

            //    exit;

            $StudentSave = [

                'firstname' => $FirstName,
                'middlename' => $MiddleName,
                'lastname' => $LastName,
                'email' => $Email,
                'phoneno' => $PhoneNo,
                'whatsappno' => $WhatsappNo,
                'gender' => $Gender,
                'dob' => $DOB,

                'pstreet' => $PStreet,
                'pcity' => $PCity,
                'pstate' => $PState,
                'ppincode' => $PPincode,
                'collegeid' => $collegeid,
                // 'collegevillage' => $collegevillage,
                'year' => $Year,
                'branchid' => $branchid,
                'courseid' => $courseid,
                'guidename' => $guidename,
                // 'duration' => $Duration,
                'batchid' => $Batchid,
                'joiningdate' => $JoiningDate,
                // 'totalfee'=> $data2['fee'],
                'StudentId' => $StuydentId,
                'password' => $Password,
                'flag' => 1,
                'status' => 1


            ];


            $AdmissionModel = new AdmissionModel();
            $data1 = $AdmissionModel
                ->where('phoneno', $PhoneNo)
                ->orWhere('whatsappno', $PhoneNo)
                ->first();


            if (!empty($data1)) {
                if ($data1['phoneno'] == $PhoneNo || $data1['whatsappno'] == $PhoneNo) {
                    session()->setFlashdata('phone', '<b style="color:red;">Phone Number Already Exist!</b>');
                    return redirect()->to(base_url('/Admin/Admission/Form'));
                }
            } else {





                $admissionmodel = new AdmissionModel();
                $admissionmodel->insert($StudentSave);
                $data = $admissionmodel->getInsertID();

                $feesave =
                    [
                        'totalfee' => $data2['fee'],
                        'sid' => $data
                    ];

                $FeeModel = new FeeModel();
                $FeeModel->insert($feesave);
                $fee = $FeeModel->getInsertID();



                if ($data && $fee) {
                    session()->setFlashdata('success', '<b style="color:green;"> Student Added Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/Form'));
                }
            }
        }
    }




    public function list()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

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

        // print_r($data['StudentData']);exit;

        echo view('/Admin/Header');
        echo view('/Admin/Admission/list', $data);
        // echo view('/Admin/Footer');
    }


    public function edit($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->findAll();


        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();


        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*, course.course, batch.starttime, batch.endtime')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->where('admission.id', $id)
            ->first();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/Admission/edit', $data);
        //echo view('/Admin/Footer');
    }
    public function update()
    {

        $id = $this->request->getVar('id');
        $FirstName = ucfirst(strtolower($this->request->getVar('FirstName')));
        $MiddleName = ucfirst(strtolower($this->request->getVar('MiddleName')));
        $LastName = ucfirst(strtolower($this->request->getVar('LastName')));
        $Email = $this->request->getVar('Email');
        $PhoneNo = $this->request->getVar('PhoneNo');
        $WhatsappNo = $this->request->getVar('WhatsappNo');
        $Gender = $this->request->getVar('Gender');
        $DOB = $this->request->getVar('DOB');
        $CStreet = $this->request->getVar('CStreet');
        $CCity = $this->request->getVar('CCity');
        $CState = $this->request->getVar('CState');
        $CPincode = $this->request->getVar('CPincode');
        $PStreet = $this->request->getVar('PStreet');
        $PCity = $this->request->getVar('PCity');
        $PState = $this->request->getVar('PState');
        $PPincode = $this->request->getVar('PPincode');
        $collegeid = $this->request->getVar('collegeid');
        // $collegevillage = $this->request->getVar('collegevillage');
        $branchid = $this->request->getVar('branchid');
        $Year = $this->request->getVar('Year');
        $courseid = $this->request->getVar('courseid');
        // $Duration = $this->request->getVar('Duration');
        $Batchid = $this->request->getVar('batchid');
        $guidename = $this->request->getVar('guidename');


        @$digits = substr($WhatsappNo, -4);
        @$Password = 'wolfox@' . $digits;


        $JoiningDate = $this->request->getVar('JoiningDate');
        $JoiningMonth = date('m', strtotime($JoiningDate));
        $JoiningYear = date('Y', strtotime($JoiningDate));



        $CourseModel = new CourseModel();
        $data2 = $CourseModel->where('courseid', $courseid)->first();

        // $val1 = 'WFINT24FEB001';
        // $val2 = 'WFINT24FEB002';

        // if($val1 > $val2)
        // {
        //     echo 'val1 is greater';
        // }
        // else
        // {
        //     echo 'val2 is greater';
        // }


        // print_r($data2);

        //    exit;



        $date = new \DateTime($JoiningDate);
        $AdmissionModel = new AdmissionModel();

        $existingDate = $AdmissionModel->select('admission.joiningdate,admission.StudentId')->where('id', $id)->first();




        $existingMonth = date('m', strtotime($existingDate['joiningdate']));
        $existingYear = date('Y', strtotime($existingDate['joiningdate']));


        if ($existingMonth == $JoiningMonth && $existingYear == $JoiningYear) {
            $StudentId = $existingDate['StudentId'];
        } else if ($existingYear == $JoiningYear && $existingMonth != $JoiningMonth) {
            $data = $AdmissionModel->select('joiningdate')
                ->where('status', 1)
                ->where('flag', 1)
                ->findAll();
            $count = 0;

            foreach ($data as $employee) {
                $monthToCheck = date("m", strtotime($employee["joiningdate"]));
                $yearToCheck = date("Y", strtotime($employee["joiningdate"]));


                if ($JoiningMonth == $monthToCheck && $JoiningYear == $yearToCheck) {
                    $count++;
                }
            }

            $num = $count + 001;
            $num_padded = str_pad($num, 3, '0', STR_PAD_LEFT);

            $month = strtoupper($date->format('M'));
            $year = $date->format('y');

            $StudentId = 'WFINT' . $year . '' . $month . '' . $num_padded;
        } else if ($existingYear != $JoiningYear && $existingMonth == $JoiningMonth) {
            $data = $AdmissionModel->select('joiningdate')
                ->where('status', 1)
                ->where('flag', 1)
                ->findAll();
            $count = 0;

            foreach ($data as $employee) {
                $monthToCheck = date("m", strtotime($employee["joiningdate"]));
                $yearToCheck = date("Y", strtotime($employee["joiningdate"]));


                if ($JoiningMonth == $monthToCheck && $JoiningYear == $yearToCheck) {
                    $count++;
                }
            }

            $num = $count + 001;
            $num_padded = str_pad($num, 3, '0', STR_PAD_LEFT);

            $month = strtoupper($date->format('M'));
            $year = $date->format('y');

            $StudentId = 'WFINT' . $year . '' . $month . '' . $num_padded;
        } else if ($existingYear != $JoiningYear && $existingMonth != $JoiningMonth) {
            // $existingYear = date();


            $data = $AdmissionModel->select('joiningdate')
                ->where('status', 1)
                ->where('flag', 1)
                ->findAll();
            $count = 0;

            foreach ($data as $employee) {
                $monthToCheck = date("m", strtotime($employee["joiningdate"]));
                $yearToCheck = date("Y", strtotime($employee["joiningdate"]));



                if ($JoiningMonth == $monthToCheck && $JoiningYear == $yearToCheck) {
                    $count++;
                }
            }

            $num = $count + 001;
            $num_padded = str_pad($num, 3, '0', STR_PAD_LEFT);

            $month = strtoupper($date->format('M'));
            $year = $date->format('y');

            $StudentId = 'WFINT' . $year . '' . $month . '' . $num_padded;
        }

        $StudentSave = [

            'firstname' => $FirstName,
            'middlename' => $MiddleName,
            'lastname' => $LastName,
            'email' => $Email,
            'phoneno' => $PhoneNo,
            'whatsappno' => $WhatsappNo,
            'gender' => $Gender,
            'dob' => $DOB,
            'cstreet' => $CStreet,
            'ccity' => $CCity,
            'cstate' => $CState,
            'cpincode' => $CPincode,
            'pstreet' => $PStreet,
            'pcity' => $PCity,
            'pstate' => $PState,
            'ppincode' => $PPincode,
            'collegeid' => $collegeid,
            // 'collegevillage' => $collegevillage,
            'year' => $Year,
            'branchid' => $branchid,
            'courseid' => $courseid,
            'guidename' => $guidename,
            'batchid' => $Batchid,
            'joiningdate' => $JoiningDate,
            'StudentId' => $StudentId,
            //'password' => $StudentId,
            'guidename' => $guidename,
            'password' => $Password
        ];

        //print_r($StudentSave);exit;
        $feesave =
            [
                'totalfee' => $data2['fee'],
            ];




        $admissionmodel = new AdmissionModel();
        $status = $admissionmodel->where('id', $id)->update($id, $StudentSave);

        $FeeModel = new FeeModel();
        $fee = $FeeModel->where('sid', $id)->update($id, $feesave);

        // echo $id;




        // print_r($status);
        // exit;

        if ($status && $fee) {
            session()->setFlashdata('update', '<b style="color:green;"> Student Updated Successfully!</b>');
            return redirect()->to(base_url('/Admin/Admission/List'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Inquiry/List'));
        }
    }

    public function admit($id = null)
    {

        $InquiryMasterModel = new InquiryMasterModel();
        $data['StudentData'] = $InquiryMasterModel->find($id);


        echo view('/Admin/Header');
        echo view('/Admin/Admission/admit', $data);
        echo view('/Admin/Footer');
    }

    public function joiningletter($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel->find($id);

        $CollegeModel = new CollegeModel();
        $data['collegeData'] = $CollegeModel->findAll();

        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();

        $cmsmodel = new CmsModel();
        $data['companydata'] = $cmsmodel->findAll();
        // print_r($data['StudentData']);
        // exit;
        //echo view('/Admin/Header');
        echo view('/Admin/Admission/joiningletter', $data);

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
        echo view('/Admin/Admission/completionletter', $data);
        //print_r($data);exit;
        //echo view('/Admin/Footer');
    }

    public function rejectedList()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*,admission.id AS studid, course.course, course.fee, batch.batchname, batch.starttime, batch.endtime,branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('branch', 'branch.id = admission.branchid', 'left')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            // ->join('fee', 'fee.sid = admission.id')
            ->where('status', 2)
            ->where('flag', 2)
            ->orderBy('admission.id', 'DESC')
            ->get()
            ->getResultArray();

        echo view('/Admin/Header');
        echo view('/Admin/Admission/rejectedlist', $data);
        echo view('/Admin/Footer');
    }
    public function fee1($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*, course.*, batch.starttime, batch.endtime,fee.*')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('fee', 'fee.sid = admission.id', 'left')

            ->where('fee.id', $id)
            ->first();



        // print_r($data['StudentData']);exit;
        echo view('/Admin/Header');
        echo view('/Admin/Admission/fee1', $data);
        echo view('/Admin/Footer');
    }

    // public function fee1($id = null)
    // {
    //     $BatchModel = new BatchModel();
    //     $data['BatchData'] = $BatchModel->findAll();

    //     $CourseModel = new CourseModel();
    //     $data['CourseData'] = $CourseModel->findAll();

    //     $FeeModel = new FeeModel();
    //     $data['feeData'] = $FeeModel->findAll();

    //     $admissionmodel = new AdmissionModel();
    //     $data['StudentData'] = $admissionmodel
    //         ->select('admission.*, course.course, batch.starttime, batch.endtime')
    //         ->join('course', 'course.courseid = admission.courseid', 'left')
    //         ->join('batch', 'batch.batchid = admission.batchid', 'left')

    //         ->where('admission.id', $id)
    //         ->first();

    //        // print_r($data['StudentData']);exit;
    //     if (empty($data['StudentData'])) {
    //         session()->setFlashdata('error', 'No student data found for the given ID.');
    //         return redirect()->to(base_url('/Admin/Admission/List'));
    //     }

    //     echo view('/Admin/Header');
    //     echo view('/Admin/Admission/fee1', $data);
    //     echo view('/Admin/Footer');
    // }

    public function feesave()
    {
        // Get data from the form
        $sid = $this->request->getVar('sid');
        $totalfee = $this->request->getVar('totalfee');
        $paidfee = $this->request->getVar('paidfee');
        $mode = $this->request->getVar('mode');
        $transactionid = $this->request->getVar('transactionid');
        $confirmstatus = $this->request->getVar('confirmstatus');
        $remark = $this->request->getVar('remark');
        $feesave = [
            'totalfee' => $totalfee,
            'paidfee' => $paidfee,
            'installment' => $paidfee,
            'remainingfee' => $totalfee - $paidfee,
            'mode' => $mode,
            'transactionid' => $transactionid,
            'installment_number' => 1,
            'confirmstatus' => $confirmstatus,
            'remark' => $remark
        ];

        //    print_r($feesave);
        //     exit;  // Ensure the data is correct

        $FeeModel = new FeeModel();

        $existingFee = $FeeModel->where('sid', $sid)->first();

        // print_r($existingFee);
        // exit;

        if ($existingFee) {

            $data2 = $FeeModel->where('id', $existingFee['id'])
                ->update($existingFee['id'], $feesave);

            if ($data2) {
                session()->setFlashdata('update', '<b style="color:green;">Student Fee Status Updated Successfully!</b>');
                return redirect()->to(base_url('/Admin/Admission/List'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred while updating fee status!</b>');
                return redirect()->to(base_url('/Admin/Admission/List'));
            }
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Student ID does not exist in fee records!</b>');
            return redirect()->to(base_url('/Admin/Admission/List'));
        }
    }

    public function fee2($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->where('sid', $id)->first();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*, course.*, batch.starttime, batch.endtime,fee.*,fee.id as feeid')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('fee', 'fee.sid = admission.id', 'left')
            ->where('fee.id', $id)
            ->first();
        // print_r($data['StudentData']);
        // exit;

        echo view('/Admin/Header');
        echo view('/Admin/Admission/fee2', $data);
        echo view('/Admin/Footer');
    }


    public function fee2save()
    {
        // Get the necessary data from the form
        $sid = $this->request->getVar('sid');
        $totalfee = $this->request->getVar('totalfee');
        $paidfee = $this->request->getVar('paidfee');
        $mode = $this->request->getVar('mode');
        $transactionid = $this->request->getVar('transactionid');
        $confirmstatus = $this->request->getVar('confirmstatus');
        $remark = $this->request->getVar('remark');
        // Load the FeeModel
        $FeeModel = new FeeModel();

        // Debugging: Check the value of $sid
        log_message('debug', 'Received SID: ' . $sid);

        $existingFee = $FeeModel->where('sid', $sid)->orderBy('id', 'DESC')->limit(1)->first();
        // print_r($existingFee);

        if (!$existingFee) {
            log_message('error', 'No fee record found for student with ID: ' . $sid);
        }

        if ($existingFee) {
            $newPaidFee = $existingFee['paidfee'] + $paidfee;
            $newRemainingFee = $existingFee['remainingfee'] - $paidfee;

            if ($existingFee['mode'] == 'online') {
                $feesave = [
                    'sid' => $sid,
                    'totalfee' => $totalfee,
                    'installment' => $paidfee,
                    'paidfee' => $newPaidFee,
                    'remainingfee' => $newRemainingFee,
                    'mode' => $mode,
                    'transactionid' => $transactionid,
                    'confirmstatus' => $confirmstatus,
                    'remark' => $remark
                ];
                if ($FeeModel->where('id', $existingFee['id'])->update($existingFee['id'], $feesave)) {
                    session()->setFlashdata('update', '<b style="color:green;">Next Installment Recorded Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred while updating fee status!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                }
            } else {

                $feesave = [
                    'sid' => $sid,
                    'totalfee' => $totalfee,
                    'installment' => $paidfee,
                    'paidfee' => $newPaidFee,
                    'remainingfee' => $newRemainingFee,
                    'mode' => $mode,
                    'transactionid' => $transactionid,
                    'installment_number' => $existingFee['installment_number'] + 1,
                    'remark' => $remark
                ];
                // print_r($feesave);exit;
                $insertId = $FeeModel->insert($feesave);

                if ($insertId) {
                    session()->setFlashdata('update', '<b style="color:green;">Next Installment Recorded Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred while updating fee status!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                }
            }
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Student ID does not exist in fee records!</b>');
            return redirect()->to(base_url('/Admin/Admission/List'));
        }
    }

    public function fee3($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->where('sid', $id)->first();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*, course.*, batch.starttime, batch.endtime,fee.*,fee.id as feeid')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('fee', 'fee.sid = admission.id', 'left')
            ->where('fee.id', $id)
            ->first();
        // print_r($data['StudentData']);
        // exit;

        echo view('/Admin/Header');
        echo view('/Admin/Admission/fee3', $data);
        echo view('/Admin/Footer');
    }

    public function fee3save()
    {
        // Get the necessary data from the form
        $sid = $this->request->getVar('sid');
        $totalfee = $this->request->getVar('totalfee');
        $paidfee = $this->request->getVar('paidfee');
        $mode = $this->request->getVar('mode');
        $transactionid = $this->request->getVar('transactionid');

        $FeeModel = new FeeModel();

        log_message('debug', 'Received SID: ' . $sid);

        $existingFee = $FeeModel->where('sid', $sid)->orderBy('id', 'DESC')->limit(1)->first();
        // print_r($existingFee);

        if (!$existingFee) {
            log_message('error', 'No fee record found for student with ID: ' . $sid);
        }

        if ($existingFee) {
            $newPaidFee = $existingFee['paidfee'] + $paidfee;
            $newRemainingFee = $existingFee['remainingfee'] - $paidfee;

            // if ($existingFee['mode'] == 'online') {
            //     $feesave = [
            //         'sid' => $sid,
            //         'totalfee' => $totalfee,
            //         'installment' => $paidfee,
            //         'paidfee' => $newPaidFee,
            //         'remainingfee' => $newRemainingFee,
            //         'mode' => $mode,
            //         'transactionid' => $transactionid
            //     ];
            //     if ($FeeModel->where('id', $existingFee['id'])->update($existingFee['id'], $feesave)) {
            //         session()->setFlashdata('update', '<b style="color:green;">Next Installment Recorded Successfully!</b>');
            //         return redirect()->to(base_url('/Admin/Admission/List'));
            //     } else {
            //         session()->setFlashdata('error', '<b style="color:red;">Error Occurred while updating fee status!</b>');
            //         return redirect()->to(base_url('/Admin/Admission/List'));
            //     }
            // } else {

            $feesave = [
                'sid' => $sid,
                'totalfee' => $totalfee,
                'installment' => $paidfee,
                'paidfee' => $newPaidFee,
                'remainingfee' => $newRemainingFee,
                'mode' => $mode,
                'transactionid' => $transactionid,
                'installment_number' => $existingFee['installment_number'] + 1,
            ];
            // print_r($feesave);exit;
            $insertId = $FeeModel->insert($feesave);

            if ($insertId) {
                session()->setFlashdata('update', '<b style="color:green;">Next Installment Recorded Successfully!</b>');
                return redirect()->to(base_url('/Admin/Admission/List'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred while updating fee status!</b>');
                return redirect()->to(base_url('/Admin/Admission/List'));
            }
        }
        // } else {
        //     session()->setFlashdata('error', '<b style="color:red;">Student ID does not exist in fee records!</b>');
        //     return redirect()->to(base_url('/Admin/Admission/List'));
        // }
    }

    // } else {
    //     session()->setFlashdata('error', '<b style="color:red;">Student ID does not exist in fee records!</b>');
    //     return redirect()->to(base_url('/Admin/Admission/List'));
    // }




    public function saveFee()
    {
        $sid = $this->request->getVar('sid');
        $totalfee = $this->request->getVar('totalfee');
        $firstinstallment = $this->request->getVar('firstinstallment');
        $remainingfee = $this->request->getVar('remainingfee');
        $installment = $this->request->getVar('installment');
        $mode = $this->request->getVar('mode');
        $transactionid = $this->request->getVar('transactionid');

        $FeeModel = new FeeModel();

        if ($this->request->getVar('firstinstallment') != '') {
            // First time payment (new record)
            $data = [
                'sid' => $sid,
                'totalfee' => $totalfee,
                'paidfee' => $firstinstallment,
                'remainingfee' => $totalfee - $firstinstallment,
                'mode' => $mode,
                'transactionid' => $transactionid,
                'installment_number' => 1,
            ];
            $FeeModel->where('id', $sid)->update($data);
        } else {
            $data = [
                'sid' => $sid,
                'paidfee' => (float)$firstinstallment + (float)$remainingfee,
                'remainingfee' => (float)$remainingfee - (float)$installment,
                'mode' => $mode,
                'transactionid' => $transactionid,
                'installment_number' => $this->request->getVar('installment_number') + 1,
            ];
            $FeeModel->insert($data);
        }

        session()->setFlashdata('update', '<b style="color:green;"> Student Fee Status Updated Successfully!</b>');
        return redirect()->to(base_url('/Admin/Admission/List'));
        //return redirect()->to('/Admin/Admission/List');
    }

    public function ban()
    {

        $AdmissionModel = new AdmissionModel();

        $sid = $this->request->getVar('banid');

        $array = [
            'status' => 4
        ];

        $data = $AdmissionModel->where('id', $sid)->update($sid, $array);
        if ($data) {
            session()->setFlashdata('ban', '<b style="color:green;"> Student banned Successfully!</b>');
            return redirect()->to(base_url('/Admin/Admission/List'));
        }
    }

    public function banlist()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->findAll();

        $CollegeModel = new CollegeModel();
        $data['collegeData'] = $CollegeModel->findAll();

        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*,admission.id AS studid, fee.*, course.course, course.fee, batch.batchname, batch.starttime, batch.endtime,branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('branch', 'branch.id = admission.branchid', 'left')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('fee', 'fee.sid = admission.id')
            ->where('status', 4)
            ->orderBy('admission.id', 'DESC')
            ->groupBy('fee.sid')
            ->findAll();

        //print_r($data['StudentData']);exit;
        echo view('/Admin/Header');
        echo view('/Admin/Admission/banlist', $data);
    }

    public function unban()
    {

        $AdmissionModel = new AdmissionModel();

        $sid = $this->request->getVar('banid');

        $array = [
            'status' => 1
        ];

        $data = $AdmissionModel->where('id', $sid)->update($sid, $array);
        if ($data) {
            session()->setFlashdata('ban', '<b style="color:green;"> Student Unbanned Successfully!</b>');
            return redirect()->to(base_url('/Admin/Admission/List'));
        }
    }

    public function reportlist()
    {
        $CollegeModel = new CollegeModel();
        $data['collegeData'] = $CollegeModel;
        $AdmissionModel = new AdmissionModel();

        $data['reportData'] = $AdmissionModel
            ->select('admission.*, collegename.collegename AS collegename, batch.*')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->where('admission.reportimage IS NOT NULL')
            ->where('admission.reportimage !=', '')
            ->findAll();

        echo view('Admin/Header');
        echo view('/Admin/Admission/reportlist', $data);
        echo view('Admin/Footer');
    }


    public function checkFeeStatus()
    {
        $sid = $this->request->getVar('sid');
        $FeeModel = new FeeModel();
        try {
            $studentFee = $FeeModel->where('sid', $sid)->orderBy('id', 'DESC')->first();

            if ($studentFee) {
                log_message('debug', 'Student Fee found: ' . print_r($studentFee, true));

                return $this->response->setJSON([
                    'status' => 'exists',
                    'remainingfee' => $studentFee['remainingfee'],
                    'paidfee' => $studentFee['paidfee'],
                    'totalfee' => $studentFee['totalfee']
                ]);
            } else {
                log_message('debug', 'No fee record found for SID: ' . $sid);
                return $this->response->setJSON([
                    'status' => 'not_exists'
                ]);
            }
        } catch (\Exception $e) {
            log_message('error', 'Error in fetching fee status: ' . $e->getMessage());

            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'An error occurred while fetching the fee status.'
            ]);
        }
    }

    public function completedlist()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->findAll();

        $CollegeModel = new CollegeModel();
        $data['collegeData'] = $CollegeModel->findAll();

        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*,admission.id AS studid, fee.*, fee.id as fid,course.course, course.fee, batch.batchname, batch.starttime, batch.endtime,branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('branch', 'branch.id = admission.branchid', 'left')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('fee', 'fee.sid = admission.id')
            ->where('status', 1)
            ->where('flag', 1)
            ->orderBy('admission.id', 'DESC')
            ->findAll();


//    print_r($data['StudentData']);exit;
        //print_r($data['StudentData']);exit;
        echo view('/Admin/Header');
        echo view('/Admin/Admission/compltedlist', $data);
        // echo view('/Admin/Footer');
    }


    public function filteryearwise()
    {

        $year = $this->request->getVar('YearToFilter');
        $month = $this->request->getVar('MonthToFilter');

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('admission.*,admission.id AS studid, fee.*, course.course, course.fee, batch.batchname, batch.starttime, batch.endtime,branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('branch', 'branch.id = admission.branchid', 'left')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('fee', 'fee.sid = admission.id')
            ->where('status', 1)
            ->where('flag', 1)
            ->where('flag', 1)
            ->where('YEAR(joiningdate)', $year)
            ->where('MONTH(joiningdate)', $month)
            ->groupBy('admission.id')

            ->orderBy('admission.id', 'DESC')
            ->findAll();

        // print_r($data['StudentData']);
        // exit;


        echo view('/Admin/Header');
        echo view('/Admin/Admission/searchlist', $data);
    }



    public function documentlist()
    {
        $batchModel = new BatchModel();
        $data['BatchData'] = $batchModel->findAll();

        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('
            admission.*, 
            admission.id AS studid, 
            batch.batchid, 
            batch.batchname, 
            batch.starttime, 
            batch.endtime
        ')
            ->join('batch', 'batch.batchid = admission.batchid', 'left') // Join with batch table
            ->where('admission.docstatus !=', 0)
            ->orderBy('admission.id', 'DESC')
            ->findAll();

        echo view('/Admin/Header');
        echo view('Admin/Admission/documentlist', $data);
        echo view('/Admin/Footer');
    }
    public function documentfilter()
    {
        $batchid = $this->request->getVar('batchid');

        $batchModel = new BatchModel();
        $data['BatchData'] = $batchModel->findAll();
        //print_r($data['BatchData']);exit;
        $admissionmodel = new AdmissionModel();
        $data['StudentData'] = $admissionmodel
            ->select('
                        admission.*, 
                        admission.id AS studid, 
                        batch.batchid, 
                        batch.batchname, 
                        batch.starttime, 
                        batch.endtime
                    ')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->where('admission.docstatus !=', 0)
            ->where('admission.batchid', $batchid)
            ->orderBy('admission.id', 'DESC')
            ->findAll();
        // print_r($data['StudentData']);exit;


        echo view('/Admin/Header');
        echo view('Admin/Admission/documentfilter', $data);
        echo view('/Admin/Footer');
    }

    public function documentverify()
    {
        $cmsmodel = new CmsModel();
        $companydata = $cmsmodel->findAll();

        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $remark = $this->request->getVar('remark');

        $documentData = [
            'docstatus' => $status,
            'docremark' => $remark,
        ];

        $admissionModel = new AdmissionModel();


        $student = $admissionModel->find($id);

        if (!$student) {
            session()->setFlashdata('error', '<b style="color:red;"> Student not found!</b>');
            return redirect()->to(base_url('/Admin/Admission/documentList'));
        }

        $update = $admissionModel->update($id, $documentData);

        if ($update) {

            $student = $admissionModel->find($id);

            $session = session();

            $to = $student['email'];
            $subject = 'Document Verification Status';


            $statusMessage = "";

            if ($status == 1) {
                $statusMessage = "<p><b>Documents Verified Successfully!</b></p>";
            } elseif ($status == 2) {
                if ($student['docremark'] == 1) {
                    $statusMessage = "<p><b>Aadhar Card is not Valid.</b></p>";
                } elseif ($student['docremark'] == 2) {
                    $statusMessage = "<p><b>College Document is not Valid.</b></p>";
                } elseif ($student['docremark'] == 3) {
                    $statusMessage = "<p><b>ID size photo is not valid.</b></p>";
                } elseif ($student['docremark'] == 4) {
                    $statusMessage = "<p><b>CV is not valid.</b></p>";
                } elseif ($student['docremark'] == 5) {
                    $statusMessage = "<p><b> Documents are not Valid.</b></p>";
                }
            }

            $message = '
            <!DOCTYPE html>
            <html>
            <head>

                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        padding: 20px;
                    }
                    .email-container {
                         background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                    }
                    h2 {
                        color: #333; 
                    }
                    p {
                        color: ;
                        line-height: 1.6;
                    }
                    
                   
                    .btn {
                        display: inline-block;
                        padding: 10px 20px;
                        color: #fff;
                        background: #007bff;
                        text-decoration: none;
                        border-radius: 5px;
                        margin-top: 10px;
                    }
                </style>
            </head>
            <body>
               <div class="email-container">
<div style="background: #0073e6; padding: 20px; text-align: center;">
                    <img src="' . base_url('/uploads/CmsMaster/' . $companydata[0]['id'] . '/' . $companydata[0]['logo']) . '" alt="Company Logo" style="max-width: 150px;">
                </div>
 <h2 style="color: #333; text-align: center; margin-bottom: 20px;">Document Verification Status</h2>
      <p style="font-size: 16px; color: #555; line-height: 1.6;">Hello <b>' . $student['firstname'] . '</b>,</p>
    <p style="font-size: 16px; color: #555;">Warm regards from <b>' . $companydata[0]['name'] . '</b>.  We have reviewed your uploaded documents for verification.</p>
    
    <p style="font-size: 16px; color: #333;"><b>Status:</b> </p>' . $statusMessage . '

    <p style="font-size: 16px; color: #555;">If you have any questions or need further assistance, do not hesitate to contact us at:</p>
   <p style="font-size: 16px; color: #333;"><b>Email:</b> ' . $companydata[0]['email1'] . '<br>
                       <b>Phone:</b> ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="font-size: 16px; color: #555;">Thank you for choosing <b>WOLFOX SERVICES PVT. LTD.</b></p>


    <!-- FOOTER -->
                <div style="background:black; color: #ffffff; text-align: center; padding: 15px;">
                    <p style="margin: 5px 0; font-size: 14px;"><b>' . $companydata[0]['name'] . '</b></p>
                    <p style="margin: 5px 0; font-size: 14px;">' . $companydata[0]['address'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;">Phone: ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;"><a href="http://www.wolfox.in" target="_blank" style="color:rgb(0, 85, 212); text-decoration: none;">www.wolfox.in</a></p>
                </div>
            </div>
        
</div>

            </body>
            </html>';

            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('sawantsuraj8413@gmail.com', 'Wolfox');
            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                echo "Email sent successfully";
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }

            session()->setFlashdata('update', '<b style="color:green;"> Document Status Updated Successfully!</b>');
            return redirect()->to(base_url('/Admin/Admission/documentList'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Admission/documentList'));
        }
    }

    public function feereceipt($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $cmsMaster = new CmsModel();
        $data['companydata'] = $cmsMaster->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->where('sid', $id)->findAll();

        if (!empty($data['feeData'])) {
            $feeAmount = $data['feeData'][0]['paidfee'];
        } else {
            $feeAmount = 0;
        }

        $amountInWords = $this->convert_number_to_words($feeAmount);
        $data['AmountInWords'] = $amountInWords;

        $db = \Config\Database::connect();
        $admissionModel = new AdmissionModel();

        $subQuery = $db->table('fee')
            ->select('id, sid, cashdate')
            ->where('sid', $id)
            ->orderBy('cashdate', 'DESC')
            ->limit(1)
            ->getCompiledSelect();

        $data['StudentData'] = $admissionModel
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
            ->first();

        $joiningDate = $data['StudentData']['joiningdate'];
        $joiningYear = date('Y', strtotime($joiningDate));
        $currentYear = date('Y');

        $receiptCount = $db->table('fee')
            ->where('sid', $id)
            ->where('YEAR(cashdate)', $currentYear)
            ->countAllResults();

        $formattedReceiptCount = str_pad($receiptCount, 4, '0', STR_PAD_LEFT);

        $data['receiptNumber'] = $currentYear . $formattedReceiptCount;

        echo view('/Admin/Admission/feereceipt', $data);
    }



    private function convert_number_to_words($feeAmount)
    {
        $words = array(
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
            20 => 'Twenty',
            30 => 'Thirty',
            40 => 'Forty',
            50 => 'Fifty',
            60 => 'Sixty',
            70 => 'Seventy',
            80 => 'Eighty',
            90 => 'Ninety'
        );

        if (!is_numeric($feeAmount) || $feeAmount < 0) {
            return 'Invalid amount';
        }

        // For amounts less than 21, directly return the word
        if ($feeAmount <= 20) {
            return $words[$feeAmount];
        }

        // Handle larger numbers (hundreds, thousands, etc.)
        $result = "";

        // Handling thousands (e.g., 3000)
        if ($feeAmount >= 1000) {
            $thousands = intval($feeAmount / 1000);
            $feeAmount = $feeAmount % 1000;
            $result .= $words[$thousands] . " Thousand ";
        }

        // Handling hundreds (e.g., 1234)
        if ($feeAmount >= 100) {
            $hundreds = intval($feeAmount / 100);
            $feeAmount = $feeAmount % 100;
            $result .= $words[$hundreds] . " Hundred ";
        }

        // Handling tens (e.g., 45, 99, 20)
        if ($feeAmount >= 20) {
            $tens = intval($feeAmount / 10) * 10;
            $feeAmount = $feeAmount % 10;
            $result .= $words[$tens] . " ";
        }

        // Handling ones (e.g., 5, 8)
        if ($feeAmount > 0) {
            $result .= $words[$feeAmount];
        }

        return trim($result);  // Remove any extra spaces
    }

    public function confirmPayment()
    {
        $sid = $this->request->getVar('sid');

        $FeeModel = new FeeModel();

        $latestFeeRecord = $FeeModel->where('sid', $sid)->orderBy('id', 'DESC')->first();

        if ($latestFeeRecord) {
            $update = [
                'confirmstatus' => 1,
                'remark' => 'Fee Receipt Confirmed Successfully.'
            ];

            $result = $FeeModel->where('id', $latestFeeRecord['id'])->set($update)->update();

            if ($result) {
                session()->setFlashdata('update', '<b style="color:green;"> Fee Receipt Updated Successfully!</b>');
            } else {
                session()->setFlashdata('update', '<b style="color:red;"> Error updating the fee receipt.</b>');
            }
        } else {
            session()->setFlashdata('update', '<b style="color:red;"> No fee record found for the given student ID.</b>');
        }

        return redirect()->to(base_url('/Admin/Admission/List'));
    }

    public function confirmDocument()
    {
        $sid = $this->request->getVar('sid');

        $confirmstatus = $this->request->getVar('confirmstatus');
        $remark = $this->request->getVar('remark');

        $FeeModel = new FeeModel();
        $latestFeeRecord = $FeeModel->where('sid', $sid)->orderBy('id', 'DESC')->first();

        //if ($latestFeeRecord) {
        $update = [
            'confirmstatus' => $confirmstatus,
            'remark' => $remark
        ];
        // print_r($update);exit;
        $result = $FeeModel->where('id', $latestFeeRecord['id'])->set($update)->update();

        if ($result) {
            session()->setFlashdata('update', '<b style="color:green;"> Fee Receipt Updated Successfully!</b>');
        } else {
            session()->setFlashdata('update', '<b style="color:red;"> Error updating the fee receipt.</b>');
        }
        // } else {
        //     session()->setFlashdata('update', '<b style="color:red;"> No fee record found for the given student ID.</b>');
        // }

        return redirect()->to(base_url('/Admin/Admission/List'));
    }
}
