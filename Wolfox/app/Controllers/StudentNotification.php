<?php

namespace App\Controllers;

use App\Models\NotificationModel;

class StudentNotification extends BaseController
{
    public function notifications()
    {
        $session = session();
        $batch_id = $session->get('batchid');

        $NotificationModel = new NotificationModel();
        $data['notifications'] = $NotificationModel
            ->where('batchid', $batch_id)
            ->orWhere('batchid',0)
            // ->orderBy('created_at', 'DESC')
            ->findAll();

            echo  view('Student/Header');
            echo view('Student/notification', $data);
            
    }
}
