<?php


namespace App\Controllers;

use App\Models\AttendanceModel;
use CodeIgniter\Controller;

class AttendanceMaster extends Controller
{
    public function saveAttendance()
    {
        $session = session();
        $id = $session->get('id');

        $db = \Config\Database::connect();
        $attendanceModel = new AttendanceModel();

        $month = $this->request->getPost('month');
        $year = $this->request->getPost('year');
        $absentDays = $this->request->getPost('absent_days');

        // If no dates are selected, return back with a message
        if (!$absentDays) {
            return redirect()->back()->with('error', 'No dates selected for attendance.');
        }

        // Convert array to JSON for database storage
        $absentDaysJson = json_encode($absentDays);
        $dataarray = [
            'sid' => $id,
            'month' => $month,
            'year' => $year,
            'absent_dates' => $absentDaysJson
        ];

        // print_r($dataarray);
        // exit;

        $attendancecheck = $attendanceModel->where('sid', $id)->where('month', $month)->where('year', $year)->find();

        if ($attendancecheck) {


            // echo 'helo';
            // exit;
            $data = $attendanceModel
            ->where('sid', $id)
            ->where('month', $month)
            ->where('year', $year)
            ->update($id,$dataarray);   
        
        if ($data) {
            return redirect()->to('/Student/AttendanceList')->with('message', 'Attendance saved successfully!');
        }
          

            
        } else {


            // echo 'helo';
            // exit;
            $attendanceModel->insert($dataarray);

            return redirect()->to('/Student/AttendanceList')->with('message', 'Attendance saved successfully!');
        }

        // Insert into database

        //print_r($data);exit;

    }

    public function attendancelist()
    {

        echo view('Student/Header');

        echo view('Student/AttendanceList');
    }

    public function attendancedocument($month = null, $year = null,$studid = null)
    {

        $session = session();
        $id = $session->get('id');

        // echo $month;
        // echo $year;
        // exit;        

        $AttendanceModel = new AttendanceModel();
        $data['AttendanceData'] = $AttendanceModel->where('sid', $studid)
            ->where('month', $month)
            ->where('year', $year)
            ->find();
        $data['month'] = $month;
        $data['year'] = $year;
        $data['studid'] = $studid;



        echo view('Student/AttendanceDocument', $data);
    }
}
