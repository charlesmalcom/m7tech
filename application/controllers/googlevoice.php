<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class googlevoice extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_googlevoice');						/* CALL MODEL */
			$data['googlevoiceData']=$this->model_googlevoice->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Googlevoice Management';
			$this->template->load('templates/template_admin', 'googlevoice/index', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function sendSMS(){}

	function placePhoneCall(){}

	function cancelPhoneCall{}

	function SMS(){}

	function voicemail(){}

	function voicemailDownload(){}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */