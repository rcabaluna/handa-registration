<?php

namespace App\Models;

use CodeIgniter\Model;

class AttendanceModel extends Model
{

    public function insert_data($tablename,$data){
		
        $builder = $this->db->table($tablename);
        $builder->insert($data);

        return $this->db->insertID();
    }

    public function get_data($tablename,$param){

        $builder = $this->db->table($tablename);
        $builder->like($param)->orLike('fullname',$param['regnumber']);
        $query   = $builder->get();

        return $query->getRowArray();
    }

}