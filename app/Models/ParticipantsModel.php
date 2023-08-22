<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantsModel extends Model
{

    public function get_all_data($tablename){

        $builder = $this->db->table($tablename);
        $builder->orderBy('regnumber','DESC');
        $query   = $builder->get();

        return $query->getResultArray();
    }

    public function get_attendance_list($tablename){

        $builder = $this->db->table($tablename);
        $builder->select('tblparticipants.participantid, tblparticipants.regnumber, tblparticipants.fullname, tblparticipants.contactno, tblparticipants.email, tblparticipants.position, tblparticipants.agency_name, tblparticipants.sex, tblparticipants.privileges,tblattendance.date_registered');
        $builder->join('tblattendance', 'tblattendance.regnumber = tblparticipants.regnumber');
        $query = $builder->get();

        return $query->getResultArray();

    }

}