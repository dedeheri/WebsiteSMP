<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("m_user");
    }

    function contact()
    {
        $this->form_validation->set_rules('name_massage', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email_massage', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('content_massage', 'Pesan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/kontak');
        } else {
            $this->m_user->addMassage();
            $this->session->set_flashdata('flash', 'masukan anda sangat berarti untuk kemajuan kami');
            redirect('contact');
        }
    }

    function teachers()
    {
        $data['tb_teacher'] = $this->m_user->getAllTeacher();
        $this->load->view('frontend/pendidik', $data);
    }

    function administration()
    {
        $data['tb_administration'] = $this->m_user->getAllAdm();
        $this->load->view('frontend/tu', $data);
    }

    function news()
    {
        $data['title'] = 'Berita Sekolah - SMP NEGERI 1 CISARUA';
        $data["tb_articel"] = $this->m_user->getAllArticleUser();

        $this->load->view('frontend/berita', $data);
    }


    function about()
    {
        $this->load->view('frontend/tentang');
    }

    function facilities()
    {
        $this->load->view('frontend/fasilitas');
    }

    function extracurricular()
    {
        $this->load->view('frontend/extrakulikuler');
    }
    function videos()
    {
        $this->load->view('frontend/video');
    }
    function photos()
    {
        $data['tb_gallery'] = $this->m_user->getMediaPictureAll();
        $this->load->view('frontend/foto', $data);
    }

    function achievement()
    {
        $data['tb_achievement'] = $this->m_user->GetAchieve();
        $this->load->view('frontend/prestasi', $data);
    }

    function organization()
    {
        $data['tb_organization'] = $this->m_user->GetOrganization();
        $this->load->view('frontend/organisasi', $data);
    }
}
