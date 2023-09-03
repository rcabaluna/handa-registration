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

        $param['event'] = $this->request->getGet('event');
        $data['events'] = $this->participantsModel->get_all_data('tblevents');
        $data['participants'] = $this->participantsModel->get_participants_list('tblparticipants',$param);
        return view('participants-list',$data);
    }
}
