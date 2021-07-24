<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller Web
 * 
 * Author		: Ganatech
 *
 * Created		: 01.09.2020
 *
 * Description	: Controller ini digunakan untuk mengatur seluruh halaman yang ada pada website resmi HMJ TI Undiksha.
 * Pada controller ini mengatur untuk halaman Administrator serta halaman User yang dipisahkan 
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
class Web extends CI_Controller
{
	// **************************************************************
	// Start Halaman Utama Bagian Web
	// **************************************************************
	public function index()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			
			$this->data['kategoriBerkas'] = $this->All_model->getOnlyActiveKategoriBerkas();
			$this->data['namaKepengurusan'] = $this->All_model->getActiveKepengurusan();
			$this->data['berkass'] = $this->All_model->getActiveBerkas();
			$this->data['title'] = "Web HMJ - Berkas";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "false";
			$this->data['flip'] = "false";
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/web/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function berkas()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			
			$this->data['kategoriBerkas'] = $this->All_model->getOnlyActiveKategoriBerkas();
			$this->data['namaKepengurusan'] = $this->All_model->getActiveKepengurusan();
			$this->data['berkass'] = $this->All_model->getActiveBerkas();
			$this->data['title'] = "Web HMJ - Berkas";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "false";
			$this->data['flip'] = "false";
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/web/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function tentang_hmj()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['kepengurusan'] = $this->All_model->getAllKepengurusan();
			$this->data['select_kepengurusan'] = $this->All_model->getKepengurusanSelect();
			$this->data['bidang'] = $this->All_model->getAllBidangSelect();
			$this->data['title'] = "Web HMJ - Tentang HMJ";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "false";
			$this->data['flip'] = "false";
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/web/tentang', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	// **************************************************************
	// End Bagian Utama Web
	// **************************************************************



	// **************************************************************
	// Start Informasi Kepengurusan
	// **************************************************************
	public function edit_info()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['kepengurusan'] = $this->All_model->getAllKepengurusan();
			$this->data['select_kepengurusan'] = $this->All_model->getKepengurusanSelect();
			$this->data['title'] = "Web HMJ - Edit Informasi Umum Kepengurusan";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "false";
			$this->data['flip'] = "false";
			// Validation Form
			$this->form_validation->set_rules("nama_kepengurusan", "Nama Kepengurusan", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/edit_info', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_status = $_POST['nama_kepengurusan'];
				if ($this->All_model->rowKepengurusanSelect() > 0) {
					if ($this->All_model->ubahStatus()) {
						if ($this->All_model->sinkronasi($id_status)) {
							$this->session->set_flashdata('berhasil', 'Disinkronasi');
							redirect("web/tentang_hmj");
						} else {
							$this->session->set_flashdata('gagal', 'Disinkronasi, periksa kembali inputan anda');
							redirect("web/edit_info");
						}
					} else {
						$this->session->set_flashdata('gagal', 'Disinkronasi, periksa kembali inputan anda');
						redirect("web/edit_info");
					}
				} else {
					if ($this->All_model->sinkronasi($id_status)) {
						$this->session->set_flashdata('berhasil', 'Disinkronasi');
						redirect("web/tentang_hmj");
					} else {
						$this->session->set_flashdata('gagal', 'Disinkronasi, periksa kembali inputan anda');
						redirect("web/edit_info");
					}
				}
			}
		}
	}
	// **************************************************************
	// End Informasi Kepengurusan 
	// **************************************************************


	// **************************************************************
	// Start Bidang
	// **************************************************************
	public function tambah_bidang()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "Web HMJ - Tambah Informasi Bidang HMJ TI";
			$this->data['active'] = "4";
			$this->data['kepengurusan'] = $this->All_model->getActiveKepengurusan();
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			$this->form_validation->set_rules("nama_bidang", "Nama Bidang", "required");
			$this->form_validation->set_rules("deskripsi_bidang", "Deskripsi Bidang", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/tambah_bidang', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				if ($_FILES["file"]['error'] == 4) {
					// if empty,, send message file is empty, return back
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
					redirect('web/tambah_data_kepengurusan');
				} else {
					// if false,, save file
					if ($this->All_model->rowBidangActive($_POST['nama_bidang']) > 0) {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Nama Bidang Sudah Tersedia');
						redirect('web/tambah_bidang');
					} else {
						$nama_file = date('dmYHis');
						$id_file = "bidang";
						$bidang = $this->All_model->getKepengurusan($_POST['nama_kepengurusan']);
						$tujuan = $bidang[0]['nama_hmj'];
						$upload = $this->All_model->uploadFile($nama_file, $id_file, $tujuan);
						if ($upload['result'] == "success") {
							if ($this->All_model->insertBidang($upload)) {
								$this->session->set_flashdata('berhasil', 'Ditambahkan');
								redirect("web/tentang_hmj");
							} else {
								$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
								redirect("web/tambah_bidang");
							}
						} else {
							$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
							redirect('web/tambah_bidang');
						}
					}
				}
			}
		}
	}

	public function edit_bidang($id_bidang = '')
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['kepengurusan'] = $this->All_model->getActiveKepengurusan();
			$this->data['bidang'] = $this->All_model->getBidangSelectWhere($id_bidang);
			$this->data['title'] = "Web HMJ - Edit Informasi Bidang HMJ TI";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			// Validation
			$this->form_validation->set_rules("nama_bidang", "Nama Bidang", "required");
			$this->form_validation->set_rules("deskripsi_bidang", "Deskripsi Bidang", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/edit_bidang', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$bidang = $this->All_model->getBidangSelectWhere($id_bidang);
				$bidang = $bidang[0]['nama_bidang'];
				if ($_FILES["file"]['error'] == 4) {
					if ($bidang == $_POST['nama_bidang']) {
						if ($this->All_model->editBidang($id_bidang)) {
							$this->session->set_flashdata('berhasil', 'Diubah');
							redirect("web/tentang_hmj");
						} else {
							$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
							redirect("web/edit_bidang/" . $id_bidang);
						}
					} else {
						if ($this->All_model->rowBidangActive($_POST['nama_bidang']) > 0) {
							$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
							redirect("web/edit_bidang/" . $id_bidang);
						} else {
							if ($this->All_model->editBidang($id_bidang)) {
								$this->session->set_flashdata('berhasil', 'Diubah');
								redirect("web/tentang_hmj");
							} else {
								$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
								redirect("web/edit_bidang/" . $id_bidang);
							}
						}
					}
				} else {
					$nama_file = $_POST['old_foto'];
					$id_file = "bidang";
					$hmj = $this->All_model->getKepengurusan($_POST['nama_kepengurusan']);
					$hmj = $hmj[0]['nama_hmj'];
					if ($bidang == $_POST['nama_bidang']) {
						$upload = $this->All_model->uploadFile($nama_file, $id_file, $hmj);
						if ($upload['result'] == "success") {
							if ($this->All_model->editBidangFile($upload, $id_bidang)) {
								$this->session->set_flashdata('berhasil', 'Diubah');
								redirect("web/tentang_hmj", "refresh");
							} else {
								$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
								redirect("web/edit_bidang/" . $id_bidang);
							}
						} else {
							$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Ukuran dan Tipe dari File');
							redirect("web/edit_bidang/" . $id_bidang);
						}
					} else {
						if ($this->All_model->rowBidangActive($_POST['nama_bidang']) > 0) {
							$this->session->set_flashdata('gagal', 'Ditambahkan, Nama Bidang Sudah Tersedia');
							redirect("web/edit_bidang/" . $id_bidang);
						} else {
							$upload = $this->All_model->uploadFile($nama_file, $id_file, $hmj);
							if ($upload['result'] == "success") {
								if ($this->All_model->editBidangFile($upload, $id_bidang)) {
									$this->session->set_flashdata('berhasil', 'Diubah');
									redirect("web/tentang_hmj");
								} else {
									$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
									redirect("web/edit_bidang/" . $id_bidang);
								}
							} else {
								$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Ukuran dan Tipe dari File');
								redirect("web/edit_bidang/" . $id_bidang);
							}
						}
					}
				}
			}
		}
	}
	public function hapus_bidang($id = '')
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
			redirect('web/home');
		} else {
			$hmj = $this->All_model->getBidangSelectWhere($id);
			$hmj = $hmj[0]['nama_hmj'];
			if (!empty($hmj)) {
				$this->All_model->deleteBidang($id, $hmj);
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('web/tentang_hmj');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Nilai Parameter Tidak Ditemukan');
				redirect('web/tentang_hmj');
			}
		}
	}

	// **************************************************************
	// End Bidang
	// **************************************************************



	// **************************************************************
	// Start Kepengurusan
	// **************************************************************
	public function tambah_data_kepengurusan()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$id_file = "kepengurusan";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "Web HMJ - Tambah Data Kepengurusan HMJ TI";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			// Validation Form
			$this->form_validation->set_rules("kepengurusan", "Kepengurusan", "required");
			$this->form_validation->set_rules("deskripsi_singkat", "Deskripsi Singkat HMJ", "required");
			$this->form_validation->set_rules("ketua", "Ketua", "required");
			$this->form_validation->set_rules("wakil", "Wakil", "required");
			$this->form_validation->set_rules("visi", "Visi", "required");
			$this->form_validation->set_rules("misi", "Misi", "required");
			// If run false, return view
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/tmb_kepengurusan', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// else,, check if file not empty
				if ($_FILES["foto_ketua"]['error'] == 4 || $_FILES["foto_wakil"]['error'] == 4 || $_FILES["foto_landscape"]['error'] == 4 || $_FILES["foto_vertikal"]['error'] == 4) {
					// if empty,, send message file is empty, return back
					$this->session->set_flashdata('gagal', 'Ditambahkan, File Foto Tidak Dapat Kosong');
					redirect('web/tambah_data_kepengurusan');
				} else {
					// if false,, save file
					$except = "/";
					if (strpbrk($_POST['kepengurusan'], $except)) {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kepengurusan Mengandung Karakter Yang Tidak Diperbolehkan');
						redirect("web/tambah_data_kepengurusan");
					} else {
						if ($this->All_model->rowNamaKepengurusan($_POST['kepengurusan']) > 0) {
							$this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kepengurusan Sudah Digunakan');
							redirect('web/tambah_data_kepengurusan');
						} else {
							$tujuan = $_POST['kepengurusan'];
							// List Ekstensi
							$ekstensi = array("jpg", "png");

							if ($_FILES["foto_ketua"]['error'] == 0) {
								// Cek Ekstensi Foto 1
								$file_1 = $_FILES["foto_ketua"]['name'];
								$pecah_1 = explode(".", $file_1);
								$ekstensi_1 = $pecah_1[1];
							}
							if ($_FILES["foto_wakil"]['error'] == 0) {
								// Cek Ekstensi Foto 2
								$file_2 = $_FILES["foto_wakil"]['name'];
								$pecah_2 = explode(".", $file_2);
								$ekstensi_2 = $pecah_2[1];
							}
							if ($_FILES["foto_vertikal"]['error'] == 0) {
								// Cek Ekstensi Foto 3
								$file_3 = $_FILES["foto_vertikal"]['name'];
								$pecah_3 = explode(".", $file_3);
								$ekstensi_3 = $pecah_3[1];
							}
							if ($_FILES["foto_landscape"]['error'] == 0) {
								// Cek Ekstensi Foto 3
								$file_4 = $_FILES["foto_landscape"]['name'];
								$pecah_4 = explode(".", $file_4);
								$ekstensi_4 = $pecah_4[1];
							}

							// Foto Ketua
							if ($_FILES["foto_ketua"]['error'] == 0 && $_FILES["foto_wakil"]['error'] == 0 && $_FILES["foto_vertikal"]['error'] == 0 && $_FILES["foto_landscape"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi) && in_array($ekstensi_4, $ekstensi)) {
								$id_ketua = "ketua";
								$upload = $this->All_model->uploadFile($id_ketua, $id_file, $tujuan);
								if ($upload['result'] == "success") {
									$foto_ketua = $upload['file_ketua']['file_name'];
									// var_dump($foto_ketua);
								} else {
									// var_dump($upload);
									$this->session->set_flashdata('gagal', 'Ditambahkan, Foto Ketua HMJ Tidak Sesuai');
									redirect('web/tambah_data_kepengurusan');
								}
							}
							// Foto Wakil
							if ($_FILES["foto_ketua"]['error'] == 0 && $_FILES["foto_wakil"]['error'] == 0 && $_FILES["foto_vertikal"]['error'] == 0 && $_FILES["foto_landscape"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi) && in_array($ekstensi_4, $ekstensi)) {
								$id_wakil = "wakil";
								$upload = $this->All_model->uploadFile($id_wakil, $id_file, $tujuan);
								if ($upload['result'] == "success") {
									$foto_wakil = $upload['file_wakil']['file_name'];
									// var_dump($foto_wakil);
								} else {
									// var_dump($upload);
									$this->session->set_flashdata('gagal', 'Ditambahkan, Foto Wakil Ketua HMJ Tidak Sesuai');
									redirect('web/tambah_data_kepengurusan');
								}
							}
							// Foto Vertikal
							if ($_FILES["foto_ketua"]['error'] == 0 && $_FILES["foto_wakil"]['error'] == 0 && $_FILES["foto_vertikal"]['error'] == 0 && $_FILES["foto_landscape"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi) && in_array($ekstensi_4, $ekstensi)) {
								$id_vertikal = "vertikal";
								$upload = $this->All_model->uploadFile($id_vertikal, $id_file, $tujuan);
								if ($upload['result'] == "success") {
									$foto_vertikal = $upload['file_vertikal']['file_name'];
									// var_dump($foto_vertikal);
								} else {
									// var_dump($upload);
									$this->session->set_flashdata('gagal', 'Ditambahkan, Foto Vertikal Tidak Sesuai');
									redirect('web/tambah_data_kepengurusan');
								}
							}
							// Foto Landscape
							if ($_FILES["foto_ketua"]['error'] == 0 && $_FILES["foto_wakil"]['error'] == 0 && $_FILES["foto_vertikal"]['error'] == 0 && $_FILES["foto_landscape"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi) && in_array($ekstensi_4, $ekstensi)) {
								$id_landscape = "landscape";
								$upload = $this->All_model->uploadFile($id_landscape, $id_file, $tujuan);
								if ($upload['result'] == "success") {
									$foto_landscape = $upload['file_landscape']['file_name'];
									// var_dump($foto_landscape);
								} else {
									// var_dump($upload);
									$this->session->set_flashdata('gagal', 'Ditambahkan, Foto Landscape Tidak Sesuai');
									redirect('web/tambah_data_kepengurusan');
								}
							}
							if (empty($foto_landscape) || empty($foto_vertikal) || empty($foto_ketua) || empty($foto_wakil)) {
								$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
								redirect('web/tambah_data_kepengurusan');
							} else {
								if ($this->All_model->insertKepengurusan($foto_ketua, $foto_wakil, $foto_vertikal, $foto_landscape)) {
									$this->session->set_flashdata('berhasil', 'Ditambahkan');
									redirect('web/tentang_hmj');
								} else {
									$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
									redirect('web/tambah_data_kepengurusan');
								}
							}
						}
					}
				}
			}
		}
	}
	public function hapus_data_kepengurusan($id = '')
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
			redirect('web/home');
		} else {
			$folder = $this->All_model->getKepengurusan($id);
			$folder = $folder[0]['nama_hmj'];
			if ($this->All_model->deleteFolder($folder)) {
				if ($this->All_model->deleteKepengurusan($id)) {
					$this->session->set_flashdata('berhasil', 'Dihapus');
					redirect('web/berkas');
				} else {
					$this->session->set_flashdata('gagal', 'Dihapus');
					redirect('web/berkas');
				}
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Terdapat Masalah Pada Sistem');
				redirect('web/berkas');
			}
		}
	}

	// **************************************************************
	// End Kepengurusan
	// **************************************************************




	// **************************************************************
	// Start Kategori Berkas
	// **************************************************************

	public function tambah_kategori_berkas()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			// Taken from models repository
			$this->data['namaUser'] = $this->ion_auth_model->getNamaUser($id);
			// Taken from models repository
			$this->data['title'] = "Web HMJ - Tambah Data Kategori Berkas HMJ TI";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			// All Validations
			$this->form_validation->set_rules('id_kepengurusan', 'Nama Kepengurusan', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_kategori', 'Deskripsi Kategori', 'required|max_length[800]');
			// All Validations

			$this->data['kepengurusans'] = $this->All_model->getActiveKepengurusan();

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/tmb_kategori_berkas', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				if ($this->All_model->cekKategoriBerkas($_POST['kategori']) > 0) {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kegiatan Sudah Ada');
					redirect('web/tambah_kategori_berkas');
				} else {
					if ($this->All_model->insertKategoriBerkas()) {
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('web/berkas');
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan');
						redirect('web/tambah_kategori_berkas');
					}
				}
			}
		}
	}
	public function edit_kategori_berkas($id_user = '')
	{
		if (!$this->ion_auth->logged_in() || $this->ion_auth->is_admin()) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$id_berkas = "berkas";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			// Taken from models repository
			$this->data['namaUser'] = $this->ion_auth_model->getNamaUser($id);
			// Taken from models repository
			$this->data['title'] = "Web HMJ - Tambah Data Kategori Berkas HMJ TI";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";

			// All Validations
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_kategori', 'Deskripsi Kategori', 'required|max_length[800]');
			// All Validations

			$this->data['kategoriBerkas'] = $this->All_model->getKategoriBerkas($id_user);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/edt_kategori_berkas', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$kegiatan = $this->All_model->getKategoriBerkas($id_user);
				$kegiatan = $kegiatan[0]['nama_kegiatan'];
				if ($kegiatan == $_POST['kategori']) {
					if ($this->All_model->editKategoriBerkas($id_user)) {
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('web/berkas');
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan');
						redirect('web/edit_kategori_berkas/' . $id_user);
					}
				} else {
					if ($this->All_model->cekKategoriBerkas($_POST['kategori']) > 0) {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kegiatan Sudah Ada');
						redirect('web/edit_kategori_berkas/' . $id_user);
					} else {
						if ($this->All_model->editKategoriBerkas($id_user)) {
							$this->session->set_flashdata('berhasil', 'Ditambahkan');
							redirect('web/berkas');
						} else {
							$this->session->set_flashdata('gagal', 'Ditambahkan');
							redirect('web/edit_kategori_berkas/' . $id_user);
						}
					}
				}
			}
		}
	}
	public function hapus_kategori_berkas($id = '')
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
			redirect('web/home');
		} else {
			$tujuan = $this->All_model->getKepengurusanHapus($id);
			$tujuan = $tujuan[0]['nama_hmj'];
			if (!empty($tujuan)) {
				if ($this->All_model->deleteKategoriBerkas($id, $tujuan)) {
					$this->session->set_flashdata('berhasil', 'Dihapus');
					redirect('web/berkas');
				} else {
					$this->session->set_flashdata('gagal', 'Dihapus');
					redirect('web/berkas');
				}
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('web/berkas');
			}
		}
	}
	// **************************************************************
	// End Kategori Berkas
	// **************************************************************


	// **************************************************************
	// Start Detail Berkas
	// **************************************************************
	public function tambah_detail_berkas()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			// Taken from models repository
			$this->data['namaUser'] = $this->ion_auth_model->getNamaUser($id);
			// Taken from models repository
			$this->data['title'] = "Web HMJ - Tambah Data Berkas HMJ TI";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			// All Validations
			$this->form_validation->set_rules('id_kategori_berkas', 'Nama Kategori Berkas', 'required');
			$this->form_validation->set_rules('nama_berkas', 'Nama Repositori', 'required|max_length[50]');
			$this->form_validation->set_rules('deskripsi_detail', 'Deskripsi Repositori', 'required|max_length[800]');
			// All Validations

			$this->data['kategoriBerkass'] = $this->All_model->getActiveKategoriBerkas();

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/tmb_detail_berkas', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {

				if ($_FILES["file"]['error'] == 4) {
					// if empty,, send message file is empty, return back
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
					redirect('web/tambah_data_kepengurusan');
				} else {
					// if false,, save file
					$nama_file = date('dmYHis');
					$id_file = "berkas";
					$request = $this->All_model->getActiveKepengurusan();
					$tujuan = $request[0]['nama_hmj']; // ambil nama kepengurusan yang aktif
					$upload = $this->All_model->uploadFile($nama_file, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						if ($this->All_model->insertBerkas($upload)) {
							$this->session->set_flashdata('berhasil', 'Ditambahkan');
							redirect("web/berkas");
						} else {
							$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
							redirect("web/tambah_detail_berkas");
						}
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
						redirect('web/tambah_detail_berkas');
					}
				}
			}
		}
	}
	public function hapus_detail_berkas($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home');
		} else {
			$tujuan = $this->All_model->getKepengurusanHapusBerkas($id);
			$tujuan = $tujuan[0]['nama_hmj'];
			if (!empty($tujuan)) {
				if ($this->All_model->deleteBerkas($id, $tujuan)) {
					$this->session->set_flashdata('berhasil', 'Dihapus');
					redirect('web/berkas');
				} else {
					$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
					redirect('web/berkas');
				}
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('web/berkas');
			}
		}
	}
	public function edit_detail_berkas($id_user = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			// Taken from models repository
			$this->data['namaUser'] = $this->ion_auth_model->getNamaUser($id);
			// Taken from models repository
			$this->data['title'] = "Web HMJ - Edit Data Berkas HMJ TI";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			// All Validations
			$this->form_validation->set_rules('id_kategori_berkas', 'Nama Kategori', 'required');
			$this->form_validation->set_rules('nama_berkas', 'Nama Repositori', 'required|max_length[50]');
			$this->form_validation->set_rules('deskripsi_detail', 'Deskripsi Repositori', 'required|max_length[800]');
			// All Validations

			$this->data['kategoriBerkass'] = $this->All_model->getActiveKategoriBerkas();
			$this->data['selectedBerkas'] = $this->All_model->getSelectedBerkas($id_user);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/edt_detail_berkas', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				if ($_FILES["file"]['error'] == 4) {
					if ($this->All_model->editBerkas($id_user)) {
						$this->session->set_flashdata('berhasil', 'Diubah');
						redirect("web/berkas");
					} else {
						$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
						redirect("web/edit_detail_berkas/$id_user");
					}
				} else {
					$nama_file = $_POST['old_berkas'];
					$id_file = "berkas";
					$tujuan = $this->All_model->getActiveKepengurusan();
					$tujuan = $tujuan[0]['nama_hmj'];
					$upload = $this->All_model->uploadFile($nama_file, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						if ($this->All_model->editBerkasFile($upload, $id_user)) {
							$this->session->set_flashdata('berhasil', 'Diubah');
							redirect("web/berkas", "refresh");
						} else {
							$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Form Inputan Anda');
							redirect("web/edit_detail_berkas/$id_user");
						}
					} else {
						$this->session->set_flashdata('gagal', 'Diubah, Periksa Kembali Ukuran dan Tipe dari File');
						redirect("web/edit_detail_berkas/$id_user");
					}
				}
			}
		}
	}
	public function download_file($nama  = '', $kode = '')
	{
		if ($kode == "kepengurusan") {
			$kepengurusan = $this->All_model->getActiveKepengurusan();
			$kepengurusan = $kepengurusan[0]['nama_hmj'];
			$tujuan_kepengurusan = '' . FCPATH . 'assets/upload/Folder_' . $kepengurusan . '/' . $nama . '';
			force_download($tujuan_kepengurusan, NULL);
		} else if ($kode == "informasi") {
			$tujuan_informasi = '' . FCPATH . 'assets/upload/Folder_informasi/berkas/' . $nama . '';
			force_download($tujuan_informasi, NULL);
		} else {
			redirect("notfound/index");
		}
	}
	public function flip_me($tujuan = '', $nama  = '', $kode = '')
	{
		$this->data['title'] = "Web HMJ - Lihat File $nama";
		$this->data['flip'] = "true";
		$this->data['nama_file'] = $nama;
		if ($kode == "informasi") {
			$this->data['folder'] = $tujuan;
			$this->data['kode'] = $kode;
		} else if ($kode == "kepengurusan") {
			$folder = $this->All_model->getActiveKepengurusan();
			$this->data['kepengurusan'] = $folder[0]['nama_hmj'];
			$this->data['kode'] = $kode;
		} else if ($kode == "eors") {
			$data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($tujuan));
			$this->data['folder_eors'] = $data_kegiatan[0]['nama_kegiatan'];
			$this->data['kode'] = $kode;
			$this->data['nama_file'] = $nama;
		} else if ($kode == "integer" && $tujuan == "integer") {
			$this->data['folder_integer'] = $tujuan;
			$this->data['kode'] = $kode;
			$this->data['nama_file'] = $nama;
		}
		$this->load->view('admin/master/header', $this->data);
		$this->load->view('admin/page/web/flip_me', $this->data);
		$this->load->view('admin/master/footer', $this->data);
	}
	// **************************************************************
	// End Detail Berkas
	// **************************************************************



	// **************************************************************
	// Start Manajemen Informasi
	// **************************************************************
	public function informasi_hmj()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['informasi'] = $this->All_model->getInformasiAll();
			$this->data['title'] = "Web HMJ - Manajemen Informasi HMJ";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "false";
			$this->data['flip'] = "false";
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/web/informasi', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function tambah_data_informasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			// Taken from models repository
			$this->data['title'] = "Web HMJ - Tambah Data Informasi";
			$this->data['active'] = "4";
			$this->data['ckeditor'] = "web";
			$this->data['flip'] = "false";
			// All Validations
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('judul_informasi', 'Judul Informasi', 'required|max_length[100]');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/web/tmb_data_informasi', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$namaKepengurusan = $this->All_model->getActiveKepengurusan();
				$namaKepengurusan = $namaKepengurusan[0]['nama_hmj'];
				$id_file = "informasi";
				$tujuan = "informasi/foto";
				// List Ekstensi
				$ekstensi = array("jpg", "png");

				if ($_FILES["foto_1"]['error'] == 0) {
					// Cek Ekstensi Foto 1
					$file_foto1 = $_FILES["foto_1"]['name'];
					$pecah_1 = explode(".", $file_foto1);
					$ekstensi_1 = $pecah_1[1];
				}
				if ($_FILES["foto_2"]['error'] == 0) {
					// Cek Ekstensi Foto 2
					$file_foto2 = $_FILES["foto_2"]['name'];
					$pecah_2 = explode(".", $file_foto2);
					$ekstensi_2 = $pecah_2[1];
				}
				if ($_FILES["foto_3"]['error'] == 0) {
					// Cek Ekstensi Foto 3
					$file_foto3 = $_FILES["foto_3"]['name'];
					$pecah_3 = explode(".", $file_foto3);
					$ekstensi_3 = $pecah_3[1];
				}
				// Foto 1
				if (($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_2"]['error'] != 0 && $_FILES["foto_3"]['error'] != 0 && in_array($ekstensi_1, $ekstensi)) || ($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_3"]['error'] != 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi)) || ($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_3"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi))) {
					$id_foto_1 = "foto_1";
					$upload = $this->All_model->uploadFile($id_foto_1, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto_1 = $upload['foto_1']['file_name'];
						// var_dump($foto_1);
					} else {
						$foto_1 = NULL;
						$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
						redirect("web/tambah_data_informasi");
					}
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto di Slide, Apakah File Sudah Sesuai?');
					redirect("web/tambah_data_informasi");
				}
				// Foto 2
				if (($_FILES["foto_2"]['error'] == 0 && $_FILES["foto_1"]['error'] == 0 && $_FILES["foto_3"]['error'] != 0 && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_1, $ekstensi)) || ($_FILES["foto_3"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_1"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi))) {
					$id_foto_2 = "foto_2";
					$upload = $this->All_model->uploadFile($id_foto_2, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto_2 = $upload['foto_2']['file_name'];
						// var_dump($foto_2);
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
						redirect("web/tambah_data_informasi");
					}
				} else {
					if (($_FILES["foto_1"]['error'] != 0)) {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto di Slide, Apakah File Sudah Sesuai?');
						redirect("web/tambah_data_informasi");
					}
				}
				// Foto 3
				if ($_FILES["foto_3"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_1"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi)) {
					$id_foto_3 = "foto_3";
					$upload = $this->All_model->uploadFile($id_foto_3, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto_3 = $upload['foto_3']['file_name'];
						// var_dump($foto_3);
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
						redirect("web/tambah_data_informasi");
					}
				} else {
					if (($_FILES["foto_2"]['error'] != 0 && $_FILES["foto_1"]['error'] != 0) || ($_FILES["foto_1"]['error'] != 0 && $_FILES["foto_3"]['error'] == 0) || ($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_3"]['error'] == 0)) {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto di Slide, Apakah File Sudah Sesuai?');
						redirect("web/tambah_data_informasi");
					}
				}

				if ($_FILES["file"]['error'] == 0) {
					$id_berkas = "berkas";
					$tujuan_berkas = "informasi/berkas";
					$nama = date('dmYHis');
					$upload = $this->All_model->uploadFile($nama, $id_berkas, $tujuan_berkas);
					if ($upload['result'] == "success") {
						$file_doc = $upload['file']['file_name'];
						// var_dump($file_doc);
					} else {
						// var_dump($upload);
						$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
						redirect("web/tambah_data_informasi");
					}
				}
				// Jika foto dan doc kosong
				if (empty($foto_2)) {
					$foto_2 = null;
				}
				if (empty($foto_3)) {
					$foto_3 = null;
				}
				if (empty($file_doc)) {
					$file_doc = null;
				}
				if ($this->All_model->tambahDataInformasi($foto_1, $foto_2, $foto_3, $file_doc, $namaKepengurusan)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("web/informasi_hmj");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("web/tambah_data_informasi");
				}
			}
		}
	}
	public function hapus_data_informasi($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home');
		} else {
			if ($this->All_model->deleteInformasi($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('web/informasi_hmj');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('web/informasi_hmj');
			}
		}
	}
	// **************************************************************
	// End Manajemen Informasi
	// **************************************************************



	//***************************************************************
	// Bagian Guest
	//***************************************************************
	public function home()
	{
		$this->data['title'] = "Beranda";
		$this->data['body'] = "1";
		$active = $this->All_model->getActiveKepengurusan();
		$active = $active[0]['id_hmj'];
		$kepengurusan = $this->All_model->getKepengurusanSelect();
		$bidang = $this->All_model->getAllBidangSelect();
		$this->data['kepengurusan'] = $kepengurusan;
		$this->data['bidang'] = $bidang;
		$this->data['search'] = false;
		$this->data['sistem'] = $this->All_model->getTotalSistem();
		$this->data['kegiatan'] = $this->All_model->getTotalKegiatan();
		$this->data['berita'] = $this->All_model->getTotalBerita();
		$this->data['repositori'] = $this->All_model->getTotalFile();
		$this->data['pengumuman'] = $this->All_model->getPengumumanLimit();
		$this->data['redaksi'] = $this->All_model->getRedaksiLimit();
		if (!empty($bidang) && !empty($kepengurusan)) {
			$this->load->view('guest/web/master/header', $this->data);
			$this->load->view('guest/web/page/index', $this->data);
			$this->load->view('guest/web/master/footer-home', $this->data);
		} else {
			redirect("notfound");
		}
	}
	public function pengumuman()
	{
		$this->data['title'] = "Pengumuman";
		$this->data['body'] = "2";
		$this->data['search'] = false;
		$this->data['pengumuman'] = $this->All_model->getAllPengumuman();
		$this->load->view('guest/web/master/header', $this->data);
		$this->load->view('guest/web/page/pengumuman', $this->data);
		$this->load->view('guest/web/master/footer', $this->data);
	}
	public function detail_pengumuman($id = '')
	{
		$this->data['title'] = "Detail Pengumuman";
		$this->data['body'] = "2";
		$data = $this->All_model->getDetailPengumumanWhere($id);
		$this->data['detail'] = $data;
		$this->data['search'] = false;
		$this->data['pengumuman'] =	$this->All_model->getPengumumanLimit();
		if (!empty($data) && $data[0]['kategori_informasi'] == "Pengumuman") {
			$this->load->view('guest/web/master/header', $this->data);
			$this->load->view('guest/web/page/detail_pengumuman', $this->data);
			$this->load->view('guest/web/master/footer', $this->data);
		} else {
			redirect("notfound");
		}
	}
	public function berita()
	{
		$this->data['title'] = "Berita dan Redaksi Harian";
		$this->data['body'] = "2";
		$this->data['search'] = false;
		$this->data['redaksi'] = $this->All_model->getAllBerita();
		$this->load->view('guest/web/master/header', $this->data);
		$this->load->view('guest/web/page/berita', $this->data);
		$this->load->view('guest/web/master/footer', $this->data);
	}
	public function detail_berita($id = '')
	{
		$this->data['title'] = "Detail Berita dan Redaksi Karya Tulis";
		$this->data['body'] = "3";
		$data = $this->All_model->getDetailBeritaWhere($id);
		$this->data['berita'] = $this->All_model->rowBerita();
		$this->data['redaksi'] = $this->All_model->rowKaryaTulis();
		$this->data['all_berita'] =	$this->All_model->getRedaksiLimit();
		$this->data['detail'] = $data;
		$this->data['search'] = false;
		if ((!empty($data)) && ($data[0]['kategori_informasi'] == "Karya Tulis" || $data[0]['kategori_informasi'] == "Berita")) {
			$this->load->view('guest/web/master/header', $this->data);
			$this->load->view('guest/web/page/detail_berita', $this->data);
			$this->load->view('guest/web/master/footer', $this->data);
		} else {
			redirect("notfound");
		}
	}
	public function repositori()
	{
		$this->data['title'] = "Repositori HMJ TI Undiksha";
		$this->data['body'] = "1";
		$this->data['search'] = false;
		$data =	$this->All_model->getAllKepengurusan();
		$this->data['kepengurusans'] = $data;
		if (!empty($data)) {
			$this->load->view('guest/web/master/header', $this->data);
			$this->load->view('guest/web/page/repositori', $this->data);
			$this->load->view('guest/web/master/footer', $this->data);
		} else {
			redirect("notfound");
		}
	}
	public function kegiatan($id = '')
	{

		$this->data['body'] = "2";
		$this->data['search'] = true;
		$data =	$this->All_model->getAllKategoriBerkasFromKepengurusan($id);
		$kepengurusan =	$this->All_model->getKepengurusan($id);
		$this->data['title'] = 'Berkas Kegiatan Kepengurusan ' . $kepengurusan[0]['nama_hmj'] . '';
		$this->data['kegiatans'] = $data;
		$this->data['kepengurusan'] = $kepengurusan;
		if (!empty($kepengurusan)) {
			$this->load->view('guest/web/master/header', $this->data);
			$this->load->view('guest/web/page/kegiatan', $this->data);
			$this->load->view('guest/web/master/footer', $this->data);
		} else {
			redirect("notfound");
		}
	}
	public function detail_kegiatan($id = '')
	{
		$string_url = $this->uri->segment(3);
		$string_url = urldecode($string_url);
		$this->data['breadcrumb'] = $string_url;
		$this->data['title'] = "Berkas Kegiatan Kepengurusan $string_url";
		$this->data['body'] = "2";
		$this->data['search'] = false;
		$data = $this->All_model->getKategoriBerkas($id);
		$kepengurusan = $this->All_model->getKepengurusanForKategoriBerkas($id);
		$this->data['berkass'] = $this->All_model->getAllBerkasFromKategoriBerkas($id);
		$this->data['kategoriBerkas'] = $data;
		$this->data['kepengurusan'] = $kepengurusan;
		if (!empty($kepengurusan) && !empty($data)) {
			$this->load->view('guest/web/master/header', $this->data);
			$this->load->view('guest/web/page/detail_kegiatan', $this->data);
			$this->load->view('guest/web/master/footer', $this->data);
		} else {
			redirect("notfound");
		}
	}
}