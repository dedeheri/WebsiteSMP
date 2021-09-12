<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    // artikel di front
    function getArticleUser($limit, $start)
    {
        $this->db->order_by('id_post', 'DESC');
        return $this->db->get('tb_articel', $limit, $start)->result();
    }

    function getAllArticleUser()
    {
        $this->db->order_by('id_post', 'DESC');
        return $this->db->get('tb_articel')->result();
    }

    // data guru
    function getAllTeacher()
    {
        $this->db->order_by('id_teacher', 'DESC');
        return $this->db->get('tb_teacher')->result();
    }

    // data TU
    function getAllAdm()
    {
        $this->db->order_by('id_administration', 'DESC');
        return $this->db->get('tb_administration')->result();
    }

    // detail post 
    function getArticelById($slug)
    {
        return $this->db->get_where('tb_articel', ['post_slug' => $slug])->row_array();
    }

    // kontak 
    function addMassage()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('H:i, M d Y');
        $data = [
            "id_massage" => uniqid(),
            "name_massage" => $this->input->post('name_massage', true),
            "email_massage" => $this->input->post('email_massage', true),
            "content_massage" => $this->input->post("content_massage", true),
            "time_massage" => $now
        ];

        $this->db->insert('tb_massage', $data);
    }

    // media
    function getMediaPictureLimit($limit, $start)
    {
        $this->db->order_by('id_gallery', 'DESC');
        return $this->db->get('tb_gallery', $limit, $start)->result();
    }

    function getMediaPictureAll()
    {
        $this->db->order_by('id_gallery', 'DESC');
        return $this->db->get('tb_gallery')->result();
    }

    function GetOrganization()
    {
        $this->db->order_by('id_organization', 'DESC');
        return $this->db->get('tb_organization')->result();
    }

    // prestasi
    function GetAchieve()
    {
        $this->db->order_by('id_achievement', 'DESC');
        return $this->db->get('tb_achievement')->result();
    }
}
