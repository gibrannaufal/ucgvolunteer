 <?php 
class anggota_model extends CI_Model
{ 
    public function getById(){
        $data['userid'] = $this->session->userdata('userid');
        $this->db->where('login_fk',$data['userid']);
        $dkt = $this->db->get('anggota');
        return $dkt->row();
    }
}
?>