<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller Admin
 * 
 * Author		: Ganatech
 *
 * Created		:  01.09.2020
 *
 * Description	:  Controller ini digunakan untuk mengatur halaman Admin pada website, adapun halaman admin ini
 * meliputi fitur Manajemen Website (tidak termasuk bagian Data User Website karena diatur dicontroller Auth), 
 * Backup Database, dan Import Database. Untuk mengakses halaman ini, diharuskan login sebagai admin
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
class Admin extends CI_Controller
{
	public $data = [];
	// Ketika mengakses halaman "admin"
	public function index()
	{
		// Cek apakah user tidak login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah user adalah admin
			if ($this->ion_auth->is_admin()) {
				// Send data ke views
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Setting Website";
				$this->data['active'] = "6";
				$this->data['flip'] = "false";
				$this->data['ckeditor'] = "false";
				$this->data['users'] = $this->ion_auth->users()->result();
				foreach ($this->data['users'] as $k => $user) {
					$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
				}
				$this->data['jabatan'] = $this->All_model->getAllJabatan();
				$this->data['landing'] = $this->All_model->getAllLanding();
				// End Send Data
				// Load Views
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/admin/index', $this->data);
				$this->load->view('admin/master/footer', $this->data);
				// End Load Views
			} else {
				// Menampilkan error 404
				show_404();
			}
		}
	}
	// Ketika mengakses halaman "admin/edit_jabatan"
	public function edit_jabatan($id_jabatan = '')
	{
		// Cek apakah user tidak login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah user adalah admin
			if ($this->ion_auth->is_admin()) {
				// Send data
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['jabatan'] = $this->All_model->getJabatanWhere($id_jabatan);
				$this->data['title'] = "Admin - Edit Jabatan";
				$this->data['active'] = "6";
				$this->data['ckeditor'] = "false";
				$this->data['flip'] = "false";
				// End send data
				// Form Validation
				$this->form_validation->set_rules("nama_jabatan", "Nama Jabatan", "required");
				// End Form Validation
				// Cek apakah form validation False?
				if ($this->form_validation->run() == FALSE) {
					// Load Views
					$this->load->view('admin/master/header', $this->data);
					$this->load->view('admin/page/admin/edit_jabatan', $this->data);
					$this->load->view('admin/master/footer', $this->data);
					// End Load Views
				} else {
					// Eksekusi Data
					if ($this->All_model->editJabatan($id_jabatan)) {
						// Kirim Flash Message dan Redirect
						$this->session->set_flashdata('berhasil', 'Diubah');
						redirect('admin/');
					} else {
						// Kirim Flash Message dan Redirect
						$this->session->set_flashdata('gagal', 'Diubah, Silahkan Cek Kembali Form Anda');
						redirect('admin/tambah_jabatan');
					}
				}
			} else {
				// Tampilkan error 404
				show_404();
			}
		}
	}
	// Ketika mengakses halaman "admin/tambah_jabatan"
	public function tambah_jabatan()
	{
		// Cek apakah user login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah user adalah admin
			if ($this->ion_auth->is_admin()) {
				// Send data
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Tambah Jabatan";
				$this->data['active'] = "6";
				$this->data['flip'] = "false";
				$this->data['ckeditor'] = "false";
				// End send data
				// Form Validation
				$this->form_validation->set_rules("nama_jabatan", "Nama Jabatan", "required");
				// End form validation 
				// Cek apakah validation salah
				if ($this->form_validation->run() == FALSE) {
					// Load views
					$this->load->view('admin/master/header', $this->data);
					$this->load->view('admin/page/admin/tambah_jabatan', $this->data);
					$this->load->view('admin/master/footer', $this->data);
				} else {
					// Eksekusi data
					if ($this->All_model->tambahJabatan()) {
						// Redirect dan kirim flash message
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('admin/');
					} else {
						// Redirect dan kirim flash message
						$this->session->set_flashdata('gagal', 'Ditambahkan, Silahkan Cek Kembali Form Anda');
						redirect('admin/tambah_jabatan');
					}
				}
			} else {
				// Tampilkan error 404
				show_404();
			}
		}
	}
	// Ketika mengakses halaman "admin/hapus_jabatan"
	public function hapus_jabatan($id = '')
	{
		// Apakah user login?
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Apakah user admin?
			if ($this->ion_auth->is_admin()) {
				// Panggil model
				$hmj = $this->All_model->getJabatanWhere($id);
				// Cek apakah variabel kosong?
				if (!empty($hmj)) {
					// Eksekusi hapus
					if($this->All_model->deleteJabatan($id)){
						// Redirect dan Send Flash Message
						$this->session->set_flashdata('berhasil', 'Dihapus');
						redirect('admin');
					}else{
						// Redirect dan Send Flash Message
						$this->session->set_flashdata('gagal', 'Dihapus');
						redirect('admin');
					}
				} else {
					// Redirect dan Send Flash Message
					$this->session->set_flashdata('gagal', 'Dihapus, Nilai Parameter Tidak Ditemukan');
					redirect('admin');
				}
			} else {
				// Tampilkan error 404
				show_404();
			}
		}
	}
	// Ketika mengakses halaman "admin/hapus_user"
	public function hapus_user($id = '')
	{
		// Cek apakah user login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah user adalah admin?
			if ($this->ion_auth->is_admin()) {
				// Cek apakah user yang ingin dihapus adalah admin?
				if ($this->ion_auth_model->getAdmin($id) > 0) {
					// Tampilkan pesan gagal
					$this->session->set_flashdata('gagal', 'Dihapus, Anda tidak dapat menghapus level user Admin');
					return redirect('admin');
				} else {
					// Hapus user yang bukan admin
					if ($this->ion_auth_model->hapusUser($id)) {
						// Tampilkan pesan berhasil
						$this->session->set_flashdata('berhasil', 'Dihapus');
						return redirect('admin');
					} else {
						// Tampilkan pesan gagal
						$this->session->set_flashdata('gagal', 'Dihapus');
						return redirect('admin');
					}
				}
			} else {
				// Error 404
				show_404();
			}
		}
	}
	// Ketika mengakses halaman "admin/tambah_landing"
	public function tambah_landing()
	{
		// Cek apakah user login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah admin?
			if ($this->ion_auth->is_admin()) {
				// Send data
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Tambah Landing";
				$this->data['active'] = "6";
				$this->data['ckeditor'] = "false";
				$this->data['flip'] = "false";
				// End Send Data
				// Form Validation
				$this->form_validation->set_rules("title", "Title", "required");
				$this->form_validation->set_rules("icon", "Icon", "required");
				$this->form_validation->set_rules("links", "Href", "required");
				// End Form Validation
				// Apakah Form Validation bernilai Salah
				if ($this->form_validation->run() == FALSE) {
					// Tampilkan views
					$this->load->view('admin/master/header', $this->data);
					$this->load->view('admin/page/admin/tambah_landing', $this->data);
					$this->load->view('admin/master/footer', $this->data);
				} else {
					// Tambah Data Landing
					if ($this->All_model->insertLanding()) {
						// Pesan Berhasil
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('admin/');
					} else {
						// Pesan Gagal
						$this->session->set_flashdata('gagal', 'Ditambahkan, Silahkan Cek Kembali Form Anda');
						redirect('admin/tambah_landing');
					}
				}
			} else {
				// error 404
				show_404();
			}
		}
	}
	// Ketika mengakses "admin/edit_landing"
	public function edit_landing($id_landing = '')
	{
		// Cek apakah user login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah admin
			if ($this->ion_auth->is_admin()) {
				// Send Data
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['landing'] = $this->All_model->getLanding($id_landing);
				$this->data['title'] = "Admin - Tambah Landing";
				$this->data['active'] = "6";
				$this->data['ckeditor'] = "false";
				$this->data['flip'] = "false";
				// End Send Data
				// Form Validation
				$this->form_validation->set_rules("title", "Title", "required");
				$this->form_validation->set_rules("icon", "Icon", "required");
				$this->form_validation->set_rules("links", "Href", "required");
				// End Form Validation
				// Cek form validation
				if ($this->form_validation->run() == FALSE) {
					// Tampilkan views
					$this->load->view('admin/master/header', $this->data);
					$this->load->view('admin/page/admin/edit_landing', $this->data);
					$this->load->view('admin/master/footer', $this->data);
				} else {
					// Tambah Data Landing
					if ($this->All_model->editLanding($id_landing)) {
						// Pesan Berhasil
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('admin/');
					} else {
						// Pesan Gagal
						$this->session->set_flashdata('gagal', 'Ditambahkan, Silahkan Cek Kembali Form Anda');
						redirect('admin/edit_landing');
					}
				}
			} else {
				// Error 404
				show_404();
			}
		}
	}
	// Ketika mengakses "admin/hapus_landing"
	public function hapus_landing($id_landing = '')
	{
		// Cek apakah user login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah admin
			if ($this->ion_auth->is_admin()) {
				// Hapus landing
				if ($this->All_model->hapusLanding($id_landing)) {
					// Pesan Berhasil
					$this->session->set_flashdata('berhasil', 'Dihapus');
					return redirect('admin');
				} else {
					// Pesan Gagal
					$this->session->set_flashdata('gagal', 'Dihapus');
					return redirect('admin');
				}
			} else {
				// Error 404
				show_404();
			}
		}
	}
	// Ketika mengakses "admin/set_main"
	public function set_main($id_landing = '')
	{
		// Cek apakah user login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah admin
			if ($this->ion_auth->is_admin()) {
				// cek apakah jumlah main lebih dari 0 dan kurang dari 4
				if ($this->All_model->rowMain() < 4 && $this->All_model->rowMain() >= 0) {
					// Set main
					if ($this->All_model->setMain($id_landing)) {
						// Pesan Berhasil
						$this->session->set_flashdata('berhasil', 'Disetel');
						return redirect('admin');
					} else {
						// Pesan Gagal
						$this->session->set_flashdata('gagal', 'Disetel, Terjadi Masalah Server');
						return redirect('admin');
					}
				} else {
					// Pesan Gagal
					$this->session->set_flashdata('gagal', 'Disetel, Jumlah Tipe Main Pada Icon/Links Sudah Terpenuhi');
					return redirect('admin');
				}
			} else {
				// Error 404
				show_404();
			}
		}
	}
	// Ketika mengakses "admin/set_off"
	public function set_off($id_landing = '')
	{
		// Cek login
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			// Cek apakah admin
			if ($this->ion_auth->is_admin()) {
				// Set Off
				if ($this->All_model->setOff($id_landing)) {
					// Pesan Berhasil
					$this->session->set_flashdata('berhasil', 'Disetel');
					return redirect('admin');
				} else {
					// Pesan Gagal
					$this->session->set_flashdata('gagal', 'Disetel, Terjadi Masalah Server');
					return redirect('admin');
				}
			} else {
				// Error 404
				show_404();
			}
		}
	}
	// Ketika mengakses "admin/backup_database"
	public function backup_database()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Backup Database Website";
				$this->data['active'] = "7";
				$this->data['flip'] = "false";
				$this->data['ckeditor'] = "false";
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/admin/backup', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_backup()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			if ($this->ion_auth->is_admin()) {
				// Load db util
				$this->load->dbutil();
				// Backup your entire database and assign it to a variable
				$backup = $this->dbutil->backup();

				// Load the file helper and write the file to your server
				$this->load->helper('file');
				write_file('/path/to/mybackup.zip', $backup);

				// Load the download helper and send the file to your desktop
				$this->load->helper('download');
				force_download('mybackup.zip', $backup);
			} else {
				show_404();
			}
		}
	}
	public function import_database()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Backup Database Website";
				$this->data['active'] = "8";
				$this->data['ckeditor'] = "false";
				$this->data['flip'] = "false";
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/admin/import', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
}