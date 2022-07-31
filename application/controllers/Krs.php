<?php
class Krs extends CI_Controller
{

    public function index()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs', 'home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');
            $data['th'] = $this->All_model->getThn();
            $data['info'] = $this->All_model->infos();
            unset($_SESSION['flash']);
            //var_dump($data['info']);
            if (empty($data['info'])) {
                $data = [
                    'id-info' => 1,
                    'info' => 'Data update kosong',
                    'ket' => 'Tidak ada yang di ubah sebelumnya'
                ];
                $this->All_model->defaultInfo($data);
                $data['info'] = $this->All_model->infos();
                $data['infos'] = false;
            } else {
                $data['infos'] = true;
            }
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
                    'id' => 'ILKOM',
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
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Tambah Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            unset($_SESSION['sukses']);
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
                    'id' => 'ILKOM',
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

                if ($this->All_model->addData() && $this->All_model->addSmtr()) {
                    $info = [
                        'id-info' => 1,
                        'info' => date('j F Y'),
                        'ket' => date('G \: i \: s')
                    ];
                    $this->All_model->updInfo($info);
                    unset($_SESSION['flash']);
                    $this->session->set_flashdata('sukses', 'Ditambahkan');
                    redirect('krs');
                } else {
                    $this->session->set_flashdata('flash', 'Gagal ditambahkan');
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
        unset($_SESSION['sukses']);
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
                'id' => 'ILKOM',
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
            // var_dump($this->All_model->updSmtr($id, $th, $smtr));
            // die;
            if ($this->All_model->updData($id)) {
                $this->All_model->updSmtr($id, $th, $smtr);
                $info = [
                    'id-info' => 1,
                    'info' => date('j F Y'),
                    'ket' => date('G \: i \: s')
                ];
                $this->All_model->updInfo($info);
                unset($_SESSION['flash']);
                $this->session->set_flashdata('sukses', 'Diubah');
                redirect('krs');
            } else {
                $this->session->set_flashdata('flash', 'Gagal diubah');
                redirect('krs/getUbah/' . $id . '/' . $th . '/' . $smtr);
            }
        }
    }


    public function tambah_tahun()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs');
        } else {
            $this->data['title'] = "KRS - Tambah Tahun";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $data['siswa'] = $this->All_model->getThn();

            unset($_SESSION['sukses']);
            unset($_SESSION['suksesth']);
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
                    $this->session->set_flashdata('suksesth', 'Diubah');
                    unset($_SESSION['flashth']);
                    redirect('krs');
                    $info = [
                        'id-info' => 1,
                        'info' => date('j F Y'),
                        'ket' => date('G \: i \: s')
                    ];
                    $this->All_model->updInfo($info);
                } else {
                    $this->session->set_flashdata('flashth', 'Gagal ditambah');
                    redirect('krs/tambah_tahun');
                }
            }
        }
    }

    public function ubahTahun($tahun)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
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
            unset($_SESSION['sukses']);
            unset($_SESSION['suksesth']);
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
                    $this->session->set_flashdata('suksesth', 'Diubah');
                    unset($_SESSION['flashth']);
                    $info = [
                        'id-info' => 1,
                        'info' => date('j F Y'),
                        'ket' => date('G \: i \: s')
                    ];
                    $this->All_model->updInfo($info);
                    redirect('krs');
                } else {
                    $this->session->set_flashdata('flashth', 'Gagal diubah');
                    redirect('krs/tambah_tahun');
                }
            }
        }
    }

    public function hapus_thn($id)
    {
        $this->load->model('All_model');
        $this->All_model->delThn($id);
        $info = [
            'id-info' => 1,
            'info' => date('j F Y'),
            'ket' => date('G \: i \: s')
        ];
        $this->All_model->updInfo($info);
        redirect('krs/tambah_tahun');
    }

    public function hapus_smtr($id)
    {
        $this->load->model('All_model');
        $this->All_model->delSmtr($id);
        $info = [
            'id-info' => 1,
            'info' => date('j F Y'),
            'ket' => date('G \: i \: s')
        ];
        $this->All_model->updInfo($info);
        redirect('krs/');
    }

    public function printCSV()
    {
        if (isset($_POST['export'])) {
            $this->load->model('All_model');
            $isi = $this->All_model->printCSV();

            $date = date('j F Y');
            $time = date('G\^i\^s');
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=DataPembayaran_' . $date . '_' . $time . '.csv');
            $output = fopen("php://output", "w");
            fputcsv($output, array('NIM', 'Nama', 'Prodi', 'Semester', 'Status', 'Tahun'));

            foreach ($isi as $row) {
                fputcsv($output, $row);
            }
            fclose($output);
        }
    }

    public function importCSV()
    {
        if (isset($_POST['input'])) {

            $this->load->model('All_model');
            if ($this->All_model->importCSV()) {
                $info = [
                    'id-info' => 1,
                    'info' => date('j F Y'),
                    'ket' => date('G \: i \: s')
                ];
                $this->All_model->updInfo($info);
                $this->session->set_flashdata('sukses', 'Ditambahkan');
                redirect('krs/');
            } else {
                $this->session->set_flashdata('flash', 'Gagal diupload');
                redirect('krs/');
            }
        }
    }

    // public function update_info()
    // {
    //     if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
    //         redirect('krs');
    //     } else {
    //         $this->data['title'] = "KRS - Update info";
    //         $this->data['active'] = "11";
    //         $id = $_SESSION['user_id'];
    //         $this->data['flip'] = "false";
    //         $this->data['ckeditor'] = "krs";
    //         $this->load->model('All_model');
    //         $datas['info'] = $this->All_model->infos();
    //         if (isset($data['info']) == null) {
    //             $data = [
    //                 'id-info' => '1',
    //                 'info' => 'Belum ada info terupdate',
    //                 'ket' => 'Klik edit untuk isi info'
    //             ];
    //             $this->All_model->defaultInfo($data);
    //         }

    //         $this->data['group'] = $this->ion_auth_model->getGroup($id);
    //         $this->load->view("admin/master/header", $this->data);
    //         $this->load->view("admin/page/krs/updateInfo", $datas);
    //         $this->load->view("admin/master/footer", $this->data);

    //         if ($this->input->post('submit') === '') {
    //             $info = [
    //                 'id-info' => $this->input->post('id-info', true),
    //                 'info' => $this->input->post('info', true),
    //                 'ket' => $this->input->post('ket', true)
    //             ];
    //             if ($this->All_model->updInfo($info)) {
    //                 redirect('krs');
    //             } else {
    //                 redirect('krs/update_info');
    //             }
    //         }
    //     }
    // }

    // BAGIAN CLIENT SIDE
    public function Home()
    {
        if ($this->ion_auth->logged_in() && $this->ion_auth->in_group(krs)) {
            redirect('sso_hmj', 'refresh');
        } else {

            $this->data['title'] = $this->lang->line('login_heading');

            // validate form input
            $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
            $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

            if ($this->form_validation->run() === TRUE) {
                // check to see if the user is logging in
                // check for "remember me"
                $remember = (bool) $this->input->post('remember');

                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    //if the login is successful
                    //redirect them back to the home page
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    redirect('sso_hmj', 'refresh');
                } else {
                    // if the login was un-successful
                    // redirect them back to the login page
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    redirect('login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
                }
            } else {
                // the user is not logging in so display the login page
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $this->data['identity'] = [
                    'name' => 'identity',
                    'id' => 'identity',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('identity'),
                ];

                $this->data['password'] = [
                    'name' => 'password',
                    'id' => 'password',
                    'type' => 'password',
                ];

                $nim = $this->input->post('nim');

                $this->load->model('All_model');
                $data['dtMhs'] = $this->All_model->getSmtrWithTahunKRS($nim);
                $data['mhs'] = $this->All_model->getMahasiswaById($nim);
                $data['tahun'] = $this->All_model->getThn();
                $data['updated_info'] = $this->All_model->infos();

                $data['title'] = "Home";
                $this->load->view("guest/krs/master/header", $data);
                $this->load->view("guest/krs/page/index", $this->data);
                $this->load->view("guest/krs/master/footer", $data);
            }
        }
    }
    // END CLIENT SIDE

    // Mahasiswa upload  bukti
    public function upload_bukti()
    {
        $this->load->library('form_validation');
        $this->load->model('All_model');

        $this->data['active'] = "11";
        $this->data['flip'] = "false";
        $this->data['ckeditor'] = "krs";

        $id = $_SESSION['user_id'];

        $this->data['mahasiswa'] = $this->All_model->getOneMahasiswa($id);
        $this->data['form_bukti'] = $this->db->get_where('form_bukti', ['id' => 1])->result_array();

        $this->data['group'] = "9";
        $this->data['group'] = $this->ion_auth_model->getGroup($id);
        $this->data['title'] = "Upload Bukti";

        $this->data['prodis'] = [
            [
                'id' => 'PTI',
                'prodi' => 'Pendidikan Teknik Informatika'
            ],
            [
                'id' => 'SI',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'id' => 'ILKOM',
                'prodi' => 'Ilmu Komputer'
            ],
            [
                'id' => 'MI',
                'prodi' => 'Manajemen Informasi'
            ]
        ];

        $this->load->view("admin/master/header", $this->data);
        $this->load->view("admin/page/krs/mahasiswa/halaman_upload_bukti", $this->data);
        $this->load->view("admin/master/footer", $this->data);
    }


    //handle data bukti from upload bukti start---
    public function simpan_bukti()
    {
        $this->load->library('form_validation');
        $this->load->model('All_model');

        $this->data['active'] = "11";
        $this->data['flip'] = "false";
        $this->data['ckeditor'] = "krs";

        $id = $_SESSION['user_id'];


        $this->data['group'] = "9";
        $this->data['group'] = $this->ion_auth_model->getGroup($id);
        $this->data['title'] = "Upload Bukti";
        // ambil data 
        $this->data['mahasiswa'] = $this->All_model->getOneMahasiswa($id);
        $nama = $this->input->post('nama_lengkap');
        // echo $nama;

        // $this->data['prodis'] = [
        //     [
        //         'id' => 'PTI',
        //         'prodi' => 'Pendidikan Teknik Informatika'
        //     ],
        //     [
        //         'id' => 'SI',
        //         'prodi' => 'Sistem Informasi'
        //     ],
        //     [
        //         'id' => 'ILKOM',
        //         'prodi' => 'Ilmu Komputer'
        //     ],
        //     [
        //         'id' => 'MI',
        //         'prodi' => 'Manajemen Informasi'
        //     ]
        // ];

        // $this->form_validation->set_rules(
        //     'nama_lengkap',
        //     'Nama',
        //     'required',
        //     [
        //         'required' => 'Lengkapi {field} terlebih dahulu'
        //     ]
        // );
        // $this->form_validation->set_rules(
        //     'nim',
        //     'NIM',
        //     'required|numeric|max_length[10]',
        //     [
        //         'required'   => 'Lengkapi {field} terlebih dahulu',
        //         'numeric'    => 'Input {field} tidak valid',
        //         'max_length' => 'Input {field} tidak valid'
        //     ]
        // );
        // $this->form_validation->set_rules(
        //     'nim',
        //     'NIM',
        //     'required|numeric|max_length[10]',
        //     [
        //         'required'   => 'Lengkapi {field} terlebih dahulu',
        //         'numeric'    => 'Input {field} tidak valid',
        //         'max_length' => 'Input {field} tidak valid'
        //     ]
        // );
        // $this->form_validation->set_rules(
        //     'file_bukti',
        //     'File Bukti',
        //     'required',
        //     [
        //         'required'   => 'Lengkapi {field} terlebih dahulu'
        //     ]
        // );
        $id = $this->input->post('mahasiswa_id');
        $form_id = $this->input->post('form_id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $file_bukti = $_FILES['file_bukti'];
        $file_name = $nim . "_Bukti";
        $config = [
            'upload_path'   => './assets/upload/Folder_krs',
            'allowed_types' => 'pdf|png',
            'file_name'     =>  $file_name
        ];

        if ($file_bukti != '') {

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file_bukti')) {
                $data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('file_error', $data['error']);
                redirect('Krs/upload_bukti');
            } else {
                $data = [
                    'mahasiswa_id' => $id,
                    'form_bukti_id' => 1,
                    'deskripsi' => '',
                    'file_path' => $this->upload->data('full_path')
                ];

                $this->db->insert('bukti', $data);
                redirect('sso_hmj');
            }
        }
    }
    //handle data bukti from upload bukti end------

    // Halaman Bukti
    public function halaman_bukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs', 'home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');
            $data['th'] = $this->All_model->getThn();
            $data['info'] = $this->All_model->infos();
            unset($_SESSION['flash']);
            //var_dump($data['info']);
            if (empty($data['info'])) {
                $data = [
                    'id-info' => 1,
                    'info' => 'Data update kosong',
                    'ket' => 'Tidak ada yang di ubah sebelumnya'
                ];
                $this->All_model->defaultInfo($data);
                $data['info'] = $this->All_model->infos();
                $data['infos'] = false;
            } else {
                $data['infos'] = true;
            }
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
                    'id' => 'ILKOM',
                    'prodi' => 'Ilmu Komputer'
                ],
                [
                    'id' => 'MI',
                    'prodi' => 'Manajemen Informasi'
                ]
            ];

            //var_dump($this->All_model->getingAll());
            $data['siswa'] = $this->db->get('mahasiswa')->result_array();
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/data_mhs", $data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }
    //tampilkan data mahasiswa aktif TI start-----
    public function mahasiswa()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs', 'home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');
            $data['th'] = $this->All_model->getThn();
            $data['info'] = $this->All_model->infos();
            unset($_SESSION['flash']);
            //var_dump($data['info']);
            if (empty($data['info'])) {
                $data = [
                    'id-info' => 1,
                    'info' => 'Data update kosong',
                    'ket' => 'Tidak ada yang di ubah sebelumnya'
                ];
                $this->All_model->defaultInfo($data);
                $data['info'] = $this->All_model->infos();
                $data['infos'] = false;
            } else {
                $data['infos'] = true;
            }
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
                    'id' => 'ILKOM',
                    'prodi' => 'Ilmu Komputer'
                ],
                [
                    'id' => 'MI',
                    'prodi' => 'Manajemen Informasi'
                ]
            ];

            //var_dump($this->All_model->getingAll());
            $data['siswa'] = $this->db->get('mahasiswa')->result_array();
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/data_mhs", $data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    //tampilkan data mahasiswa aktif TI end-----

    // Masukkan data mahasiswa Krs
    public function tambah_Mahasiswa_Krs()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs');
        } else {

            $this->data['title'] = "KRS - Tambah Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";


            unset($_SESSION['sukses']);
            $this->load->model('All_model');
            $data['th'] = ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'];
            $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            $data['dosen'] = $this->db->get('dosen_pa')->result_array();


            $data['users'] = $this->db->select("*")->limit(1)->order_by('id', "DESC")->get("users")->row();

            $data['prodis'] = [
                [
                    'id' => 'PTI',
                    'prodi' => 'Pendidikan Teknik Informatika'
                ],
                [
                    'id' => 'SI',
                    'prodi' => 'Sistem Informasi'
                ],
                [
                    'id' => 'ILKOM',
                    'prodi' => 'Ilmu Komputer'
                ],
                [
                    'id' => 'MI',
                    'prodi' => 'Manajemen Informasi'
                ]
            ];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->library('form_validation');

            $this->form_validation->set_rules(
                'user_id',
                'User Id',
                'required|numeric|is_unique[mahasiswa.user_id]',
                [
                    'required'  => 'Input {field} belum terisi',
                    'numeric'   => 'Input {field} tidak valid',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            );
            $this->form_validation->set_rules(
                'nama',
                'Nama Mahasiswa',
                'required',
                [
                    'required' => 'Input {field} belum terisi'
                ]
            );
            $this->form_validation->set_rules(
                'nim',
                'NIM Mahasiswa',
                'required|numeric|is_unique[mahasiswa.nim]',
                [
                    'required'  => 'Input {field} belum terisi',
                    'numeric'   => 'Input {field} tidak valid',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            );
            $this->form_validation->set_rules(
                'prodi',
                'Prodi',
                'required',
                [
                    'required' => "Pilih Prodi terlebih dahulu"
                ]
            );
            $this->form_validation->set_rules(
                'angkatan',
                'Angkatan',
                'required',
                [
                    'required' => "Pilih {field} terlebih dahulu"
                ]
            );
            $this->form_validation->set_rules(
                'smtr',
                'Semester',
                'required',
                [
                    'required' => "Pilih {field} terlebih dahulu"
                ]
            );
            $this->form_validation->set_rules(
                'dosen_pa',
                'Pembimbing Akademik',
                'required',
                [
                    'required' => "Pilih {field} terlebih dahulu"
                ]
            );

            if ($this->form_validation->run() == FALSE) {
                $this->load->view("admin/master/header", $this->data);
                $this->load->view("admin/page/krs/input_data_mahasiswa", $data);
                $this->load->view("admin/master/footer", $this->data);
            } else {
                $nama = $this->input->post('nama');
                $nim = $this->input->post('nim');
                $prodi = $this->input->post('prodi');
                $user_id = $this->input->post('user_id');
                $pa_id = $this->input->post('dosen_pa');
                $angkatan = $this->input->post('angkatan');
                $semester = $this->input->post('smtr');

                $data = [
                    'nama'      => $nama,
                    'nim'       =>  $nim,
                    'prodi'     =>  $prodi,
                    'user_id'   =>  $user_id,
                    'pa_id'     =>  $pa_id,
                    'angkatan'  =>  $angkatan,
                    'semester'  =>  $semester
                ];
                $this->db->insert('mahasiswa', $data);
                $data['users'] = $this->db->select("*")->limit(1)->order_by('id', "DESC")->get("users")->row();
                $user_id = $data['users']->id;

                echo $this->input->post('userGroup');
                $this->db->where('user_id', $user_id);
                $this->db->update('users_groups', ['group_id' => $this->input->post('userGroup')]);
                redirect('krs/mahasiswa');
            }
        }
    }

    public function update_data_mahasiswa($mhs_id)
    {
        $this->data['title'] = "KRS - Update Data Mahasiswa";
        $this->data['active'] = "11";
        $id = $_SESSION['user_id'];
        $this->data['flip'] = "false";
        $this->data['ckeditor'] = "krs";
        $this->load->model('All_model');
        $this->data['group'] = $this->ion_auth_model->getGroup($id);
        unset($_SESSION['sukses']);
        $data['th'] = $this->All_model->getThn();
        $data['prodis'] = [
            [
                'id' => 'PTI',
                'prodi' => 'Pendidikan Teknik Informatika'
            ],
            [
                'id' => 'SI',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'id' => 'ILKOM',
                'prodi' => 'Ilmu Komputer'
            ],
            [
                'id' => 'MI',
                'prodi' => 'Manajemen Informasi'
            ]
        ];
        $data['th'] = ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'];
        $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $data['dosen'] = $this->db->get('dosen_pa')->result_array();
        $data['mahasiswa'] = $this->db->get_where('mahasiswa', ['id' => $mhs_id])->row_array();

        $this->load->library('form_validation');

        $this->form_validation->set_rules(
            'nama',
            'Nama Mahasiswa',
            'required',
            [
                'required' => 'Input {field} belum terisi'
            ]
        );
        $this->form_validation->set_rules(
            'prodi',
            'Prodi',
            'required',
            [
                'required' => "Pilih Prodi terlebih dahulu"
            ]
        );
        $this->form_validation->set_rules(
            'angkatan',
            'Angkatan',
            'required',
            [
                'required' => "Pilih {field} terlebih dahulu"
            ]
        );
        $this->form_validation->set_rules(
            'smtr',
            'Semester',
            'required',
            [
                'required' => "Pilih {field} terlebih dahulu"
            ]
        );
        $this->form_validation->set_rules(
            'dosen_pa',
            'Pembimbing Akademik',
            'required',
            [
                'required' => "Pilih {field} terlebih dahulu"
            ]
        );
        if ($this->form_validation->run() == FALSE) {

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/m_ubah_data_mhs", $data);
            $this->load->view("admin/master/footer", $this->data);
        } else {

            redirect('/krs/simpan_data');
        }
    }

    public function simpan_data()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $prodi = $this->input->post('prodi');
        $user_id = $this->input->post('user_id');
        $pa_id = $this->input->post('dosen_pa');
        $angkatan = $this->input->post('angkatan');
        $semester = $this->input->post('smtr');

        $data = [
            'nama'      => $nama,
            'nim'       =>  $nim,
            'prodi'     =>  $prodi,
            'user_id'   =>  $user_id,
            'pa_id'     =>  $pa_id,
            'angkatan'  =>  $angkatan,
            'semester'  =>  $semester
        ];

        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
        $this->session->set_flashdata('sukses', "diubah");

        redirect('krs/mahasiswa');
    }
}
