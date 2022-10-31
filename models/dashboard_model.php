 <?php 
class dashboard_model extends CI_Model
{ 

    public function getById(){
        $data['userid'] = $this->session->userdata('userid');
        $this->db->where('anggota_fk',$data['userid']);
        $dkt = $this->db->get('clockin');
        return $dkt->result();
    }
    public function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
     public function update($id,$data)
    {
        $this->db->where('id_in',$id);
        $this->db->update('clockin',$data);

    }
    public function getclockin($id){
        $this->db->where('id_in',$id);
        $dkt = $this->db->get('clockin');
        return $dkt->row();
    }
}
?>