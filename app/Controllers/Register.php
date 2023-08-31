<?php

namespace App\Controllers;

use App\Libraries\Ciqrcode;
use App\Models\RegistrationModel;


class Register extends BaseController
{
	public $registrationModel;

	public function __construct()
	{
		$this->registrationModel = new RegistrationModel();
	}

    public function index()
    {
        return view('registration-form');
    }

    // public function registerProccess(){

    //     $data = $this->request->getPost();

		

	// 	$data['regnumber'] = $this->registrationModel->get_doc_number('registration');
    //     $data['fullname'] = ucwords(strtolower($data['fullname']));
	// 	if (isset($_POST['privileges'])) {

	// 		$privileges = '';
	// 		$lastElement = end($data['privileges']);

	// 		foreach ($data['privileges'] as $privilege) {
	// 			$privileges .= $privilege;
	// 			if($privilege != $lastElement) {
	// 				$privileges .= ', ';
	// 			}
	// 		}

	// 		$data['privileges'] = $privileges;
	// 	}
		
	// 	$insertData = $this->registrationModel->insert_data('tblparticipants',$data);

	// 	if ($insertData) {
	// 		$this->generateQRCode($data['regnumber']);
	// 		return redirect()->to(base_url('qr-code/'.$data['regnumber'])); 
	// 	}else{
	// 		exit();
	// 	}

    // }



    // public function generateQRCode($userid)
	// {
    //     $ciqrcode = new Ciqrcode();
	// 	$qr_image=$userid.'.png';
	// 	$strData = BASE.'/handa/attendance?regnumber='.$userid;
	// 	// $strData = $userid;
	// 	$params['data'] = $strData;
	// 	$params['level'] = 'H';
	// 	$params['size'] = 8;
	// 	$params['savename'] =FCPATH.STORE_QR.$qr_image;
	// 	$ciqrcode->generate($params);

	// }

	// public function QRCode(){
	// 	$data['userid'] = $this->request->uri->getSegment(2);

	// 	return view('qr-code', $data);
	// }
}
