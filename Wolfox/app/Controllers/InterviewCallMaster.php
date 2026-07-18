<?php

namespace App\Controllers;

use App\Models\InterviewModel;
use App\Models\AdmissionModel;
use CodeIgniter\HTTP\ResponseInterface;



class InterviewCallMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/InterviewCall/interviewcallmaster');
        echo view('/Admin/Footer');
    }


    public function save()
    {
        // $db = \Config\Database::connect();
        // $InterviewModel = new InterviewModel();

        // $Studentid = $this->request->getVar('Studentid');


        // $AdmissionModel = new AdmissionModel();
        // $student = $AdmissionModel->where('id', $Studentid)->first();

        // if (!$student) {
        //     session()->setFlashdata('id', '<b style="color:red;">Student ID Not Found</b>');
        //     return redirect()->to(base_url('/Admin/InterviewCall/Add'));
        // }


        // $Interview = [
        //     'studentid'   => $Studentid,
        //     'firstname'   => $student['firstname'],
        //     'middlename'  => $student['middlename'],
        //     'lastname'    => $student['lastname'],
        //     'phoneno'    => $student['phoneno'],
        //     'companyname' => $this->request->getVar('CompanyName'),
        //     'mode'        => $this->request->getVar('Mode'),
        //     'date'        => $this->request->getVar('Date'),
        //     'role'        => $this->request->getVar('Role'),
        //     'status'      => $this->request->getVar('Status'),
        // ];
        // print_r(  $Interview);exit;


        //     $InterviewModel->insert($Interview);
        //     $data = $InterviewModel->getInsertId();

        //     if ($data) {
        //         session()->setFlashdata('success', '<b style="color:green;">Interview Call Added Successfully!</b>');
        //         return redirect()->to(base_url('/Admin/InterviewCall/list'));
        //     } else {
        //         session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
        //         return redirect()->to(base_url('/Admin/InterviewCall/Add'));
        //     }
        // }

        // $Studentid=$this->request->getvar('Studentid');//exit;
        $FirstName = $this->request->getVar('FirstName');
        $MiddleName = $this->request->getVar('MiddleName');
        $LastName = $this->request->getVar('LastName');
        $Phoneno = $this->request->getVar('Phoneno');
        $NoOfCalls = $this->request->getVar('NoOfCalls');
        $CompanyName = $this->request->getVar('CompanyName');

        $Mode = $this->request->getVar('Mode');


        $Date = $this->request->getVar('Date');
        $Role = $this->request->getVar('Role');
        $Status = $this->request->getVar('Status');


        // 	//  $CompanyName=mb_convert_encoding($CompanyName,'UTF-8','auto');
        // 	// // print_r($CompanyName);exit;
        // 	//  $CompanyName_json=json_encode($CompanyName,JSON_UNESCAPED_UNICODE);

        // 	//   $Mode=mb_convert_encoding($Mode,'UTF-8','auto');
        // 	// // print_r($CompanyName);exit;
        // 	//  $Mode_json=json_encode($Mode,JSON_UNESCAPED_UNICODE);

        // 	//   $Date=mb_convert_encoding($Date,'UTF-8','auto');
        // 	// // print_r($CompanyName);exit;
        // 	//  $Date_json=json_encode($Date,JSON_UNESCAPED_UNICODE);

        // 	//   $Role=mb_convert_encoding($Role,'UTF-8','auto');
        // 	// // print_r($CompanyName);exit;
        // 	//  $Role_json=json_encode($Role,JSON_UNESCAPED_UNICODE);

        // 	//   $Status=mb_convert_encoding($Status,'UTF-8','auto');
        // 	// // print_r($CompanyName);exit;
        // 	//  $Status_json=json_encode($Status,JSON_UNESCAPED_UNICODE);


        $Interview = [
            //'studentid'=>$Studentid,
            'firstname' => $FirstName,
            'middlename' => $MiddleName,
            'lastname' => $LastName,
            'phoneno' => $Phoneno,
            'noofcalls' => $NoOfCalls,
            'companyname' => $CompanyName,
            'mode' => $Mode,
            'date' => $Date,
            'role' => $Role,
            'status' => $Status
        ];
        // 	//print_r( $Interview);
        // 	//exit;


        $InterviewModel = new InterviewModel();
        $InterviewModel->insert($Interview); //exit;
        $data = $InterviewModel->getInsertId();


        if ($Interview) {

            session()->setFlashdata('success', '<b style="color:green;">Interview Call Added Successfully!</b>');
            return redirect()->to(base_url('/Admin/InterviewCall/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/InterviewCall/Add'));
        }
    }

    public function list()
    {


        $InterviewModel = new InterviewModel();
        $data['interviewdata'] = $InterviewModel->select("id,
  
        firstname, 
        middlename, 
        lastname, 
        phoneno,
        GROUP_CONCAT(companyname SEPARATOR ', ') AS companynames, 
        GROUP_CONCAT(mode SEPARATOR ', ') AS modes, 
        GROUP_CONCAT(date SEPARATOR ', ') AS dates, 
        GROUP_CONCAT(role SEPARATOR ', ') AS roles, 
		  GROUP_CONCAT(status SEPARATOR ', ') AS status, 
        COUNT(*) as total
    ")
            ->groupBy('phoneno')
            ->orderBy('total', 'DESC')
            ->findAll();
        echo view('/Admin/header');

        echo view('/Admin/InterviewCall/interviewcalllist', $data);
    }

    public function edit($id = null)


    {
        $InterviewModel = new InterviewModel();

        $data['interviewdata'] = $InterviewModel->WHERE('id', $id)->first();

        echo view('/Admin/Header');
        echo view('/Admin/InterviewCall/interviewcalledit', $data);
        echo view('/Admin/Footer');
    }
    public function update()
    {
        // $id = $this->request->getVar('id');
        $id = $this->request->getVar('id');
        $studentid = $this->request->getVar('studentid');
        $firstname = $this->request->getVar('FirstName');
        $middlename = $this->request->getVar('MiddleName');
        $lastname = $this->request->getVar('LastName');
        $companyname = $this->request->getVar('CompanyName');
        $mode        = $this->request->getVar('mode');
        $date        = $this->request->getVar('Date');
        $role       = $this->request->getVar('Role');
        $status      = $this->request->getVar('Status');

        $Interview = [
            //'fullname' => $FullName
            'studentid'   => $studentid,
            'firstname'   => $firstname,
            'middlename'  => $middlename,
            'lastname'    => $lastname,
            'companyname' => $companyname,
            'mode'        => $mode,
            'date'        => $date,
            'role'        => $role,
            'status'      => $status
        ];

        //print_r( $Interview);
        //exit;


        $InterviewModel = new InterviewModel();

        if ($InterviewModel->update($id, $Interview)) {
            session()->setFlashdata('success', '<b style="color:green;">Interview Call update Successfully!</b>');
            return redirect()->to(base_url('/Admin/InterviewCall/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/InterviewCall/list'));
        }
    }

    public function delete($id = null)
    {

        $InterviewModel = new InterviewModel();
        if ($id) {
            $data = $InterviewModel->where('id', $id)->delete($id);
            if ($data) {
                session()->setFlashdata('success', '<b style="color:green;">Interview Call Deleted Successfully!</b>');
                return redirect()->to(base_url('/Admin/InterviewCall/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/InterviewCall/list'));
            }
        }
    }

    public function fetch($stdid = null)
    {
        //  
        $AdmissionModel = new AdmissionModel();

        $student = $AdmissionModel->select('admission.firstname,admission.middlename,admission.lastname')->where('id', $stdid)->first();

        if ($student) {
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $student
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Student not found'
            ]);
        }

        //   echo  json_encode($student);


    }
}
