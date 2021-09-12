<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
    }

    function read($slug)
    {
        if ($this->m_user->getArticelById($slug) == null) {
            redirect('notfound');
        } else {
            $data['tb_articel'] = $this->m_user->getArticelById($slug);
            $this->load->view('frontend/readarticel', $data);
        }
    }

    // function relatedPost()
    // {
    //     $data['tb_articel'] = $this->m_user->getArticleUser(3, 0);
    //     $this->load->view('frontend/readarticel', $data);
    // }
}
