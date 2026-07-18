<?php

namespace App\Controllers;

use App\Models\CollegeProjectModel;

class CollegeProjectMaster extends BaseController
{
    public function add()
    {
        echo view('Admin/header');
        echo view('Admin/CollegeProject/Add');
        echo view('Admin/footer');
    }

    public function save()
    {
        // $ValidationRule = $this->validate([
        //     'studentname' => 'required',
        //     'collegename' => 'required',
        //     'coursename' => 'required'
        // ]);

        // if (!$ValidationRule) {
        //     return redirect()->to(base_url('/Admin/CollegeProject/form'));
        // } else {
            $StudentName = $this->request->getVar('studentname');
            $CourseName = $this->request->getVar('coursename');
            $ProjectType = $this->request->getVar('projecttype');
            $CollegeName = $this->request->getVar('collegename');
            $ProjectName = $this->request->getVar('projectname');
            $StartDate = $this->request->getVar('startdate');
            $EndDate = $this->request->getVar('enddate');
            $Technology = $this->request->getVar('technology');
            $Description = $this->request->getVar('description');



            $CollegeProjectArray = [
                'studentname' => $StudentName,
                'coursename' => $CourseName,
                'projecttype' => $ProjectType,
                'collegename' => $CollegeName,
                'projectname' => $ProjectName,
                'startdate' => $StartDate,
                'enddate' => $EndDate,
                'technology' => $Technology,
                'description' => $Description
            ];



            //print_r($CollegeProjectArray); exit;

            $CollegeProjectModel  = new CollegeProjectModel();

            $CollegeProjectModel->insert($CollegeProjectArray);

            $dir = $CollegeProjectModel->getInsertID();
            // echo 'asd';


            if ($dir) {
                session()->setFlashdata('id', '<b style="color:green;">College Project added.!!</b>');
                return redirect()->to(base_url('/Admin/CollegeProject/list') );
            }
        // }
    }


    public function list()
    {
        $CollegeProjectModel = new CollegeProjectModel();

        $data['CollegeProjectData'] = $CollegeProjectModel
        ->orderBy('id','DESC')
        ->findAll();

        //print_r($data['CollegeProjectData']); exit;
        echo view('/Admin/header');
        echo view('Admin/CollegeProject/List', $data);
    }


    public function edit($id = null)
    {
        $CollegeProjectModel = new CollegeProjectModel();

        $data['CollegeProjectData'] = $CollegeProjectModel->where('id', $id)->first();

        //print_r($data['CollegeProjectData']); exit;

        echo view('Admin/header');
        echo view('Admin/CollegeProject/Edit', $data);
        echo view('Admin/footer');
    }


    public function update()
    {
        $id = $this->request->getVar('id');
        // $ValidationRule = $this->validate([
        //     'studentname' => 'required',
        //     'collegename' => 'required',
        //     'CourseName' => 'required'
        // ]);

        // if (!$ValidationRule) {
        //     return redirect()->to(base_url('/Admin/CollegeProject/edit/' . $id . ''));
        // } else {

            $StudentName = $this->request->getVar('studentname');
            $CourseName = $this->request->getVar('coursename');
            $ProjectType = $this->request->getVar('projecttype');
            $CollegeName = $this->request->getVar('collegename');
            $ProjectName = $this->request->getVar('projectname');
            $StartDate = $this->request->getVar('startdate');
            $EndDate = $this->request->getVar('enddate');
            $Technology = $this->request->getVar('technology');
            $Description = $this->request->getVar('description');



            $CollegeProjectArray = [
                'studentname' => $StudentName,
                'coursename' => $CourseName,
                'projecttype' => $ProjectType,
                'collegename' => $CollegeName,
                'projectname' => $ProjectName,
                'startdate' => $StartDate,
                'enddate' => $EndDate,
                'technology' => $Technology,
                'description' => $Description
            ];

            //  print_r($CollegeProjectArray); exit;
            $CollegeProjectModel  = new CollegeProjectModel();

            $update = $CollegeProjectModel->update($id, $CollegeProjectArray);

            if ($update) {
                session()->setFlashdata('id', '<b style="color:green;">College Project Updated.!!</b>');
                return redirect()->to(base_url('/Admin/CollegeProject/list') );
            }
        }
    

    public function delete($id = null)
    {
        $CollegeProjectModel  = new CollegeProjectModel();
        if ($id) {
            $CollegeDelete = $CollegeProjectModel->WHERE('id', $id)->delete($id);

            if ($CollegeDelete) {
                session()->setFlashdata('id', '<b style="color:red;">College Project Deleted.!!</b>');
                return redirect()->to(base_url('/Admin/CollegeProject/list') );
            }
            
        }
    }
}
