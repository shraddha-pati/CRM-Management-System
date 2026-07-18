<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use App\Models\CallInquiryModel;


class CallInquiryMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/CallInquiry/form');
        echo view('/Admin/Footer');
    }


    public function save()
    {
        $PhoneNo = $this->request->getVar('whatsappno');
        $Discription = $this->request->getVar('Discription');
        @$digits = substr($PhoneNo, -4);
        @$Password = 'wolfox@' . $digits;

        $CallSave = [
            'whatsappno' => $PhoneNo,
            'discription' => $Discription,
            'inquirytype'=>1,
            'password' => $Password
        ];

        $AdmissionModel = new AdmissionModel();
        $data1 = $AdmissionModel
        ->where('phoneno', $PhoneNo)
        ->orWhere('whatsappno',$PhoneNo)
        ->first();

    
        if (!empty($data1)) {
            if ($data1['phoneno'] == $PhoneNo || $data1['whatsappno'] == $PhoneNo) {
                session()->setFlashdata('phone', '<b style="color:red;">Phone Number Already Exist!</b>');
                return redirect()->to(base_url('/Admin/CallInquiry/Form'));
            }
        } else {
            $AdmissionModel->insert($CallSave);
            $data = $AdmissionModel->getInsertID();

            if ($data) {
                session()->setFlashdata('success', '<b style="color:green;">Call Inquiry Added Successfully!</b>');
                return redirect()->to(base_url('/Admin/CallInquiry/List'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/CallInquiry/Form'));
            }
        }
    }

    public function list()
    {
        $AdmissionModel = new AdmissionModel();
        $data['CallData'] = $AdmissionModel
        ->where('flag', '0')
        ->where('status', '0')
        ->where('discription !=', '0')
        ->where('inquirytype',1)
        ->orderBy('status', 'ASC')
        ->orderBy('inquirydate', 'DESC')
        ->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/CallInquiry/list', $data);
        echo view('/Admin/Footer');
    }


    public function edit($id = null)
    {
        $CallInquiryModel = new CallInquiryModel();
        $data['CallData'] = $CallInquiryModel->find($id);

        echo view('/Admin/Header');
        echo view('/Admin/CallInquiry/Edit', $data);
        echo view('/Admin/Footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id');

        $PhoneNo = $this->request->getVar('PhoneNo');
        $Discription = $this->request->getVar('Discription');

        $CallSave = [
            'phoneno' => $PhoneNo,
            'discription' => $Discription
        ];

        
            $CallInquiryModel = new CallInquiryModel();
            $data = $CallInquiryModel->where('id', $id)->update($id, $CallSave);
    
            if ($data) {
    
                echo '<script type="text/javascript">';
                echo 'alert("Information Updated Successfully!");';
                echo 'window.location.href = "' . base_url('/Admin/CallInquiry/List') . '";';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error Occured!");';
                echo 'window.location.href = "' . base_url('/Admin/CallInquiry/List') . '";';
                echo '</script>';
            }

        

       
    }
}
