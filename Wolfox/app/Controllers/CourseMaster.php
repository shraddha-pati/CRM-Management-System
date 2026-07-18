<?php

namespace App\Controllers;

use App\Models\CourseModel;


class CourseMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/Course/form');
        echo view('/Admin/Footer');
    }  


    public function save()
    {
        $Course = $this->request->getVar('Course');
        $Duration = $this->request->getVar('Duration');
        $Fee = $this->request->getVar('Fee');


        $CourseSave = [
            'course' => $Course,
            'duration' => $Duration,
            'fee' => $Fee

        ];

        $CourseModel = new CourseModel();
        $CourseModel->insert($CourseSave);
        $data = $CourseModel->getInsertID();


        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Course Added Successfully!</b>');
            return redirect()->to(base_url('/Admin/Course/List'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Course/Form'));
        }

        // if ($data) {

        //     echo '<script type="text/javascript">';
        //     echo 'alert("Course Added Successfully!");';
        //     echo 'window.location.href = "' . base_url('/Admin/Course/List') . '";';
        //     echo '</script>';
        // } else {
        //     echo '<script type="text/javascript">';
        //     echo 'alert("Error Occured!");';
        //     echo 'window.location.href = "' . base_url('/Admin/Course/Form') . '";';
        //     echo '</script>';
        // }
    }

    public function list()
    {
        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel
        ->orderBy('courseid','DESC')
        ->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/Course/list', $data);
        echo view('/Admin/Footer');
    }


    public function edit($id = null)
    {
        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->find($id);

        echo view('/Admin/Header');
        echo view('/Admin/Course/Edit', $data);
        echo view('/Admin/Footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id');

        $Course = $this->request->getVar('Course');
        $Duration = $this->request->getVar('Duration');
        $Fee = $this->request->getVar('Fee');


        $CourseSave = [
            'course' => $Course,
            'duration' => $Duration,
            'fee' => $Fee,

        ];

        $CourseModel = new CourseModel();
        $data = $CourseModel->where('courseid', $id)->update($id, $CourseSave);

        if ($data) {
            session()->setFlashdata('update', '<b style="color:green;"> Course Updated Successfully!</b>');
            return redirect()->to(base_url('/Admin/Course/List'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Course/Form'));
        }

        // if ($data) {

        //     echo '<script type="text/javascript">';
        //     echo 'alert("Information Updated Successfully!");';
        //     echo 'window.location.href = "' . base_url('/Admin/Course/List') . '";';
        //     echo '</script>';
        // } else {
        //     echo '<script type="text/javascript">';
        //     echo 'alert("Error Occured!");';
        //     echo 'window.location.href = "' . base_url('/Admin/Course/Form') . '";';
        //     echo '</script>';
        // }
    }
}
