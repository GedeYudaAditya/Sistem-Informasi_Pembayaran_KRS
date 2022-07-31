<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: All_model
 * 
 * Author		: Ganatech
 *
 * Created		: 01.09.2020
 *
 * Description	: Berisi seluruh syntax database dari seluruh controller yang ada pada website
 *
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    SSO HMJ TI Undiksha
 * @author     Ganatech
 * @link       https://github.com/deyan-ardi/sso-hmj
 * @filesource
 **/

class All_model extends CI_Model
{
	// **************************************************************
	// Start Landing Page
	// **************************************************************
	public function getLinks()
	{
		return $this->db->get('links')->result_array();
	}
	public function getLinksWhere()
	{
		$this->db->select('*');
		$this->db->from('links');
		return $this->db->where('type =', 'main')->get()->result_array();
	}
	public function getAllLanding()
	{
		return $this->db->get('links')->result_array();
	}
	public function insertLanding()
	{
		$query = [
			"title" => htmlspecialchars($this->input->post('title', true)),
			"icon" => htmlspecialchars($this->input->post('icon', true)),
			"href" => htmlspecialchars($this->input->post('links', true)),
			"type" => "content",
		];
		return $this->db->insert('links', $query);
	}
	public function getLanding($id)
	{
		return $this->db->where('id_links=' . $id)->get('links')->result_array();
	}
	public function editLanding($id)
	{
		$query = [
			"title" => htmlspecialchars($this->input->post('title', true)),
			"icon" => htmlspecialchars($this->input->post('icon', true)),
			"href" => htmlspecialchars($this->input->post('links', true)),
			"type" =>	htmlspecialchars($this->input->post('type', true)),
		];
		return $this->db->where("id_links=" . $id)->update('links', $query);
	}
	public function hapusLanding($id)
	{
		return $this->db->delete('links', array('id_links' => $id));
	}
	public function rowMain()
	{
		return $this->db->where('type =' . "'main'")->get('links')->num_rows();
	}
	public function setMain($id)
	{
		$query = [
			"type" => "main",
		];
		return $this->db->where("id_links=" . $id)->update('links', $query);
	}
	public function setOff($id)
	{
		$query = [
			"type" => "content",
		];
		return $this->db->where("id_links=" . $id)->update('links', $query);
	}
	// **************************************************************
	// End Landing Page
	// **************************************************************


	// **************************************************************
	// Start Integer
	// **************************************************************

	public function getActiveKegiatanInteger()
	{
		$this->db->SELECT('s3_integer.*');
		$this->db->FROM('s3_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveBeritaInteger()
	{
		$this->db->SELECT('s3_berita_integer.*');
		$this->db->FROM('s3_berita_integer');
		$this->db->JOIN('s3_integer', 's3_berita_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		$this->db->order_by('create_at', 'DESC');
		return $this->db->get()->result_array();
	}
	public function getOnlyFiveBeritaInteger()
	{
		$this->db->SELECT('s3_berita_integer.*');
		$this->db->FROM('s3_berita_integer');
		$this->db->JOIN('s3_integer', 's3_berita_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		$this->db->where('s3_berita_integer.kategori_berita_integer=' . 2);
		$this->db->order_by('create_at', 'DESC');
		$this->db->limit(5);
		return $this->db->get()->result_array();
	}
	public function getOnlyFivePengumumanInteger()
	{
		$this->db->SELECT('s3_berita_integer.*');
		$this->db->FROM('s3_berita_integer');
		$this->db->JOIN('s3_integer', 's3_berita_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		$this->db->where('s3_berita_integer.kategori_berita_integer=' . 1);
		$this->db->order_by(
			'create_at',
			'DESC'
		);
		$this->db->limit(5);
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveBeritaIntegerWhere($data)
	{
		$this->db->SELECT('s3_berita_integer.*');
		$this->db->FROM('s3_berita_integer');
		$this->db->JOIN('s3_integer', 's3_berita_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		$this->db->WHERE('s3_berita_integer.id_berita_integer=' . $data);
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveKategoriLomba()
	{
		$this->db->SELECT('s3_kategori_lomba_integer.*');
		$this->db->FROM('s3_kategori_lomba_integer');
		$this->db->JOIN('s3_integer', 's3_kategori_lomba_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveKategoridanLomba()
	{
		return $this->db->get('s3_lomba_integer')->result_array();
	}
	public function getOnlyActiveLombaInteger()
	{
		$this->db->SELECT('s3_lomba_integer.*, s3_kategori_lomba_integer.nama_kategori_lomba_integer');
		$this->db->FROM('s3_lomba_integer');
		$this->db->JOIN('s3_kategori_lomba_integer', 's3_lomba_integer.id_kategori_lomba_integer = s3_kategori_lomba_integer.id_kategori_lomba_integer');
		$this->db->JOIN('s3_integer', 's3_kategori_lomba_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveLombaIntegerWhere($data)
	{
		$this->db->SELECT('s3_lomba_integer.*, s3_kategori_lomba_integer.nama_kategori_lomba_integer');
		$this->db->FROM('s3_lomba_integer');
		$this->db->JOIN('s3_kategori_lomba_integer', 's3_lomba_integer.id_kategori_lomba_integer = s3_kategori_lomba_integer.id_kategori_lomba_integer');
		$this->db->JOIN('s3_integer', 's3_kategori_lomba_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		$this->db->WHERE('s3_lomba_integer.id_kategori_lomba_integer = ' . $data);
		return $this->db->get()->result_array();
	}
	public function getSearchLombaInteger($data)
	{
		$this->db->SELECT('s3_lomba_integer.*, s3_kategori_lomba_integer.nama_kategori_lomba_integer');
		$this->db->FROM('s3_lomba_integer');
		$this->db->JOIN('s3_kategori_lomba_integer', 's3_lomba_integer.id_kategori_lomba_integer = s3_kategori_lomba_integer.id_kategori_lomba_integer');
		$this->db->JOIN('s3_integer', 's3_kategori_lomba_integer.id_integer = s3_integer.id_integer');
		$this->db->like('s3_lomba_integer.nama_lomba_integer', $data);
		$this->db->or_like('s3_kategori_lomba_integer.nama_kategori_lomba_integer', $data);
		$this->db->WHERE('s3_integer.status_integer = "1"');
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveSponsor()
	{
		$this->db->SELECT('s3_sponsor_integer.*');
		$this->db->FROM('s3_sponsor_integer');
		$this->db->JOIN('s3_integer', 's3_sponsor_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveHari()
	{
		$this->db->SELECT('s3_hari_integer.*');
		$this->db->FROM('s3_hari_integer');
		$this->db->JOIN('s3_integer', 's3_hari_integer.id_integer = s3_integer.id_integer');
		$this->db->WHERE('s3_integer.status_integer = "1"');
		return $this->db->get()->result_array();
	}
	public function getAllInteger()
	{
		$this->db->SELECT('s3_integer.*');
		$this->db->FROM('s3_integer');
		return $this->db->get()->result_array();
	}
	public function getAllSponsorActive()
	{
		$this->db->SELECT('s3_integer.*');
		$this->db->FROM('s3_integer');
		return $this->db->get()->result_array();
	}
	public function getIntegerSelect()
	{
		return $this->db->where('status_integer=' . "1")->get('s3_integer')->result_array();
	}
	public function getActiveDetailHari()
	{
		$this->db->select('s3_detail_hari_integer.*, s3_hari_integer.nama_hari_integer');
		$this->db->from('s3_detail_hari_integer');
		$this->db->JOIN('s3_hari_integer', 's3_hari_integer.id_hari_integer = s3_detail_hari_integer.id_hari_integer');
		$this->db->JOIN('s3_integer', 's3_hari_integer.id_integer = s3_integer.id_integer');
		$this->db->order_by('s3_detail_hari_integer.waktu_mulai', 'ASC');
		$this->db->WHERE('s3_integer.status_integer= "1"');
		return $this->db->get()->result_array();
	}
	public function getActiveDetailHariWhere($data)
	{
		$this->db->select('s3_detail_hari_integer.*, s3_hari_integer.nama_hari_integer');
		$this->db->from('s3_detail_hari_integer');
		$this->db->JOIN('s3_hari_integer', 's3_hari_integer.id_hari_integer = s3_detail_hari_integer.id_hari_integer');
		$this->db->JOIN('s3_integer', 's3_hari_integer.id_integer = s3_integer.id_integer');
		$this->db->order_by('s3_detail_hari_integer.waktu_mulai', 'ASC');
		$this->db->WHERE('s3_integer.status_integer= "1"');
		$this->db->WHERE('s3_detail_hari_integer.id_hari_integer= ' . $data);
		return $this->db->get()->result_array();
	}
	public function sinkronasiInteger($id)
	{
		$query = [
			"status_integer" => "1",
		];
		return $this->db->where("id_integer=" . $id)->update('s3_integer', $query);
	}
	public function rowIntegerSelect()
	{
		return $this->db->where('status_integer=' . "1")->get('s3_integer')->num_rows();
	}
	public function ubahStatusInteger()
	{
		$query = [
			"status_integer" => "0",
		];
		return $this->db->where("status_integer=" . "1")->update('s3_integer', $query);
	}
	public function tambahDataInteger($foto, $video, $file)
	{
		$query = array(
			'nama_integer' => $this->input->post('nama_integer', true),
			'logo_integer' => $foto,
			'video_integer' => $video,
			'panduan_integer' => $file,
			'tema_integer' => $this->input->post('tema_integer', true),
			'deskripsi_integer' => $this->input->post('deskripsi_integer', false),
			'status_integer' => 0,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s3_integer', $query);
	}
	public function tambahDataBerita($foto_1, $foto_2, $foto_3, $file, $id_aktif_integer)
	{
		$query = array(
			'id_integer' => $id_aktif_integer[0]['id_integer'],
			'nama_berita_integer' => $this->input->post('nama_berita_integer', true),
			'kategori_berita_integer' => $this->input->post('kategori_berita_integer', true),
			'konten_berita_integer' => $this->input->post('konten_berita_integer', false),
			'youtube_berita_integer' => $this->input->post('youtube_berita_integer', false),
			'foto1_berita_integer' => $foto_1,
			'foto2_berita_integer' => $foto_2,
			'foto3_berita_integer' => $foto_3,
			'file_berita_integer' => $file,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),
		);
		return $this->db->insert('s3_berita_integer', $query);
	}
	public function deleteBerita($id)
	{
		$row = $this->db->where('id_berita_integer', $id)->get('s3_berita_integer')->row();
		if ($this->db->delete('s3_berita_integer', array('id_berita_integer' => $id))) {
			unlink('assets/upload/Folder_integer_website/berita/foto/' . $row->foto1_berita_integer);
			unlink('assets/upload/Folder_integer_website/berita/foto/' . $row->foto2_berita_integer);
			unlink('assets/upload/Folder_integer_website/berita/foto/' . $row->foto3_berita_integer);
			unlink('assets/upload/Folder_integer_website/berita/file/' . $row->file_berita_integer);
			return true;
		}
	}

	// Remove Folder Integer
	public function deleteInteger($id)
	{
		$row = $this->db->where('id_integer', $id)->get('s3_integer')->row();
		if ($this->db->delete('s3_integer', array('id_integer' => $id))) {
			unlink('assets/upload/Folder_integer_website/video/' . $row->video_integer);
			unlink('assets/upload/Folder_integer_website/foto/' . $row->logo_integer);
			unlink('assets/upload/Folder_integer_website/panduan/' . $row->panduan_integer);
			return true;
		}
	}
	public function deleteSponsorWhere($id)
	{
		$row = $this->db->where('id_integer', $id)->get('s3_sponsor_integer')->result_array();
		foreach ($row as $data) {
			if (!empty($data['foto_sponsor_integer'])) {
				unlink("assets/upload/Folder_integer_website/sponsor/" . $data['foto_sponsor_integer']);
			}
			// var_dump("SPONSOR_" . $data['foto_sponsor_integer']);
		}
		return true;
	}
	public function deleteBeritaWhere($id)
	{
		$row = $this->db->where('id_integer', $id)->get('s3_berita_integer')->result_array();
		foreach ($row as $data) {
			if (!empty($data['foto1_berita_integer'])) {
				if (!empty($data['file_berita_integer'])) {
					unlink('assets/upload/Folder_integer_website/berita/file/' . $data['file_berita_integer']);
				}
				if (!empty($data['foto2_berita_integer'])) {
					unlink('assets/upload/Folder_integer_website/berita/foto/' . $data['foto2_berita_integer']);
				}
				if (!empty($data['foto3_berita_integer'])) {
					unlink('assets/upload/Folder_integer_website/berita/foto/' . $data['foto3_berita_integer']);
				}
				unlink('assets/upload/Folder_integer_website/berita/foto/' . $data['foto1_berita_integer']);
				// var_dump("BERITA_" . $data['file_berita_integer']);
			}
		}
		return true;
	}
	public function deleteKategoriWhere($id)
	{
		$row = $this->db->where('id_integer', $id)->get('s3_kategori_lomba_integer')->result_array();
		foreach ($row as $data) {
			if (!empty(['icon_kategori_lomba_integer'])) {
				unlink('assets/upload/Folder_integer_website/icon_kategori/' . $data['icon_kategori_lomba_integer']);
			}
			// var_dump("KATEGORI_" . $data['icon_kategori_lomba_integer']);
		}
		return true;
	}
	public function deleteLombaWhere($id)
	{
		$this->db->select("s3_lomba_integer.*");
		$this->db->from("s3_lomba_integer");
		$this->db->join("s3_kategori_lomba_integer", "s3_lomba_integer.id_kategori_lomba_integer=s3_kategori_lomba_integer.id_kategori_lomba_integer");
		$this->db->where("s3_kategori_lomba_integer.id_integer=" . $id);
		$row = $this->db->get()->result_array();
		// $row = $this->db->where('id_integer', $id)->get('s3_kategori_lomba_integer')->result_array();
		foreach ($row as $data) {
			if (!empty($data['icon_lomba_integer'])) {
				unlink('assets/upload/Folder_integer_website/icon_lomba/' . $data['icon_lomba_integer']);
				// var_dump("LOMBA_" . $data['icon_lomba_integer']);
			}
		}
		return true;
	}
	// Selesai Remove Folder Integer
	public function tambahDataSponsor($sponsor, $id_aktif_integer)
	{
		$query = array(
			'id_sponsor_integer' => '',
			'id_integer' => $id_aktif_integer[0]['id_integer'],
			'nama_sponsor_integer' => $this->input->post('nama_sponsor_integer', true),
			'deskripsi_sponsor_integer' => $this->input->post('deskripsi_sponsor_integer', false),
			'foto_sponsor_integer' => $sponsor,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s3_sponsor_integer', $query);
	}
	public function deleteSponsor($id)
	{
		$row = $this->db->where('id_sponsor_integer', $id)->get('s3_sponsor_integer')->row();
		if ($this->db->delete('s3_sponsor_integer', array('id_sponsor_integer' => $id))) {
			unlink('assets/upload/Folder_integer_website/sponsor/' . $row->foto_sponsor_integer);
			return true;
		}
	}
	public function tambahDataHari($id_aktif_integer)
	{
		$query = array(
			'id_integer' => $id_aktif_integer[0]['id_integer'],
			'nama_hari_integer' => $this->input->post('nama_hari_integer', true),
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s3_hari_integer', $query);
	}
	public function cekDataHari($id_integer, $data)
	{
		return $this->db->where('id_integer=' . $id_integer)->where('nama_hari_integer=' . "'$data'")->get('s3_hari_integer')->num_rows();
	}
	public function deleteHari($id)
	{
		$row = $this->db->where('id_hari_integer', $id)->get('s3_hari_integer')->row();
		if ($this->db->delete('s3_hari_integer', array('id_hari_integer' => $id))) {
			return true;
		}
	}
	public function tambahDataDetailHari($a, $b)
	{
		$query = array(
			'id_hari_integer' => $this->input->post('hari_integer', true),
			'nama_detail_hari_integer' => $this->input->post('nama_detail_hari_integer', true),
			'tempat_detail_hari_integer' => $this->input->post('tempat_detail_hari_integer', true),
			'waktu_mulai' => $a,
			'waktu_akhir' => $b,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s3_detail_hari_integer', $query);
	}
	public function deleteDetailHari($id)
	{
		$row = $this->db->where('id_detail_hari_integer', $id)->get('s3_detail_hari_integer')->row();
		if ($this->db->delete('s3_detail_hari_integer', array('id_detail_hari_integer' => $id))) {
			return true;
		}
	}
	public function tambahDataKategoriLombaInteger($icon_kategori, $id_aktif_integer)
	{
		$query = array(
			'id_kategori_lomba_integer' => '',
			'id_integer' => $id_aktif_integer[0]['id_integer'],
			'nama_kategori_lomba_integer' => $this->input->post('nama_kategori_lomba_integer', true),
			'deskripsi_kategori_lomba_integer' => $this->input->post('deskripsi_kategori_lomba_integer', false),
			'icon_kategori_lomba_integer' => $icon_kategori,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s3_kategori_lomba_integer', $query);
	}
	public function deleteKategoriLombaInteger($id)
	{
		$row = $this->db->where('id_kategori_lomba_integer', $id)->get('s3_kategori_lomba_integer')->row();
		if ($this->db->delete('s3_kategori_lomba_integer', array('id_kategori_lomba_integer' => $id))) {
			unlink('assets/upload/Folder_integer_website/icon_kategori/' . $row->icon_kategori_lomba_integer);
			return true;
		}
	}
	public function tambahDataLombaInteger($icon_lomba, $waktu_daftar_mulai, $waktu_daftar_selesai, $waktu_kumpul_mulai, $waktu_kumpul_selesai, $link_pengumpulan)
	{
		$query = array(
			'id_lomba_integer' => '',
			'id_kategori_lomba_integer' => $this->input->post('id_kategori_lomba_integer', true),
			'nama_lomba_integer' => $this->input->post('nama_lomba_integer', true),
			'deskripsi_lomba_integer' => $this->input->post('deskripsi_lomba_integer', false),
			'icon_lomba_integer' => $icon_lomba,
			'waktu_mulai_pendaftaran' => $waktu_daftar_mulai,
			'waktu_akhir_pendaftaran' => $waktu_daftar_selesai,
			'pendaftaran_lomba_integer' => $this->input->post('pendaftaran_lomba_integer', true),
			'pengumpulan_proposal' => $this->input->post('proposal', true),
			'waktu_awal_pengumpulan' => $waktu_kumpul_mulai,
			'waktu_akhir_pengumpulan' => $waktu_kumpul_selesai,
			'pengumpulan_lomba_integer' => $link_pengumpulan,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s3_lomba_integer', $query);
	}
	public function editDataLombaInteger($id_lomba, $icon_lomba, $waktu_daftar_mulai, $waktu_daftar_selesai, $waktu_kumpul_mulai, $waktu_kumpul_selesai, $link_pengumpulan)
	{
		$query = array(
			'id_kategori_lomba_integer' => $this->input->post('id_kategori_lomba_integer', true),
			'nama_lomba_integer' => $this->input->post('nama_lomba_integer', true),
			'deskripsi_lomba_integer' => $this->input->post('deskripsi_lomba_integer', false),
			'icon_lomba_integer' => $icon_lomba,
			'waktu_mulai_pendaftaran' => $waktu_daftar_mulai,
			'waktu_akhir_pendaftaran' => $waktu_daftar_selesai,
			'pendaftaran_lomba_integer' => $this->input->post('pendaftaran_lomba_integer', true),
			'pengumpulan_proposal' => $this->input->post('proposal', true),
			'waktu_awal_pengumpulan' => $waktu_kumpul_mulai,
			'waktu_akhir_pengumpulan' => $waktu_kumpul_selesai,
			'pengumpulan_lomba_integer' => $link_pengumpulan,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->where('id_lomba_integer=' . $id_lomba)->update('s3_lomba_integer', $query);
	}
	public function deleteFotoIconInteger($nama_file)
	{
		unlink('assets/upload/Folder_integer_website/icon_lomba/' . $nama_file);
		return true;
	}
	public function getLombaIntegerWhere($id)
	{
		return $this->db->where('id_lomba_integer =' . $id)->get('s3_lomba_integer')->result_array();
	}
	public function deleteLombaInteger($id)
	{
		$row = $this->db->where('id_lomba_integer', $id)->get('s3_lomba_integer')->row();
		if ($this->db->delete('s3_lomba_integer', array('id_lomba_integer' => $id))) {
			unlink('assets/upload/Folder_integer_website/icon_lomba/' . $row->icon_lomba_integer);
			return true;
		}
	}




	// **************************************************************
	// End Integer
	// **************************************************************


	// **************************************************************
	// Start Website HMJ
	// **************************************************************
	public function insertBidang($data)
	{
		$query = array(
			'id_hmj' => $this->input->post('nama_kepengurusan', true),
			'nama_bidang' => $this->input->post('nama_bidang', true),
			'deskripsi_bidang' => $this->input->post('deskripsi_bidang', false),
			'ketua_foto' => $data['file']['file_name'],
			'ketua_nama' => $this->input->post('nama_koordinator', true),
		);
		return $this->db->insert('s1_detail_hmj', $query);
	}
	public function getAllBidangSelect()
	{
		$this->db->select('s1_detail_hmj.*,s1_hmj.nama_hmj');
		$this->db->from('s1_detail_hmj');
		$this->db->where('s1_hmj.status_pakai=' . "1");
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function rowBidangActive($nama)
	{
		$this->db->select('s1_detail_hmj.*');
		$this->db->from('s1_detail_hmj');
		$this->db->where('s1_hmj.status_pakai=' . "1");
		$this->db->where('s1_detail_hmj.nama_bidang=' . "'$nama'");
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->num_rows();
	}

	public function getBidangSelectWhere($id)
	{
		$this->db->select('s1_detail_hmj.*,s1_hmj.status_pakai,s1_hmj.nama_hmj');
		$this->db->where('s1_hmj.status_pakai=' . "1");
		$this->db->where('s1_detail_hmj.id_detail_hmj=' . $id);
		$this->db->from('s1_detail_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->result_array();
	}

	public function editBidang($id)
	{
		$query = array(
			'id_hmj' => $this->input->post('nama_kepengurusan', true),
			'nama_bidang' => $this->input->post('nama_bidang', true),
			'deskripsi_bidang' => $this->input->post('deskripsi_bidang', false),
			'ketua_foto' => $this->input->post('old_foto', true),
			'ketua_nama' => $this->input->post('nama_koordinator', true),
		);
		return $this->db->where('id_detail_hmj=', $id)->update('s1_detail_hmj', $query);
	}

	public function editBidangFile($data, $id)
	{
		$query = array(
			'id_hmj' => $this->input->post('nama_kepengurusan', true),
			'nama_bidang' => $this->input->post('nama_bidang', true),
			'deskripsi_bidang' => $this->input->post('deskripsi_bidang', false),
			'ketua_foto' => $data['file']['file_name'],
			'ketua_nama' => $this->input->post('nama_koordinator', true),
		);
		return $this->db->where('id_detail_hmj=', $id)->update('s1_detail_hmj', $query);
	}

	public function deleteBidang($id, $nama)
	{
		$row = $this->db->where('id_detail_hmj', $id)->get('s1_detail_hmj')->row();
		if ($this->db->delete('s1_detail_hmj', array('id_detail_hmj' => $id))) {
			unlink('assets/upload/Folder_' . $nama . '/' . $row->ketua_foto);
		}
	}

	public function insertKepengurusan($foto_ketua, $foto_wakil, $foto_vertikal, $foto_landscape)
	{

		$query = [
			"nama_hmj" => $this->input->post('kepengurusan', true),
			"deskripsi_hmj" => $this->input->post('deskripsi_singkat', false),
			"ketua_hmj" => $this->input->post('ketua', true),
			"ketua_foto" => $foto_ketua,
			"wakil_hmj" => $this->input->post('wakil', true),
			"wakil_foto" => $foto_wakil,
			"visi_hmj" => $this->input->post('visi', false),
			"misi_hmj" => $this->input->post('misi', false),
			"landscape_struktur_hmj" => $foto_landscape,
			"vertikal_struktur_hmj" => $foto_vertikal,
			"status_pakai" => "0",
			"create_by" => $this->input->post('create_by', true),
			"create_at" => date("Y-m-d H:i:s"),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->insert('s1_hmj', $query);
	}

	public function getAllKepengurusan()
	{
		return $this->db->order_by('create_at', 'desc')->get('s1_hmj')->result_array();
	}
	public function getKepengurusan($id)
	{
		return $this->db->where('id_hmj=' . $id)->get('s1_hmj')->result_array();
	}

	public function getActiveKepengurusan()
	{
		$this->db->SELECT('s1_hmj.*');
		$this->db->FROM('s1_hmj');
		$this->db->WHERE('s1_hmj.status_pakai = "1"');
		return $this->db->get()->result_array();
	}

	public function deleteFolder($dir)
	{
		$dirname = 'assets/upload/Folder_' . $dir . '/';
		$status = true;
		while ($status) {
			$status = false;
			$dir_handle = null;
			if (is_dir($dirname)) {
				$dir_handle = opendir($dirname);
				if (!$dir_handle) {
					return false;
				} else {
					while ($file = readdir($dir_handle)) {
						if ($file != "." && $file != "..") {
							if (!is_dir($dirname . "/" . $file)) {
								unlink($dirname . "/" . $file);
							} else {
								$status = true;
								$dirname = 'assets/upload/Folder_' . $dir . '/' . $file;
							}
						}
					}
					closedir($dir_handle);
					rmdir($dirname);
				}
			}
		}
		return true;
	}
	public function deleteKepengurusan($id)
	{
		return $this->db->delete('s1_hmj', array('id_hmj' => $id));
	}

	public function ubahStatus()
	{
		$query = [
			"status_pakai" => "0",
		];
		return $this->db->where("status_pakai=" . "1")->update('s1_hmj', $query);
	}
	public function sinkronasi($id)
	{
		$query = [
			"status_pakai" => "1",
		];
		return $this->db->where("id_hmj=" . $id)->update('s1_hmj', $query);
	}
	public function getKepengurusanSelect()
	{
		return $this->db->where('status_pakai=' . "1")->get('s1_hmj')->result_array();
	}
	public function rowKepengurusanSelect()
	{
		return $this->db->where('status_pakai=' . "1")->get('s1_hmj')->num_rows();
	}
	public function rowNamaKepengurusan($data)
	{
		return $this->db->where('nama_hmj=' . "'$data'")->get('s1_hmj')->num_rows();
	}

	public function insertKategoriBerkas()
	{
		$query = [
			"id_hmj" => $this->input->post('id_kepengurusan', true),
			"nama_kegiatan" => $this->input->post('kategori', true),
			"deskripsi_kegiatan" => $this->input->post('deskripsi_kategori', false),
			"create_by" => $this->input->post('create_by', true),
			"create_at" => date("Y-m-d H:i:s"),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->insert('s1_kegiatan_hmj', $query);
	}
	public function cekKategoriBerkas($kategori)
	{
		$this->db->select('s1_kegiatan_hmj.*');
		$this->db->from('s1_kegiatan_hmj');
		$this->db->where('s1_kegiatan_hmj.nama_kegiatan=' . "'$kategori'");
		$this->db->where('s1_hmj.status_pakai = ' . '1');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->num_rows();
	}
	public function editKategoriBerkas($id)
	{
		$query = [
			"nama_kegiatan" => $this->input->post('kategori', true),
			"deskripsi_kegiatan" => $this->input->post('deskripsi_kategori', false),
			"create_by" => $this->input->post('create_by', true),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->where("id_kegiatan_hmj=" . $id)->update('s1_kegiatan_hmj', $query);
	}
	public function getKepengurusanHapus($id)
	{
		$this->db->select('s1_hmj.*');
		$this->db->from('s1_kegiatan_hmj');
		$this->db->where('s1_kegiatan_hmj.id_kegiatan_hmj = ' . $id);
		$this->db->where('s1_hmj.status_pakai = ' . '1');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function getKepengurusanHapusBerkas($id)
	{
		$this->db->select('s1_hmj.*');
		$this->db->from('s1_detail_kegiatan');
		$this->db->where('s1_detail_kegiatan.id_detail_kegiatan = ' . $id);
		$this->db->where('s1_hmj.status_pakai = ' . '1');
		$this->db->join('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function deleteKategoriBerkas($id, $nama)
	{
		// Berelasi dlu
		$row =  $this->db->select('*')->from('s1_detail_kegiatan')->where('s1_detail_kegiatan.id_kegiatan_hmj =' . $id)->join('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj')->get()->result_array();
		if ($this->db->delete('s1_kegiatan_hmj', array('id_kegiatan_hmj' => $id))) {
			foreach ($row as $data) {
				unlink('assets/upload/Folder_' . $nama . '/' . $data['kode_repositori']);
			}
			return true;
		}
	}

	public function getKepengurusanForKategoriBerkas($id)
	{
		$this->db->select('s1_hmj.*');
		$this->db->where('s1_kegiatan_hmj.id_kegiatan_hmj=' . $id);
		$this->db->from('s1_kegiatan_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->result_array();
	}


	public function getOnlyActiveKategoriBerkas()
	{
		$this->db->SELECT('s1_kegiatan_hmj.*');
		$this->db->FROM('s1_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai = "1"');
		return $this->db->get()->result_array();
	}

	public function getActiveKategoriBerkas()
	{
		$this->db->SELECT('s1_kegiatan_hmj.*');
		$this->db->FROM('s1_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->result_array();
	}
	public function getAllBerkas()
	{
		return $this->db->get('s1_detail_kegiatan')->result_array();
	}
	public function getKategoriBerkas($id)
	{
		return $this->db->where('id_kegiatan_hmj=' . $id)->get('s1_kegiatan_hmj')->result_array();
	}
	public function getAllKategoriBerkasFromKepengurusan($id)
	{
		return $this->db->where('id_hmj=' . $id)->order_by('create_at', 'desc')->get('s1_kegiatan_hmj')->result_array();
	}
	public function getAllKategoriBerkas()
	{
		return $this->db->get('s1_kegiatan_hmj')->result_array();
	}

	public function insertBerkas($file_berkas)
	{
		$query = [
			"id_kegiatan_hmj" => $this->input->post('id_kategori_berkas', true),
			"nama_repositori" => $this->input->post('nama_berkas', true),
			"deskripsi_repositori" => $this->input->post('deskripsi_detail', false),
			"kode_repositori" => $file_berkas['file']['file_name'],
			"create_by" => $this->input->post('create_by', true),
			"create_at" => date("Y-m-d H:i:s"),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->insert('s1_detail_kegiatan', $query);
	}
	public function deleteBerkas($id, $nama)
	{
		$row = $this->db->where('id_detail_kegiatan=' . $id)->get('s1_detail_kegiatan')->row();
		if ($this->db->delete('s1_detail_kegiatan', array('id_detail_kegiatan' => $id))) {
			unlink('assets/upload/Folder_' . $nama . '/' . $row->kode_repositori);
			return true;
		}
	}
	public function editBerkasFile($data, $id)
	{
		$query = array(
			'id_kegiatan_hmj' => $this->input->post('id_kategori_berkas', true),
			'nama_repositori' => $this->input->post('nama_berkas', true),
			'kode_repositori' => $data['file']['file_name'],
			'deskripsi_repositori' => $this->input->post('deskripsi_detail', false),
			'create_by' => $this->input->post('create_by', true),
			'update_at' => date("Y-m-d H:i:s")
		);
		return $this->db->where('id_detail_kegiatan=', $id)->update('s1_detail_kegiatan', $query);
	}
	public function editBerkas($id)
	{
		$query = array(
			'id_kegiatan_hmj' => $this->input->post('id_kategori_berkas', true),
			'nama_repositori' => $this->input->post('nama_berkas', true),
			'kode_repositori' => $this->input->post('old_berkas', true),
			'deskripsi_repositori' => $this->input->post('deskripsi_detail', false),
			'create_by' => $this->input->post('create_by', true),
			'update_at' => date("Y-m-d H:i:s")
		);
		return $this->db->where('id_detail_kegiatan=', $id)->update('s1_detail_kegiatan', $query);
	}
	public function getSelectedBerkas($id)
	{
		$this->db->select('s1_detail_kegiatan.*');
		$this->db->from('s1_detail_kegiatan');
		$this->db->where('s1_detail_kegiatan.id_detail_kegiatan=' . $id);
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveKategoriBerkasForBerkas()
	{
		$this->db->SELECT('s1_detail_kegiatan.*, s1_kegiatan_hmj.nama_kegiatan');
		$this->db->FROM('s1_detail_kegiatan');
		$this->db->JOIN('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->result_array();
	}
	public function getActiveBerkas()
	{
		$this->db->SELECT('s1_detail_kegiatan.*,s1_kegiatan_hmj.nama_kegiatan');
		$this->db->FROM('s1_detail_kegiatan');
		$this->db->JOIN('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->result_array();
	}
	public function rowNamaBerkas($data)
	{
		return $this->db->where('nama_repositori=' . "'$data'")->get('s1_detail_kegiatan')->num_rows();
	}
	public function getNamaKepengurusanForBerkas($id)
	{
		$this->db->select('s1_hmj.nama_hmj');
		$this->db->where('s1_detail_hmj.id_detail_hmj=' . $id);
		$this->db->from('s1_detail_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function getNamaKategoriBerkasForBerkas($id)
	{
		$this->db->select('s1_kegiatan_hmj.nama_kegiatan');
		$this->db->where('s1_detail_kegiatan.id_kegiatan_hmj=' . $id);
		$this->db->from('s1_detail_kegiatan');
		$this->db->join('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		return $this->db->get()->result_array();
	}
	public function getAllBerkasFromKategoriBerkas($id)
	{
		return $this->db->where('id_kegiatan_hmj=' . $id)->order_by("create_at", "desc")->get('s1_detail_kegiatan')->result_array();
	}

	public function getInformasiAll()
	{
		return $this->db->order_by('create_at', 'DESC')->get('s1_informasi')->result_array();
	}
	public function tambahDataInformasi($foto_1, $foto_2, $foto_3, $file_doc, $namaKepengurusan)
	{
		$query = array(
			'foto1_informasi' => $foto_1,
			'foto2_informasi' => $foto_2,
			'foto3_informasi' => $foto_3,
			'video_informasi' => $this->input->post('video', false),
			'nama_kepengurusan' => $namaKepengurusan,
			'judul_informasi' => $this->input->post('judul_informasi', true),
			'kategori_informasi' => $this->input->post('kategori', true),
			'konten_informasi' => $this->input->post('konten', false),
			'file_informasi' => $file_doc,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s1_informasi', $query);
	}
	public function deleteInformasi($id)
	{
		$row = $this->db->where('id_informasi', $id)->get('s1_informasi')->row();
		if ($this->db->delete('s1_informasi', array('id_informasi' => $id))) {
			unlink('assets/upload/Folder_informasi/berkas/' . $row->file_informasi);
			unlink('assets/upload/Folder_informasi/foto/' . $row->foto1_informasi);
			unlink('assets/upload/Folder_informasi/foto/' . $row->foto2_informasi);
			unlink('assets/upload/Folder_informasi/foto/' . $row->foto3_informasi);
			return true;
		}
	}
	public function deleteJabatan($id)
	{
		return $this->db->where('id_pilihan=' . $id)->delete('jabatan');
	}
	// **************************************************************
	// End Website HMJ
	// **************************************************************


	// **************************************************************
	// Start EORS
	// **************************************************************
	public function getAllJabatan()
	{
		return $this->db->get('jabatan')->result_array();
	}
	public function getJabatanWhere($id)
	{
		return $this->db->where('id_pilihan=' . $id)->get('jabatan')->result_array();
	}
	public function tambahJabatan()
	{
		$query = array(
			'nama_pilihan' => $this->input->post('nama_jabatan', true),
			'create_at' => date("Y-m-d H:i:s"),

		);
		return $this->db->insert('jabatan', $query);
	}
	public function editJabatan($id)
	{
		$query = array(
			'nama_pilihan' => $this->input->post('nama_jabatan', true),
			'create_at' => date("Y-m-d H:i:s"),

		);
		return $this->db->where('id_pilihan =' . $id)->update('jabatan', $query);
	}
	public function cekNamaKegiatan($data)
	{
		return $this->db->where('nama_kegiatan=' . "'$data'")->get('s4_kegiatan')->num_rows();
	}
	public function insertKegiatanEors($file_berkas, $date_mulai, $date_akhir)
	{
		$query = array(
			'icon_kegiatan' => $file_berkas['icon_kegiatan']['file_name'],
			'nama_kegiatan' => $this->input->post('nama_kegiatan', true),
			'deskripsi' => $this->input->post('deskripsi', false),
			'persyaratan' => $this->input->post('persyaratan', false),
			'link_group' => $this->input->post('link_group', false),
			'tgl_mulai' => $date_mulai,
			'tgl_akhir' => $date_akhir,
			'aktivasi' => 0,
			'target_pendaftar' => $this->input->post('target_pendaftar', true),
			'jumlah_pendaftar' => 0,
			'upload_file' => $this->input->post('file', true),
			'informasi_pribadi' => $this->input->post('data_pribadi', true),
			'informasi_pendidikan' => $this->input->post('data_pendidikan', true),
			'wawancara' => $this->input->post('wawancara', true),
			'penilaian' => 0,
			'hasil_akhir' => 0,
			'pengumuman' => 0,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s4_kegiatan', $query);
	}
	public function getAllKegiatanEors()
	{
		return $this->db->get('s4_kegiatan')->result_array();
	}
	public function getKegiatanEorsWhereNum($id_user)
	{
		return $this->db->where('id_kegiatan=' . $id_user)->get('s4_kegiatan')->num_rows();
	}
	public function getKegiatanEorsWhere($id_user)
	{
		return $this->db->where('id_kegiatan=' . $id_user)->get('s4_kegiatan')->result_array();
	}
	public function getKegiatanEorsWhereChar($kegiatan)
	{
		return $this->db->where('nama_kegiatan=' . "'$kegiatan'")->get('s4_kegiatan')->result_array();
	}
	public function editAktivasi($id_user)
	{
		$query = array(
			'aktivasi' => 1,
			'penilaian' => 0,
			'hasil_akhir' => 0,
			'pengumuman' => 0,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editNonaktivasi($id_user)
	{
		$query = array(
			'aktivasi' => 0,
			'penilaian' => 0,
			'hasil_akhir' => 0,
			'pengumuman' => 0,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editNonaktifPenilaian($id_user)
	{
		$query = array(
			'aktivasi' => 1,
			'penilaian' => 0,
			'hasil_akhir' => 1,
			'pengumuman' => 0,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editAktifPenilaian($id_user)
	{
		$query = array(
			'aktivasi' => 1,
			'penilaian' => 1,
			'hasil_akhir' => 0,
			'pengumuman' => 0,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editAktifPengumuman($id_user)
	{
		$query = array(
			'aktivasi' => 1,
			'penilaian' => 0,
			'hasil_akhir' => 0,
			'pengumuman' => 1,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editNonaktifPengumuman($id_user)
	{
		$query = array(
			'aktivasi' => 0,
			'penilaian' => 0,
			'hasil_akhir' => 0,
			'pengumuman' => 0,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editNonaktifHasil($id_user)
	{
		$query = array(
			'aktivasi' => 1,
			'penilaian' => 0,
			'hasil_akhir' => 0,
			'pengumuman' => 1,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function editAktifHasil($id_user)
	{
		$query = array(
			'aktivasi' => 1,
			'penilaian' => 0,
			'hasil_akhir' => 1,
			'pengumuman' => 0,
		);
		return $this->db->where('id_kegiatan =' . $id_user)->update('s4_kegiatan', $query);
	}
	public function hapusKegiatanEors($id)
	{
		return $this->db->delete('s4_kegiatan', array('id_kegiatan' => $id));
	}
	public function getPilihanWhere($kegiatan, $jabatan)
	{
		return $this->db->where("id_kegiatan=" . $kegiatan)->where("id_jabatan=" . $jabatan)->get('s4_pilihan')->num_rows();
	}
	public function getAllPilihanWhere($kegiatan)
	{
		$this->db->select('s4_pilihan.*,jabatan.nama_pilihan');
		$this->db->from('s4_pilihan');
		$this->db->where('id_kegiatan=' . $kegiatan);
		$this->db->join('jabatan', 'jabatan.id_pilihan = s4_pilihan.id_jabatan');
		return $this->db->get()->result_array();
	}
	public function inputDataPeserta($dokumen, $foto, $id_kegiatan)
	{
		$query = array(
			'id_kegiatan' => $id_kegiatan,
			'nim' => $this->input->post('nim', true),
			'nama_lengkap' => $this->input->post('nama_lengkap', true),
			'angkatan' => $this->input->post('angkatan', true),
			'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
			'agama' => $this->input->post('agama', true),
			'alamat_asal' => $this->input->post('alamat_asal', true),
			'alamat_sekarang' => $this->input->post('alamat_sekarang', true),
			'email' => $this->input->post('email', true),
			'wa' => $this->input->post('wa', true),
			'prodi' => $this->input->post('prodi', true),
			'pilihan_wajib' => $this->input->post('pil_wajib', true),
			'pilihan_opsional' => $this->input->post('pil_ops', true),
			'riwayat_kesehatan' => $this->input->post('riwayat_kesehatan', false),
			'hobi' => $this->input->post('hobi', false),
			'motto' => $this->input->post('motto_hidup', false),
			'ipk' => $this->input->post('ipk', true),
			'sd' => $this->input->post('nama_sd', true),
			'thn_sd' => $this->input->post('tahun_sd', true),
			'smp' => $this->input->post('nama_smp', true),
			'thn_smp' => $this->input->post('tahun_smp', true),
			'sma' => $this->input->post('nama_sma', true),
			'thn_sma' => $this->input->post('tahun_sma', true),
			'file_foto' => $foto,
			'file_dokumen' => $dokumen,
			'ket_wawancara' => 0,
			'diterima_di' => "Belum Ada",
			'ket_lulus' => 0,
			'create_at' => date("Y-m-d H:i:s"),
		);
		return $this->db->insert('s4_informasi_umum', $query);
	}
	public function getAllKegiatanEorsActive()
	{
		return $this->db->where('aktivasi = 1')->get('s4_kegiatan')->result_array();
	}
	public function hapusPendaftarEors($id_kegiatan, $id_user, $folder_name)
	{
		$row = $this->db->where('id_kegiatan', $id_kegiatan)->where('id_informasi', $id_user)->get('s4_informasi_umum')->row();
		if ($this->db->where('id_kegiatan', $id_kegiatan)->delete('s4_informasi_umum', array('id_informasi' => $id_user))) {
			unlink('assets/upload/Folder_' . $folder_name . '/' . $row->file_foto);
			unlink('assets/upload/Folder_' . $folder_name . '/' . $row->file_dokumen);
			return true;
		}
	}
	public function countPesertaEors($id_kegiatan)
	{
		return $this->db->where('id_kegiatan', $id_kegiatan)->get('s4_informasi_umum')->num_rows();
	}
	public function updateJumlahPeserta($jumlah, $id_kegiatan)
	{
		$query = array(
			'jumlah_pendaftar' => $jumlah,
		);
		return $this->db->where('id_kegiatan =' . $id_kegiatan)->update('s4_kegiatan', $query);
	}
	public function getAllPendaftarProdi($prodi, $id_kegiatan)
	{
		return $this->db->where('id_kegiatan =' . $id_kegiatan)->where('prodi =' . "'$prodi'")->get('s4_informasi_umum')->num_rows();
	}
	public function getAllPendaftarTahun($angkatan, $id_kegiatan)
	{
		return $this->db->where('id_kegiatan =' . $id_kegiatan)->where('angkatan =' . "'$angkatan'")->get('s4_informasi_umum')->num_rows();
	}
	public function getAllPendaftarEors($id_kegiatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->order_by('nim', 'ASC')->get('s4_informasi_umum')->result_array();
	}
	public function getAllPendaftarEorsWhere($id_kegiatan, $id_pendaftar)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->where("id_informasi=" . $id_pendaftar)->get('s4_informasi_umum')->result_array();
	}
	public function getAllPendaftarEorsWhereKoor($id_kegiatan, $id_jabatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->where("pilihan_wajib=" . "'$id_jabatan'")->or_where("pilihan_opsional=" . "'$id_jabatan'")->order_by('nim', 'ASC')->get('s4_informasi_umum')->result_array();
	}
	public function cekUserBeforeDetailPendaftar($id_pilihan, $id_pendaftar)
	{
		return $this->db->where("id_informasi=" . $id_pendaftar)->where("pilihan_wajib=" . "'$id_pilihan'")->or_where("pilihan_opsional=" . "'$id_pilihan'")->get('s4_informasi_umum')->num_rows();
	}
	public function cekUserBeforeInputNilai($user, $penilai)
	{
		return $this->db->where("id_informasi=" . $user)->where("create_by=" . "'$penilai'")->get("s4_wawancara")->num_rows();
	}
	public function inputSieEors($id_kegiatan)
	{
		$query = array(
			'id_kegiatan' => $id_kegiatan,
			'id_jabatan' => $this->input->post('nama_sie', true)
		);
		return $this->db->insert('s4_pilihan', $query);
	}
	public function hapusSie($kegiatan, $pilihan)
	{
		return $this->db->where("id_kegiatan=" . $kegiatan)->delete('s4_pilihan', array('id_pilihan' => $pilihan));
	}
	public function cekNimPeserta($nim, $id_kegiatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->where("nim=" . $nim)->get('s4_informasi_umum')->num_rows();
	}
	public function inputNilaiPesertaEors($nilai_akhir, $keterangan)
	{
		$query = array(
			'id_informasi' => $this->input->post('user', true),
			'nilai_1' => $this->input->post('penilaian_1', true),
			'nilai_2' => $this->input->post('penilaian_2', true),
			'nilai_3' => $this->input->post('penilaian_3', true),
			'nilai_4' => $this->input->post('penilaian_4', true),
			'total' => $nilai_akhir,
			'keterangan' => $keterangan,
			'create_by' => $this->input->post('create_by', true),
			'create_at' => date("Y-m-d H:i:s"),

		);
		return $this->db->insert('s4_wawancara', $query);
	}
	public function setWawancara($id_user)
	{
		$query = array(
			'ket_wawancara' => 1,
		);
		return $this->db->where('id_informasi=' . $id_user)->update('s4_informasi_umum', $query);
	}
	public function inputNilaiAkhirEors($id_user)
	{
		$query = array(
			'diterima_di' => $this->input->post('keputusan', true),
			'ket_lulus' => 1.
		);
		return $this->db->where('id_informasi=' . $id_user)->update('s4_informasi_umum', $query);
	}
	public function getNilaiWawancara($id_pendaftar)
	{
		return $this->db->where("id_informasi=" . $id_pendaftar)->get("s4_wawancara")->result_array();
	}
	public function cekKepanitiaanEors($id_jabatan, $id_kegiatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->where("id_jabatan=" . $id_jabatan)->get("s4_pilihan")->num_rows();
	}
	public function getAllPendaftarLulus($id_kegiatan)
	{
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->where('ket_lulus=' . '1')->get('s4_informasi_umum')->result_array();
	}

	// **************************************************************
	// End EORS
	// **************************************************************



	// **************************************************************
	// Start ETIKA
	// **************************************************************
	// Tulis Syntax Models disini
	public function inputKegiatanEtika()
	{

		$query = array(
			'nama_kegiatan' => $this->input->post('nama_kegiatan', true),
			'deskripsi' => $this->input->post('deskripsi_etika', true),
			'waktu_mulai' => $this->input->post('waktu_mulai', true),
			'waktu_selesai' => $this->input->post('waktu_selesai', true),
			'created_date' => date("Y-m-d H:i:s"),
			'created_by' => $this->input->post('create_by', true),
			'mode' => $this->input->post('mode', true),

		);
		return $this->db->insert('s5_kegiatan', $query);
	}

	public function getAllKegiatanEtika()
	{
		return $this->db->get('s5_kegiatan')->result_array();
	}
	public function getAllKegiatanEtikaWhere($id)
	{
		return $this->db->where('id_kegiatan=' . $id)->get('s5_kegiatan')->result_array();
	}
	public function editKegiatanEtika($id)
	{

		$query = array(
			'nama_kegiatan' => $this->input->post('nama_kegiatan', true),
			'deskripsi' => $this->input->post('deskripsi_etika', true),
			'waktu_mulai' => $this->input->post('waktu_mulai', true),
			'waktu_selesai' => $this->input->post('waktu_selesai', true),
			'mode' => $this->input->post('mode', true),
		);
		return $this->db->where('id_kegiatan=', $id)->update('s5_kegiatan', $query);
	}
	public function deleteKegiatanEtikaWhere($id)
	{
		return $this->db->where('id_kegiatan=' . $id)->delete('s5_kegiatan');
	}
	public function getAllKandidat($id)
	{
		return $this->db->where('id_kegiatan=' . $id)->order_by('no_urut', 'ASC')->get('s5_kandidat')->result_array();
	}
	public function inputDataKandidat($foto, $id, $no_undi)
	{
		$query = array(
			'id_kegiatan' => $id,
			'no_urut' => $no_undi,
			'nama_ketua' => $this->input->post('ketua', true),
			'nama_wakil' => $this->input->post('wakil_ketua', true),
			'visi' => $this->input->post('visi_kandidat', false),
			'misi' => $this->input->post('misi_kandidat', false),
			'foto' => $foto['file']['file_name'],
		);
		return $this->db->insert('s5_kandidat', $query);
	}
	public function editDataKandidatFile($foto, $id)
	{
		$query = array(
			'no_urut' => $this->input->post('no_urut', true),
			'nama_ketua' => $this->input->post('ketua', true),
			'nama_wakil' => $this->input->post('wakil_ketua', true),
			'visi' => $this->input->post('visi_kandidat', false),
			'misi' => $this->input->post('misi_kandidat', false),
			'foto' => $foto['file']['file_name'],
		);
		return $this->db->where('id_kandidat=' . $id)->update('s5_kandidat', $query);
	}
	public function editDataKandidat($id)
	{
		$query = array(
			'no_urut' => $this->input->post('no_urut', true),
			'nama_ketua' => $this->input->post('ketua', true),
			'nama_wakil' => $this->input->post('wakil_ketua', true),
			'visi' => $this->input->post('visi_kandidat', false),
			'misi' => $this->input->post('misi_kandidat', false),
		);
		return $this->db->where('id_kandidat=' . $id)->update('s5_kandidat', $query);
	}
	public function cariKandidat($id_kandidat)
	{
		return $this->db->where("id_kandidat=" . $id_kandidat)->get('s5_kandidat')->result_array();
	}
	public function cariKandidatKegiatan($id_kegiatan)
	{
		$this->db->select('max(no_urut) as noUndi');
		$this->db->from('s5_kandidat');
		$this->db->where("id_kegiatan=" . $id_kegiatan);
		return $this->db->get()->result_array();
	}
	public function deleteFileKandidat($nama_file)
	{
		unlink('assets/upload/Folder_etika/' . $nama_file);
		return true;
	}
	public function hapusKandidat($id_kandidat)
	{
		$row = $this->db->where('id_kandidat', $id_kandidat)->get('s5_kandidat')->row();
		if ($this->db->where('id_kandidat', $id_kandidat)->delete('s5_kandidat')) {
			unlink('assets/upload/Folder_etika/' . $row->foto);
			return true;
		}
	}
	public function hapusKandidatAll($id_kegiatan)
	{
		$row = $this->db->where('id_kegiatan', $id_kegiatan)->get('s5_kandidat')->result_array();
		foreach ($row as $data) {
			unlink('assets/upload/Folder_etika/' . $data['foto']);
		}
		return true;
	}
	public function getAllPemilih($id_kegiatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->order_by('nim', 'ASC')->get('s5_pemilih')->result_array();
	}
	public function rowAllPemilih($id_kegiatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->order_by('nim', 'ASC')->get('s5_pemilih')->num_rows();
	}
	public function inputPemilihExcel($data, $id_kegiatan)
	{
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->insert_batch('s5_pemilih', $data);
	}
	public function resetAllPemilih($id_kegiatan)
	{
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->delete('s5_pemilih');
	}
	public function cekDataPemilih($nama, $nim, $email, $id_kegiatan)
	{
		return $this->db->where('nama_pemilih=' . "'$nama'")->where('email=' . "'$email'")->where('nim=' . "'$nim'")->where('id_kegiatan=' . $id_kegiatan)->get('s5_pemilih')->num_rows();
	}
	public function inputDataPemilih($id_kegiatan)
	{
		$query = array(
			'id_kegiatan' => $id_kegiatan,
			'nama_pemilih' => $this->input->post('nama_pemilih', true),
			'email' => $this->input->post('email_pemilih', true),
			'nim' => $this->input->post('nim_pemilih', true),
			'username' => $this->input->post('nim_pemilih', true) . '@evote.com',
			'prodi' => $this->input->post('prodi', true),
			'semester'	=> $this->input->post('semester', true),
		);
		return $this->db->insert('s5_pemilih', $query);
	}

	public function	updateDataPemilih($nim_baru, $nama_baru, $email_baru, $id_pemilih)
	{
		$query = array(
			'nama_pemilih' => $nama_baru,
			'email' => $email_baru,
			'nim' => $nim_baru,
			'username' => $nim_baru . '@evote.com',
			'prodi' => $this->input->post('prodi', true),
			'semester'	=> $this->input->post('semester', true),
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function cariPemilih($id_pemilih)
	{
		return $this->db->where('id_pemilih=' . $id_pemilih)->get('s5_pemilih')->result_array();
	}
	public function cekNimPemilihWhere($nim, $id_kegiatan)
	{
		return $this->db->where('nim=' . "'$nim'")->where('id_kegiatan =' . $id_kegiatan)->get('s5_pemilih')->num_rows();
	}
	public function cekNamaPemilihWhere($nama, $id_kegiatan)
	{
		return $this->db->where('nama_pemilih=' . "'$nama'")->where('id_kegiatan =' . $id_kegiatan)->get('s5_pemilih')->num_rows();
	}
	public function cekEmailPemilihWhere($email, $id_kegiatan)
	{
		return $this->db->where('email=' . "'$email'")->where('id_kegiatan =' . $id_kegiatan)->get('s5_pemilih')->num_rows();
	}
	public function hapusPemilih($id_pemilih)
	{
		return $this->db->where('id_pemilih=' . $id_pemilih)->delete('s5_pemilih');
	}
	public function createTokenManual($token, $time, $id_pemilih, $admin)
	{
		$query = array(
			'token' => $token,
			'token_valid_until' => $time,
			'manage_by' => $admin,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function createTokenSemiOtomatis($token, $time, $id_pemilih, $admin, $email)
	{
		$query = array(
			'token' => $token,
			'email' => $email,
			'token_valid_until' => $time,
			'manage_by' => $admin,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function addIpLogin($ip, $id_pemilih, $browser, $sistem_operasi)
	{
		$query = array(
			'ip_address' => $ip,
			'browser' => $browser,
			'perangkat' => $sistem_operasi,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function getDiagramProdi($id_kegiatan, $prodi)
	{
		return $this->db->where('has_voting=' . '1')->where('id_kegiatan=' . $id_kegiatan)->where('prodi=' . "'$prodi'")->get('s5_pemilih')->num_rows();
	}
	public function getDiagramSemester($id_kegiatan, $semester)
	{
		return $this->db->where('has_voting=' . '1')->where('id_kegiatan=' . $id_kegiatan)->where('semester=' . $semester)->get('s5_pemilih')->num_rows();
	}
	public function getDiagramSemesterWhereHighFrom($id_kegiatan, $semester)
	{
		return $this->db->where('has_voting=' . '1')->where('id_kegiatan=' . $id_kegiatan)->where('semester >' . $semester)->get('s5_pemilih')->num_rows();
	}
	public function countKandidat($id_kegiatan)
	{
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->get('s5_kandidat')->num_rows();
	}
	public function getDiagramKandidat($id_kegiatan, $no_undi)
	{
		$this->db->select('s5_pilihan.*, s5_kandidat.*');
		$this->db->from('s5_pilihan');
		$this->db->join('s5_kandidat', 's5_kandidat.id_kandidat = s5_pilihan.id_kandidat');
		$this->db->where('s5_pilihan.id_kegiatan=' . $id_kegiatan);
		$this->db->where('s5_kandidat.no_urut=' . $no_undi);
		return $this->db->get()->num_rows();
	}
	public function requestTokenBaru($token, $id_pemilih)
	{
		$query = array(
			'token' => $token,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function createTokenManualMode($token, $id_pemilih, $admin, $time)
	{
		$query = array(
			'token' => $token,
			'token_valid_until' => $time,
			'manage_by' => $admin,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function updateTokenManual($id_pemilih)
	{
		$query = array(
			'token' => null,
			'token_valid_until' => null,
			'has_voting' => 0,
			'manage_by' => null,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function updateTokenManualMode($id_pemilih)
	{
		$query = array(
			'token' => null,
			'has_voting' => 0,
			'manage_by' => null,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function resetTokenAll($id_kegiatan)
	{
		$query = array(
			'token' => null,
			'token_valid_until' => null,
			'has_voting' => 0,
			'manage_by' => null,
		);
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->update('s5_pemilih', $query);
	}
	public function cariPilihanWhere($id_kegiatan, $id_pemilih)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->where("id_pemilih=" . $id_pemilih)->get("s5_pilihan")->num_rows();
	}
	public function resetPemilihanWhere($id_kegiatan, $id_pemilih)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->where("id_pemilih=" . $id_pemilih)->delete("s5_pilihan");
	}
	public function resetPemilihanAll($id_kegiatan)
	{
		return $this->db->where("id_kegiatan=" . $id_kegiatan)->delete("s5_pilihan");
	}
	public function loginAttempt($id_pemilih, $login_attempt)
	{
		$query = array(
			'login_attempt' => $login_attempt,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function blockPemilih($id_pemilih, $time)
	{
		$query = array(
			'block_time' => $time,
			'login_attempt' => 0,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update(
			's5_pemilih',
			$query
		);
	}
	public function unblockPemilih($id_pemilih)
	{
		$query = array(
			'block_time' => "0000-00-00 00:00:00",
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function createAllToken($data, $id_kegiatan)
	{
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->update_batch('s5_pemilih', $data, 'id_pemilih');
	}

	public function getUserCekHakPilih($prodi, $nim)
	{
		$this->db->select('s5_pemilih.*,s5_kegiatan.nama_kegiatan');
		$this->db->from('s5_pemilih');
		$this->db->where('s5_pemilih.nim=' . "'$nim'");
		$this->db->where('s5_pemilih.prodi=' . "'$prodi'");
		$this->db->join('s5_kegiatan', 's5_kegiatan.id_kegiatan = s5_pemilih.id_kegiatan');
		return $this->db->get()->result_array();
	}
	public function cekEmailLoginPemilih($email, $id_kegiatan)
	{
		return $this->db->where("username=" . "'$email'")->where("id_kegiatan=" . $id_kegiatan)->get('s5_pemilih')->result_array();
	}
	public function saveVote($id_kandidat, $id_pemilih, $id_kegiatan, $ip_address)
	{
		$query = array(
			'ip_address' => $ip_address,
			'id_pemilih' => $id_pemilih,
			'id_kandidat' => $id_kandidat,
			'id_kegiatan' => $id_kegiatan,
			'created_date' => date('Y-m-d H:i:s'),

		);
		return $this->db->insert(
			's5_pilihan',
			$query
		);
	}
	public function updateVote($id_pemilih)
	{
		$query = array(
			'has_voting' => 1,
		);
		return $this->db->where('id_pemilih=' . $id_pemilih)->update('s5_pemilih', $query);
	}
	public function cariPemilihAktivasi($data, $prodi, $id_kegiatan)
	{
		return $this->db->where('semester=' . "'$data[semester]'")->where('nim=' . "'$data[nim]'")->where('prodi=' . "'$prodi'")->where(
			'nama_pemilih =' .
				"'$data[name]'"
		)->where('id_kegiatan=' . $id_kegiatan)->get('s5_pemilih')->result_array();
	}
	public function countAllSudahMemilih($id_kegiatan)
	{
		return $this->db->where('id_kegiatan=' . $id_kegiatan)->where('has_voting=' . "1")->get('s5_pemilih')->num_rows();
	}
	// **************************************************************
	// End ETIKA
	// **************************************************************




	// **************************************************************
	// Start Halaman Guest Website
	// **************************************************************

	// **************************************************************
	//  WEBSITE HMJ
	// **************************************************************
	public function getTotalPengurus($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('users_groups', 'users_groups.user_id = users.id', 'inner');
		$this->db->where('users_groups.group_id =' . $id);
		return $this->db->get()->num_rows();
	}
	public function getTotalSistem()
	{
		return $this->db->get('links')->num_rows();
	}
	public function getTotalKegiatan()
	{
		$this->db->select('*');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		$this->db->from('s1_kegiatan_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->num_rows();
	}
	public function getTotalBerita()
	{
		$cari = "Karya Tulis";
		return $this->db->where('kategori_informasi=' . "'$cari'")->get('s1_informasi')->num_rows();
	}
	public function getTotalFile()
	{
		$this->db->SELECT('*');
		$this->db->FROM('s1_detail_kegiatan');
		$this->db->JOIN('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->num_rows();
	}
	public function getPengumumanLimit()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Pengumuman"');
		$this->db->order_by('create_at', 'DESC');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}
	public function getRedaksiLimit()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Karya Tulis"');
		$this->db->or_where('kategori_informasi="Berita"');
		$this->db->order_by('create_at', 'DESC');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}
	public function getAllPengumuman()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Pengumuman"');
		$this->db->order_by('create_at', 'DESC');
		return $this->db->get()->result_array();
	}
	public function getAllBerita()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Karya Tulis"');
		$this->db->or_where('kategori_informasi="Berita"');
		$this->db->order_by('create_at', 'DESC');
		return $this->db->get()->result_array();
	}
	public function getDetailBeritaWhere($id)
	{
		return $this->db->where('id_informasi=' . $id)->get('s1_informasi')->result_array();
	}
	public function rowBerita()
	{
		return $this->db->where('kategori_informasi="Berita"')->get('s1_informasi')->num_rows();
	}
	public function rowKaryaTulis()
	{
		return $this->db->where('kategori_informasi="Karya Tulis"')->get('s1_informasi')->num_rows();
	}
	public function getDetailPengumumanWhere($id)
	{
		return $this->db->where('id_informasi=' . $id)->get('s1_informasi')->result_array();
	}
	// **************************************************************
	// End Website HMJ
	// **************************************************************

	// **************************************************************
	// End Halaman Guest Website
	// **************************************************************








	// **************************************************************
	// Start Upload File
	// **************************************************************
	public function uploadFile($nama, $id_file, $tujuan)
	{

		// Variabel
		$folder = 'assets/upload/Folder_' . $tujuan;
		// $folder = 'assets/upload/Folder_' . $hmj . '/' . date('dmY');
		// var_dump($folder);
		if (!file_exists($folder) && !is_dir($folder)) {
			$umask = umask(0);
			mkdir($folder, 0777, true);
			umask($umask);
		}

		if ($id_file == "kepengurusan") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1048';
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($nama == "ketua") {
				if ($this->upload->do_upload('foto_ketua')) {
					$return = array('result' => 'success', 'file_ketua' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_ketua' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "wakil") {
				if ($this->upload->do_upload('foto_wakil')) {
					$return = array('result' => 'success', 'file_wakil' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_wakil' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "vertikal") {
				if ($this->upload->do_upload('foto_vertikal')) {
					$return = array('result' => 'success', 'file_vertikal' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_vertikal' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "landscape") {
				if ($this->upload->do_upload('foto_landscape')) {
					$return = array('result' => 'success', 'file_landscape' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_landscape' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		} else if ($id_file == "berkas") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '10048';
			$config['file_name'] = $nama;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// Load konfigurasi uploadnya    
			if ($this->upload->do_upload('file')) {
				// Lakukan upload dan Cek jika proses upload berhasil      
				// Jika berhasil :      
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :      
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		} else if ($id_file == "bidang") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1045';
			$config['file_name'] = $nama;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// Load konfigurasi uploadnya    
			if ($this->upload->do_upload('file')) {
				// Lakukan upload dan Cek jika proses upload berhasil      
				// Jika berhasil :      
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :      
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		} else if ($id_file == "informasi") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1048';
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($nama == "foto_1") {
				if ($this->upload->do_upload('foto_1')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_1' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_1' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_2") {
				if ($this->upload->do_upload('foto_2')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_2' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_2' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_3") {
				if ($this->upload->do_upload('foto_3')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_3' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_3' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		} else if ($id_file == "eors") {
			if ($nama == "kegiatan") {
				$config['upload_path'] = $folder;
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']  = '1045';
			} else if ($nama == "foto") {
				$config['upload_path'] = $folder;
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']  = '1045';
			} else {
				$config['upload_path'] = $folder;
				$config['allowed_types'] = 'pdf|zip';
				// Batas ukuran untuk file yang bisa diupload pada EORS adalah 15 MB
				$config['max_size']  = '15045';
			}
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// Load konfigurasi uploadnya    
			if ($nama == "kegiatan") {
				if ($this->upload->do_upload('icon_kegiatan')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'icon_kegiatan' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'icon_kegiatan' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
			if ($nama == "foto") {
				if ($this->upload->do_upload('file_foto')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'file_foto' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_foto' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
			if ($nama == "dokumen") {
				if ($this->upload->do_upload('file_dokumen')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'file_dokumen' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_dokumen' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		} else if ($id_file == "etika") {
			if ($nama == "kandidat") {
				$config['upload_path'] = $folder;
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']  = '1045';
			} else if ($nama == "excel") {
				$config['upload_path'] = $folder;
				$config['allowed_types'] = 'xlsx';
				$config['max_size']  = '10045';
			}
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// Load konfigurasi uploadnya    
			if ($nama == "kandidat") {
				if ($this->upload->do_upload('file')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
			if ($nama == "excel") {
				if ($this->upload->do_upload('file')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		} else if ($id_file == "integer") {
			$config['upload_path'] = $folder;
			if ($nama == 'video') {
				$config['allowed_types'] = 'mp4';
				$config['encrypt_name'] = TRUE;
			} else if ($nama == 'foto') {
				$config['allowed_types'] = 'jpg|png';
				$config['encrypt_name'] = TRUE;
			} else if ($nama == 'file_info') {
				$config['allowed_types'] = 'pdf|zip';
				$config['file_name'] = date('YmdHis') . "_Panduan Kegiatan Integer";
				$config['max_size']  = '15048';
			} else {
				$config['allowed_types'] = 'jpg|png|pdf';
				$config['encrypt_name'] = TRUE;
			}

			if ($nama == "video" || $nama == "file") {
				$config['max_size']  = '10048';
			} else {
				$config['max_size']  = '1048';
			}

			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($nama == "logo") {
				if ($this->upload->do_upload('logo')) {
					$return = array('result' => 'success', 'logo' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'logo' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "video") {
				if ($this->upload->do_upload('video')) {
					$return = array('result' => 'success', 'video' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'video' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "sponsor") {
				if ($this->upload->do_upload('sponsor')) {
					$return = array('result' => 'success', 'sponsor' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'sponsor' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "icon_kategori") {
				if ($this->upload->do_upload('icon_kategori')) {
					$return = array('result' => 'success', 'icon_kategori' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'icon_kategori' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "icon_lomba") {
				if ($this->upload->do_upload('icon_lomba')) {
					$return = array('result' => 'success', 'icon_lomba' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'icon_lomba' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_1") {
				if ($this->upload->do_upload('foto_1')) {
					$return = array('result' => 'success', 'foto_1' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'foto_1' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_2") {
				if ($this->upload->do_upload('foto_2')) {
					$return = array('result' => 'success', 'foto_2' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'foto_2' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_3") {
				if ($this->upload->do_upload('foto_3')) {
					$return = array('result' => 'success', 'foto_3' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'foto_3' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "file") {
				if ($this->upload->do_upload('file')) {
					$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "file_info") {
				if ($this->upload->do_upload('file_info')) {
					$return = array('result' => 'success', 'file_info' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					$return = array('result' => 'failed', 'file_info' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		} else if ($id_file == "inventaris") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1048';
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			// $config['overwrite'] = TRUE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($nama = 'foto_barang') {
				if ($this->upload->do_upload('foto_barang')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_barang' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_barang' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		}
	}
	// **************************************************************
	// End Upload File
	// **************************************************************



	// **************************************************************
	// Start KRS system
	// **************************************************************

	public function getingAll()
	{
		$this->db->select('*');
		$this->db->from('s6_tahun-krs');
		$this->db->join('s6_smtr', 's6_smtr.id-th = s6_tahun-krs.id-th');
		$this->db->join('s6_data-mahasiswa', 's6_data-mahasiswa.nim = s6_smtr.nim');

		return $this->db->get()->result_array();
	}

	public function addThn($data)
	{
		$where = [
			'tahun' => $this->input->post('tahun', true)
		];

		$this->db->select('*');
		$this->db->from('s6_tahun-krs');
		$this->db->where($where);

		if ($this->db->get()->result_array() == null) {
			$this->db->insert('s6_tahun-krs', $data);
			return true;
		} else {
			return false;
		}
	}

	public function delThn($id)
	{
		$this->db->where('id-th', $id);
		$this->db->delete('s6_tahun-krs');
	}

	public function getThn()
	{
		return $this->db->get('s6_tahun-krs')->result_array();
	}

	public function updThn($data, $id)
	{
		$where = [
			'tahun' => $this->input->post('tahun', true)
		];

		$this->db->select('*');
		$this->db->from('s6_tahun-krs');
		$this->db->where($where);
		if ($this->db->get()->result_array() == null) {
			$this->db->where('id-th', $id);
			$this->db->update('s6_tahun-krs', $data);
			return true;
		} else {
			return false;
		}
	}

	public function getoneThn($id)
	{
		$this->db->select('*');
		$this->db->from('s6_tahun-krs');
		$this->db->where('id-th', $id);
		return $this->db->get()->result_array();
	}

	public function addData()
	{
		$data = array(
			'nim' => $this->input->post('nim', true),
			'nama' => $this->input->post('nama', true),
			'prodi' => $this->input->post('prodi', true)
		);

		$this->db->insert('s6_data-mahasiswa', $data);
		return true;
	}

	public function getMahasiswaById($id)
	{
		$this->db->select('*');
		$this->db->from('s6_data-mahasiswa');
		//$this->db->join('s6_data-mahasiswa', 's6_data-mahasiswa.nim = s6_smtr.nim');
		$this->db->where('nim', $id);
		return $this->db->get()->result_array();
	}

	public function updData($id)
	{
		$data = array(
			// 'nim' => $this->input->post('nim', true),
			'nama' => $this->input->post('nama', true),
			'prodi' => $this->input->post('prodi', true)
		);

		$this->db->where('nim', $id);
		if ($this->db->update('s6_data-mahasiswa', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function getDatas()
	{
		return $this->db->get('s6_data-mahasiswa')->result_array();
	}

	public function delData($id)
	{
		$this->db->where('nim', $id);
		$this->db->delete('s6_tahun-krs');
	}

	public function addSmtr()
	{
		$where = [
			'nim' => $this->input->post('nim', true),
			'smtr' => $this->input->post('smtr', true),
			'id-th' => $this->input->post('tahun', true)
		];
		$this->db->select('*');
		$this->db->from('s6_smtr');
		$this->db->where($where);

		if ($this->db->get()->result_array() == null) {
			$data = array(
				'id-smtr' => '',
				'smtr' => $this->input->post('smtr', true),
				'status' => $this->input->post('status', true),
				'nim' => $this->input->post('nim', true),
				'id-th' => $this->input->post('tahun', true)
			);

			$this->db->insert('s6_smtr', $data);
			return true;
		} else {
			return false;
		}
	}

	public function updSmtr($nim, $th, $smt)
	{
		// $where = [
		// 	'nim' => $this->input->post('nim', true),
		// 	'smtr' => $this->input->post('smtr', true),
		// 	'id-th' => $this->input->post('tahun', true)
		// ];
		// $this->db->select('*');
		// $this->db->from('s6_smtr');
		// $this->db->where($where);

		// if ($this->db->get()->result_array()) {
		$data = array(
			'id-smtr' => $this->input->post('id-smtr', true),
			'smtr' => $this->input->post('smtr', true),
			'status' => $this->input->post('status', true),
			// 'nim' => $this->input->post('nim', true),
			'id-th' => $this->input->post('tahun', true)
		);

		$where = [
			'nim' => $nim,
			'smtr' => $smt,
			'id-th' => $th
		];

		$this->db->where($where);
		$this->db->update('s6_smtr', $data);

		return true;
		// } else {
		// 	return false;
		// }
	}

	public function getSmtr($nim, $th, $smt)
	{
		$where = [
			'nim' => $nim,
			'smtr' => $smt,
			'id-th' => $th
		];
		$this->db->select('*');
		$this->db->from('s6_smtr');
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function delSmtr($id)
	{
		$this->db->where('id-smtr', $id);
		$this->db->delete('s6_smtr');
	}

	public function infos()
	{
		$this->db->select('*');
		$this->db->from('s6_info');
		return $this->db->get()->result_array();
	}

	public function defaultInfo($data)
	{
		$this->db->insert('s6_info', $data);
	}

	public function updInfo($id_info)
	{
		$where = [
			'id-info' => 1,
		];
		$this->db->where($where);
		$this->db->update('s6_info', $id_info);
	}

	public function getSmtrWithTahunKRS($nim)
	{
		$this->db->select('*');
		$this->db->from('s6_smtr');
		$this->db->join('s6_tahun-krs', 's6_tahun-krs.id-th = s6_smtr.id-th');
		$this->db->where('nim', $nim);

		return $this->db->get()->result_array();
	}

	public function printCSV()
	{
		$this->db->select('s6_data-mahasiswa.nim, s6_data-mahasiswa.nim, s6_data-mahasiswa.nama, s6_data-mahasiswa.prodi, s6_smtr.smtr, s6_smtr.status, s6_tahun-krs.tahun');
		$this->db->from('s6_data-mahasiswa');
		$this->db->join('s6_smtr', 's6_smtr.nim = s6_data-mahasiswa.nim');
		$this->db->join('s6_tahun-krs', 's6_tahun-krs.id-th = s6_smtr.id-th');

		return $this->db->get()->result_array();
	}

	public function importCSV()
	{
		$datanama  =  $_FILES['data']['name'];
		$datatmp   =  $_FILES['data']['tmp_name'];
		$exe       =  pathinfo($datanama, PATHINFO_EXTENSION);
		$folder    =  'assets/csv/';

		// $this->db->select('*');
		// $this->db->from('s6_tahun-krs');
		// $this->db->join('s6_smtr', 's6_smtr.id-th = s6_tahun-krs.id-th');
		// $this->db->join('s6_data-mahasiswa', 's6_data-mahasiswa.nim = s6_smtr.nim');

		// $isi = $this->db->get()->result_array();
		// var_dump($isi);
		// die;

		if ($exe == 'csv') {
			$upload = move_uploaded_file($datatmp, $folder . $datanama);
			// var_dump($upload);
			if ($upload) {
				$open = fopen($folder . $datanama, 'r');
				$th = $this->db->get('s6_tahun-krs')->result_array();
				$i = 0;
				$long = 0;
				$kebenaran = false;
				foreach ($th as $t) {
					$comt[$i] = $t['id-th'];
					$namet[$i] = $t['tahun'];
					$i++;
					$long++;
				}
				$check = 0;
				while (($row = fgetcsv($open, 1000, ',')) !== FALSE) {

					$this->db->insert('s6_data-mahasiswa', [
						'nim' => $row[0],
						'nama' => $row[1],
						'prodi' => $row[2]
					]);
					$i = 0;
					for ($i; $i < $long; $i++) {
						if ($namet[$i] == $row[5]) {
							$tahun_id = $comt[$i];
							$kebenaran = true;
						} else {
							if ($check != $row[5]) {
								$this->db->insert('s6_tahun-krs', [
									'id-th' => '',
									'tahun' => $row[5],
									'ket' => 'Add from CSV file'
								]);
								$check = $row[5];
							}
						}
						// var_dump($namet[$i]);
					}
					// die;
					if ($kebenaran) {

						$this->db->insert('s6_smtr', [
							'smtr' => $row[3],
							'status' => $row[4],
							'nim' => $row[0],
							'id-th' => $tahun_id
						]);
					} else {

						$this->db->select('*');
						$this->db->from('s6_tahun-krs');
						$this->db->where('tahun', $row[5]);
						$wadah = $this->db->get()->result_array();
						// var_dump($wadah);
						// die;
						$this->db->insert('s6_smtr', [
							'smtr' => $row[3],
							'status' => $row[4],
							'nim' => $row[0],
							'id-th' => $wadah[0]['id-th']
						]);
					}

					// var_dump($row);
					// $this->session->set_flashdata('sukses', 'Ditambahkan');
					// redirect('krs/');
				}
				return true;
			} else {
				// echo "Gagal diupload";
				return false;
				// $this->session->set_flashdata('flash', 'Gagal diupload');
				// redirect('krs/');
			}
		} else {
			return false;
			// $this->session->set_flashdata('flash', 'Bukan File CSV');
			// redirect('krs/');
			// echo "Bukan File CSV";
		}
	}

	// **************************************************************
	// End KRS system
	// **************************************************************

	// **************************************************************
	// Inventaris system
	// **************************************************************

	// Managemen Barang
	public function allDataBarang()
	{
		$this->db->select('*');
		$this->db->from('s7_inv_barang');
		$this->db->join('s7_inv_kategori', 's7_inv_barang.idKategori = s7_inv_kategori.idKategori');
		$this->db->join('s1_hmj', 's7_inv_barang.idKepengurusan = s1_hmj.id_hmj');

		return $this->db->get()->result_array();
	}
	public function allDataBarangWithCategory($category)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_barang');
		$this->db->join('s7_inv_kategori', 's7_inv_barang.idKategori = s7_inv_kategori.idKategori');
		$this->db->join('s1_hmj', 's7_inv_barang.idKepengurusan = s1_hmj.id_hmj');
		$this->db->where('namaKategori', $category);

		return $this->db->get()->result_array();
	}

	public function countDataBarang()
	{
		$this->db->select('banyakBarang');
		$this->db->from('s7_inv_barang');
		return $this->db->get()->result_array();
	}

	public function countDataBarangDipinjam()
	{
		$this->db->select('barangDipinjam');
		$this->db->from('s7_inv_barang');
		return $this->db->get()->result_array();
	}

	public function addDataBarang($data)
	{
		$indikator = $this->db->insert('s7_inv_barang', $data);
		if ($indikator) {
			return true;
		} else {
			return false;
		}
	}

	public function lookDataBarang($id)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_barang');
		$this->db->where('kodeBarang', $id);
		return $this->db->get()->result_array();
	}

	public function editDataBarang($data, $id)
	{
		$where = [
			'kodeBarang' => $id,
		];
		$this->db->where($where);
		if ($this->db->update('s7_inv_barang', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteFotoBarang($id)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_barang');
		$this->db->where('kodeBarang', $id);
		$nama_file = $this->db->get()->result_array();
		var_dump($nama_file[0]['gambar']);
		// die;
		unlink('assets/upload/Folder_inventaris/' . $nama_file[0]['gambar']);
		return true;
	}

	public function delDataBarang($id)
	{
		$this->db->where('kodeBarang', $id);
		if ($this->db->delete('s7_inv_barang')) {
			return true;
		} else {
			return false;
		}
	}

	// Managemen Kategori barang
	public function allKategoriBarang()
	{
		$this->db->select('*');
		$this->db->from('s7_inv_kategori');

		return $this->db->get()->result_array();
	}

	public function addKategoriBarang($data)
	{
		$indikator = $this->db->insert('s7_inv_kategori', $data);
		if ($indikator) {
			return true;
		} else {
			return false;
		}
	}

	public function countKategoriBarang()
	{
		$this->db->select('*');
		$this->db->from('s7_inv_kategori');
		return $this->db->get()->num_rows();
	}

	public function lookKategoriBarang($id)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_kategori');
		$this->db->where('idKategori', $id);
		return $this->db->get()->result_array();
	}

	public function editKategoriBarang($data, $id)
	{
		$where = [
			'idKategori' => $id,
		];
		$this->db->where($where);
		if ($this->db->update('s7_inv_kategori', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function delKategoriBarang($id)
	{
		$this->db->where('idKategori', $id);
		if ($this->db->delete('s7_inv_kategori')) {
			return true;
		} else {
			return false;
		}
	}

	// Managemen Organisasi
	public function allDataKepengurusan()
	{
		$this->db->select('*');
		$this->db->from('s1_hmj');

		return $this->db->get()->result_array();
	}

	public function pinjam($data)
	{
		$counter = 0;
		$tabelPinjam = [
			'idUser' => $_SESSION['Inv_card'][0]['idUser'],
			'tglPinjam' => $data['tglPinjam'],
			'lamaPinjam' => $data['lamaPinjam'],
			'deskripsiPinjam' => $data['deskripsiPinjam'],
			'jumlahTotal' => $data['jumlahTotal'],
			'time' => date('Y-m-d H:i:s.u'),
			'status' => 'Menunggu',
			'sendBack' => '1'
		];

		$indikator = $this->db->insert('s7_inv_peminjaman', $tabelPinjam);

		$this->db->select('idPeminjaman');
		$this->db->from('s7_inv_peminjaman');
		$this->db->where('idUser', $tabelPinjam['idUser']);
		$this->db->where('time', $tabelPinjam['time']);
		$idPeminjaman = $this->db->get()->result_array();
		if ($indikator) {
			for ($i = 0; $i < $data['berapaJenis']; $i++) {
				$tabelToMany = [
					'kodeBarang' => $data['allKode'][$i],
					'idPeminjaman' => $idPeminjaman[0]['idPeminjaman'],
					'banyak' => $data['allBarang'][$i]
				];
				var_dump($tabelToMany);
				$indikator2 = $this->db->insert('s7_inv_tomany', $tabelToMany);
				if ($indikator2) {
					$counter++;
				}
			}
			if ($counter == $data['berapaJenis']) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function editPinjam($data)
	{
		// var_dump($data);
		// die;
		$counter = 0;
		$tabelPinjam = [
			// 'idPeminjaman' => $data['idPeminjaman'],
			'idUser' => $_SESSION['Inv_card'][0]['idUser'],
			'tglPinjam' => $data['tglPinjam'],
			'lamaPinjam' => $data['lamaPinjam'],
			'deskripsiPinjam' => $data['deskripsiPinjam'],
			'jumlahTotal' => $data['jumlahTotal'],
			'time' => date('Y-m-d H:i:s.u'),
			'status' => 'Menunggu',
			'sendBack' => '1'
		];
		$this->db->where('idPeminjaman', $data['idPeminjaman']);
		$indikator = $this->db->update('s7_inv_peminjaman', $tabelPinjam);

		$this->db->select('idPeminjaman');
		$this->db->from('s7_inv_peminjaman');
		$this->db->where('idUser', $tabelPinjam['idUser']);
		$this->db->where('time', $tabelPinjam['time']);
		$idPeminjaman = $this->db->get()->result_array();
		if ($indikator) {
			for ($i = 0; $i < $data['berapaJenis']; $i++) {
				$tabelToMany = [
					'idMany' => $data['allIdMany'][$i],
					'kodeBarang' => $data['allKode'][$i],
					'idPeminjaman' => $idPeminjaman[0]['idPeminjaman'],
					'banyak' => $data['allBarang'][$i]
				];
				var_dump($tabelToMany);
				$this->db->where('idMany', $tabelToMany['idMany']);
				$indikator2 = $this->db->update('s7_inv_tomany', $tabelToMany);
				if ($indikator2) {
					$counter++;
				}
			}
			if ($counter == $data['berapaJenis']) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	// public function addDataKepengurusan($data)
	// {
	// 	$indikator = $this->db->insert('s7_inv_kepengurusan', $data);
	// 	if ($indikator) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function editDataKepengurusan($data)
	// {
	// }

	// public function delDataKepengurusan()
	// {
	// }

	// Account Managemen
	public function searchUser($email)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_user');
		$this->db->where('email', $email);
		return $this->db->get()->result_array();
	}

	public function reg($data)
	{
		$indikator = $this->db->insert('s7_inv_user', $data);
		if ($indikator) {
			return true;
		} else {
			return false;
		}
	}

	public function logoutInv()
	{
		$_SESSION['Inv_Login'] = null;
		$_SESSION['Inv_card'] = null;
		return true;
	}

	// Managemen Peminjaman
	public function sendPilihan($array)
	{
		return $array;
	}

	public function allDataPinjaman()
	{
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		$this->db->where('status', 'Menunggu');
		$this->db->where('statusPinjam', NULL);
		// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
		return $this->db->get()->result_array();
	}
	public function allDataPinjamanStatus($statusPinjam)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		$this->db->where('status', 'Diterima');
		$this->db->where('statusPinjam', $statusPinjam);
		// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
		return $this->db->get()->result_array();
	}
	public function allDataPinjamanTerima()
	{
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		$this->db->where('status', 'Diterima');
		$this->db->or_where('status', 'Ditolak');
		// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
		return $this->db->get()->result_array();
	}

	public function allDataPinjamanKembali()
	{
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		// $this->db->where('status', 'Ditolak');
		// $this->db->or_where('status', 'Diterima');
		$query = "`status` = 'Menunggu' AND (`statusPinjam` = 'Sedang Dipinjam' OR `statusPinjam` = 'Lambat')";
		// $this->db->where('status', 'Menunggu');
		// $this->db->where('statusPinjam', 'Sedang Dipinjam');
		// $this->db->or_where('statusPinjam', 'Lambat');
		$this->db->where($query);
		// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
		return $this->db->get()->result_array();
	}

	public function dataPinjaman($user)
	{
		$query = "(`s7_inv_peminjaman`.`idUser` = '$user' AND `status` = 'Menunggu' AND `statusPinjam` IS NULL) OR (`statusPinjam` = 'Sedang Dipinjam' OR `statusPinjam` = 'Lambat') AND `sendBack` = 1";
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		$this->db->where($query);
		// $this->db->where('s7_inv_peminjaman.idUser', $user);
		// $this->db->where('status', 'Menunggu');
		// $this->db->where('statusPinjam', NULL,);
		// $this->db->or_where('(statusPinjam', 'Sedang Dipinjam');
		// $this->db->or_where('statusPinjam', 'Lambat');
		// $this->db->where('sendBack', 1);
		// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
		return $this->db->get()->result_array();
	}

	public function dataPinjamanConfirmKembali($user)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		$this->db->where('s7_inv_peminjaman.idUser', $user);
		$this->db->where('status', 'Diterima');
		$this->db->where('statusPinjam', 'Dikembalikan');
		// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
		return $this->db->get()->result_array();
	}
	// public function dataPinjamanTerima($user)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('s7_inv_peminjaman');
	// 	$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
	// 	$this->db->where('s7_inv_peminjaman.idUser', $user);
	// 	$this->db->where('status', 'Diterima');
	// 	// $this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang', 'left');
	// 	return $this->db->get()->result_array();
	// }
	public function dataPinjamanConfirm($user)
	{
		$query = "(`statusPinjam` = 'Sedang Dipinjam' OR `statusPinjam` = 'Lambat') AND (`status` = 'Diterima' OR `status` = 'Ditolak') AND `s7_inv_peminjaman`.`idUser` = '$user'";
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->join('s7_inv_user', 's7_inv_user.idUser = s7_inv_peminjaman.idUser');
		$this->db->where($query);
		// $this->db->where('statusPinjam', 'Sedang Dipinjam');
		// $this->db->or_where('statusPinjam asa', 'Lambat');
		// $this->db->where('status', 'Diterima');
		// $this->db->or_where('status', 'Ditolak');
		// // $this->db->or_where('statusPinjam', 'Dikembalikan');
		// $this->db->where('s7_inv_peminjaman.idUser', $user);
		return $this->db->get()->result_array();
	}

	public function allDataDetailPinjam($id)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_tomany');
		$this->db->join('s7_inv_peminjaman', 's7_inv_tomany.idPeminjaman = s7_inv_peminjaman.idPeminjaman');
		$this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang');
		$this->db->join('s7_inv_kategori', 's7_inv_kategori.idKategori = s7_inv_barang.idKategori');
		$this->db->where('status', 'Menunggu');
		$this->db->where('s7_inv_peminjaman.idPeminjaman', $id);
		return $this->db->get()->result_array();
	}

	public function allDataEditPesanan($id, $user)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_tomany');
		$this->db->join('s7_inv_peminjaman', 's7_inv_tomany.idPeminjaman = s7_inv_peminjaman.idPeminjaman');
		$this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang');
		$this->db->join('s7_inv_kategori', 's7_inv_kategori.idKategori = s7_inv_barang.idKategori');
		$this->db->where('s7_inv_peminjaman.idUser', $user);
		$this->db->where('s7_inv_peminjaman.idPeminjaman', $id);
		return $this->db->get()->result_array();
	}

	public function allDataDetailPinjamTerima($id)
	{
		$this->db->select('*');
		$this->db->from('s7_inv_tomany');
		$this->db->join('s7_inv_peminjaman', 's7_inv_tomany.idPeminjaman = s7_inv_peminjaman.idPeminjaman');
		$this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang');
		$this->db->join('s7_inv_kategori', 's7_inv_kategori.idKategori = s7_inv_barang.idKategori');
		$this->db->or_where('status', 'Diterima');
		$this->db->or_where('status', 'Ditolak');
		$this->db->where('s7_inv_peminjaman.idPeminjaman', $id);
		return $this->db->get()->result_array();
	}

	public function ceklambat($id)
	{
		$field = [
			'statusPinjam' => 'Lambat',
		];

		$this->db->where('idPeminjaman', $id);
		if ($this->db->update('s7_inv_peminjaman', $field)) {
			return true;
		} else {
			return false;
		}
	}

	public function terima($id)
	{
		$field = [
			'status' => 'Diterima',
			'statusPinjam' => 'Sedang Dipinjam',
			'sendBack' => '0'
		];

		$counter = 0;

		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->where('idPeminjaman', $id);
		$pinjaman = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('s7_inv_tomany');
		$this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang');
		$this->db->where('idPeminjaman', $id);
		$barangs = $this->db->get()->result_array();
		// foreach ($barangs as $barang) {
		// 	var_dump($barangs);
		// }
		// die;

		$this->db->where('idPeminjaman', $id);
		if ($this->db->update('s7_inv_peminjaman', $field)) {
			foreach ($barangs as $barang) {
				$field2 = [
					'barangDipinjam' => $barang['barangDipinjam'] + $barang['banyak'],
				];
				$this->db->where('kodeBarang', $barang['kodeBarang']);
				if ($this->db->update('s7_inv_barang', $field2)) {
					$counter++;
				}
			}
			if ($counter == $pinjaman[0]['jumlahTotal']) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function tolak($id)
	{
		$field = [
			'status' => 'Ditolak',
			'sendBack' => '0'
		];
		$this->db->where('idPeminjaman', $id);
		if ($this->db->update('s7_inv_peminjaman', $field)) {
			return true;
		} else {
			return false;
		}
	}

	public function terimaKembalikan($id)
	{
		$counter = 0;
		$this->db->select('*');
		$this->db->from('s7_inv_peminjaman');
		$this->db->where('idPeminjaman', $id);
		$pinjaman = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('s7_inv_tomany');
		$this->db->join('s7_inv_barang', 's7_inv_tomany.kodeBarang = s7_inv_barang.kodeBarang');
		$this->db->where('idPeminjaman', $id);
		$barangs = $this->db->get()->result_array();

		$field = [
			'status' => 'Diterima',
			'statusPinjam' => 'Dikembalikan',
			'sendBack' => '0'
		];
		$this->db->where('idPeminjaman', $id);
		if ($this->db->update('s7_inv_peminjaman', $field)) {
			foreach ($barangs as $barang) {
				$field2 = [
					'barangDipinjam' => $barang['barangDipinjam'] - $barang['banyak'],
				];
				$this->db->where('kodeBarang', $barang['kodeBarang']);
				if ($this->db->update('s7_inv_barang', $field2)) {
					$counter++;
				}
			}
			if ($counter == $pinjaman[0]['jumlahTotal']) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function kembalikan($id)
	{
		$field = [
			'status' => 'Menunggu',
			'sendBack' => '1'
		];
		$this->db->where('idPeminjaman', $id);
		if ($this->db->update('s7_inv_peminjaman', $field)) {
			return true;
		} else {
			return false;
		}
	}

	public function hapus($id)
	{
		$this->db->where('idPeminjaman', $id);
		if ($this->db->delete('s7_inv_peminjaman')) {
			return true;
		} else {
			return false;
		}
	}
	public function findDosen($id){
		$this->db->select('id');
		$this->db->from('dosen_tb');
		$this->db->where('user_id',$id);
		return $this->db->get();

	}
	public function gatherData($id){
		$this->db->select('*');
		$this->db->from('mhs_tb');
		$this->db->where('pa_id',$id);
		$this->db->join('bukti', 'bukti.mahasiswa_id= mhs_tb.id');
		$this->db->join('form_bukti','bukti.form_bukti_id = form_bukti.id');
		return $this->db->get();
	}
}
