<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_email');						/* CALL MODEL */
			//$data['emailData']=$this->model_email->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Email Management';
			$this->template->load('templates/template_admin', 'email/index', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function single(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_options');						/* CALL MODEL */
			$data['studentEmailData']=$this->model_options->getStudentsEmail();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Send Email';
			$this->template->load('templates/template_admin', 'forms/create/createEmailSingle', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function group(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_email');						/* CALL MODEL */
			//$data['emailGroupData']=$this->model_email->getEmailGroups();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Send Group Email';
			$this->template->load('templates/template_admin', 'forms/create/createEmailGroup', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function any(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_options');						/* CALL MODEL */
			$data['studentEmailData']=$this->model_options->getStudentsEmail();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Send Email';
			$this->template->load('templates/template_admin', 'forms/create/createEmailAny', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function sent(){

	}

	function search(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_email');							/* CALL MODEL */
			//$data['emailData']=$this->model_email->search();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Search Emails';
			$this->template->load('templates/template_admin', 'email/search', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function checkInternal(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_email');						/* CALL MODEL */
			//$data['inboxContents']=$this->model_email->showInboxContents();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Email Management';
			$this->template->load('templates/template_admin', 'email/checkInternal', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function checkExternal(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_email');						/* CALL MODEL */
			//$data['inboxContents']=$this->model_email->showInboxContents();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Email Management';
			$this->template->load('templates/template_admin', 'email/checkExternal', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_email');						/* CALL MODEL */
			//$data['emailData']=$this->model_email->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Email Management';
			$this->template->load('templates/template_admin', 'email/showGmail', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function unread(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_email');						/* CALL MODEL */
			//$data['emailData']=$this->model_email->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Email Management';
			$this->template->load('templates/template_admin', 'email/unreadGmail', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */