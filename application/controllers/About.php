<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller About
 * 
 * Author		: Ganatech
 *
 * Created		:  01.09.2020
 *
 * Description	:  Controller ini digunakan untuk mengatur halaman About dari Administrator website
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
class About extends CI_Controller
{

	public function index()
	{
		// Cek apakah user tidak login
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			// Send Data Ke Views
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "Admin - Setting Website";
			$this->data['active'] = "9";
			$this->data['flip'] = "false";
			$this->data['ckeditor'] = "false";
			$this->data['landing'] = $this->All_model->getAllLanding();
			// End Send Data
			// Loading Views
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/about/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
			// End Loading Views
		}
	}
}