<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    
    public function index() 
    {
            $data['title'] = 'List Member';
            $data['user']= $this->db->get_where('user', ['email' => 
            $this ->session->userdata('email')])->row_array();
            
            $data['userlist'] = $this->db->get('user')->result_array();
           


            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('role_id', 'Role_id', 'required');
            $this->form_validation->set_rules('is_active', 'Is_active', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data); 
                $this->load->view('templates/sidebar', $data); 
                $this->load->view('templates/topbar', $data); 
                $this->load->view('admin/index', $data); 
                $this->load->view('templates/footer'); 
            } else {
                $data = [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'image' => $this->input->post('image'),
                    'role_id' => $this->input->post('role_id'),
                    'is_active' => $this->input->post('is_active'),
                ];
                $this->db->insert('user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                New User Added</div>');
                redirect('admin');
            }


            
    }

    public function transc() 
    {
        $data['title'] = 'History Transaction';
        $data['user']= $this->db->get_where('user', ['email' => 
        $this ->session->userdata('email')])->row_array();

        $data ['transaction'] = $this->db->get('user_transaction')->result_array();

        $this->load->view('templates/header', $data); 
        $this->load->view('templates/sidebar', $data); 
        $this->load->view('templates/topbar', $data); 
        $this->load->view('admin/transc', $data); 
        $this->load->view('templates/footer'); 
    }

}