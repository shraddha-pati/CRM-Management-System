<?php

namespace App\Controllers;
use App\Models\FeeModel;

class FeeMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/header');
        echo view('/Admin/Fee/add');
        echo view('/Admin/footer');

    }
    public function save(){
        $sid = $this->request->getVar('sid');
        $sname = $this->request->getVar('sname');
        $cname = $this->request->getVar('cname');
        $duration = $this->request->getVar('duration');
        $duedate = $this->request->getVar('duedate');
        $totalfee = $this->request->getVar('totalfee');
        $paidfee = $this->request->getVar('paidfee');
        $mode = $this->request->getVar('mode');
        $transactionid = $this->request->getvar('transactionid');

        $fee = [
            'sid' => $sid,
            'sname' => $sname,
            'cname' => $cname,
            'duration' => $duration,
            'duedate' => $duedate,
            'totalfee' => $totalfee,
            'paidfee' => $paidfee,
            'mode' => $mode,
            'transactionid' => $transactionid,
        ];

        // print_r($fee);exit;
        $feeModel = new FeeModel();
        if ($feeModel->insert($fee)) {
            echo '<script type="text/javascript">';
            echo 'alert("Fee Added Successfully!");';
            echo 'window.location.href = "' . base_url('/Admin/Fee/list') . '";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Error Occured!");';
            echo 'window.location.href = "' . base_url('/Admin/Fee/add') . '"';
            echo '</script>';
        }
    }
    public function list()
    {
        $feeModel = new FeeModel();
        $data['fee'] = $feeModel
        ->orderBy('id','DESC')
        ->findAll();
        echo view('/Admin/header');
        echo view('/Admin/Fee/list', $data);
        echo view('/Admin/footer');
    }
    public function edit($id=null){
        $feeModel = new FeeModel();
        $data['fee'] = $feeModel->where('id', $id)->first();
        //print_r('fee');exit;
        echo view('/Admin/header');
        echo view('/Admin/Fee/edit', $data);
        echo view('/Admin/footer');
    }
    public function update()
    {
        $id = $this->request->getVar('id');
        $sid = $this->request->getFile('sid');
        $sid = $this->request->getVar('sid');
        $sname = $this->request->getVar('sname');
        $cname = $this->request->getVar('cname');
        $duration = $this->request->getVar('duration');
        $duedate = $this->request->getVar('duedate');
        $totalfee = $this->request->getVar('totalfee');
        $paidfee = $this->request->getVar('paidfee');
        $mode = $this->request->getVar('mode');
        $transactionid = $this->request->getvar('transactionid');

        $fee = [
            'sid' => $sid,
            'sname' => $sname,
            'cname' => $cname,
            'duration' => $duration,
            'duedate' => $duedate,
            'totalfee' => $totalfee,
            'paidfee' => $paidfee,
            'mode' => $mode,
            'transactionid' => $transactionid,
        ];


        $feeModel = new FeeModel();
       // $a = $feeModel->where('id', $id)->update($id, $fee);
        if ($feeModel->where('id', $id)->update($id, $fee)) {
            echo '<script type="text/javascript">';
            echo 'alert("Fee Details Updated Successfully!");';
            echo 'window.location.href = "' . base_url('/Admin/Fee/list') . '";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Error Occured!");';
            echo 'window.location.href = "' . base_url('/Admin/Fee/add') . '"';
            echo '</script>';
        }
    }
                    

    public function delete($id = null)
    {
        $feeModel = new FeeModel();
        if ($id) {
            $status = $feeModel->where('id', $id)->delete();
            if ($status) {
                echo '<script type="text/javascript">';
                echo 'alert("Fee Details Deleted Successfully!");';
                echo 'window.location.href = "' . base_url('/Admin/Fee/list') . '"';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error Occured!");';
                echo 'window.location.href = "' . base_url('/Admin/Fee/list') . '"';
                echo '</script>';
            }
        }
    }
}
