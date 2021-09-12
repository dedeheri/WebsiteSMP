<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{
    function getlogin($data){
        return $this->db->get_where('tb_login' ,$data);
    }

    // singup
    function addLogin(){
        // $email = $this->input->post('email_login', true);
        // $password = $this->input->post('password_login', true);
        $data = [
            'email_login' => $this->input->post('email_login', true),
            'password_login' => $this->input->post('password_login', true)
        ];

        $this->db->insert('tb_login', $data);
    }
}

