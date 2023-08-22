<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{

    function get_doc_number($docnumber){

        $prefix="";
        try {
                $this->db->transStart();
                $generate = $this->db->query("SELECT prefix,`value` FROM tblgenerator WHERE code='$docnumber'  FOR UPDATE");

                $value = $generate->getRow()->value;
                $docprefix = $generate->getRow()->prefix;

                $builder = $this->db->table('tblgenerator');
                $builder->set('value', $value+1);
                $builder->where('code', $docnumber);
                $builder->update();
                $this->db->transComplete();
                
                for($x=1;$x<=(3-strlen($value));$x++){
                    $prefix.="0";
                }    
            return $docprefix.date("Y").$prefix.$value;

		}catch (\Exception $e){
		    die($e->getMessage());
		}
    }

    public function insert_data($tablename,$data){

		
        $builder = $this->db->table($tablename);
        $builder->insert($data);

        return $this->db->insertID();
    }

}