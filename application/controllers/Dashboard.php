<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_admin');
        is_auth_log();
    }

    function admin()
    {
        $data['tb_articel'] = $this->m_admin->getAllArticle(10, 0);
        $data['tb_teacher'] = $this->m_admin->getTeacherByOlder(5, 0);
        $data['tb_administration'] = $this->m_admin->getAdminsByOlder(5, 0);
        $data['tb_massage'] = $this->m_admin->getMassage();
        $this->load->view('backend/index', $data);
    }

    function viewAllArticel()
    {
        $data['tb_articel'] = $this->m_admin->getArticle();
        $this->load->view('backend/viewallarticel', $data);
    }

    // post artikel

    function postArticel()
    {
        $this->form_validation->set_rules('post_title', 'Judul', 'required');
        $this->form_validation->set_rules('post_main', 'Isi Artikel', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/postartikel');
        } else {

            $image = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['post_thumbnail']['name']);
            $config['upload_path'] = './assets/img/imgthum';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $image;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('post_thumbnail')) {
                $image = 'default.png';
            }
            $this->m_admin->addArticel($image);
            $this->session->set_flashdata('flash', 'Artikel Berhasil Dipost');
            redirect('dashboard/viewallarticel');
        }
    }

    // hapus artikel
    function deleteArtikel($id_post)
    {
        $this->m_admin->deleteDataArtikel($id_post);
        $this->session->set_flashdata('flash', 'Artikel Berhasil Dihapus');
        redirect('dashboard/viewallarticel');
    }


    // detail artikel
    function detailArticel($slug)
    {
        if ($this->m_admin->getArticelById($slug) == null) {
            redirect('dashboard/notFoundAdmin');
        } else {
            $data['tb_articel'] = $this->m_admin->getArticelById($slug);
            $this->load->view('backend/detailpost', $data);
        }
    }

    // edit artikel
    function editarticel($slug)
    {
        $data['tb_articel'] = $this->m_admin->getArticelById($slug);
        $this->load->view('backend/editedarticel', $data);
    }

    function updateArticel()
    {
        $this->form_validation->set_rules('post_title', 'Judul', 'required');
        $this->form_validation->set_rules('post_main', 'Isi Artikel', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/editedarticel');
        } else {

            $image =  time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['editimage']['name']);

            $config['upload_path'] = './assets/img/imgthum';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $image;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('editimage')) {
                // $errors = array('error' => $this->upload->display_errors()); 
                $image = 'default_thumbnail.jpg';
            }

            $this->m_admin->editedDataArticel($image);
            $this->session->set_flashdata('flash', 'Artikel Berhasil diedit');
            redirect('dashboard/viewallarticel');
        }
    }

    // guru
    // tampil
    function viewAllTeacher()
    {
        $data['tb_teacher'] = $this->m_admin->getAllTeacher();
        $this->load->view('backend/viewallteacher', $data);
    }

    // tambah
    function postTeacher()
    {
        $this->form_validation->set_rules('name_teacher', 'Nama', 'required');
        $this->form_validation->set_rules('subject_teacher', 'Mapel', 'required');
        $this->form_validation->set_rules('nip_teacher', 'NIP', 'required');
        $this->form_validation->set_rules('nuptk_teacher', 'NUPTK', 'required');
        $this->form_validation->set_rules('ttl_teacher', 'TTL', 'required');
        $this->form_validation->set_rules('education_teacher', 'Pendidikan', 'required');
        $this->form_validation->set_rules('status_teacher', 'Status', 'required');
        $this->form_validation->set_rules('address_teacher', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/postteacher');
        } else {
            $image =  time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['imgteacher']['name']);
            $config['upload_path'] = './assets/img/imgteacher';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $image;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('imgteacher')) {
                // $errors = array('error' => $this->upload->display_errors());
                $image = 'default_picture.png';
            }
            $this->m_admin->addTeacher($image);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambah');
            redirect('dashboard/viewallteacher');
        }
    }

    // detail teacher
    function detailTeacher($slugteacher)
    {
        if ($this->m_admin->detailTeacherSlug($slugteacher) == null) {
            redirect('dashboard/notFoundAdmin');
        } else {
            $data['tb_teacher'] = $this->m_admin->detailTeacherSlug($slugteacher);
            $this->load->view('backend/detailteacher', $data);
        }
    }

    // hapus teacher
    function deleteDataTeacher($id_teacher)
    {
        $data['tb_teacher'] = $this->m_admin->deleteTeacher($id_teacher);
        $this->session->set_flashdata('flash', 'Data berhasil di hapus');
        redirect('dashboard/viewallteacher');
    }


    // edit
    function editDataTeacher($slugteacher)
    {
        $data['tb_teacher'] = $this->m_admin->detailTeacherslug($slugteacher);
        $this->load->view('backend/editteacher', $data);
    }
    // update teacher 

    function updateDataTeacher()
    {

        $this->form_validation->set_rules('name_teacher', 'Nama', 'required');
        $this->form_validation->set_rules('subject_teacher', 'Mapel', 'required');
        $this->form_validation->set_rules('nip_teacher', 'NIP', 'required');
        $this->form_validation->set_rules('nuptk_teacher', 'NUPTK', 'required');
        $this->form_validation->set_rules('ttl_teacher', 'TTL', 'required');
        $this->form_validation->set_rules('education_teacher', 'Pendidikan', 'required');
        $this->form_validation->set_rules('status_teacher', 'Status', 'required');
        $this->form_validation->set_rules('address_teacher', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/editteacher');
        } else {
            $upload_image_teacher = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['image_teacher']['name']);

            $config['upload_path'] = './assets/img/imgteacher';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $upload_image_teacher;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image_teacher')) {
                // $errors = array('error' => $this->upload->display_errors());
                $upload_image_teacher = 'default_picture.png';
            }
            $this->m_admin->editTeacher($upload_image_teacher);
            $this->session->set_flashdata('flash', 'Data berhasil di edit');
            redirect('dashboard/viewallteacher');
        }
    }

    // galeri
    function gallery()
    {
        $data['tb_gallery'] = $this->m_admin->getGallery();
        $this->load->view('backend/galery', $data);
    }

    // post gallery
    function postGallery()
    {

        $this->form_validation->set_rules('description_gallery', 'Deskirpsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/postgallery');
        } else {

            $upload_image_gallery = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['picture_gallery']['name']);

            $config['upload_path'] = './assets/img/imgmedia';
            $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $upload_image_gallery;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('picture_gallery')) {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Terjadi kesalahan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('dashboard/postgallery');
                $upload_image_gallery = 'default.jpg';
            } else {
                $this->m_admin->uploadGallery($upload_image_gallery);
                $this->session->set_flashdata('flash', 'Media berhasil di Tambah');
                redirect('dashboard/gallery');
            }
        }
    }

    // delete gallery
    function deleteGallery($id_gallery)
    {
        $data['tb_gallery'] = $this->m_admin->deleteGallery($id_gallery);
        $this->session->set_flashdata('flash', 'Media berhasil di hapus');
        redirect('dashboard/gallery');
    }


    // administration
    function viewAllAdministration()
    {
        $data['tb_administration'] = $this->m_admin->getAllAdministration();
        $this->load->view('backend/adm', $data);
    }

    // detail

    function editAdm($slugadministration)
    {
        $data['tb_administration'] = $this->m_admin->detailadministrationSlug($slugadministration);
        $this->load->view('backend/editadm', $data);
    }

    // edit
    function detailAdm($slugadministration)
    {
        if ($this->m_admin->detailadministrationSlug($slugadministration) == null) {
            redirect('dashboard/notFoundAdmin');
        } else {
            $data['tb_administration'] = $this->m_admin->detailadministrationSlug($slugadministration);
            $this->load->view('backend/detailadm', $data);
        }
    }



    // post
    function postAdm()
    {
        $this->form_validation->set_rules('name_administration', 'Nama', 'required');
        $this->form_validation->set_rules('nip_administration', 'NIP', 'required');
        $this->form_validation->set_rules('nuptk_administration', 'NUPTK', 'required');
        $this->form_validation->set_rules('ttl_administration', 'Tempat, Tanggal Lahir', 'required');
        $this->form_validation->set_rules('education_administration', 'Pendidikan', 'required');
        $this->form_validation->set_rules('status_administration', 'Status', 'required');
        $this->form_validation->set_rules('address_administration', 'Alamat', 'required');;

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/postadm');
        } else {
            $upload_image_adm = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['image_administration']['name']);

            $config['upload_path'] = './assets/img/imgadm';
            $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $upload_image_adm;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image_administration')) {
                // $errors = array('error' => $this->upload->display_errors());
                $upload_image_adm = 'default_picture.png';
            }
            $this->m_admin->postAdm($upload_image_adm);
            $this->session->set_flashdata('flash', 'Data berhasil di Tambah');
            redirect('dashboard/viewalladministration');
        }
    }


    // delete adm
    function deletedataadministration($id_administration)
    {
        $data['tb_gallery'] = $this->m_admin->deleteAdministration($id_administration);
        $this->session->set_flashdata('flash', 'Data berhasil di hapus');
        redirect('dashboard/viewAllAdministration');
    }



    // update
    function updateDataAdministration()
    {
        $this->form_validation->set_rules('name_administration', 'Nama', 'required');
        $this->form_validation->set_rules('nip_administration', 'NIP', 'required');
        $this->form_validation->set_rules('nuptk_administration', 'NUPTK', 'required');
        $this->form_validation->set_rules('ttl_administration', 'Tempat, Tanggal Lahir', 'required');
        $this->form_validation->set_rules('education_administration', 'Pendidikan', 'required');
        $this->form_validation->set_rules('status_administration', 'Status', 'required');
        $this->form_validation->set_rules('address_administration', 'Alamat', 'required');;

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/editadm');
        } else {
            $upload_image_adm = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['image_administration']['name']);

            $config['upload_path'] = './assets/img/imgadm';
            $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $upload_image_adm;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image_administration')) {
                // $errors = array('error' => $this->upload->display_errors());
                $upload_image_adm = 'default_picture.png';
            }
            $this->m_admin->editAdm($upload_image_adm);
            $this->session->set_flashdata('flash', 'Data berhasil di Tambah');
            redirect('dashboard/viewalladministration');
        }
    }

    // organisasi
    //  view
    function organization()
    {
        $data['tb_organization'] = $this->m_admin->viewOrgnization();
        $this->load->view('backend/organisasi', $data);
    }

    // add
    function postOrg()
    {
        $this->form_validation->set_rules('description_organization', 'Deskirpsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/postorg');
        } else {
            $upload_image_gallery = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['picture_gallery']['name']);

            $config['upload_path'] = './assets/img/imgorgns';
            $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '8388608';
            $config['file_name'] = $upload_image_gallery;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('picture_gallery')) {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Terjadi kesalahan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('dashboard/postorg');
                $upload_image_gallery = 'default.jpg';
            } else {
                $this->m_admin->addOrganzation($upload_image_gallery);
                $this->session->set_flashdata('flash', 'Media berhasil di Tambah');
                redirect('dashboard/organization');
            }
        }
    }

    // del orgs
    function deleteorg($id_organization)
    {
        $data['tb_organization'] = $this->m_admin->deleteOrg($id_organization);
        $this->session->set_flashdata('flash', 'Data berhasil di hapus');
        redirect('dashboard/organization');
    }
    // kotak get
    function facilitybox()
    {
        $data['tb_massage'] = $this->m_admin->getMassage();
        $this->load->view('backend/box', $data);
    }

    // kotak del
    function dlfb($id_massage)
    {
        $data['tb_massage'] = $this->m_admin->deleteMassage($id_massage);
        $this->session->set_flashdata('flash', 'Data berhasil di hapus');
        redirect('dashboard/facilitybox');
    }

    // kotak view
    function detailfb($id_massage)
    {
        if ($this->m_admin->vdlfb($id_massage) == null) {
            redirect('dashboard/notFoundAdmin');
        } else {
            $data['tb_massage'] = $this->m_admin->vdlfb($id_massage);
            $this->load->view('backend/detailbox', $data);
        }
    }

    // 404 admin
    function notFoundAdmin()
    {
        $this->load->view('backend/notfound');
    }
}
