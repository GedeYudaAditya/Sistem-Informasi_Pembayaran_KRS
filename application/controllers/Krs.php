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
            $this->load->model('All_model');
            $data['th'] = $this->All_model->getThn();
            $data['prodis'] = [
                [
                    'id' => 'PTI',
                    'prodi' => 'Pendidikan Teknik Informatika'
                ],
                [
                    'id' => 'SI',
                    'prodi' => 'Sistem Informatika'
                ],
                [
                    'id' => 'ilkom',
                    'prodi' => 'Ilmu Komputer'
                ],
                [
                    'id' => 'MI',
                    'prodi' => 'Manajemen Informasi'
                ]
            ];
            //var_dump($this->All_model->getingAll());
            $data['siswa'] = $this->All_model->getingAll();
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
            $data['prodis'] = [
                [
                    'id' => 'PTI',
                    'prodi' => 'Pendidikan Teknik Informatika'
                ],
                [
                    'id' => 'SI',
                    'prodi' => 'Sistem Informatika'
                ],
                [
                    'id' => 'ilkom',
                    'prodi' => 'Ilmu Komputer'
                ],
                [
                    'id' => 'MI',
                    'prodi' => 'Manajemen Informasi'
                ]
            ];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/tambah", $data);
            $this->load->view("admin/master/footer", $this->data);

            if ($this->input->post('submit') === '') {

                if ($this->All_model->addData()) {
                    $this->All_model->addSmtr();
                    redirect('krs');
                } else {
                    redirect('krs/tambah_Mahasiswa');
                }
            }
        }
    }

    public function getUbah($nim, $th, $smtr)
    {
        $this->data['title'] = "KRS - Update Data Mahasiswa";
        $this->data['active'] = "11";
        $id = $_SESSION['user_id'];
        $this->data['flip'] = "false";
        $this->data['ckeditor'] = "krs";
        $this->load->model('All_model');
        $this->data['group'] = $this->ion_auth_model->getGroup($id);
        $data['th'] = $this->All_model->getThn();
        $data['prodis'] = [
            [
                'id' => 'PTI',
                'prodi' => 'Pendidikan Teknik Informatika'
            ],
            [
                'id' => 'SI',
                'prodi' => 'Sistem Informatika'
            ],
            [
                'id' => 'ilkom',
                'prodi' => 'Ilmu Komputer'
            ],
            [
                'id' => 'MI',
                'prodi' => 'Manajemen Informasi'
            ]
        ];
        $data['datas'] = $this->All_model->getMahasiswaById($nim);
        $data['datas2'] = $this->All_model->getSmtr($nim, $th, $smtr);
        //var_dump($data['datas2']);
        $this->load->view("admin/master/header", $this->data);
        $this->load->view("admin/page/krs/m_ubah", $data);
        $this->load->view("admin/master/footer", $this->data);
    }

    public function ubahData($id, $th, $smtr)
    {
        if ($this->input->post('submit') === '') {

            if ($this->All_model->updData($id)) {
                $this->All_model->updSmtr($id, $th, $smtr);
                redirect('krs');
            } else {
                redirect('krs/getUbah/' . $id . '/' . $th . '/' . $smtr);
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

    public function ubahTahun($tahun)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Ubah Tahun";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $this->load->model('All_model');
            $data['siswa'] = $this->All_model->getThn();

            $data['isi'] = $this->All_model->getoneThn($tahun);
            //var_dump($data['isi']);
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/t_ubah", $data);
            $this->load->view("admin/master/footer", $this->data);

            if ($this->input->post('submit') === '') {
                $data = [
                    'id-th' => $this->input->post('id-th', true),
                    'tahun' => $this->input->post('tahun', true),
                    'ket' => $this->input->post('ket', true)
                ];
                if ($this->All_model->updThn($data, $tahun)) {
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

    public function hapus_smtr($id)
    {
        $this->load->model('All_model');
        $this->All_model->delSmtr($id);
        redirect('krs/');
    }

    // BAGIAN CLIENT SIDE
    public function Home()
    {
        $nim = $this->input->post('nim');

        $this->load->model('All_model');
        $data['dtMhs'] = $this->All_model->getSmtrWithTahunKRS($nim);
        $data['mhs'] = $this->All_model->getMahasiswaById($nim);
        $data['tahun'] = $this->All_model->getThn();

        $data['title'] = "Home";
        $this->load->view("guest/krs/master/header", $data);
        $this->load->view("guest/krs/page/index", $data);
        $this->load->view("guest/krs/master/footer", $data);
    }
    // END CLIENT SIDE

}
