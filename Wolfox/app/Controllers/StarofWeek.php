<?php

namespace App\Controllers;

use App\Models\StarWeekModel;
use App\Models\BatchModel;


class StarofWeek extends BaseController
{
    public function add()
    {
        
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/StarWeek/starweek',$data);
        echo view('/Admin/Footer');
    }  


    public function save()
    {
        $name = $this->request->getVar('name');
        $batch = $this->request->getVar('batchid');
        $startdate = $this->request->getVar('startdate');
        $enddate = $this->request->getVar('enddate');
        $reason = $this->request->getVar('reason');



        $startSave = [
            'name' => $name,
            'batch' => $batch,
            'startdate' => $startdate,
            'enddate' => $enddate,
            'reason' => $reason

        ];

        $StarWeekModel = new StarWeekModel();
        $StarWeekModel->insert($startSave);
        $data = $StarWeekModel->getInsertID();


        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Stars Added Successfully!</b>');
            return redirect()->to(base_url('/Admin/StarofWeek/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/StarofWeek/add'));
        }

      
    }

        public function list()
        {
            $StarWeekModel = new StarWeekModel();
            $data['startSave'] = $StarWeekModel->findall();


            echo view('Admin/Header');
            echo view('/Admin/StarWeek/list', $data);
            echo view('Admin/Footer');

        }


}