<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{ 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Login Page';
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }
    
    public function registration ()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has Already Registered!'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
         


       if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration RT/RW Net';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        }
        else {
            $data = [
                'name' => $this->input->post('name',true),
                'email' => $this->input->post('email',true),
                'image' => 'default.jpg',
                'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data); 
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulations your acount has been created!, please Login
          </div>');
            redirect('auth');
        }

    }

}