<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
        {
            
            $this->load->view('halutama/home');
            
        }
    public function service()
        {
            
            $this->load->view('halutama/service');
            
        }
    public function portofolio()
        {
            
            $this->load->view('halutama/portofolio');
            
        }
   public function contactus()
        {
            
            $this->load->view('halutama/contactus');
            
        }
     public function team()
        {
            
            $this->load->view('halutama/team');
            
        }
    public function registrasi()
        {
            
            $this->load->view('registrasi');
            
        }
}
