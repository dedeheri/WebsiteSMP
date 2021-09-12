<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/auth/signin');
        } else {
            $this->loginvalidation();
        }
    }

    private function loginvalidation()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $logincek = $this->db->get_where('tb_login', ['email' => $email])->row_array();

        if ($logincek) {
            if ($logincek['email'] == $logincek['email']) {

                if (password_verify($password, $logincek['password'])) {
                    $data = [
                        'email' => $logincek['email'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard/admin');
                } else {
                    $this->session->set_flashdata('alertlogin', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Kata sandi salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('alertlogin', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email belum diaktivasi
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('alertlogin', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email belum terdaftar
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth');
        }
    }

    function registration()
    {

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_login.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Kata Sandi', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Kata sandi tidak sama',
            'min_length' => 'Kata sandi terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Kata Sandi', 'required|trim|matches[password1]', [
            'matches' => 'Kata Sandi Tidak Sama',
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/auth/signup');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $timenow = date('M d Y');
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'date_created' => $timenow
            ];

            $this->db->insert('tb_login', $data);
            $this->session->set_flashdata('alertlogin', '<div class="alert alert-success alert-dismissible fade show" role="alert">Akun berhasil dibuat
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth');
        }
    }


    function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('alertlogin', '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda sudah keluar!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('auth');
    }
}
