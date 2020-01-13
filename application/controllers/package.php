<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class package extends CI_Controller 
{

    public function index() {

        
        $data['title'] = 'List Package';
        $data['user']= $this->db->get_where('user', ['email' => 
        $this ->session->userdata('email')])->row_array();

        $data['user_package'] = $this->db->get('user_package')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name_package', 'Name_Package', 'required');
        $this->form_validation->set_rules('speed_package', 'Speed_Package', 'required');
        $this->form_validation->set_rules('duration_package', 'Duration_Package', 'required');
        $this->form_validation->set_rules('price_package', 'Price_Package', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data); 
            $this->load->view('templates/sidebar', $data); 
            $this->load->view('templates/topbar', $data); 
            $this->load->view('package/index', $data); 
            $this->load->view('templates/footer'); 
        }
        else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'name_package' => $this->input->post('name_package'),
                'speed_package' => $this->input->post('speed_package'),
                'duration_package' => $this->input->post('duration_package'),
                'price_package' => $this->input->post('price_package'),
                'tgl_transc' =>time(),
                'jam_transc' => time(),
                'end_transc' => mktime(date(' H:i:s', time() + (60 * 60)))

            ];
            $email = $this->input->post('email');
            $duration=  $this->input->post('duration_package');
            $name_package= $this->input->post('name_package');
            $speed_package= $this->input->post('speed_package');
            $jam_transc= time();
            $end_transc = mktime(date(' H:i:s', time() + (60 * 60)));

            $this->db->set('duration', $duration);
            $this->db->set('name_package', $name_package);
            $this->db->set('speed_package', $speed_package);
            $this->db->set('jam_transc', $jam_transc);
            $this->db->set('end_transc', $end_transc);

            $this->db->where('email', $email);
            $this->db->update('user');

            $this->db->insert('user_transaction', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Buy Succsessfully</div>');
            redirect('package');

        }

        

    }

}
