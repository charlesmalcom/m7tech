<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xxxx extends CI_Controller {

	public function index() 	{

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_xxxx');						/* CALL MODEL */
		$dbData['results']=$this->model_xxxx->someFunc();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$pageOptions['pageTitle']='';
		$dbData = array();										/* EMPTY DATASET FOR CONSISTENCY */
		$data = array('pageOptions' => $pageOptions, 'dbData' => $dbData);

		//$this->load->view('xxxx/index',$data);
		$this->template->load('templates/templateDefault', 'xxx/index',$data);	/* CALL VIEW TO SEE PAGE */
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */