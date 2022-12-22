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
    public function getValidMahasiswaThisSemester()
    {
        $this->db->select('nama_mhs, nim, angkatan, prodi');
        $this->db->from('s6_data_pembayaran');
        $this->db->join('s6_iuran', 's6_data_pembayaran.id_iuran = s6_iuran.id');
        $this->db->where('s6_iuran.status=1');
        $this->db->where('s6_data_pembayaran.`valid`=1');
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
    public function storePembayaran($mhs)
    {
        $this->db->insert('s6_data_pembayaran', $mhs);
    }
}
