<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Controller Inventaris
 * 
 * Author		: Ganatech
 *
 * Created		: -
 *
 * Description	: Masih dalam tahap pengembangan
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
			// $this->load->view('admin/master/header', $this->data);
			// $this->load->view('admin/page/inventaris/index', $this->data);
			// $this->load->view('admin/master/footer', $this->data);
			show_404();
		}
	}
	public function organisasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "SI Inventaris - Detail Organisasi";
			$this->data['active'] = "2";
			$this->data['flip'] = "false";
			// $this->load->view('admin/master/header', $this->data);
			// $this->load->view('admin/page/inventaris/index', $this->data);
			// $this->load->view('admin/master/footer', $this->data);
			show_404();
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
			// $this->load->view('admin/master/header', $this->data);
			// $this->load->view('admin/page/inventaris/peminjaman', $this->data);
			// $this->load->view('admin/master/footer', $this->data);
			show_404();
		}
	}
}