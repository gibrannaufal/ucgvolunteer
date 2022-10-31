<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('registrasi_model');
        $this->load->helper('url');
        
    }
    public function add_data()
    {
        $this->load->model('registrasi_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
       
        $data = array(
            'username' => $username,
            'password' => $password,
        );
        $this->registrasi_model->input_data('login', $data);
        redirect('login');
    }
}