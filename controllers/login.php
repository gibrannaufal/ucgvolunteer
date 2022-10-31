<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
  function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url');
        if ($this->session->userdata('status') == "login") {
            redirect('anggota');
        }
    }
    public function index()
    {
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_login');
        } else {
            $cek = $this->login_model->cek_login($username, $password)->num_rows();

        }
    }

}
?>

