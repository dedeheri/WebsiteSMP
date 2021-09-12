<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_user");
	}

	public function index()
	{
		$data['title'] = "SMP NEGERI 1 CISARUA";
		$data['tb_articel'] = $this->m_user->getArticleUser(3, 0);
		$data['tb_gallery'] = $this->m_user->getMediaPictureLimit(8, 0);
		$this->load->view('frontend/index', $data);
	}
}
