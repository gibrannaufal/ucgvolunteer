<?php
class registrasi_model extends CI_Model
{ 
    public function input_data($table, $data)
    {   
        $this->db->insert($table, $data);  
    }
}

?>