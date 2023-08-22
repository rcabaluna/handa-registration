<?php

namespace App\Controllers;

use App\Models\ParticipantsModel;

class Participants extends BaseController
{
    public $participantsModel;

	public function __construct()
	{
		$this->participantsModel = new ParticipantsModel();
	}

    public function index()
    {
        $data['participants'] = $this->participantsModel->get_all_data('tblparticipants');
        return view('participants-list',$data);
    }
}
