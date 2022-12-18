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
        $query = $this->db->get()->result();
        return $query;
    }
}
