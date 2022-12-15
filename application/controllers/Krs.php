<?php
class Krs extends CI_Controller
{

    public function index()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Data Akun Mahasiswa";
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
            redirect('krs/home');
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
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
    }

    public function ubahData($id, $th, $smtr)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
    }


    public function tambah_tahun()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
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
            redirect('krs/home');
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
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
    }

    public function hapus_smtr($id)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
    }

    public function printCSV()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
    }

    public function importCSV()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
        if ($this->ion_auth->logged_in() || $this->ion_auth->in_group(krs)) {
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


    //tampilkan data mahasiswa aktif TI start-----
    public function mahasiswa()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
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
            $data['siswa'] = $this->All_model->getMahasiswa();
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/data_mhs", $data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    //tampilkan data mahasiswa aktif TI end-----

    // Admin Tambah data mahasiswa Krs
    public function tambah_Mahasiswa_Krs()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {

            $this->data['title'] = "KRS - Tambah Data Mahasiswa";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";


            unset($_SESSION['sukses']);
            $this->load->model('All_model');
            $this->lang->load('form_validation');
            $data['th'] = ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'];
            $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            $data['dosen'] = $this->db->get('s6_dosen')->result_array();


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
            $this->lang->load('form_validation_lang');

            $this->form_validation->set_rules('user_id', 'User Id', 'required|numeric|is_unique[s6_mahasiswa.user_id]');
            $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');
            // $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required|numeric|is_unique[s6_mahasiswa.nim]');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('smtr', 'Semester', 'required');
            $this->form_validation->set_rules('dosen_pa', 'Pembimbing Akademik', 'required');

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
                    'prodi'     =>  $prodi,
                    'user_id'   =>  $user_id,
                    'pa_id'     =>  $pa_id,
                ];
                $this->db->insert('s6_mahasiswa', $data);
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
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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
            $data['dosen'] = $this->db->get('s6_dosen')->result_array();
            $data['mahasiswa'] = $this->db->get_where('s6_mahasiswa', ['id_mhs' => $mhs_id])->row_array();

            $this->load->library('form_validation');

            $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('smtr', 'Semester', 'required');
            $this->form_validation->set_rules('dosen_pa', 'Pembimbing Akademik', 'required');
            if ($this->form_validation->run() == FALSE) {

                $this->load->view("admin/master/header", $this->data);
                $this->load->view("admin/page/krs/m_ubah_data_mhs", $data);
                $this->load->view("admin/master/footer", $this->data);
            } else {

                redirect('/krs/simpan_data');
            }
        }
    }
    public function simpan_data()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
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

            $this->db->where('id_mhs', $id);
            $this->db->update('s6_mahasiswa', $data);
            $this->session->set_flashdata('sukses', "diubah");

            redirect('krs/mahasiswa');
        }
    }
    // End Admin

    // Start User Mahasiswa
    // Halaman Bukti mahasiswa - [Marchel]
    public function halaman_bukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Bukti Pembayaran";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');
            $data['th'] = $this->All_model->getThn();
            $data['info'] = $this->All_model->infos();
            unset($_SESSION['flash']);
            unset($_SESSION['suksesup']);
            unset($_SESSION['suksespa']);
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

            //Get id Pa dari mahasiswa
            $pa_id = $this->All_model->getMahasiswaByUserId($id)['pa_id'];
            $data['id'] = $this->All_model->getMahasiswaByUserId($id);

            if ($pa_id === NULL) {
                redirect('krs/pilihPA');
            }
            //get_bukti
            $data['bukti'] = $this->All_model->getDataFormBuktiDosen($pa_id);

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/mahasiswa/halaman_bukti", $data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    // Method untuk memilih tahun dan semester yang akan dicek
    public function pilih_validasi()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->library('form_validation');
            $this->load->model('All_model');

            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $id = $_SESSION['user_id'];

            $this->data['group'] = $this->ion_auth_model->getGroup($id);

            $mhs_id = $this->All_model->getMahasiswaByUserId($id)['id_mhs'];

            $pa_id = $this->All_model->getMahasiswaByUserId($id)['pa_id'];
            if ($pa_id === NULL) {
                redirect('krs/pilihPA');
            }

            //get_bukti
            $this->data['bukti'] = $this->All_model->getDataBuktiMahasiswa($mhs_id);

            $this->data['title'] = "Tampilan Validasi";
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/mahasiswa/pilih_validasi", $this->data);
            $this->load->view("admin/master/footer", $this->data);

            unset($_SESSION['suksesup']);
            unset($_SESSION['suksespa']);
        }
    }

    public function upload_bukti($id_form)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->model('All_model');

            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";


            $id = $_SESSION['user_id'];

            $this->data['mahasiswa'] = $this->All_model->getMahasiswaByUserId($id);
            // $this->data['group'] = "9";
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "Upload Bukti Pembayaran";
            $form = $this->All_model->getForm($id_form);
            $this->data['form'] =  $form;
            $bukti_m = $this->All_model->checkBuktiSudahDiKirim($id_form, $this->data['mahasiswa']['id']);

            $pa_id = $this->All_model->getMahasiswaByUserId($id)['pa_id'];
            if ($pa_id === NULL) {
                redirect('krs/pilihPA');
            }
            //cek bukti sudah diupload;
            if ($bukti_m == 1) {
                redirect('formulir');
            }

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/mahasiswa/halaman_upload_bukti", $this->data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }


    //handle data bukti from upload bukti start---
    public function simpan_bukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->model('All_model');

            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];


            // $this->data['group'] = "9";
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "Upload Bukti";

            $id_mahasiswa = $this->input->post('mahasiswa_id');
            $id_form = $this->input->post('id_form');
            $nim = $this->input->post('nim');
            $file_bukti = $_FILES['file_bukti'];
            $this->load->helper('string');
            $data_form = $this->All_model->getForm($id_form);

            //generate nama file dan deskripsi
            $file_name = $nim . '_' . random_string('alnum', 20);
            $deskripsi = 'Pembayaran Iuran KRS tahun ' . $data_form['tahun'] . ', semester ' . $data_form['semester'];
            $config = [
                'upload_path'   => './assets/upload/Folder_krs',
                'allowed_types' => 'pdf',
                'max_size'      => 1024,
                'file_name'     =>  $file_name,
            ];

            if ($file_bukti != '') {
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file_bukti')) {
                    $data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('file_error', $data['error']);
                    redirect('Krs/upload_bukti');
                } else {
                    $data = [
                        'mahasiswa_id'  => $id_mahasiswa,
                        'form_bukti_id' => $id_form,
                        'deskripsi'     => $deskripsi,
                        'file_path'     => $file_name . $this->upload->data('file_ext'),
                        'created_at'    => mdate('%Y-%m-%d %H:%i:%s', now())
                    ];
                    $this->session->set_flashdata('suksesup', 'diupload');
                    $this->db->insert('s6_bukti', $data);
                    redirect('krs/halaman_bukti');
                }
            }
        }
    }

    public function delete_bukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->model('All_model');

            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $id = $_SESSION['user_id'];

            $this->data['group'] = "9";
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "Edit Bukti";
            // ambil data
            $mhs_id = $this->All_model->getMahasiswaByUserId($id)['id_mhs'];
            $id = $this->All_model->getIdAndPathDataBuktiMahasiswa($mhs_id)['id'];
            $file_path = $this->All_model->getIdAndPathDataBuktiMahasiswa($mhs_id)['file_path'];
            //var_dump($id);
            $this->load->helper("file");
            unlink($file_path);
            delete_files($file_path);

            $this->db->where('s6_bukti.id', $id);
            $this->db->delete('s6_bukti');
            redirect('krs/pilih_validasi');
        }
    }

    public function pilihPA()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Pilih Dosen PA";
            $this->data['active'] = "11";
            $id = $_SESSION['user_id'];
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";

            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');

            $this->data['mhs_id'] = $this->All_model->getMahasiswaByUserId($id)['id_mhs'];
            $this->data['mahasiswa'] = $this->All_model->getMahasiswaByUserId($id);

            $this->data['dosen'] = $this->All_model->getsemuaDosen();

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/mahasiswa/pilih_pa", $this->data);
            $this->load->view("admin/master/footer", $this->data);

            unset($_SESSION['suksesup']);
            unset($_SESSION['suksespa']);
        }
    }

    public function ubah_pa()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            // update dosen PA
            $this->load->model('All_model');
            $id = $_SESSION['user_id'];
            $id_mahasiswa = $this->All_model->getMahasiswaByUserId($id)['id_mhs'];
            $id_dosen = $this->input->post('pa_id');
            if ($this->All_model->updateDosenPA($id_mahasiswa, $id_dosen)) {
                $this->session->set_flashdata('suksespa', 'diubah');
                redirect('krs/pilih_validasi');
            } else {
                $this->session->set_flashdata('gagalpa', 'gagal');
                redirect('formulir');
            }
        }
    }

    //handle data bukti from upload bukti end------


    // Start Of Dosen Section - [Adi Sastrawan]
    // Start View Mahasiswa

    public function viewValidasiMahasiswa()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $where = array('user_id' => $id);
            $dosen_id['pa_id'] = $this->All_model->findDosen($where)->result_array();
            $find['pa_id'] = $dosen_id['pa_id'][0]['id'];
            $this->data['id_dosen'] = $dosen_id['pa_id'][0]['id'];
            $this->data['value'] = $this->All_model->gatherData($find)->result();
            // $mahasiswa['value'] = $this->All_model->gatherData($find)->result();
            $dosen_id = $this->All_model->findDosen($where)->result_array()[0]['id'];
            $this->data['formBukti'] = $this->All_model->formBuktiDosen($dosen_id);
            $this->data['id_forms'] = $this->input->post('select');
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/dosen/validasiMahasiswa", $this->data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }

    // End View Validasi Mahasiswa

    // Start View MintaBukti
    public function viewMintaBukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->model('All_model');
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $id = $_SESSION['user_id'];
            $where = array('user_id' => $id);
            $dosen_id = $this->All_model->findDosen($where)->result_array()[0]['id'];
            $this->data['formBukti'] = $this->All_model->formBuktiDosen($dosen_id);
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/dosen/mintaBukti", $this->data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }
    // End View MintaBukti

    public function tambahFormPengajuan()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->model('All_model');
            $id = $_SESSION['user_id'];
            $where = array('user_id' => $id);
            $dosen_id = $this->All_model->findDosen($where)->result_array();
            $data = [
                'expire_date' => $this->input->post('expire_date'),
                'tahun' => $this->input->post('tahun'),
                'semester' => $this->input->post('semester'),
                'dosen_id' => $dosen_id[0]['id'],
            ];
            $this->All_model->insertFormBukti($data);
            redirect("Krs/viewMintaBukti");
        }
    }


    // Start memvalidkanBukti
    public function memvalidkanBukti($id, $valid)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->load->model('All_model');
            $valid = array('valid' => $valid);
            $where = array('id' => $id);
            $this->All_model->validateBukti($valid, $where);
            redirect("Krs/viewValidasiMahasiswa");
        }
    }
    // End memvalidkanBukti


    // Start View Form Buat Bukti
    public function viewFormBuatBukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->load->model('All_model');

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/dosen/formBuatBukti");
            $this->load->view("admin/master/footer", $this->data);
        }
    }
    // End View Form Buat Bukti

    // Start Detail Bukti Dosen
    public function viewDetailBukti($id_bukti)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);

            $this->load->model('All_model');

            // $mahasiswa[] = $this->All_model->getMahasiswaByUserId($id)['id_mhs'];
            $mahasiswa['value'] = $this->All_model->getByIdData($id_bukti)->result();

            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/dosen/detailBukti", $mahasiswa);
            $this->load->view("admin/master/footer", $this->data);
        }
    }
    // End Detail Bukti Dosen
    // Start Lihat Bukti
    public function lihatBukti($id_form)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $where = array('user_id' => $id);
            $dosen_id['pa_id'] = $this->All_model->findDosen($where)->result_array();
            $find['pa_id'] = $dosen_id['pa_id'][0]['id'];
            $dosen_id = $this->All_model->findDosen($where)->result_array()[0]['id'];
            $this->data['formBukti'] = $this->All_model->formBuktiDosen($dosen_id);
            $mahasiswa['value'] = $this->All_model->filteredData($id_form, $find)->result();
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/dosen/validasiMahasiswa", $mahasiswa);
            $this->load->view("admin/master/footer", $this->data);
        }
    }
    // End Lihat Bukti
    // Start Filter Bukti
    public function filterBukti()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(krs)) {
            redirect('krs/home');
        } else {
            $this->data['title'] = "KRS - Data Mahasiswa";
            $this->data['active'] = "11";
            $this->data['flip'] = "false";
            $this->data['ckeditor'] = "krs";
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $where = array('user_id' => $id);
            $dosen_id['pa_id'] = $this->All_model->findDosen($where)->result_array();
            $find['pa_id'] = $dosen_id['pa_id'][0]['id'];
            $dosen_id = $this->All_model->findDosen($where)->result_array()[0]['id'];
            $this->data['formBukti'] = $this->All_model->formBuktiDosen($dosen_id);
            $keyword = $this->input->post('select');
            $this->data['id_forms'] = $this->input->post('select');
            $this->data['value'] = $this->All_model->filteredData($keyword, $find)->result();
            $this->load->view("admin/master/header", $this->data);
            $this->load->view("admin/page/krs/dosen/validasiMahasiswa", $this->data);
            $this->load->view("admin/master/footer", $this->data);
        }
    }
}
