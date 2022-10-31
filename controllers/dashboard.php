<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
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
        $this->load->model('dashboard_model');
        $data['dkt'] = $this->dashboard_model->getbyid();
        $this->load->view('dashboardvw/dashboard',$data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    public function add_data()
    {
        $this->load->model('dashboard_model');
        $nama = $this->input->post('Nama');
        $hari = $this->input->post('hari');
        $waktu = $this->input->post('waktu');
        $pengerjaan = $this->input->post('pengerjaan');
        $keterangan = $this->input->post('keterangan');
        $anggota_fk = $this->input->post('anggota_fk');
       

        $data = array(
            'Nama' => $nama,
            'hari' => $hari,
            'waktu' => $waktu,
            'keterangan' => $keterangan,
            'pengerjaan' => $pengerjaan,
            'anggota_fk' => $anggota_fk,
        );
        $this->dashboard_model->input_data('clockin', $data);
        redirect('dashboard');
    }
    public function out($id)
        {
            $this->load->model('dashboard_model');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('id_in','id_in','required');
            if ($this->form_validation->run() == FALSE) 
            {
                $data['dkt']=$this->dashboard_model->getclockin($id);
                $this->load->view('dashboardvw/out',$data);

            }
            else
            {
                $id_in = $this->input->post('id_in');
                $Nama = $this->input->post('Nama');
                $waktu_out = $this->input->post('waktu_out');
                $hari_out = $this->input->post('hari_out');
 
                $data = array(
                    'id_in' => $id_in,
                    'Nama' => $Nama,
                    'waktu_out' => $waktu_out,
                    'hari_out' => $hari_out,
                    );
                $this->dashboard_model->update($id_in,$data);
                redirect('dashboard');
            }
        }
    
}
?>