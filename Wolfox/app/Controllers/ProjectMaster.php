<?php

namespace App\Controllers;
use App\Models\AdmissionModel;
use App\Models\ProjectModel;
use App\Models\CollegeModel;

class ProjectMaster extends BaseController
{
    public function add()
    {
        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/project/projectadd', $data);
        echo view('/Admin/Footer');
    }
    public function save()
    {

        $FullName = $this->request->getVar('fullname');
        $collegeid = $this->request->getVar('collegeid');
        $WhatsappNumber = $this->request->getVar('phonenumber');
        $ProjectName = $this->request->getVar('projectname');
        $Description = $this->request->getVar('description');
        $Technology = $this->request->getVar('technology');
        $Cost = $this->request->getVar('cost');
        $Date = $this->request->getVar('date');
        $Link = $this->request->getVar('link');


        $ProjectModel = new ProjectModel();
        $ProjectArray = [
            'fullname' => $FullName,
            'collegeid' => $collegeid,
            'phonenumber' => $WhatsappNumber,
            'projectname' => $ProjectName,
            'description' => $Description,
            'technology' => $Technology,
            'cost' => $Cost,
            'date' => $Date,
            'link' => $Link
        ];

        $insertedId = $ProjectModel->insert($ProjectArray);

        if ($insertedId) {
            session()->setFlashdata('success', '<b style="color:green;">Project Information Added Successfully!</b>');
            return redirect()->to(base_url('/Admin/Project/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Project/add'));
        }
    }


    public function list()
    {

        $CollegeModel = new CollegeModel();
        //$admissionmodel = new AdmissionModel();
        // $data['StudentData'] = $admissionmodel

        $ProjectModel = new ProjectModel();
        $data['project'] = $ProjectModel
        ->select('project.*, collegename.collegename AS collegename')
        ->join('collegename', 'collegename.id = project.collegeid', 'left')
        ->orderBy('id','DESC')
        ->findAll();

        //print_r($data['project']);
        // exit;
        echo view('Admin/Header');
        echo view('Admin/project/projectlist', $data);
        echo view('Admin/Footer');
    }

    public function edit($id = null)
    {

        $CollegeModel = new CollegeModel();
        $data['CollegeData'] = $CollegeModel->findAll();

        $ProjectModel = new ProjectModel();
        $data['project'] = $ProjectModel->where('id', $id)->first();

        //print_r($data['project']);exit;

        echo view('Admin/Header');
        echo view('Admin/project/projectedit', $data);
        echo view('Admin/Footer');
    }

    public function update()
    {

        $id = $this->request->getVar('id');
        $FullName = $this->request->getvar('fullname');
        $collegeid = $this->request->getVar('collegeid');
        $WhatsappNumber = $this->request->getvar('phonenumber');
        $ProjectName = $this->request->getvar('projectname');
        $Description = $this->request->getvar('description');
        $Technology = $this->request->getvar('technology');
        $Cost = $this->request->getvar('cost');
        $Date = $this->request->getVar('date');
        $Link = $this->request->getVar('link');


        $ProjectArray = [
            'fullname' => $FullName,
            'collegeid' => $collegeid,
            'phonenumber' => $WhatsappNumber,
            'projectname' => $ProjectName,
            'description' => $Description,
            'technology' => $Technology,
            'cost' => $Cost,
            'date' => $Date,
            'link' => $Link
        ];
        // print_r($ProjectArray);
        // exit;

        $ProjectModel = new ProjectModel();
        $data = $ProjectModel->update($id, $ProjectArray);
        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;">Project Information Upadate Successfully!</b>');
            return redirect()->to(base_url('/Admin/Project/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Project/add'));
        }
    }



    public function delete($id = null)
    {

        $ProjectModel = new ProjectModel();
        if ($id) {
            $data = $ProjectModel->where('id', $id)->delete($id);
            if ($data) {
                session()->setFlashdata('success', '<b style="color:green;">Project Information Delete Successfully!</b>');
                return redirect()->to(base_url('/Admin/Project/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/Project/add'));
            }
        }
    }
}
