<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		//$data['newsData']=$this->model_news->getCurrent();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Log In to your account';
		$this->template->load('templates/template_two_column', 'forms/other/login',$data);
	}

	function verify() {

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_login');						/* CALL MODEL */
		$hasAccess = $this->model_login->verify();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($hasAccess == true) {
			// SET COOKIES
			$loginCookie = array(
				'name' => 'login',
				'value' => 'good',
				'expire' => '86500',
				'domain' => '',
				'secure' => false
			);
			$unCookie = array(
				'name' => 'username',
				'value' => $this->input->post('username'),
				'expire' => '86500',
				'domain' => '',
				'secure' => false
			);

			$this->input->set_cookie($loginCookie);
			$this->input->set_cookie($unCookie);

			$this->load->model('model_security');							/* CALL MODEL */
			$homeDirectory = $this->model_security->getHomeDirectory();	/* GET DATA FROM MODEL & PASS TO VIEW */

			//redirect($this->config->item('baseURL').'admin');
			redirect($this->config->item('baseURL').$homeDirectory);

		}

		else {
			$pageOptions['pageTitle']='Credential Verification Error';
			$dbData = array();												/* EMPTY DATASET FOR CONSISTENCY */
			$data = array('pageOptions' => $pageOptions, 'dbData' => $dbData);
			$this->template->load('templates/template_one_column', 'errors/loginError',$data);
        }

	}

	function logout(){
		delete_cookie('login');
		redirect($this->config->item('baseURL'));

	}
}