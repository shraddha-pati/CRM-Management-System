<?php

namespace App\Controllers;

use App\Models\AdmissionModel;


class WeeklyReportMaster extends BaseController
{
    public function add()
    {
        echo view('/Student/Header');

        echo view('/Student/report');
    }
    public function save()
    {
        $session = session();
        $id = $session->get('id');


        $reportimage = $this->request->getFile('reportimage');


        if (!$reportimage || !$reportimage->isValid()) {
            session()->setFlashdata('error', '<b style="color:red;">Invalid file!</b>');
            return redirect()->to(base_url('/student/reportlist'));
        }


        $img_ext = $reportimage->getClientExtension();
        $newFileName = "report"  . "." . $img_ext;

        $uploadPath = "./uploads/collegereport/" . $id;


        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }


        $reportimage->move($uploadPath, $newFileName);


        $reportData = [
            'reportimage' => $newFileName,
        ];

        $AdmissionModel = new AdmissionModel();
        $updated = $AdmissionModel->where('id', $id)->set($reportData)->update();

        if ($updated) {
            session()->setFlashdata('success', '<b style="color:green;">Report Uploaded Successfully!</b>');
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Failed to upload report!</b>');
        }

        return redirect()->to(base_url('/student/reportlist'));
    }


    public function list()
    {


        $session = session();
        $studentid = $session->get('id');


        $AdmissionModel = new AdmissionModel();

        $data['reportData'] = $AdmissionModel
            ->select('admission.*, collegename.collegename AS collegename, batch.*')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->where('admission.id', $studentid)
            ->where('admission.reportimage IS NOT NULL')
            ->where('admission.reportimage !=', '')
            ->findAll();





        echo view('/Student/Header');

        echo view('/Student/reportlist', $data);
    }
}
