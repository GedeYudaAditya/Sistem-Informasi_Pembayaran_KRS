<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Name			: Controller Landing
 * 
 * Author		: Ganatech
 *
 * Created		: 01.09.2020
 *
 * Description	: Controller ini digunakan untuk mengatur seluruh halaman yang ada pada Landing Page.
 *
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    SSO HMJ TI Undiksha
 * @author     Ganatech
 * @link       https://github.com/deyan-ardi/sso-hmj
 * @filesource
 **/
class Landing extends CI_Controller
{
	public function index()
	{
		//all data
		$data['links'] = $this->All_model->getLinks();
		$data['mainLinks'] = $this->All_model->getLinksWhere();

		//title data
		$data['title'] = "SSO Informatics :: Landing Page - User";

		//load views
		$this->load->view('landing/master/header', $data);
		$this->load->view('landing/index', $data);
		$this->load->view('landing/master/footer');
	}
}