<?php
class Krs extends CI_Controller
{

    public function index()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "6";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/index", $this->data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    public function tambah_Mahasiswa()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Tambah Data Mahasiswa";
            $this->data['active'] = "6";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/tambah", $this->data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    // BAGIAN CLIENT SIDE
    public function Home()
    {
        $data['title'] = "Home";
        $this->load->view("guest/krs/master/header", $data);
        $this->load->view("guest/krs/page/index", $data);
        $this->load->view("guest/krs/master/footer", $data);
    }
    // END CLIENT SIDE
}
