<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/home');
    }
    
    public function demo()
    {
        if($this->session->userdata('id')){
            echo 'Demo berhasil';
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You must login first!</div>');
            redirect('auth');
        }
    }
}