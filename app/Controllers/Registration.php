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
        
    }

    public function event()
    {
        $uri = service('uri');
        $eventshorthand = $uri->getSegment(4);

        $data['eventx'] = $this->registrationModel->get_data_where('tblevents',array('shorthand' => $eventshorthand));
		$data['regions'] = $this->registrationModel->get_all_data('refregion');
        if ($data['eventx']) {
            $data['sectors'] = $this->registrationModel->get_all_data('tblsector');
            return view('registration-per-event',$data);
       }else{
           throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); 
        }
    }

	public function getProvincesList(){

        $data['provinces'] = $this->registrationModel->get_data_where_all('refprovince',array('regCode' => $this->request->getGet('regCode')));
		return view('provinces-list', $data);
	}

    public function registerProccess(){

        $datax = $this->request->getPost('data');

		$data = array();
		$privilegesArr = array();

		
		foreach ($datax AS $key => $value) {
			$data[$value['name']] = $value['value'];

			if ($value['name'] == 'privileges[]') {
				array_push($privilegesArr,$value['value']);
			}
		}

		unset($data['privileges[]']);
		$data['privileges'] = implode(", ",$privilegesArr);

			$check = $this->registrationModel->check_user_exists_by_name('tblparticipants',$data);
			if ($check) {
				echo "EXISTS";
				exit();
			}

        $data['regnumber'] = $this->registrationModel->get_doc_number('registration');
		
		$insertData = $this->registrationModel->insert_data('tblparticipants',$data);

		if ($insertData) {
			$this->generateQRCode($data['event'],$data['regnumber']);
			echo $data['regnumber'];
		}else{
			exit();
		}
		

    }



    public function generateQRCode($event,$userid)
	{
        $ciqrcode = new Ciqrcode();
		$qr_image=$userid.'.png';
		$strData = $event."/".$userid;
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