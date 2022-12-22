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
    public function getKrs()
    {
        $this->db->select('*');
        // $this->db->from('...');

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
