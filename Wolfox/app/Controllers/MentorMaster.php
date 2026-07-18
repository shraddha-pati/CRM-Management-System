<?php

namespace App\Controllers;

use App\Models\MentorModel;
use App\Models\CollegeModel;

class MentorMaster extends BaseController
{
    public function add()
    {
        $collegeModel = new CollegeModel();
        $data['CollegeData'] = $collegeModel->findAll();
        // print_r($data['CollegeData']);exit;
        echo view('/Student/Header');
        echo view('/Student/Mentor', $data);
        // echo view('/Student/Footer');

    }
    public function save()
    {
        // $session = session();
        // echo$sid = $session->get('id');
        $sid = $this->request->getVar('sid');
        $collegeid = $this->request->getVar('collegeid');
        $year = $this->request->getVar('year');
        $date = $this->request->getVar('date');
        $mentorname = $this->request->getVar('mentorname');
        $mentornumber = $this->request->getVar('mentornumber');

        $mentor =
            [
                'sid' => $sid,
                'collegeid' => $collegeid,
                'year' => $year,
                'date' => $date,
                'mentorname' => $mentorname,
                'mentornumber' => $mentornumber
            ];

        // print_r($mentor);

        $mentorModel = new MentorModel();
        $mentorModel->insert($mentor);
        $data = $mentorModel->getInsertID();

        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Mentor Added Successfully!</b>');
            return redirect()->to(base_url('/Student/mentorlist'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Student/mentor'));
        }
    }

    public function list()
    {
        $session = session();
        $id = $session->get('id');
        $collegeModel = new CollegeModel();
        $data['CollegeData'] = $collegeModel->findAll();
        // print_r($data['CollegeData']);exit;
        $mentorModel = new MentorModel();
        $data['mentor'] = $mentorModel
            ->select('mentor.*, collegename.collegename AS collegename')
            ->join('collegename', 'collegename.id = mentor.collegeid', 'left')
            ->where('mentor.sid', $id)
            ->findAll();

        echo view('/Student/Header');
        echo view('/Student/mentorList', $data);
    }

    public function edit($id = null)
    {
        $collegeModel = new CollegeModel();
        $data['CollegeData'] = $collegeModel->findAll();
        // print_r($data['CollegeData']);exit;

        $mentorModel = new MentorModel();
        $data['mentor'] = $mentorModel
            ->select('mentor.*, collegename.collegename AS collegename')
            ->join('collegename', 'collegename.id = mentor.collegeid', 'left')
            ->find($id);
        // print_r($data['mentor']);exit;
        echo view('/Student/Header');
        echo view('/Student/mentoredit', $data);
    }


    public function update()
    {
        $id = $this->request->getVar('id');
        $sid = $this->request->getVar('sid');
        $collegeid = $this->request->getVar('collegeid');
        $year = $this->request->getVar('year');
        $date = $this->request->getVar('date');
        $mentorname = $this->request->getVar('mentorname');
        $mentornumber = $this->request->getVar('mentornumber');

        $mentor = [
            'sid' => $sid,
            'collegeid' => $collegeid,
            'year' => $year,
            'date' => $date,
            'mentorname' => $mentorname,
            'mentornumber' => $mentornumber
        ];

        $mentorModel = new MentorModel();
        $data = $mentorModel->update($id, $mentor);
        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Mentor Updated Successfully!</b>');
            return redirect()->to(base_url('/Student/mentorlist'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Student/mentor'));
        }
    }

    public function alist()
    {
        $collegeModel = new CollegeModel();
        $data['CollegeData'] = $collegeModel->findAll();
        // print_r($data['CollegeData']);exit;
        $mentorModel = new MentorModel();
        $data['mentor'] = $mentorModel
            ->select('mentor.*, mentor.collegeid, admission.StudentId, admission.firstname, admission.middlename, admission.lastname, collegename.collegename AS collegename')
            ->join('admission', 'mentor.sid = admission.id')
            ->join('collegename', 'collegename.id = mentor.collegeid', 'left')
            ->findAll();
            //  print_r($data['mentor']);exit;
        echo view('/Admin/Header');
        echo view('/Admin/Mentor/mentorList', $data);
        echo view('/Admin/Footer');
    }

    public function filter()
    {
        $collegeid = $this->request->getVar('collegeid');

        $collegeModel = new CollegeModel();
        $data['CollegeData'] = $collegeModel->findAll();
        // print_r($data['CollegeData']);exit;
        $mentorModel = new MentorModel();
        $data['mentor'] = $mentorModel
            ->select('mentor.*, mentor.collegeid, admission.StudentId, admission.firstname, admission.middlename, admission.lastname, collegename.collegename AS collegename')
            ->join('admission', 'mentor.sid = admission.id')
            ->join('collegename', 'collegename.id = mentor.collegeid', 'left')
            ->where('mentor.collegeid', $collegeid)
            ->findAll();
            //   print_r($data['mentor']);exit;
        echo view('/Admin/Header');
        echo view('/Admin/Mentor/mentorList', $data);
        echo view('/Admin/Footer');
    }
}
