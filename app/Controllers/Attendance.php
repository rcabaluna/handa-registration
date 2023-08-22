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

    public function index()
    {
        $data = [];

        if ($_GET) {
            $param['regnumber'] = $this->request->getGet('regnumber');
    
    
            $data = $this->attendanceModel->get_data('tblparticipants',$param);
    
            if ($data == NULL) {
                $data = [];
                $this->session->setFlashdata('invalid',TRUE);
            }else{
                $data['eventid'] = $this->request->uri->getSegment(2);
                $this->session->setFlashdata('valid',TRUE);
            }
        }
        return view('attendance-form',$data);
    }

    public function AttendanceConfirm(){
        $data['regnumber'] = $this->request->getPost('regnumber');

        $insert = $this->attendanceModel->insert_data('tblattendance',$data);

        return view('thank-you');
    }
    
}
