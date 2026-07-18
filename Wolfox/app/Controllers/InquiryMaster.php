<?php

namespace App\Controllers;

use App\Models\InquiryMasterModel;
use App\Models\CallInquiryModel;
use App\Models\AdmissionModel;
use App\Models\FeeModel;
use App\Models\BranchModel;
use App\Models\CollegeModel;



class InquiryMaster extends BaseController
{
    public function add()
    {
        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->findAll();


        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->findAll();


        echo view('/Admin/Header');
        echo view('/Admin/Inquiry/inquiry', $data);
        echo view('/Admin/Footer');
    }
    public function form()
    {
        // echo view('/Admin/Header');
        echo view('/Admin/Inquiry/form');
        // echo view('/Admin/Footer');
    }
    public function save()
    {

        @$id = $this->request->getVar('id');
        @$Status = $this->request->getVar('Status');
        @$Remark = $this->request->getVar('Remark');
        @$Date = $this->request->getVar('Date');
        @$FirstName = ucfirst(strtolower($this->request->getPost('FirstName')));
        @$MiddleName = ucfirst(strtolower($this->request->getPost('MiddleName')));
        @$LastName = ucfirst(strtolower($this->request->getPost('LastName')));
        @$collegeid = $this->request->getvar('collegeid');
        @$WhatsappNumber = $this->request->getvar('WhatsappNumber');
        @$branchid = $this->request->getvar('branchid');
        @$Year = $this->request->getvar('Year');
        @$CollegeVilage = $this->request->getvar('CollegeVilage');
        @$StudentCount = $this->request->getvar('StudentCount');
        @$digits = substr($WhatsappNumber, -4);
        @$Password = 'wolfox@' . $digits; //exit;

        // @$InquiryDate = $this->request->getvar('InquiryDate');

        // @$OTP = rand('000001', '999999');


        if (isset($Status)) {

            if ($Status == '0') {
                $pending = [
                    'status' => $Status,
                    'discription' => $Remark,
                    'nextdate' => $Date

                ];
                $AdmissionModel = new AdmissionModel();
                $data = $AdmissionModel->where('id', $id)->update($id, $pending);

                if ($data) {
                    session()->setFlashdata('success', '<b style="color:green;">Call Inquiry Updated Successfully!</b>');
                    return redirect()->to(base_url('/Admin/CallInquiry/List'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/CallInquiry/List'));
                }
            }

            if ($Status == '2') {
                // echo 'hello';
                // exit;

                $pending = [
                    'Status' => $Status,
                    'discription' => $Remark,
                    'flag' => 2,
                    'status' => 2

                ];
                $AdmissionModel = new AdmissionModel();
                $data = $AdmissionModel->where('id', $id)->update($id, $pending);

                if ($data) {
                    session()->setFlashdata('success', '<b style="color:green;">Call Inquiry Updated Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/rejectedList'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/CallInquiry/List'));
                }
            }
            if ($Status == '1') {





                $InquiryArray = [
                    'flag' => 1,
                    'status' => 1

                ];



                $AdmissionModel = new AdmissionModel();
                $data = $AdmissionModel->where('id', $id)->update($id, $InquiryArray);
                $feesave =
                    [
                        'totalfee' => 0,
                        'sid' => $id
                    ];

                $FeeModel = new FeeModel();
                $FeeModel->insert($feesave);
                $fee = $FeeModel->getInsertID();



                if ($data && $fee) {
                    session()->setFlashdata('success', '<b style="color:green;">Student Added Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Admission/List'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/CallInquiry/List'));
                }
            }
        } else {
            $InquiryArray = [
                'firstname' => $FirstName,
                'middlename' => $MiddleName,
                'lastname' => $LastName,

                'collegeid' => $collegeid,
                'whatsappno' => $WhatsappNumber,
                'branchid' => $branchid,
                'year' => $Year,
                'collegevillage' => $CollegeVilage,
                'studentcount' => $StudentCount,
                'password' => $Password,
                'inquirytype' => 2

            ];
            //print_r( $InquiryArray);exit;

            $AdmissionModel = new AdmissionModel();
            $data1 = $AdmissionModel
                ->where('whatsappno', $WhatsappNumber)
                ->orWhere('phoneno', $WhatsappNumber)
                ->first();

            if (!empty($data1)) {
                if ($data1['phoneno'] == $WhatsappNumber || $data1['whatsappno'] == $WhatsappNumber) {
                    echo 'hello';
                    session()->setFlashdata('success', '<b style="color:red;">Phone Number Already Exist!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/add'));
                }
            } else {
                $AdmissionModel->insert($InquiryArray);
                $a = $AdmissionModel->getInsertID();

                if ($a) {
                    session()->setFlashdata('success', '<b style="color:green;">Student Inquiry Added Successfully!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/list'));
                } else {
                    session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                    return redirect()->to(base_url('/Admin/Inquiry/list'));
                }
            }
        }
    }


    public function list()
    {
        $AdmissionModel = new AdmissionModel();

        $data['InquiryMasterModel'] = $AdmissionModel
            ->select('admission.*, admission.id AS admissionid, branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('branch', 'branch.id = admission.branchid')
            ->join('collegename', 'collegename.id = admission.collegeid')
            ->where('admission.flag', 0)
            ->where('admission.status', '0')
            ->where('admission.inquirytype', 2)
            ->orderBy('admission.status', 'ASC')
            ->orderBy('admission.inquirydate', 'DESC')
            ->findAll();

        echo view('Admin/Header');
        echo view('Admin/Inquiry/inquirylist', $data);
    }

    // $AdmissionModel = new AdmissionModel();
    // $BranchModel = new BranchModel();
    // $CollegeModel = new CollegeModel();

    // $data['InquiryMasterModel'] = $AdmissionModel
    // ->select('admission.*,admission.id As Sid , branch.*,collegename.*')
    // ->join('branch', 'branch.id = admission.branchid')
    // ->join('collegename', 'collegename.id = admission.collegeid')

    //     ->where('admission.flag', 0)
    //     ->where('admission.status', '0')
    //     ->where('admission.inquirytype', 2)
    //     ->orderBy('admission.status', 'ASC')
    //     ->orderBy('admission.inquirydate', 'DESC')
    //     ->findAll();

    //print_r( $data['InquiryMasterModel']);exit;

    //     echo view('Admin/Header');
    //     echo view('Admin/Inquiry/inquirylist', $data);


    public function modal($id = null)
    {

        $InquiryMasterModel = new InquiryMasterModel();
        $data['InquiryMasterModel'] = $InquiryMasterModel->where('id', $id)->first();

        //print_r($data['InquiryMasterModel']);exit;

        echo view('Admin/Header');
        echo view('Admin/Inquiry/modal', $data);
        echo view('Admin/Footer');
    }

    public function edit($id = null)
    {

        $InquiryMasterModel = new InquiryMasterModel();
        $data['InquiryMasterModel'] = $InquiryMasterModel->where('id', $id)->first();

        //print_r($data['InquiryMasterModel']);exit;

        echo view('Admin/Header');
        echo view('Admin/Inquiry/inquiryedit', $data);
        echo view('Admin/Footer');
    }


    public function update()
    {

        $id = $this->request->getVar('id');
        @$FirstName = ucfirst(strtolower($this->request->getPost('FirstName')));
        @$MiddleName = ucfirst(strtolower($this->request->getPost('MiddleName')));
        @$LastName = ucfirst(strtolower($this->request->getPost('LastName')));
        $CollegeName = $this->request->getvar('CollegeName');
        $WhatsappNumber = $this->request->getvar('WhatsappNumber');
        $Branch = $this->request->getvar('Branch');
        $Year = $this->request->getvar('Year');
        @$CollegeVilage = $this->request->getvar('Vilage');
        @$Vilage = $this->request->getvar('CollegeVilage');
        $Status = $this->request->getvar('Status');


        $InquiryArray = [
            'firstname' => $FirstName,
            'middlename' => $MiddleName,
            'lastname' => $LastName,
            'CollegeName' => $CollegeName,
            'WhatsappNumber' => $WhatsappNumber,
            'Branch' => $Branch,
            'Year' => $Year,
            'CollegeVilage' => $CollegeVilage,

        ];
        // print_r($InquiryArray);
        // exit;

        $AdmissionModel = new AdmissionModel();
        $data1 = $AdmissionModel->where('phoneno', $WhatsappNumber)
            ->orWhere('whatsappno', $WhatsappNumber)->first();

        if (!empty($data1)) {
            if ($data1['phoneno'] == $WhatsappNumber) {
                session()->setFlashdata('success', '<b style="color:red;">Phone Number Already Exist!</b>');
                return redirect()->to(base_url('/Admin/Inquiry/Form'));
            }
        } else {
            $InquiryMasterModel = new InquiryMasterModel();
            $status = $InquiryMasterModel->update($id, $InquiryArray);
            if ($status) {
                echo '<script type="text/javascript">';
                echo 'alert("Inquiry Upadate Successfully!");';
                echo 'window.location.href = "' . base_url('/Admin/Inquiry/list') . '"';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error Occured!");';
                echo 'window.location.href = "' . base_url('/Admin/Inquiry/list') . '"';
                echo '</script>';
            }
        }
    }



    public function delete($id = null)
    {

        $InquiryMasterModel = new InquiryMasterModel();
        if ($id) {
            $status = $InquiryMasterModel->where('id', $id)->delete($id);
            if ($status) {
                echo '<script type="text/javascript">';
                echo 'alert("Inquiry Deleted Successfully!");';
                echo 'window.location.href = "' . base_url('/Admin/Inquiry/list') . '"';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error Occured!");';
                echo 'window.location.href = "' . base_url('/Admin/Inquiry/list') . '"';
                echo '</script>';
            }
        }
    }

    public function checknumber($phone = null)
    {
        $AdmissionModel = new AdmissionModel();
        $data = $AdmissionModel->where('phoneno', $phone)->orwhere('whatsappno', $phone)->first();

        if ($data) {
            return $this->response->setJSON([
                'status' => 'failed',
                'message' => 'Mobile Number Already Exist!'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'success'
            ]);
        }
    }

    public function addcollege()
    {

        $college = $this->request->getGet('name');

        $collegesave = [
            'collegename' => $college
        ];

        $CollegeModel = new CollegeModel();
        $CollegeModel->insert($collegesave);
        $data = $CollegeModel->getInsertID();

        if ($data) {
            return $this->response->setJSON([
                'message' => 'success'
            ]);
        }
    }

    public function fetchcollegenames()
    {
        // try {
        $CollegeModel = new CollegeModel();
        $list = $CollegeModel->select('id,collegename')->groupBy('collegename')->findAll();

        if ($list) {
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $list // ✅ Return the full list properly
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'No colleges found'
            ]);
        }
        // } 
        // catch (\Exception $e) {
        //     return $this->response->setJSON([
        //         'status' => 'error',
        //         'message' => $e->getMessage()
        //     ]);
        // }
    }


    // public function pendingList()
    // {
    //     $AdmissionModel = new AdmissionModel();

    //     $data['Inquiry'] = $AdmissionModel
    //         ->select('admission.*, admission.id AS admissionid, branch.branchname AS branchname, collegename.collegename AS collegename')
    //         ->join('branch', 'branch.id = admission.branchid')
    //         ->join('collegename', 'collegename.id = admission.collegeid')
    //         ->where('admission.flag', 0)
    //         ->where('admission.status', 0)
    //         ->where('admission.inquirytype', 2)
            

    //         ->orderBy('admission.status', 'ASC')
    //         ->orderBy('admission.inquirydate', 'DESC')
    //         ->findAll();

             

    //     echo view('Admin/Header');
    //     echo view('Admin/Inquiry/pending', $data);
    // }

    public function pendingList()
    {
        $AdmissionModel = new AdmissionModel();

        $data['Inquiry'] = $AdmissionModel
            ->select('admission.*, admission.id AS admissionid, branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('branch', 'branch.id = admission.branchid')
            ->join('collegename', 'collegename.id = admission.collegeid')
            ->groupStart()
            ->where('admission.flag', 0)
            ->where('admission.status', 0)
            ->whereIn('admission.inquirytype', [1, 2])  // Ensures inquirytype is 1 or 2
            ->groupEnd()
            ->orderBy('admission.status', 'ASC')
            ->orderBy('admission.inquirydate', 'DESC')
            ->findAll();

        // print_r($data['Inquiry']);
        // exit;

        echo view('Admin/Header');
        echo view('Admin/Inquiry/pending',$data);
   }
}
