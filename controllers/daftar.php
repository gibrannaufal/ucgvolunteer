<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftar extends CI_Controller
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
    	$this->load->view('dashboardvw/daftar');
    }
     public function add_data()
    {
        $this->load->model('daftar_model');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $npm = $this->input->post('npm');
        $login_fk = $this->input->post('login_fk');
       
        $data = array(
            'nama' => $nama,
            'jk' => $jk,
            'npm' => $npm,
            'login_fk' => $login_fk,
        );
        $this->daftar_model->input_data('anggota', $data);
        redirect('anggota');
    }

}