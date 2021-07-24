<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller EORS
 * 
 * Author		: Ganatech
 *
 * Created		: 01.09.2020
 *
 * Description	: Controller ini digunakan untuk mengatur seluruh halaman yang ada pada website EORS atau Electronic 
 * Open Recruitment System. Pada controller ini mengatur untuk halaman Administrator serta halaman User yang dipisahkan 
 * dengan komentar.
 *
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    SSO HMJ TI Undiksha
 * @author     Ganatech
 * @link       https://github.com/deyan-ardi/sso-hmj
 * @filesource
 **/
/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Eors extends CI_Controller
{
    // ****************************************
    // Bagian Administrator
    // ****************************************
    public function index()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['kegiatan'] = $this->All_model->getAllKegiatanEors();
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->load->view('admin/master/header', $this->data);
            $this->load->view('admin/page/eors/index', $this->data);
            $this->load->view('admin/master/footer', $this->data);
        }
    }
    public function tambah_kegiatan()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Tambah Kegiatan";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "eors";
            $this->data['flip'] = "false";
            // All Validations
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required|max_length[100]');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|max_length[1000]');
            $this->form_validation->set_rules('persyaratan', 'Persyaratan', 'required');
            $this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'required');
            $this->form_validation->set_rules('tanggal_selesai', 'Tanggal Selesai', 'required');
            $this->form_validation->set_rules('target_pendaftar', 'Target Pendaftar', 'required');
            $this->form_validation->set_rules('link_group', 'Link Group Umum', 'required|valid_url');
            $this->form_validation->set_rules('data_pribadi', 'Pengaturan Data Pribadi', 'required');
            $this->form_validation->set_rules('data_pendidikan', 'Pengaturan Data Pendidikan', 'required');
            $this->form_validation->set_rules('wawancara', 'Pengaturan Wawancara', 'required');
            $this->form_validation->set_rules('file', 'Pengaturan File', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/master/header', $this->data);
                $this->load->view('admin/page/eors/tambah_kegiatan', $this->data);
                $this->load->view('admin/master/footer', $this->data);
            } else {
                if ($_FILES["icon_kegiatan"]['error'] != 4) {
                    if ($this->All_model->cekNamaKegiatan($_POST['nama_kegiatan']) > 0) {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kegiatan Sudah Ada');
                        redirect('eors/tambah_kegiatan');
                    } else {
                        $except = "/,#";
                        // Cek apakah nama kepengurusan mengandung kata yang dilarang
                        if (strpbrk($_POST['nama_kegiatan'], $except)) {
                            $this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kepengurusan Mengandung Karakter Yang Tidak Diperbolehkan');
                            redirect("eors/tambah_kegiatan");
                        } else {
                            // Konfigurasi upload file
                            $id_file = "eors";
                            $bagian = "kegiatan";
                            $tujuan = $_POST['nama_kegiatan'];
                            // Mengupload file
                            $upload = $this->All_model->uploadFile($bagian, $id_file, $tujuan);
                            // Jika upload file success
                            if ($upload['result'] == "success") {
                                $date_mulai = $_POST['tanggal_mulai'] . " 00:00:00";
                                $date_akhir = $_POST['tanggal_selesai'] . " 00:00:00";
                                if ($this->All_model->insertKegiatanEors($upload, $date_mulai, $date_akhir)) {
                                    $this->session->set_flashdata('berhasil', 'Ditambahkan');
                                    redirect("eors");
                                } else {
                                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
                                    redirect("eors/tambah_kegiatan");
                                }
                            } else {
                                $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                                redirect('eors/tambah_kegiatan');
                            }
                        }
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali File Yang Akan Diupload');
                    redirect('eors/tambah_kegiatan');
                }
            }
        }
    }
    public function aktivasi($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktivasi($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Diaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Diaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktivasi($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktivasi($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktif_penilaian($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktifPenilaian($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function aktif_penilaian($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktifPenilaian($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Diaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Diaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktif_hasil($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktifHasil($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function aktif_hasil($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktifHasil($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Diaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Diaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktif_pengumuman($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktifPengumuman($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function aktif_pengumuman($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktifPengumuman($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Diaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Diaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function hapus_kegiatan($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                $nama = $this->All_model->getKegiatanEorsWhere($id_user);
                $nama = $nama[0]['nama_kegiatan'];
                if ($this->All_model->deleteFolder($nama)) {
                    if ($this->All_model->hapusKegiatanEors($id_user)) {
                        $this->session->set_flashdata('berhasil', 'Dihapus');
                        redirect("eors");
                    } else {
                        $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                        redirect('eors');
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function ajax_data()
    {

        // SETTING CHART PENDAFTARAN
        $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($_POST['id_kegiatan']));
        $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
        $this->data['id_ajax'] = $_POST['id_send'];
        $this->data['PTI'] = $this->All_model->getAllPendaftarProdi("05", $id_kegiatan);
        $this->data['MI'] = $this->All_model->getAllPendaftarProdi("02", $id_kegiatan);
        $this->data['SI'] = $this->All_model->getAllPendaftarProdi("09", $id_kegiatan);
        $this->data['ILKOM'] = $this->All_model->getAllPendaftarProdi("10", $id_kegiatan);
        $date = date('Y');
        $this->data['thn_2018'] = $this->All_model->getAllPendaftarTahun($date - 2, $id_kegiatan);
        $this->data['thn_2019'] = $this->All_model->getAllPendaftarTahun($date - 1, $id_kegiatan);
        $this->data['thn_2020'] = $this->All_model->getAllPendaftarTahun($date, $id_kegiatan);
        $this->load->view('admin/page/eors/ajax-data', $this->data);
            // END SETTING CHART PENDAFTARAN
        
    }
    public function administrator($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id = $_SESSION['user_id'];
            $data_user_login = $this->ion_auth_model->getGroup($id);
            $id_jabatan = $data_user_login[0]['company'];
            $this->data['group'] = $data_user_login;
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "administrator";
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['kegiatan'] = $data_kegiatan;
            $this->data['id_halaman'] = $data_kegiatan[0]['nama_kegiatan'];
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $this->data['sie'] = $this->All_model->getAllPilihanWhere($id_kegiatan);
            if ($data_user_login[0]['group_id'] == "5" || $data_user_login[0]['group_id'] == "1") {
                $this->data['kelulusan'] = $this->All_model->getAllPendaftarLulus($id_kegiatan);
                $this->data['pendaftar'] = $this->All_model->getAllPendaftarEors($id_kegiatan);
            } else if ($data_user_login[0]['group_id'] == "4") {
                $this->data['pendaftar'] = $this->All_model->getAllPendaftarEorsWhereKoor($id_kegiatan, $data_user_login[0]['nama_pilihan']);
                $this->data['kelulusan'] = $this->All_model->getAllPendaftarLulus($id_kegiatan);
            }

            if ($this->All_model->cekKepanitiaanEors($id_jabatan, $id_kegiatan) > 0 || $data_user_login[0]['group_id'] == "5" || $data_user_login[0]['group_id'] == "1") {
                if (!empty($data_kegiatan)) {
                    $this->load->view('admin/master/header', $this->data);
                    $this->load->view('admin/page/eors/admin', $this->data);
                    $this->load->view('admin/master/footer', $this->data);
                } else {
                    show_404();
                }
            } else {
                $this->session->set_flashdata('gagal', 'Masuk, Ijin Masuk Tidak Diterima');
                redirect('eors');
            }
        }
    }
    public function tambah_sie($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Tambah Sie";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->data['jabatan'] = $this->All_model->getAllJabatan();
            $id_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['kegiatan'] = $id_kegiatan;
            $id_kegiatan = $id_kegiatan[0]['id_kegiatan'];
            // All Validations
            $this->form_validation->set_rules('nama_sie', 'Nama Sie', 'required');

            if ($this->form_validation->run() == FALSE) {
                if (!empty($id_kegiatan)) {
                    $this->load->view('admin/master/header', $this->data);
                    $this->load->view('admin/page/eors/tambah_sie', $this->data);
                    $this->load->view('admin/master/footer', $this->data);
                } else {
                    show_404();
                }
            } else {
                if ($this->All_model->getPilihanWhere($id_kegiatan, $_POST['nama_sie']) > 0) {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Sie Sudah Dipilih Sebelumnya');
                    redirect('eors/tambah_sie/' . urldecode($data));
                } else {
                    if ($this->All_model->inputSieEors($id_kegiatan)) {
                        $this->session->set_flashdata('berhasil', 'Ditambahkan');
                        redirect('eors/administrator/' . urldecode($data));
                    } else {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Sie Sudah Dipilih Sebelumnya');
                        redirect('eors/tambah_sie/' . urldecode($data));
                    }
                }
            }
        }
    }
    public function hapus_pendaftar($data = '', $id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $id_kegiatan = $id_kegiatan[0]['id_kegiatan'];
            if ($this->All_model->getKegiatanEorsWhereNum($id_kegiatan) > 0) {
                if ($this->All_model->hapusPendaftarEors($id_kegiatan, $id_user, urldecode($data))) {
                    $jumlah_peserta = $this->All_model->countPesertaEors($id_kegiatan);
                    if ($this->All_model->updateJumlahPeserta($jumlah_peserta, $id_kegiatan)) {
                        $this->session->set_flashdata('berhasil', 'Dihapus');
                        redirect("eors/administrator/" . urldecode($data));
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                    redirect("eors/administrator/" . urldecode($data));
                }
            } else {
                show_404();
            }
        }
    }
    public function tambah_peserta($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Tambah Sie";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "eors";
            $this->data['flip'] = "false";
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['kegiatan'] = $data_kegiatan;
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $this->data['jabatan'] = $this->All_model->getAllPilihanWhere($id_kegiatan);
            // All Validations
            $this->form_validation->set_rules('nim', 'Nim', 'required');
            $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('agama', 'Agama', 'required');
            $this->form_validation->set_rules('alamat_asal', 'Alamat Asal', 'required|max_length[1000]');
            $this->form_validation->set_rules('alamat_sekarang', 'Alamat Sekarang', 'required|max_length[1000]');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('wa', 'Whatsapp', 'required');
            $this->form_validation->set_rules('pil_wajib', 'Pilihan Wajib', 'required');
            if ($data_kegiatan[0]['informasi_pribadi'] == 1) {
                $this->form_validation->set_rules('riwayat_kesehatan', 'Riwayat Kesehatan', 'required');
                $this->form_validation->set_rules('hobi', 'Hobi', 'required');
                $this->form_validation->set_rules('motto_hidup', 'Motto Hidup', 'required');
            }
            if ($data_kegiatan[0]['informasi_pendidikan'] == 1) {
                $this->form_validation->set_rules('ipk', 'RIPK', 'required');
                $this->form_validation->set_rules('nama_sd', 'Nama Sekolah Dasar', 'required');
                $this->form_validation->set_rules('tahun_sd', 'Tahun Tamat Sekolah Dasar', 'required');
                $this->form_validation->set_rules('nama_smp', 'Nama Sekolah Menengah Pertama', 'required');
                $this->form_validation->set_rules('tahun_smp', 'Tahun Tamat Sekolah Menengah Pertama', 'required');
                $this->form_validation->set_rules('nama_sma', 'Nama Sekolah Menengah Atas', 'required');
                $this->form_validation->set_rules('tahun_sma', 'Tahun Sekolah Menengah Atas', 'required');
            }
            if ($this->form_validation->run() == FALSE) {
                if (!empty($id_kegiatan)) {
                    if (date('Y-m-d H:i:s') >= $data_kegiatan[0]['tgl_mulai'] && date('Y-m-d H:i:s') <= $data_kegiatan[0]['tgl_akhir']) {
                        $this->load->view('admin/master/header', $this->data);
                        $this->load->view('admin/page/eors/tambah_peserta', $this->data);
                        $this->load->view('admin/master/footer', $this->data);
                    } else {
                        $this->session->set_flashdata('gagal', 'Masa Pendaftaran Telah Berakhir');
                        redirect('eors/administrator/' . urldecode($data));
                    }
                } else {
                    show_404();
                }
            } else {
                if (date('Y-m-d H:i:s') >= $data_kegiatan[0]['tgl_mulai'] && date('Y-m-d H:i:s') <= $data_kegiatan[0]['tgl_akhir']) {
                    if (($data_kegiatan[0]['jumlah_pendaftar'] + 1) <= $data_kegiatan[0]['target_pendaftar']) {
                        if ($this->All_model->cekNimPeserta($_POST['nim'], $id_kegiatan) > 0) {
                            $this->session->set_flashdata('gagal', 'Ditambahkan, Peserta dengan Nim ' . $_POST['nim'] . ' Sudah Melakukan Pendaftaran Pada Kegiatan Ini');
                            redirect('eors/tambah_peserta/' . urldecode($data));
                        } else {
                            if ($data_kegiatan[0]['upload_file'] == 1) {
                                $id_file = "eors";
                                if ($_FILES['file_foto']['error'] == 4) {
                                    $this->session->set_flashdata('gagal', 'Ditambahkan, Foto Masih Kosong');
                                    redirect('eors/tambah_peserta/' . urldecode($data));
                                } else {
                                    $bag_foto = "foto";
                                    $tujuan_foto = $data_kegiatan[0]['nama_kegiatan'];
                                    $upload = $this->All_model->uploadFile($bag_foto, $id_file, $tujuan_foto);
                                    if ($upload['result'] == "success") {
                                        $nama_foto = $upload['file_foto']['file_name'];
                                    } else {
                                        $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                                        redirect('eors/tambah_peserta/' . urldecode($data));
                                    }
                                }
                                if ($_FILES['file_dokumen']['error'] == 4) {
                                    $nama_dokumen = null;
                                    // $this->session->set_flashdata('gagal', 'Ditambahkan, File Masih Kosong');
                                    // redirect('eors/tambah_peserta/' . urldecode($data));
                                } else {
                                    $bag_dokumen = "dokumen";
                                    $tujuan_dokumen = $data_kegiatan[0]['nama_kegiatan'];
                                    $upload = $this->All_model->uploadFile($bag_dokumen, $id_file, $tujuan_dokumen);
                                    if ($upload['result'] == "success") {
                                        $nama_dokumen = $upload['file_dokumen']['file_name'];
                                    } else {
                                        $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                                        redirect('eors/tambah_peserta/' . urldecode($data));
                                    }
                                }
                            } else {
                                $nama_dokumen = null;
                                $nama_foto = null;
                            }


                            if ($this->All_model->inputDataPeserta($nama_dokumen, $nama_foto, $id_kegiatan)) {
                                $jumlah_peserta = $this->All_model->countPesertaEors($id_kegiatan);
                                $data_email = [
                                    'identity' => $_POST['email'],
                                    'kegiatan' => $data_kegiatan[0]['nama_kegiatan'],
                                    'nim_pendaftar' => $_POST['nim'],
                                    'username' => $_POST['nama_lengkap'],
                                    'time' => date('d F Y H:i:s') . ' WITA',
                                    'link' => $data_kegiatan[0]['link_group'],
                                ];
                                $template = $this->config->item('email_information', 'ion_auth');
                                $email = $_POST['email'];
                                // End Content Email
                                if ($this->send_mail($data_email, $template, $email)) {
                                    if ($this->All_model->updateJumlahPeserta($jumlah_peserta, $id_kegiatan)) {
                                        $this->session->set_flashdata('berhasil', 'Ditambahkan');
                                        redirect('eors/administrator/' . urldecode($data));
                                    } else {
                                        $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                                        redirect('eors/tambah_peserta/' . urldecode($data));
                                    }
                                } else {
                                    $this->session->set_flashdata('gagal', 'Ditambahkan, Email gagal dikirim');
                                    redirect('eors/administrator/' . urldecode($data));
                                }
                            }
                        }
                    } else {
                        $this->session->set_flashdata('gagal', 'Kuota Telah Terpenuhi');
                        redirect('eors/administrator/' . urldecode($data));
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Masa Pendaftaran Telah Berakhir');
                    redirect('eors/administrator/' . urldecode($data));
                }
            }
        }
    }
    public function hapus_sie($data = '', $id_pilihan = '', $id_jabatan = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $kegiatan = $kegiatan[0]['id_kegiatan'];
            if ($this->All_model->getPilihanWhere($kegiatan, $id_jabatan) > 0) {
                if ($this->All_model->hapusSie($kegiatan, $id_pilihan)) {
                    $this->session->set_flashdata('berhasil', 'Dihapus');
                    redirect("eors/administrator/" . urldecode($data));
                } else {
                    $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function proses_penilaian()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $data = $_POST['kegiatan'];
            $user = $_POST['user'];
            $penilai = $_POST['create_by'];
            // rumus penilaian
            $nilai_akhir = ($_POST['penilaian_1'] + $_POST['penilaian_2'] + $_POST['penilaian_3'] + $_POST['penilaian_4']) / 4;
            if ($nilai_akhir > 7.5) {
                $keterangan = "Direkomendasikan";
            } else {
                $keterangan = "Pilihan Opsional";
            }
            if ($this->All_model->cekUserBeforeInputNilai($user, $penilai) > 0) {
                $this->session->set_flashdata('gagal', 'Ditambahkan, Anda Tidak Dapat Memberikan Nilai Lebih Dari Satu Kali');
                redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
            } else {
                if ($this->All_model->setWawancara($user)) {
                    if ($this->All_model->inputNilaiPesertaEors($nilai_akhir, $keterangan)) {
                        $this->session->set_flashdata('berhasil', 'Ditambahkan');
                        redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
                    } else {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Inputan Nilai Anda');
                        redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Inputan Nilai Anda');
                    redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
                }
            }
        }
    }
    public function proses_hasil_akhir()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $data = $_POST['kegiatan'];
            $user = $_POST['user'];
            if ($this->All_model->inputNilaiAkhirEors($user)) {
                $this->session->set_flashdata('berhasil', 'Ditambahkan');
                redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
            } else {
                $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Inputan Nilai Anda');
                redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
            }
        }
    }
    public function detail_pendaftar($data = '', $pendaftar = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $id = $_SESSION['user_id'];
            $data_user_login = $this->ion_auth_model->getGroup($id);
            $this->data['group'] = $data_user_login;
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->data['data_nilai'] = $this->All_model->getNilaiWawancara($pendaftar);
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['penilaian'] = $this->All_model->cekUserBeforeInputNilai($pendaftar, $data_user_login[0]['first_name']);
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $data_jabatan = $this->All_model->getAllPilihanWhere($id_kegiatan);
            $this->data['jabatan'] = $data_jabatan;
            $data_pendaftar = $this->All_model->getAllPendaftarEorsWhere($id_kegiatan, $pendaftar);
            $this->data['kegiatan'] = $data_kegiatan;
            $this->data['pendaftar'] = $data_pendaftar;
            if ($this->All_model->cekUserBeforeDetailPendaftar($data_user_login[0]['nama_pilihan'], $pendaftar) > 0 || $data_user_login[0]['group_id'] == "5" || $data_user_login[0]['group_id'] == "1") {
                if (!empty($id_kegiatan) && !empty($data_pendaftar && !empty($data_jabatan))) {
                    $this->load->view('admin/master/header', $this->data);
                    $this->load->view('admin/page/eors/detail_pendaftar', $this->data);
                    $this->load->view('admin/master/footer', $this->data);
                } else {
                    show_404();
                }
            } else {
                show_404();
            }
        }
    }
    public function unduh_data_sementara($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $this->data['kegiatan'] = $data_kegiatan[0]['nama_kegiatan'];
            $id = $_SESSION['user_id'];
            $data_user_login = $this->ion_auth_model->getGroup($id);
            $this->data['group'] = $data_user_login;
            if (!empty($id_kegiatan)) {
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Data_Pendaftar_Sementara.xls");
                if ($data_user_login[0]['group_id'] == "5" || $data_user_login[0]['group_id'] == "1") {
                    $this->data['tipe_data'] = "Keseluruhan";
                    $this->data['pendaftar'] = $this->All_model->getAllPendaftarEors($id_kegiatan);
                } else if ($data_user_login[0]['group_id'] == "4") {
                    $this->data['tipe_data'] = $data_user_login[0]['nama_pilihan'];
                    $this->data['pendaftar'] = $this->All_model->getAllPendaftarEorsWhereKoor($id_kegiatan, $data_user_login[0]['nama_pilihan']);
                }
                $this->load->view('admin/page/eors/export_sementara', $this->data);
            }
        }
    }
    public function unduh_data_akhir($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('eors/home');
        } else {
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $this->data['kegiatan'] = $data_kegiatan[0]['nama_kegiatan'];
            $id = $_SESSION['user_id'];
            $data_user_login = $this->ion_auth_model->getGroup($id);
            $this->data['group'] = $data_user_login;
            if (!empty($id_kegiatan)) {
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Data_Pendaftar_Akhir.xls");
                if ($data_user_login[0]['group_id'] == "5" || $data_user_login[0]['group_id'] == "1") {
                    $this->data['tipe_data'] = "Keseluruhan";
                    $this->data['pendaftar'] = $this->All_model->getAllPendaftarEors($id_kegiatan);
                } else if ($data_user_login[0]['group_id'] == "4") {
                    $this->data['tipe_data'] = $data_user_login[0]['nama_pilihan'];
                    $this->data['pendaftar'] = $this->All_model->getAllPendaftarEorsWhereKoor($id_kegiatan, $data_user_login[0]['nama_pilihan']);
                }
                $this->load->view('admin/page/eors/export_akhir', $this->data);
            }
        }
    }
    // ****************************************
    // End Bagian Administrator
    // ****************************************

    // ****************************************
    // Bagian User
    // ****************************************
    public function home()
    {
        $this->data['title'] = "Home";
        $this->data['body'] = '1';
        $this->data['id_chart'] = false;
        $this->data['kegiatan'] = $this->All_model->getAllKegiatanEorsActive();
        $this->load->view('guest/eors/master/header', $this->data);
        $this->load->view('guest/eors/page/index', $this->data);
        $this->load->view('guest/eors/master/footer', $this->data);
    }
    public function lihat_hasil($data = '')
    {
        $this->data['title'] = "Home";
        $this->data['body'] = '1';
        $this->data['id_chart'] = true;
        $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
        $this->data['kegiatan'] = $data_kegiatan;
        $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
        $this->data['kelulusan'] = $this->All_model->getAllPendaftarLulus($id_kegiatan);
        // SETTING CHART PENDAFTARAN
        $this->data['PTI'] = $this->All_model->getAllPendaftarProdi("05", $id_kegiatan);
        $this->data['MI'] = $this->All_model->getAllPendaftarProdi("02", $id_kegiatan);
        $this->data['SI'] = $this->All_model->getAllPendaftarProdi("09", $id_kegiatan);
        $this->data['ILKOM'] = $this->All_model->getAllPendaftarProdi("10", $id_kegiatan);
        $date = date('Y');
        $this->data['thn_2018'] = $this->All_model->getAllPendaftarTahun($date - 2, $id_kegiatan);
        $this->data['thn_2019'] = $this->All_model->getAllPendaftarTahun($date - 1, $id_kegiatan);
        $this->data['thn_2020'] = $this->All_model->getAllPendaftarTahun($date, $id_kegiatan);
        // END SETTING CHART PENDAFTARAN

        if (!empty($data_kegiatan) && $data_kegiatan[0]['pengumuman'] == 1) {
            $this->load->view('guest/eors/master/header', $this->data);
            $this->load->view('guest/eors/page/hasil', $this->data);
            $this->load->view('guest/eors/master/footer', $this->data);
        } else {
            show_404();
        }
    }
    public function daftar_sekarang($data = '')
    {
        $this->data['title'] = "Daftar Kegiatan " . $data;
        $this->data['body'] = '2';
        $this->data['id_chart'] = true;
        $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
        $this->data['kegiatan'] = $data_kegiatan;
        $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
        $this->data['jabatan'] = $this->All_model->getAllPilihanWhere($id_kegiatan);
        // SETTING CHART PENDAFTARAN
        $this->data['PTI'] = $this->All_model->getAllPendaftarProdi("05", $id_kegiatan);
        $this->data['MI'] = $this->All_model->getAllPendaftarProdi("02", $id_kegiatan);
        $this->data['SI'] = $this->All_model->getAllPendaftarProdi("09", $id_kegiatan);
        $this->data['ILKOM'] = $this->All_model->getAllPendaftarProdi("10", $id_kegiatan);
        $date = date('Y');
        $this->data['thn_2018'] = $this->All_model->getAllPendaftarTahun($date - 2, $id_kegiatan);
        $this->data['thn_2019'] = $this->All_model->getAllPendaftarTahun($date - 1, $id_kegiatan);
        $this->data['thn_2020'] = $this->All_model->getAllPendaftarTahun($date, $id_kegiatan);
        // END SETTING CHART PENDAFTARAN

        // All Validations
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat_asal', 'Alamat Asal', 'required|max_length[1000]');
        $this->form_validation->set_rules('alamat_sekarang', 'Alamat Sekarang', 'required|max_length[1000]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('wa', 'Whatsapp', 'required');
        $this->form_validation->set_rules('pil_wajib', 'Pilihan Wajib', 'required');
        if ($data_kegiatan[0]['informasi_pribadi'] == 1) {
            $this->form_validation->set_rules('riwayat_kesehatan', 'Riwayat Kesehatan', 'required');
            $this->form_validation->set_rules('hobi', 'Hobi', 'required');
            $this->form_validation->set_rules('motto_hidup', 'Motto Hidup', 'required');
        }
        if ($data_kegiatan[0]['informasi_pendidikan'] == 1) {
            $this->form_validation->set_rules('ipk', 'RIPK', 'required');
            $this->form_validation->set_rules('nama_sd', 'Nama Sekolah Dasar', 'required');
            $this->form_validation->set_rules('tahun_sd', 'Tahun Tamat Sekolah Dasar', 'required');
            $this->form_validation->set_rules('nama_smp', 'Nama Sekolah Menengah Pertama', 'required');
            $this->form_validation->set_rules('tahun_smp', 'Tahun Tamat Sekolah Menengah Pertama', 'required');
            $this->form_validation->set_rules('nama_sma', 'Nama Sekolah Menengah Atas', 'required');
            $this->form_validation->set_rules('tahun_sma', 'Tahun Sekolah Menengah Atas', 'required');
        }
        if ($this->form_validation->run() == FALSE) {
            if (!empty($id_kegiatan) && !empty($data_kegiatan)) {
                if (date('Y-m-d H:i:s') < $data_kegiatan[0]['tgl_mulai'] || date('Y-m-d H:i:s') >= $data_kegiatan[0]['tgl_mulai'] && date('Y-m-d H:i:s') <= $data_kegiatan[0]['tgl_akhir']) {
                    $this->load->view('guest/eors/master/header', $this->data);
                    $this->load->view('guest/eors/page/pendaftaran', $this->data);
                    $this->load->view('guest/eors/master/footer', $this->data);
                } else {
                    $this->session->set_flashdata('gagal', 'Masa Pendaftaran Telah Berakhir');
                    redirect('eors/daftar_sekarang/' . urldecode($data));
                }
            } else {
                show_404();
            }
        } else {
            if (date('Y-m-d H:i:s') >= $data_kegiatan[0]['tgl_mulai'] && date('Y-m-d H:i:s') <= $data_kegiatan[0]['tgl_akhir']) {
                if (($data_kegiatan[0]['jumlah_pendaftar'] + 1) <= $data_kegiatan[0]['target_pendaftar']) {
                    if ($this->All_model->cekNimPeserta($_POST['nim'], $id_kegiatan) > 0) {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Peserta dengan Nim ' . $_POST['nim'] . ' Sudah Melakukan Pendaftaran Pada Kegiatan Ini');
                        redirect('eors/daftar_sekarang/' . urldecode($data));
                    } else {
                        if ($data_kegiatan[0]['upload_file'] == 1) {
                            $id_file = "eors";
                            if ($_FILES['file_foto']['error'] == 4) {
                                $this->session->set_flashdata('gagal', 'Ditambahkan, Foto Masih Kosong');
                                redirect('eors/daftar_sekarang/' . urldecode($data));
                            } else {
                                $bag_foto = "foto";
                                $tujuan_foto = $data_kegiatan[0]['nama_kegiatan'];
                                $upload = $this->All_model->uploadFile($bag_foto, $id_file, $tujuan_foto);
                                if ($upload['result'] == "success") {
                                    $nama_foto = $upload['file_foto']['file_name'];
                                } else {
                                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File Foto');
                                    redirect('eors/daftar_sekarang/' . urldecode($data));
                                }
                            }
                            if ($_FILES['file_dokumen']['error'] == 4) {
                                $nama_dokumen = null;
                                // $this->session->set_flashdata('gagal', 'Ditambahkan, File Masih Kosong');
                                // redirect('eors/daftar_sekarang/' . urldecode($data));
                            } else {
                                $bag_dokumen = "dokumen";
                                $tujuan_dokumen = $data_kegiatan[0]['nama_kegiatan'];
                                $upload = $this->All_model->uploadFile($bag_dokumen, $id_file, $tujuan_dokumen);
                                if ($upload['result'] == "success") {
                                    $nama_dokumen = $upload['file_dokumen']['file_name'];
                                } else {
                                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File Dokumen');
                                    redirect('eors/daftar_sekarang/' . urldecode($data));
                                }
                            }
                        } else {
                            $nama_dokumen = null;
                            $nama_foto = null;
                        }


                        if ($this->All_model->inputDataPeserta($nama_dokumen, $nama_foto, $id_kegiatan)) {
                            $jumlah_peserta = $this->All_model->countPesertaEors($id_kegiatan);
                            $data_email = [
                                'identity' => $_POST['email'],
                                'kegiatan' => $data_kegiatan[0]['nama_kegiatan'],
                                'nim_pendaftar' => $_POST['nim'],
                                'username' => $_POST['nama_lengkap'],
                                'time' => date('d F Y H:i:s') . ' WITA',
                                'link' => $data_kegiatan[0]['link_group'],
                            ];
                            $template = $this->config->item('email_information', 'ion_auth');
                            $email = $_POST['email'];
                            // End Content Email
                            if ($this->send_mail($data_email, $template, $email)) {
                                if ($this->All_model->updateJumlahPeserta($jumlah_peserta, $id_kegiatan)) {
                                    $this->session->set_flashdata('berhasil', 'Dikirim, Pendaftaran Berhasil. Bukti Pendaftaran Telah Dikirim Melalui Email, Silahkan Cek Inbox atau Spam');
                                    redirect('eors/daftar_sekarang/' . urldecode($data));
                                } else {
                                    $this->session->set_flashdata('gagal', 'Tidak Terkirim, Error Server');
                                    redirect('eors/daftar_sekarang/' . urldecode($data));
                                }
                            } else {
                                $this->session->set_flashdata('gagal', 'Tidak Terkirim, Error Server');
                                redirect('eors/daftar_sekarang/' . urldecode($data));
                            }
                        } else {
                            $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                            redirect('eors/daftar_sekarang/' . urldecode($data));
                        }
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Kuota Telah Terpenuhi');
                    redirect('eors/daftar_sekarang/' . urldecode($data));
                }
            } else {
                $this->session->set_flashdata('gagal', 'Masa Pendaftaran Telah Berakhir');
                redirect('eors/daftar_sekarang/' . urldecode($data));
            }
        }
    }

    // Function Send Mail Token
    public function send_mail($data = "", $template = "", $to_email = "")
    {
        $this->load->library('encrypt');
        $message = $this->load->view($this->config->item('email_templates', 'ion_auth') . $template, $data, TRUE);
        $this->email->clear();
        $this->email->from($this->config->item('admin_email', 'ion_auth'), $this->config->item('site_title', 'ion_auth'));
        $this->email->to($to_email);
        $this->email->subject($this->config->item('site_title', 'ion_auth') . ' - Pengiriman Bukti Pendaftaran Kegiatan');
        $this->email->message($message);
        $this->email->set_newline("\r\n");
        if ($this->email->send()) {
            return TRUE;
        } else {
            echo $this->email->print_debugger();
        }
    }
}