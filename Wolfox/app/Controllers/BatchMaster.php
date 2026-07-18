<?php

namespace App\Controllers;

use App\Models\BatchModel;

class BatchMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/Batch/add');
        echo view('/Admin/Footer');
    }

    public function save()
    {
        $BatchName = $this->request->getVar('batchname');
        //$StartTime = $this->request->getVar('starttime');  
        //$EndTime = $this->request->getVar('starttime');  
        $Month = $this->request->getVar('month');

        /*if (!empty($starttime) && !empty($ampm)) {
            list($hour, $minute) = explode(':', $time);
            if ($ampm == 'PM' && $hour != 12) {
                $hour += 12;
            } elseif ($ampm == 'AM' && $hour == 12) {
                $hour = 0;
            }
            $formattedTime = sprintf('%02d:%02d', $hour, $minute);
        } else {
            $formattedTime = null;
        }

        // Process or save $formattedTime
        return "Converted Time: " . $formattedTime;
		*/

        $startTime = $this->request->getPost('starttime'); // Format: HH:MM
        $startAmPm = $this->request->getPost('start_am_pm');

        // Get end time and AM/PM
        $endTime = $this->request->getPost('endtime');
        $endAmPm = $this->request->getPost('end_am_pm');

        // Convert to 24-hour format
        $startTime24 = date("H:i", strtotime("$startTime $startAmPm"));
        $endTime24 = date("H:i", strtotime("$endTime $endAmPm"));

        // Save to database
        $BatchData = [
            'batchname' => $BatchName,
            'starttime' => $startTime24,
            'endtime' => $endTime24,
            'month' => $Month
        ];
        //print_r( $BatchData);
        //exit;


        /*$BatchData = [
            'batchname' => $BatchName,
            'starttime' => $StartTime,
            'endtime' => $EndTime,
            'month' => $Month

        ];*/

        $BatchModel = new BatchModel();
        $BatchModel->insert($BatchData);
        $data = $BatchModel->getInsertID();

        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Batch Added Successfully!</b>');
            return redirect()->to(base_url('/Admin/Batch/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Batch/add'));
        }
    }

    public function list()
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel
            ->orderBy('batchid', 'DESC')
            ->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/Batch/list', $data);
        echo view('/Admin/Footer');
    }

    public function edit($id = null)
    {
        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->find($id);

        echo view('/Admin/Header');
        echo view('/Admin/Batch/edit', $data);
        echo view('/Admin/Footer');
    }

    public function update()
    {
        $id = $this->request->getVar('batchid');
        $BatchName = $this->request->getVar('batchname');
        //$StartTime = $this->request->getVar('starttime');  
        //$EndTime = $this->request->getVar('endtime'); 
        $Month = $this->request->getVar('month');


        /* $BatchData = [
            'batchname' => $BatchName,
            'starttime' => $StartTime,
            'endtime' => $EndTime,
            'month' => $Month

        ];*/

        $startTime = $this->request->getPost('starttime'); // Format: HH:MM
        $startAmPm = $this->request->getPost('start_am_pm');

        // Get end time and AM/PM
        $endTime = $this->request->getPost('endtime');
        $endAmPm = $this->request->getPost('end_am_pm');

        // Convert to 24-hour format
        $startTime24 = date("H:i", strtotime("$startTime $startAmPm"));
        $endTime24 = date("H:i", strtotime("$endTime $endAmPm"));

        // Save to database
        $BatchData = [
            'batchname' => $BatchName,
            'starttime' => $startTime24,
            'endtime' => $endTime24,
            'month' => $Month
        ];
        $BatchModel = new BatchModel();
        $data = $BatchModel->where('batchid', $id)->update($id, $BatchData);


        if ($data) {
            session()->setFlashdata('success', '<b style="color:green;"> Batch Updated Successfully!</b>');
            return redirect()->to(base_url('/Admin/Batch/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/Batch/edit'));
        }
    }

    public function delete($id = null)
    {
        $BatchModel = new BatchModel();
        $image = $BatchModel->find($id);

        if ($id) {
            $status = $BatchModel->where('batchid', $id)->delete($id);

            if ($status) {
                session()->setFlashdata('success', '<b style="color:green;"> Batch Deleted Successfully!</b>');
                return redirect()->to(base_url('/Admin/Batch/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/Batch/list'));
            }
        }
    }
}
