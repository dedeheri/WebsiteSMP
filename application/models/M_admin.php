<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_model
{

    // ambil artikel
    function getAllArticle($limit, $start)
    {
        $this->db->order_by('id_post', 'DESC');
        return $this->db->get('tb_articel', $limit, $start)->result();
    }

    function getArticle()
    {
        $this->db->order_by('id_post', 'DESC');
        return $this->db->get('tb_articel')->result();
    }

    // post artikel
    function addArticel($image)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_post" => uniqid(),
            "post_time" =>  date('H:i, d M Y'),
            "post_title" => $this->input->post('post_title', true),
            'post_image' => $image,
            "post_main" => $this->input->post("post_main", true),
            "post_slug" => url_title($this->input->post('post_title'), 'dash', true)
        ];
        $this->db->insert('tb_articel', $data);
    }

    // hapus artikel
    function deleteDataArtikel($id_post)
    {
        $this->db->where('id_post', $id_post);
        $this->db->delete('tb_articel');
    }

    // detail post 
    function getArticelById($slug)
    {
        return $this->db->get_where('tb_articel', ['post_slug' => $slug])->row_array();
    }

    // edit
    function editedDataArticel($image)
    {
        $data = [
            "post_title" => $this->input->post('post_title', true),
            "post_slug" => url_title($this->input->post('post_title'), 'dash', true),
            "post_main" => $this->input->post("post_main", true),
            "post_image" => $image
        ];
        $this->db->where('id_post', $this->input->post('id_post'));
        $this->db->update('tb_articel', $data);
    }


    // guru
    // get
    function getAllteacher()
    {
        $this->db->order_by('id_teacher', 'DESC');
        return $this->db->get('tb_teacher')->result();
    }

    function getTeacherByOlder($limit, $start)
    {
        $this->db->order_by('id_teacher', 'DESC');
        return $this->db->get('tb_teacher', $limit, $start)->result();
    }

    // admins
    function getAdminsByOlder($limit, $start){
        $this->db->order_by('id_administration', 'DESC');
        return $this->db->get('tb_administration', $limit, $start)->result();
    }

    // tambah
    function addTeacher($image)
    {

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_teacher" => uniqid(),
            "name_teacher" => $this->input->post('name_teacher', true),
            "subject_teacher" => $this->input->post('subject_teacher', true),
            "image_teacher" => $image,
            "nip_teacher" => $this->input->post('nip_teacher', true),
            "nuptk_teacher" => $this->input->post('nuptk_teacher', true),
            "ttl_teacher" => $this->input->post('ttl_teacher', true),
            "education_teacher" => $this->input->post('education_teacher', true),
            "status_teacher" => $this->input->post('status_teacher', true),
            "address_teacher" => $this->input->post('address_teacher', true),
            "time_teacher" => date('H:i, d M Y'),
            "slug_teacher" => url_title($this->input->post('name_teacher'), 'dash', true)
        ];

        $this->db->insert('tb_teacher', $data);
    }

    // detail
    function detailTeacherSlug($slugteacher)
    {
        return $this->db->get_where('tb_teacher', ['slug_teacher' => $slugteacher])->row_array();
    }

    // hapus
    function deleteTeacher($id_teacher)
    {
        $this->db->where('id_teacher', $id_teacher);
        $this->db->delete('tb_teacher');
    }

    // edit 
    function editTeacher($upload_image_teacher)
    {
        $data = [
            "name_teacher" => $this->input->post('name_teacher', true),
            "subject_teacher" => $this->input->post('subject_teacher', true),
            "nip_teacher" => $this->input->post('nip_teacher', true),
            "nuptk_teacher" => $this->input->post('nuptk_teacher', true),
            "ttl_teacher" => $this->input->post('ttl_teacher', true),
            "education_teacher" => $this->input->post('education_teacher', true),
            "status_teacher" => $this->input->post('status_teacher', true),
            "address_teacher" => $this->input->post('address_teacher', true),
            "image_teacher" => $upload_image_teacher,
            "slug_teacher" => url_title($this->input->post('name_teacher'), 'dash', true)
        ];

        $this->db->where('id_teacher', $this->input->post('id_teacher'));
        $this->db->update('tb_teacher', $data);
    }

    // massage
    function getMassage()
    {
        $this->db->order_by('id_massage', 'DESC');
        return $this->db->get('tb_massage')->result();
    }

    // delete massage 
    function deleteMassage($id_massage)
    {
        $this->db->where('id_massage', $id_massage);
        $this->db->delete('tb_massage');
    }
    // detail massage 
    function vdlfb($id_massage)
    {
        return $this->db->get_where('tb_massage', ['id_massage' => $id_massage])->row_array();
    }

    // post gallery
    function getGallery()
    {
        $this->db->order_by('id_gallery', 'DESC');
        return $this->db->get('tb_gallery')->result();
    }

    // upload gallery
    function uploadGallery($upload_image_gallery)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_gallery" => uniqid(),
            "time_gallery" => date('H:i, d M Y'),
            "image_gallery" => $upload_image_gallery,
            "description_gallery" => $this->input->post('description_gallery', true),
        ];
        $this->db->insert('tb_gallery', $data);
    }

    // delete gallery
    function deleteGallery($id_gallery)
    {
        $this->db->where('id_gallery', $id_gallery);
        $this->db->delete('tb_gallery');
    }


    // adm
    function getAllAdministration()
    {
        $this->db->order_by('id_administration', 'DESC');
        return $this->db->get('tb_administration')->result();
    }

    // detail
    function detailadministrationSlug($slugadministration)
    {
        return $this->db->get_where('tb_administration', ['slug_administration' => $slugadministration])->row_array();
    }
    // post 
    function postAdm($upload_image_adm)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_administration" => uniqid(),
            "name_administration" => $this->input->post('name_administration', true),
            "image_administration" => $upload_image_adm,
            "nip_administration" => $this->input->post('nip_administration', true),
            "nuptk_administration" => $this->input->post('nuptk_administration', true),
            "ttl_administration" => $this->input->post('ttl_administration', true),
            "education_administration" => $this->input->post('education_administration', true),
            "status_administration" => $this->input->post('status_administration', true),
            "address_administration" => $this->input->post('address_administration', true),
            "time_administration" => date('H:i, d M Y'),
            "slug_administration" => url_title($this->input->post('name_administration'), 'dash', true)
        ];

        $this->db->insert('tb_administration', $data);
    }

    // delete 
    function deleteAdministration($id_administration)
    {
        $this->db->where('id_administration', $id_administration);
        $this->db->delete('tb_administration');
    }

    // edit 
    function editAdm($upload_image_adm)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "name_administration" => $this->input->post('name_administration', true),
            "image_administration" => $upload_image_adm,
            "nip_administration" => $this->input->post('nip_administration', true),
            "nuptk_administration" => $this->input->post('nuptk_administration', true),
            "ttl_administration" => $this->input->post('ttl_administration', true),
            "education_administration" => $this->input->post('education_administration', true),
            "status_administration" => $this->input->post('status_administration', true),
            "address_administration" => $this->input->post('address_administration', true),
            "time_administration" => date('H:i, d M Y'),
            "slug_administration" => url_title($this->input->post('name_administration'), 'dash', true)
        ];
        $this->db->where('id_administration', $this->input->post('id_administration'));
        $this->db->update('tb_administration', $data);
    }

    // organization
    // view
    function viewOrgnization()
    {
        $this->db->order_by('id_organization', 'DESC');
        return $this->db->get('tb_organization')->result();
    }
    // add
    function addOrganzation($upload_image_gallery)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_organization" => uniqid(),
            "time_organization" => date('H:i, d M Y'),
            "image_organization" => $upload_image_gallery,
            "description_organization" => $this->input->post('description_organization', true)
        ];
        $this->db->insert('tb_organization', $data);
    }

    // del
    function deleteOrg($id_organization)
    {
        $this->db->where('id_organization', $id_organization);
        $this->db->delete('tb_organization');
    }

    // prestasi
    // get
    function getAchievement()
    {
        $this->db->order_by('id_achievement', 'DESC');
        return $this->db->get('tb_achievement')->result();
    }
    // add
    function addAchievement($upload_image)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_achievement" => uniqid(),
            "image_achievement" => $upload_image,
            "note_achievement" => $this->input->post('note_achievement', true),
            "time_achievement" => date('H:i, d M Y')
        ];
        $this->db->insert('tb_achievement', $data);
    }
    // del

    function deleteAchieve($id_achievement)
    {
        $this->db->where('id_achievement', $id_achievement);
        $this->db->delete('tb_achievement');
    }
}
