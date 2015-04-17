<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class info extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_xxxxx');						/* CALL MODEL */
			$data['xxxxxData']=$this->model_xxxxx->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Xxxxx Management';
			$this->template->load('templates/template_admin', 'xxxxx/index', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function student(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_courses');						/* CALL MODEL */
			//$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Course Information';
			$this->template->load('templates/template_student', 'courses/infoStudent', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */