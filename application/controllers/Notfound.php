<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_user");
	}
	public function index()
	{
		$data['tb_articel'] = $this->m_user->getArticleUser(3, 0);
		$this->load->view('frontend/notfound', $data);
	}
}
