<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller Inventaris
 * 
 * Author		: Yuda CR (Calon Rektor)
 *
 * Created		: -
 *
 * Description	: Masih dalam tahap pengembangan
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    SSO HMJ TI Undiksha
 * @author     Yuda CR (Calon rektor)
 * @link       https://github.com/deyan-ardi/sso-hmj
 * @filesource
 **/
/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Inventaris extends CI_Controller
{
	// public function index()
	// {
	// 	if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
	// 		redirect('login', 'refresh');
	// 	} else {
	// 		$id = $_SESSION['user_id'];
	// 		$this->data['flip'] = "false";
	// 		$this->data['group'] = $this->ion_auth_model->getGroup($id);
	// 		$this->data['title'] = "SI Inventaris - Detail Organisasi";
	// 		$this->data['active'] = "2";
	// 		$this->load->model('All_model');
	// 		$this->data['kepengurusan'] = $this->All_model->allDataKepengurusan();
	// 		$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
	// 		$this->data['banyakBarang'] = $this->All_model->countDataBarang();
	// 		$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
	// 		$this->load->view('admin/master/header', $this->data);
	// 		$this->load->view('admin/page/inventaris/kepengurusan', $this->data);
	// 		$this->load->view('admin/master/footer', $this->data);
	// 		// show_404();
	// 	}
	// }
	// public static $indicator;

	function __construct()
	{
		parent::__construct();
		$this->load->model('All_model');
		$data = $this->All_model->allDataPinjamanStatus('Sedang Dipinjam');
		// var_dump($data);
		foreach ($data as $peminjaman) {
			if (strtotime($peminjaman['lamaPinjam']) < strtotime(date("Y-m-d"))) {
				// echo (date("Y-m-d") . "<br>");
				// echo (date($peminjaman['lamaPinjam']));
				$this->All_model->ceklambat($peminjaman['idPeminjaman']);
			}
		}
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Detail Barang";
			$this->data['active'] = "2";
			$this->data['flip'] = "false";
			$this->data['ckeditor'] = "inv";
			$this->load->model('All_model');
			$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
			$this->data['banyakBarang'] = $this->All_model->countDataBarang();
			$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
			$this->data['barang'] = $this->All_model->allDataBarang();
			$this->data['kategori'] = $this->All_model->allKategoriBarang();
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
			unset($_SESSION['sukses']);
			unset($_SESSION['gagal']);
			// show_404();
		}
	}
	public function peminjaman()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Peminjaman";
			$this->data['active'] = "2";
			$this->data['flip'] = "false";
			$this->data['ckeditor'] = "inv";
			$this->load->model('All_model');
			$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
			$this->data['banyakBarang'] = $this->All_model->countDataBarang();
			$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
			$this->data['peminjam'] = $this->All_model->allDataPinjaman();
			$this->data['peminjam2'] = $this->All_model->allDataPinjamanTerima();
			$this->data['peminjam3'] = $this->All_model->allDataPinjamanKembali();
			// $this->data['detail'] = $this->All_model->allDataDetailPinjam($idUser);
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/peminjaman', $this->data);
			$this->load->view('admin/master/footer', $this->data);
			// show_404();
			unset($_SESSION['sukses']);
			unset($_SESSION['gagal']);
		}
	}
	public function terima($idPeminjaman)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$this->load->model('All_model');
			if ($this->All_model->terima($idPeminjaman)) {
				redirect('inventaris/peminjaman');
				$this->session->set_flashdata('sukses', 'Berhasil Diterima');
			} else {
				redirect('inventaris/peminjaman');
				$this->session->set_flashdata('gagal', 'Gagal Diterima');
			}
		}
	}
	public function terimaKembali($idPeminjaman)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$this->load->model('All_model');
			if ($this->All_model->terimaKembalikan($idPeminjaman)) {
				redirect('inventaris/peminjaman');
				$this->session->set_flashdata('sukses', 'Berhasil Diterima');
			} else {
				redirect('inventaris/peminjaman');
				$this->session->set_flashdata('gagal', 'Gagal Diterima');
			}
		}
	}
	public function tolak($idPeminjaman)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$this->load->model('All_model');
			if ($this->All_model->tolak($idPeminjaman)) {
				redirect('inventaris/peminjaman');
				$this->session->set_flashdata('sukses', 'Berhasil Dihapus');
			} else {
				redirect('inventaris/peminjaman');
				$this->session->set_flashdata('gagal', 'Gagal Dihapus');
			}
		}
	}
	public function tambah_inventaris()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Tambah Inventaris";
			$this->data['flip'] = "false";
			$this->data['active'] = "2";
			$this->data['ckeditor'] = "inv";
			$this->load->model('All_model');
			$this->data['kategori'] = $this->All_model->allKategoriBarang();
			$this->data['kepengurusan'] = $this->All_model->allDataKepengurusan();
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/tambah_inventaris', $this->data);
			$this->load->view('admin/master/footer', $this->data);

			if ($this->input->post('submit') === '') {

				$upload = $this->All_model->uploadFile('foto_barang', 'inventaris', 'inventaris');
				if ($upload['result'] == "success") {
					$nama_foto = $upload['foto_barang']['file_name'];
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File Foto');
					redirect('inventaris/tambah_inventaris');
				}
				$data = [
					'kodeBarang' => $this->input->post('kode_barang', true),
					'namaBarang' => $this->input->post('nama_barang', true),
					'merk' => $this->input->post('merk', true),
					'tahunPembelian' => $this->input->post('tahun', true),
					'idKepengurusan' => $this->input->post('nama_pengurus', true),
					'idKategori' => $this->input->post('kategori', true),
					'banyakBarang' => $this->input->post('jml_barang', true),
					'barangDipinjam' => 0,
					'keadaanBarang' => $this->input->post('keadaan', true),
					'deskripsiBarang' => $this->input->post('desk', true),
					'hakBarang' => $this->input->post('hakBarang', true),
					'gambar' => $nama_foto
				];

				if ($this->All_model->addDataBarang($data)) {
					$this->session->set_flashdata('sukses', 'Barang Berhasil Ditambah');
					redirect('inventaris/');
				} else {
					$this->session->set_flashdata('gagal', 'Barang Gagal Ditambah');
					redirect('inventaris/tambah_inventaris');
				}
			}
		}
	}
	public function edit_inventaris($kodeBarang)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Edit Inventaris";
			$this->data['flip'] = "false";
			$this->data['active'] = "2";
			$this->data['ckeditor'] = "inv";
			$this->load->model('All_model');
			$this->data['kategori'] = $this->All_model->allKategoriBarang();
			$this->data['kepengurusan'] = $this->All_model->allDataKepengurusan();
			$this->data['diEdit'] = $this->All_model->lookDataBarang($kodeBarang);
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/edit_inventaris', $this->data);
			$this->load->view('admin/master/footer', $this->data);

			if ($this->input->post('submit') === '') {
				$upload = $this->All_model->uploadFile('foto_barang', 'inventaris', 'inventaris');
				if ($upload['result'] == "success") {
					$this->All_model->deleteFotoBarang($kodeBarang);
					$nama_foto = $upload['foto_barang']['file_name'];
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File Foto');
					redirect('inventaris/edit_inventaris/' . $kodeBarang);
				}
				$data = [
					// 'kodeBarang' => $this->input->post('kode_barang', true),
					'namaBarang' => $this->input->post('nama_barang', true),
					'merk' => $this->input->post('merk', true),
					'tahunPembelian' => $this->input->post('tahun', true),
					'idKepengurusan' => $this->input->post('nama_pengurus', true),
					'idKategori' => $this->input->post('kategori', true),
					'banyakBarang' => $this->input->post('jml_barang', true),
					// 'barangDipinjam' => 0,
					'keadaanBarang' => $this->input->post('keadaan', true),
					'deskripsiBarang' => $this->input->post('desk', true),
					'hakBarang' => $this->input->post('hakBarang', true),
					'gambar' => $nama_foto
				];
				if ($this->All_model->editDataBarang($data, $kodeBarang)) {
					$this->session->set_flashdata('sukses', 'Barang Berhasil Diubah');
					redirect('inventaris/');
				} else {
					$this->session->set_flashdata('gagal', 'Barang Gagal Diubah');
					redirect('inventaris/edit_inventaris');
				}
			}
		}
	}
	public function del_inventaris($id)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$this->load->model('All_model');
			$this->All_model->deleteFotoBarang($id);
			// die;
			if ($this->All_model->delDataBarang($id)) {
				$this->session->set_flashdata('sukses', 'Barang Berhasil Dihapus');
				redirect('inventaris/');
			} else {
				$this->session->set_flashdata('gagal', 'Barang Gagal Dihapus');
				redirect('inventaris/');
			}
		}
	}
	public function tambah_kategori()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Tambah Kategori";
			$this->data['flip'] = "false";
			$this->data['active'] = "2";
			$this->data['ckeditor'] = "inv";
			$this->load->model('All_model');
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/tambah_kategori', $this->data);
			$this->load->view('admin/master/footer', $this->data);

			if ($this->input->post('submit') === '') {
				$data = [
					// 'idKategori' => '',
					'namaKategori' => $this->input->post('nama_kategori', true),
					'deskripsi' => $this->input->post('desk', true)
				];
				if ($this->All_model->addKategoriBarang($data)) {
					$this->session->set_flashdata('sukses', 'Kategori Berhasil Ditambah');
					redirect('inventaris/');
				} else {
					$this->session->set_flashdata('gagal', 'Kategori Gagal Ditambah');
					redirect('inventaris/tambah_kategori');
				}
			}
		}
	}
	public function edit_kategori($idKategori)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Edit Kategori";
			$this->data['flip'] = "false";
			$this->data['active'] = "2";
			$this->data['ckeditor'] = "inv";
			$this->load->model('All_model');
			$this->data['diEdit'] = $this->All_model->lookKategoriBarang($idKategori);
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/edit_kategori', $this->data);
			$this->load->view('admin/master/footer', $this->data);

			if ($this->input->post('submit') === '') {
				$data = [
					'namaKategori' => $this->input->post('nama_kategori', true),
					'deskripsi' => $this->input->post('desk', true)
				];
				if ($this->All_model->editKategoriBarang($data, $idKategori)) {
					$this->session->set_flashdata('sukses', 'Kategori Berhasil Diubah');
					redirect('inventaris/');
				} else {
					$this->session->set_flashdata('gagal', 'Kategori Gagal Diubah');
					redirect('inventaris/edit_inventaris');
				}
			}
		}
	}
	public function del_kategori($id)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
			redirect('login', 'refresh');
		} else {
			$this->load->model('All_model');
			if ($this->All_model->delKategoriBarang($id)) {
				$this->session->set_flashdata('sukses', 'Kategori Berhasil Dihapus');
				redirect('inventaris/');
			} else {
				$this->session->set_flashdata('gagal', 'Kategori Gagal Dihapus');
				redirect('inventaris/');
			}
		}
	}

	// public function tambah_kepengurusan()
	// {
	// 	if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
	// 		redirect('login', 'refresh');
	// 	} else {
	// 		$id = $_SESSION['user_id'];
	// 		$this->data['group'] = $this->ion_auth_model->getGroup($id);
	// 		$this->data['title'] = "SI Inventaris - Tambah Kepengurusan";
	// 		$this->load->model('All_model');
	// 		$this->load->view('admin/master/header', $this->data);
	// 		$this->load->view('admin/page/inventaris/edit_kepengurusan', $this->data);
	// 		$this->load->view('admin/master/footer', $this->data);

	// 		if ($this->input->post('submit') === '') {
	// 			$data = [
	// 				// 'idKepengurusan' => '',
	// 				'namaKepengurusan' => $this->input->post('nama_kepengurusan', true),
	// 				'deskripsi' => $this->input->post('desk', true)
	// 			];
	// 			if ($this->All_model->addDataKepengurusan($data)) {
	// 				$this->session->set_flashdata('sukses', 'Diubah');
	// 				redirect('inventaris');
	// 			} else {
	// 				$this->session->set_flashdata('gagal', 'Gagal ditambah');
	// 				redirect('inventaris/tambah_kepengurusan');
	// 			}
	// 		}
	// 	}
	// }
	// public function edit_kepengurusan()
	// {
	// 	if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(inv)) {
	// 		redirect('login', 'refresh');
	// 	} else {
	// 		$id = $_SESSION['user_id'];
	// 		$this->data['group'] = $this->ion_auth_model->getGroup($id);
	// 		$this->data['title'] = "SI Inventaris - Edit Kepengurusan";
	// 		$this->load->model('All_model');
	// 		$this->load->view('admin/master/header', $this->data);
	// 		$this->load->view('admin/page/inventaris/edit_kepengurusan', $this->data);
	// 		$this->load->view('admin/master/footer', $this->data);
	// 	}
	// }

	// User Sintax
	public function home()
	{
		// $this->load->library('pagination');

		// $config['base_url'] = base_url() . '/inventaris/home';
		// $config['total_rows'] = count($this->All_model->allDataBarang());
		// $config['per_page'] = 3;

		// $this->pagination->initialize($config);

		$this->data['title'] = "SI Inventaris - Home";
		$this->data['search'] = false;
		$this->load->model('All_model');
		// var_dump(self::$indicator);
		$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
		$this->data['banyakBarang'] = $this->All_model->countDataBarang();
		$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
		$this->data['barang'] = $this->All_model->allDataBarang();
		$this->data['kategori'] = $this->All_model->allKategoriBarang();
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('guest/inventaris/master/header', $this->data);
			$this->load->view('guest/inventaris/page/index', $this->data);
			$this->load->view('guest/inventaris/master/footer', $this->data);
		} else {

			// Login Phase
			if ($this->input->post('submit') === '') {
				$data = [
					'email' => $this->input->post('email', true),
					'password' => $this->input->post('password', true),
				];
				$email = $this->All_model->searchUser($data['email']);
				if ($email) {
					if (password_verify($data['password'], $email[0]['password'])) {
						$_SESSION['Inv_Login'] = true;
						$_SESSION['Inv_card'] = $email;
						redirect('inventaris/home');
					} else {
						$this->session->set_flashdata('gagal', 'Akun atau password salah!');
						redirect('inventaris/home');
					}
				} else {
					$this->session->set_flashdata('gagal', 'Akun atau password salah!');
					redirect('inventaris/home');
				}
			}
		}
		unset($_SESSION['sukses']);
		unset($_SESSION['gagal']);
	}

	public function invlogout()
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$this->data['search'] = false;
			$this->load->model('All_model');
			if ($this->All_model->logoutInv()) {
				redirect('inventaris/home');
			}
		}
	}

	public function pinjam()
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$this->data['title'] = "SI Inventaris - Pilih Barang";
			$this->data['search'] = false;
			$this->load->model('All_model');
			$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
			$this->data['banyakBarang'] = $this->All_model->countDataBarang();
			$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
			$this->data['barang'] = $this->All_model->allDataBarang();
			$this->data['kategori'] = $this->All_model->allKategoriBarang();

			if ($this->input->post('submit') === '' && $this->input->post('pilih', true) == null) {
				$this->session->set_flashdata('gagal', 'Anda Harus Memilih Setidaknya Satu Barang');
			}
			// $this->form_validation->set_rules('pilih', 'Anda Harus Memilih Barang', 'required');
			// if ($this->form_validation->run() == false) {
			$this->load->view('guest/inventaris/master/header', $this->data);
			$this->load->view('guest/inventaris/page/pinjam', $this->data);
			$this->load->view('guest/inventaris/master/footer', $this->data);
			// } else {

			if ($this->input->post('submit') === '' && $this->input->post('pilih', true) != null) {
				$_SESSION['pilihan'] = $this->input->post('pilih', true);
				$_SESSION['banyakPilihan'] = count($_SESSION['pilihan']);
				redirect('inventaris/dataLengkapPinjam');
			}
		}

		// }
	}

	public function dataLengkapPinjam()
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$this->data['title'] = "SI Inventaris - Melengkapi Data Pinjaman";
			$this->data['search'] = false;
			$this->load->model('All_model');
			$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
			$this->data['banyakBarang'] = $this->All_model->countDataBarang();
			$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
			$this->data['barang'] = $this->All_model->allDataBarang();
			$this->data['kategori'] = $this->All_model->allKategoriBarang();
			foreach ($_SESSION['pilihan'] as $pilih) {
				$barang[] = $this->All_model->lookDataBarang($pilih);
			}

			$this->data['lookBarang'] = $barang;
			$this->load->view('guest/inventaris/master/header', $this->data);
			$this->load->view('guest/inventaris/page/lengkapiData', $this->data);
			$this->load->view('guest/inventaris/master/footer', $this->data);
			if ($this->input->post('submit') === '') {
				$satu = $this->input->post('banyak', true);
				$total = 0;
				foreach ($satu as $a) {
					$total += $a;
				}
				$data = [
					// tabel toMany
					'allKode' => $this->input->post('kodeBarang', true),
					'allBarang' => $this->input->post('banyak', true),

					// tabel peminjaman
					'idUser' => $_SESSION['Inv_card'][0]['idUser'],
					'tglPinjam' => date('Y-m-d'),
					'lamaPinjam' => $this->input->post('lamaPinjam', true),
					'jumlahTotal' => $total,
					'deskripsiPinjam' => $this->input->post('deskripsiPinjam', true),
					'berapaJenis' => $_SESSION['banyakPilihan']
				];
				if ($this->All_model->pinjam($data)) {
					redirect('inventaris/home');
				} else {
					$this->session->set_flashdata('gagal', 'Terjadi kesalahan saat input data!');
					redirect('inventaris/dataLengkapPinjam');
				}
			}
		}
	}

	public function dataLengkapPinjamEdit($id)
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$this->data['title'] = "SI Inventaris - Melengkapi Data Pinjaman";
			$this->data['search'] = false;
			$this->load->model('All_model');
			$this->data['banyakKategori'] = $this->All_model->countKategoriBarang();
			$this->data['banyakBarang'] = $this->All_model->countDataBarang();
			$this->data['banyakDipinjam'] = $this->All_model->countDataBarangDipinjam();
			$this->data['barang'] = $this->All_model->allDataBarang();
			$this->data['kategori'] = $this->All_model->allKategoriBarang();

			$barang = $this->All_model->allDataEditPesanan($id, $_SESSION['Inv_card'][0]['idUser']);

			$this->data['lookBarang'] = $barang;
			$this->load->view('guest/inventaris/master/header', $this->data);
			$this->load->view('guest/inventaris/page/editData', $this->data);
			$this->load->view('guest/inventaris/master/footer', $this->data);
			if ($this->input->post('submit') === '') {
				$satu = $this->input->post('banyak', true);
				$total = 0;
				$banyakPilihan = 0;
				foreach ($satu as $a) {
					$banyakPilihan++;
					$total += $a;
				}
				$data = [
					// tabel toMany
					'allIdMany' =>  $this->input->post('idMany', true),
					'allKode' => $this->input->post('kodeBarang', true),
					'allBarang' => $this->input->post('banyak', true),

					// tabel peminjaman
					'idPeminjaman' =>  $this->input->post('idPeminjaman', true),
					'idUser' => $_SESSION['Inv_card'][0]['idUser'],
					'tglPinjam' => date('Y-m-d'),
					'lamaPinjam' => $this->input->post('lamaPinjam', true),
					'jumlahTotal' => $total,
					'deskripsiPinjam' => $this->input->post('deskripsiPinjam', true),
					'berapaJenis' => $banyakPilihan
				];
				if ($this->All_model->editPinjam($data)) {
					redirect('inventaris/lihatPermintaan');
				} else {
					$this->session->set_flashdata('gagal', 'Terjadi kesalahan saat input data!');
					redirect('inventaris/dataLengkapPinjam');
				}
			}
		}
	}

	public function registration()
	{
		$this->data['title'] = "SI Inventaris - Registrasi";
		$this->data['search'] = false;
		$this->load->model('All_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
		$this->form_validation->set_rules('organisasi', 'Organisasi', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('noTelp', 'No.Telp', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('guest/inventaris/master/header', $this->data);
			$this->load->view('guest/inventaris/page/register', $this->data);
			$this->load->view('guest/inventaris/master/footer', $this->data);
		} else {
			if ($this->input->post('submit') === '') {
				if ($this->All_model->searchUser($this->input->post('email', true))) {
					$this->session->set_flashdata('gagal', 'Data ini sudah terdaftar');
					redirect('inventaris/registration');
				} else {
					$cekEmail = explode('@', $this->input->post('email', true));
					if ($cekEmail[1] == 'undiksha.ac.id') {
						$pass1 = $this->input->post('password', true);
						$pass2 = $this->input->post('password2', true);
						if ($pass1 === $pass2) {
							$truePass = $pass1;
							$passEn = password_hash($truePass, PASSWORD_DEFAULT);
							$data = [
								'nama' => $this->input->post('nama', true),
								'nim' => $this->input->post('nim', true),
								'email' => $this->input->post('email', true),
								'password' => $passEn,
								'alamat' => $this->input->post('alamat', true),
								'organisasi' => $this->input->post('organisasi', true),
								'noTelp' => $this->input->post('noTelp', true),
							];
							if ($this->All_model->reg($data)) {
								$this->session->set_flashdata('sukses', 'Akun Berhasil Ditambah');
								redirect('inventaris/home');
							} else {
								$this->session->set_flashdata('gagal', 'Akun Gagal Ditambah');
								redirect('inventaris/registration');
							}
						} else {
							$this->session->set_flashdata('gagal', 'Kesalahan saat konfirmasi password, pastikan konfirmasi password dilakukan dengan benar...');
							redirect('inventaris/registration');
						}
					} else {
						$this->session->set_flashdata('gagal', 'Akun Anda Harus Menggunakan Email Undiksha!!!');
						redirect('inventaris/registration');
					}
				}
			}
		}
	}

	public function lihatPermintaan()
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$user = $_SESSION['Inv_card'][0]['idUser'];
			$this->data['title'] = "SI Inventaris - Lihat Permintaan";
			$this->data['search'] = false;
			$this->load->model('All_model');
			$this->load->library('form_validation');
			$this->data['peminjam'] = $this->All_model->dataPinjaman($user);
			$this->data['peminjam2'] = $this->All_model->dataPinjamanConfirm($user);
			$this->data['peminjam3'] = $this->All_model->dataPinjamanConfirmKembali($user);

			$this->load->view('guest/inventaris/master/header', $this->data);
			$this->load->view('guest/inventaris/page/lihatPinjaman', $this->data);
			$this->load->view('guest/inventaris/master/footer', $this->data);
		}
	}

	public function serahkan($id)
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$this->load->model('All_model');
			$this->All_model->kembalikan($id);
			redirect('inventaris/lihatPermintaan');
		}
	}

	public function hapus($id)
	{
		if (!$_SESSION['Inv_Login']) {
			redirect('inventaris/home');
		} else {
			$this->load->model('All_model');
			$this->All_model->hapus($id);
			redirect('inventaris/lihatPermintaan');
		}
	}
}
