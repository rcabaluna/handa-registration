<?php

namespace App\Controllers;

use App\Libraries\Ciqrcode;
use App\Models\RegistrationModel;


class Registration extends BaseController
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

    public function event()
    {
        $uri = service('uri');
        $eventshorthand = $uri->getSegment(3);

        $data['eventx'] = $this->registrationModel->get_data_where('tblevents',array('shorthand' => $eventshorthand));
        
        if ($data['eventx']) {
            $data['sectors'] = $this->registrationModel->get_all_data('tblsector');
            return view('registration-per-event',$data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); 
        }
    }

    public function registerProccess(){

        $data = $this->request->getPost();

        $data['regnumber'] = $this->registrationModel->get_doc_number('registration');
		if (isset($_POST['privileges'])) {
			$privileges = '';
			$lastElement = end($data['privileges']);

			foreach ($data['privileges'] as $privilege) {
				$privileges .= $privilege;
				if($privilege != $lastElement) {
					$privileges .= ', ';
				}
			}

			$data['privileges'] = $privileges;
		}
		
		$insertData = $this->registrationModel->insert_data('tblparticipants',$data);

		if ($insertData) {
			$this->generateQRCode($data['event'],$data['regnumber']);
			return redirect()->to(base_url('qr-code/'.$data['regnumber'])); 
		}else{
			exit();
		}

    }



    public function generateQRCode($event,$userid)
	{
        $ciqrcode = new Ciqrcode();
		$qr_image=$userid.'.png';
		$strData = $event."/".$userid;
		// $strData = $userid;
		$params['data'] = $strData;
		$params['level'] = 'H';
		$params['size'] = 8;
		$params['savename'] =FCPATH.STORE_QR.$qr_image;
		$ciqrcode->generate($params);

	}

	public function QRCode(){
		$data['userid'] = $this->request->uri->getSegment(2);

		return view('qr-code', $data);
	}

    
}
