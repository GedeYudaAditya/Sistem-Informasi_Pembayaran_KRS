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
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Detail Organisasi";
			$this->data['active'] = "2";
			$this->load->model('All_model');
			$this->data['kepengurusan'] = $this->All_model->allDataKepengurusan();
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/kepengurusan', $this->data);
			$this->load->view('admin/master/footer', $this->data);
			// show_404();
		}
	}
	public function barang()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Detail Barang";
			$this->data['active'] = "2";
			$this->data['flip'] = "false";
			$this->load->model('All_model');
			$this->data['barang'] = $this->All_model->allDataBarang();
			$this->data['kategori'] = $this->All_model->allKategoriBarang();
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
			// show_404();
		}
	}
	public function peminjaman()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Peminjaman";
			$this->data['active'] = "2";
			$this->data['flip'] = "false";
			$this->load->model('All_model');
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/peminjaman', $this->data);
			$this->load->view('admin/master/footer', $this->data);
			// show_404();
		}
	}
	public function tambah_inventaris()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Tambah Inventaris";
			$this->load->model('All_model');
			$this->data['kategori'] = $this->All_model->allKategoriBarang();
			$this->data['kepengurusan'] = $this->All_model->allDataKepengurusan();
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/tambah_inventaris', $this->data);
			$this->load->view('admin/master/footer', $this->data);

			if ($this->input->post('submit') === '') {
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
					'gambar' => $this->input->post('foto_barang', true)
				];
				if ($this->All_model->addDataBarang($data)) {
					$this->session->set_flashdata('sukses', 'Diubah');
					redirect('inventaris/barang');
				} else {
					$this->session->set_flashdata('gagal', 'Gagal ditambah');
					redirect('inventaris/tambah_inventaris');
				}
			}
		}
	}
	public function edit_inventaris()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Edit Inventaris";
			$this->load->model('All_model');
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/edit_inventaris', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function tambah_kategori()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Tambah Kategori";
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
					$this->session->set_flashdata('sukses', 'Diubah');
					redirect('inventaris/barang');
				} else {
					$this->session->set_flashdata('gagal', 'Gagal ditambah');
					redirect('inventaris/tambah_kategori');
				}
			}
		}
	}
	public function edit_kategori()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Edit Kategori";
			$this->load->model('All_model');
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/edit_kategori', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function tambah_kepengurusan()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Tambah Kepengurusan";
			$this->load->model('All_model');
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/edit_kepengurusan', $this->data);
			$this->load->view('admin/master/footer', $this->data);

			if ($this->input->post('submit') === '') {
				$data = [
					// 'idKepengurusan' => '',
					'namaKepengurusan' => $this->input->post('nama_kepengurusan', true),
					'deskripsi' => $this->input->post('desk', true)
				];
				if ($this->All_model->addDataKepengurusan($data)) {
					$this->session->set_flashdata('sukses', 'Diubah');
					redirect('inventaris');
				} else {
					$this->session->set_flashdata('gagal', 'Gagal ditambah');
					redirect('inventaris/tambah_kepengurusan');
				}
			}
		}
	}
	public function edit_kepengurusan()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Edit Kepengurusan";
			$this->load->model('All_model');
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/inventaris/edit_kepengurusan', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
}
