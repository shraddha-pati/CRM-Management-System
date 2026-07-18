<?php

namespace App\Controllers;

use App\Models\StudentProjectModel;


class StudentProject extends BaseController
{
    public function index()
    {
        echo view('/Student/Header');

        echo view('/Student/project');
    }
    public function save()
    {
        $projectName  = $this->request->getVar('projectName');
        $language  = $this->request->getVar('language');
        $startDate  = $this->request->getVar('startDate');
        $endDate  = $this->request->getVar('endDate');
        $projectType  = $this->request->getVar('projectType');
        $clientName  = $this->request->getVar('clientName');

        $session = session();

        $id = $session->get('id');

        $project = [

            'studentid' => $id,
            'projectname' => $projectName,
            'languages' => $language,
            'startdate' => $startDate,
            'enddate' => $endDate,
            'type' => $projectType,
            'clientname' => $clientName

        ];

        $StudentProjectModel = new StudentProjectModel();
        $StudentProjectModel->insert($project);
        $data = $StudentProjectModel->getInsertID();

        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;">Project added Successfully!</b>');
            return redirect()->to(base_url('/student/projectlist'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/student/studentproject'));
        }
    }

    public function list()
    {
        $session = session();

        $id = $session->get('id');

        $StudentProjectModel = new StudentProjectModel();
        $data['ProjectList'] = $StudentProjectModel->where('studentid', $id)
        ->orderBy('id','DESC')
        ->findAll();

        echo view('/Student/Header');

        echo view('/Student/projectlist', $data);
    }


    public function edit($id = null)
    {


        $StudentProjectModel = new StudentProjectModel();
        $data['ProjectData'] = $StudentProjectModel->where('id', $id)->first();

        echo view('/Student/Header');

        echo view('/Student/projectedit', $data);
    }


    public function update()
    {
        $id = $this->request->getVar('id');
        $projectName  = $this->request->getVar('projectName');
        $language  = $this->request->getVar('language');
        $startDate  = $this->request->getVar('startDate');
        $endDate  = $this->request->getVar('endDate');
        $projectType  = $this->request->getVar('projectType');
        $clientName  = $this->request->getVar('clientName');

       

        $project = [

             'projectname' => $projectName,
            'languages' => $language,
            'startdate' => $startDate,
            'enddate' => $endDate,
            'type' => $projectType,
            'clientname' => $clientName

        ];

        $StudentProjectModel = new StudentProjectModel();
         $data = $StudentProjectModel->where('id',$id)->update($id,$project);

        if ($data) {
            session()->setFlashdata('update', '<b style="color:green;">Project updated Successfully!</b>');
            return redirect()->to(base_url('/student/projectlist'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/student/studentproject'));
        }
    }
}
