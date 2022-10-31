 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');
        
        if ($this->session->userdata('status') != "login") {
            redirect('login');
        }

    }
    public function index()
    {
        $this->load->model('anggota_model');
        $data['dkt'] = $this->anggota_model->getbyid();
        if ($data['dkt'] == null) {
            redirect('daftar');
        }else {
             $this->load->view('dashboardvw/anggota',$data);
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>