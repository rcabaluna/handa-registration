<?php

namespace App\Controllers;

use App\Libraries\Ciqrcode;
use App\Models\EventModel;

class Event extends BaseController
{
	public $eventModel;
    public $eventid;

	public function __construct()
    {
        $this->eventModel = new EventModel();
    }

    public function index()
    {
        return view('event-register');
    }

    // public function searchUser(){
    //     $data = [];
    //     $param['regnumber'] = $this->request->getGet('regnumber');


    //     $data = $this->eventModel->get_data('tblparticipants',$param);

    //     if ($data == NULL) {
    //         $data = [];
    //         $this->session->setFlashdata('invalid',TRUE);
    //     }else{
    //         $data['eventid'] = $this->request->uri->getSegment(2);
    //         $this->session->setFlashdata('valid',TRUE);
    //     }

    //     return view('search-user',$data);
    // }

    // public function attendanceConfirm()
    // {
    //     $data = $this->request->getGet();
    //     $data['eventid'] = $this->request->uri->getSegment(2);


    //     $insertData = $this->eventModel->insert_data('tblattendance',$data);

	// 	if ($insertData) {
	// 		return redirect()->to(base_url('event/'.$data['eventid'].'/thank-you')); 
	// 	}else{
	// 		exit();
	// 	}

    // }

    // public function thankYou(){
    //     return view('thank-you');
    // }

}
