<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Krs_Model
 * Author		: MHJTI 2022
 * Created		: 1.11.2022
 * Description	: Berisi seluruh syntax database dari seluruh controller yang ada pada website
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    SSO HMJ TI Undiksha
 * @author     Pengurus HMJ 2022
 * @filesource
 **/

class Krs_Model extends CI_Model
{
    /*
    * Method untuk mengambil data mahasiswa berdasarkan
    * data iuran dan data dosen
    * @params <int> id dari dosen
    */
    public function getValidMahasiswaThisSemester($id_dosen)
    {
        $this->db->select('nama_mhs, nim, angkatan, prodi');
        $this->db->from('s6_data_pembayaran');
        $this->db->join('s6_iuran', 's6_data_pembayaran.id_iuran = s6_iuran.id');
        $this->db->join('users', 's6_data_pembayaran.id_dosen = users.id');
        $this->db->where('s6_iuran.status=1');
        $this->db->where('s6_data_pembayaran.`valid`=1');
        $this->db->where('s6_data_pembayaran.id_dosen=' . $id_dosen);
        $query = $this->db->get()->result();
        return $query;
    }

    public function findMahasiswaNim($nim)
    {
        $this->db->select('*');
        $this->db->from('s6_data_pembayaran');
        $this->db->where('nim', $nim);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function loadDosen()
    {
        $this->db->select('*');
        $this->db->from('users_groups');
        $this->db->join('users', 'users_groups.user_id = users.id');
        $this->db->where('group_id', 9);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function storePembayaran($mhs)
    {
        $this->db->insert('s6_data_pembayaran', $mhs);
    }
    public function findActiveIuran()
    {
        $this->db->select('id');
        $this->db->from('s6_iuran');
        $this->db->where('status', 1);
        $query = $this->db->get()->result_array();
        return $query;
    }

    // Admin site Start - Marsell
    public function insertIuran($data)
    {
        // reset aktivasi iuran lain
        $this->db->where('status = ' . 1)->update('s6_iuran', array('status' => 0));
        // insert iuran baru
        return $this->db->insert('s6_iuran', $data);
    }

    public function getAllIuran()
    {
        $this->db->select('*');
        $this->db->from('s6_iuran');
        $this->db->order_by("id", "desc");
        return $this->db->get();
    }

    public function getIuranWhereId($where)
    {
        return $this->db->where('id=' . $where)->get('s6_iuran')->row_array();
    }

    public function updateAtivasiIuran($idIuran)
    {
        $data = $this->db->get_where('s6_iuran', array("id" => $idIuran))->row_array();

        $this->db->where('id !=' . $idIuran)->update('s6_iuran', array('status' => 0));
        if ($data['status'] == 0) {
            return $this->db->where('id =' . $idIuran)->update('s6_iuran', array('status' => 1));
        } else {
            return $this->db->where('id =' . $idIuran)->update('s6_iuran', array('status' => 0));
        }
    }

    public function getDataBuktiPembayaran($where)
    {
        $this->db->select("*");
        $this->db->from("s6_iuran");
        $this->db->join("s6_data_pembayaran", 's6_iuran.id = s6_data_pembayaran.id_iuran');
        $this->db->where('s6_iuran.id', $where);
        return $this->db->get();
    }

    // filter By status
    public function getBuktiByStatus($where)
    {
        $this->db->select('*');
        $this->db->from('s6_iuran');
        $this->db->join('s6_data_pembayaran', 's6_iuran.id=s6_data_pembayaran.id_iuran');
        $this->db->where("s6_iuran.id", $where[0]);
        $this->db->where("s6_data_pembayaran.valid", $where[1]);
        return $this->db->get();
    }
    // filter

    public function getDataPembayaran($where)
    {
        $this->db->select('*');
        $this->db->from('s6_data_pembayaran');
        $this->db->where('id', $where);
        return $this->db->get();
    }

    public function deleteBukti($where)
    {
        return $this->db->delete('s6_data_pembayaran', array('id' => $where));
    }
    public function terimaBukti($where)
    {
        return $this->db->where('id =' . $where)->update('s6_data_pembayaran', array('valid' => 1));
    }
    // Admin site End - Marsell

}
