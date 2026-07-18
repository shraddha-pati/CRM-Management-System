<?php

namespace App\Controllers;

use App\Models\CollegeModel;

class CollegeNameMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/CollegeName/add');
        echo view('/Admin/Footer');
    }

    public function save()
    {
        $CollegeName = $this->request->getVar('collegename');

        $CollegeData = [
            'collegename' => $CollegeName
        ];

        $CollegeModel = new CollegeModel();
        $CollegeModel->insert($CollegeData);
        $data = $CollegeModel->getInsertID();

        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> College Added Successfully!</b>');
            return redirect()->to(base_url('collegename/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('collegename/add'));
        }
    }

    public function list()
    {
        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->orderBy('id', 'DESC')->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/CollegeName/list', $data);
        echo view('/Admin/Footer');
    }

    public function edit($id = null)
    {
        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->find($id);

        echo view('/Admin/Header');
        echo view('/Admin/CollegeName/edit', $data);
        echo view('/Admin/Footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id'); //exit; 
        $collegename = $this->request->getVar('collegename'); //exit;   

        $CollegeData = [
            'collegename' => $collegename
        ];

        $CollegeModel = new CollegeModel();
        $data = $CollegeModel->update($id, $CollegeData);


        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> College Name Updated Successfully!</b>');
            return redirect()->to(base_url('/collegename/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/collegename/edit'));
        }
    }

    public function delete($id = null)
    {
        $CollegeModel = new CollegeModel();
        $data = $CollegeModel->find($id);

        if ($id) {
            $status = $CollegeModel->delete($id);

            if ($status) {
                session()->setFlashdata('success', '<b style="color:green;"> College Deleted Successfully!</b>');
                return redirect()->to(base_url('/collegename/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/collegename/list'));
            }
        }
    }
}
