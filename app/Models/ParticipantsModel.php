<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantsModel extends Model
{

    public function get_all_data($tablename){

        $builder = $this->db->table($tablename);
        $query   = $builder->get();

        return $query->getResultArray();
    }

    public function get_participants_list($tablename,$param){


        $builder = $this->db->table($tablename);
        $builder->select('*');
        $builder->join('tblsector', 'tblsector.sectorid = tblparticipants.sector');
        if ($param['event'] != 'all') {
            $builder->where($param);
        }
        $query = $builder->get();

        return $query->getResultArray();

    }

}