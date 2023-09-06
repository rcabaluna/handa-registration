<?php

namespace App\Controllers;

use App\Models\AttendanceModel;

class Attendance extends BaseController
{

    public $attendanceModel;

	public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
    }

    public function AttendanceConfirm(){
        $input = explode("/",$this->request->getPost('data')); ;

        $data['event'] =  $input[0];
        $data['regnumber'] = $input[1];       
        $profile = $this->attendanceModel->get_data('tblparticipants',array('regnumber' => $data['regnumber']));

        return view("attendance/profile",$profile);

    }

    public function AttendanceSave(){
        $input = explode("/",$this->request->getPost('data')); ;

        $data['event'] =  $input[0];
        $data['regnumber'] = $input[1];

        $check = $this->attendanceModel->get_att_data('tblattendance',$data);

        if ($check) {
            echo "EXISTS";
            exit();
        }else{
            $insert = $this->attendanceModel->insert_data('tblattendance',$data);
            if ($insert) {
                echo "SUCCESS";
            }
        }
    }

    public function scanQRCode(){
        return view('attendance/scan-qr-code');
    }
    
}
