<?php
class Krs extends CI_Controller
{

    public function index()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $data['siswa'] = array(
                [
                    'nama' => 'Yuda',
                    'nim' => '2015051003',
                    'prodi' => 'PTI',
                    'status' => 'Lunas',
                    'tahun' => '2021',
                    'smtr' => 'Genap'
                ],
                [
                    'nama' => 'Anom',
                    'nim' => '2015051038',
                    'prodi' => 'PTI',
                    'status' => 'Lunas',
                    'tahun' => '2021',
                    'smtr' => 'Genap'
                ]
            );
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/index", $data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    public function tambah_Mahasiswa()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Tambah Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $this->load->model('All_model');
            $data['th'] = $this->All_model->getThn();

            $this->data['group'] = $this->ion_auth_model->getGroup($id);

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/tambah", $data);
            $this->load->view("admin/master/footer", $this->data);

            if ($this->input->post('submit') === '') {

                if ($this->All_model->addThn($data)) {
                    redirect('krs');
                } else {
                    redirect('krs/tambah_tahun');
                }
            }
        }
    }


    public function tambah_tahun()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Tambah Tahun";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $data['siswa'] = $this->All_model->getThn();

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/tahun", $data);
            $this->load->view("admin/master/footer", $this->data);

            if ($this->input->post('submit') === '') {
                $data = [
                    'id-th' => '',
                    'tahun' => $this->input->post('tahun', true),
                    'ket' => $this->input->post('ket', true)
                ];
                if ($this->All_model->addThn($data)) {
                    redirect('krs');
                } else {
                    redirect('krs/tambah_tahun');
                }
            }
        }
    }

    public function hapus_thn($id)
    {
        $this->load->model('All_model');
        $this->All_model->delThn($id);
        redirect('krs/tambah_tahun');
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
