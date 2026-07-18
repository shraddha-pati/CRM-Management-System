<?php
namespace App\Controllers;

class StudentAttendanceMaster extends BaseController
{
    public function index($id = null)
    {
        $data['MonthId'] = $id;
        echo view('/Student/Header');

      echo view('/Student/Attendance',$data);
    }

    public function lastmonth($id = null)
    {
        $data['MonthId'] = $id;
        echo view('/Student/Header');

      echo view('/Student/lastmonth',$data);
    }


    public function months()
    {
        echo view('/Student/Header');

        echo view('/Student/attendancemonths');
    }

    
}
?>