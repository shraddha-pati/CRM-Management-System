<?php

namespace App\Controllers;

use App\Models\BranchModel;

class BranchMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/Branch/add');
        echo view('/Admin/Footer');
    }

    public function save()
    {
        $BranchName = ucfirst(strtolower($this->request->getVar('branchname')));

        $BranchData = [
            'branchname' => $BranchName

        ];

        $BranchModel = new BranchModel();
        $BranchModel->insert($BranchData);
        $data = $BranchModel->getInsertID();

        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Batch Added Successfully!</b>');
            return redirect()->to(base_url('/branch/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/branch/add'));
        }
    }

    public function list()
    {
        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->orderBy('id', 'desc')->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/Branch/list', $data);
        echo view('/Admin/Footer');
    }

    public function edit($id = null)
    {
        $BranchModel = new BranchModel();
        $data['BranchData'] = $BranchModel->find($id);

        echo view('/Admin/Header');
        echo view('/Admin/Branch/edit', $data);
        echo view('/Admin/Footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id');
        $BranchName = ucfirst(strtolower($this->request->getVar('branchname')));

        $BranchData = [
            'branchname' => $BranchName

        ];

        $BranchModel = new BranchModel();
        $data = $BranchModel->where('id', $id)->update($id, $BranchData);


        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Batch Updated Successfully!</b>');
            return redirect()->to(base_url('/branch/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/branch/edit'));
        }
    }

    public function delete($id = null)
    {
        $BranchModel = new BranchModel();
        $image = $BranchModel->find($id);

        if ($id) {
            $status = $BranchModel->delete($id);

            if ($status) {
                session()->setFlashdata('success', '<b style="color:green;"> Batch Deleted Successfully!</b>');
                return redirect()->to(base_url('/branch/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/branch/list'));
            }
        }
    }
}
