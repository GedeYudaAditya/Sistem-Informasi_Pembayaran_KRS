<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller Notfound
 * 
 * Author		: Ganatech
 *
 * Created		: 01.09.2020
 *
 * Description	: Controller ini digunakan untuk mengatur seluruh halaman 404 Notfound yang akan muncul ketika akses halaman tidak ditemukan
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
class Notfound extends CI_Controller
{
	public function index()
	{
		$this->load->view('notfound/notfound.php');
	}
}