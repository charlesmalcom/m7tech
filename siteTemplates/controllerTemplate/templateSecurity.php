<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xxxxx extends CI_Controller {
	
	public function index() {

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_security');						/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();			/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true){
			$data['pageTitle']='Xxxxx';
			$this->template->load('templates/template_xxxx', 'someDir/somePage', $data);

		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);

		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */