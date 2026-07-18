<?php

namespace App\Controllers;

use App\Models\NotificationModel;
use CodeIgniter\Config\View;
use App\Models\BatchModel;

class NotificationMaster extends BaseController
{
    public function add()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/Notification/add', $data);
        echo view('/Admin/Footer');
    }

    public function save()
    {
        $message = $this->request->getvar('editor');
        $batchid = $this->request->getvar('batchid');
        // $image = $this->request->getFile('image');

  
            $notitfications = [
                'message' => $message,
                'batchid' => $batchid
             ];


            //  print_r($notitfications);
            //  exit;
 
             
 
            $OtherLetterModel = new NotificationModel();
            $OtherLetterModel->insert($notitfications);
            $letters = $OtherLetterModel->getInsertID();

            if ($letters) {
                session()->setFlashdata('success', '<b style="color:green;">Notification added Successfully!</b>');
                return redirect()->to(base_url('/Admin/Notification/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/Notification/add'));
            }
         
    }


    public function list()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $NotificationModel = new NotificationModel();
        $data['notifications'] = $NotificationModel
            ->select('notification.*, batch.*')
            ->join('batch', 'batch.batchid = notification.id')
            ->find();
            // print_r($data['notifications']);exit;
        echo view('/Admin/Header');
        echo view('/Admin/Notification/list', $data);
        //echo view('/Admin/Footer');
    }

    public function delete($id = null)
    {

        $NotificationModel = new NotificationModel();
        if ($id) {
            $data = $NotificationModel->where('id', $id)->delete($id);
            if ($data) {
                session()->setFlashdata('success', '<b style="color:green;">Notification deleted Successfully!</b>');
                return redirect()->to(base_url('/Admin/Notification/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/Notification/add'));
            }
        }
    }
    public function edit($id = null)
    {
        $NotificationModel = new NotificationModel();
        $data['notification'] = $NotificationModel->select('batch.*,notification.*')
        ->join('batch','batch.batchid = notification.batchid')
        ->
        where('notification.id', $id)->first();

        // print_r($data['notification']);
        // exit;


        echo view('/Admin/Notification/edit', $data);







    }
}
