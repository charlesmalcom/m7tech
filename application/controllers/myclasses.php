<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyClasses extends CI_Controller {

	public function index()
	{
		//$this->output->cache(60);								/* ENABLE CACHE */

		//$this->load->model('model_xxxx');						/* CALL MODEL */
		//$dbData['results']=$this->model_xxxx->someFunc();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$pageOptions['pageTitle']='My Classes';
		$dbData = array();										/* EMPTY DATASET FOR CONSISTENCY */
		$data = array('pageOptions' => $pageOptions, 'dbData' => $dbData);

		$this->template->load('templates/template_admin', 'classes/index', $data);
	}

	function createMyClass(){

		//$this->output->cache(60);									/* ENABLE CACHE */

		$this->load->model('model_security');						/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();			/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true){

			$this->load->model('model_options');
			$data['optionYN']=$this->model_options->getOptionsYN();

			$data['pageTitle']='Create MyClasses';
			$this->template->load('templates/template_admin', 'forms/createMyClass', $data);

		}
		else {
			$pageOptions['pageTitle']='NO ACCESS!!';
			$data = array('pageOptions' => $pageOptions);

			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function showMyClasses(){

		//$this->output->cache(60);									/* ENABLE CACHE */

		$this->load->model('model_security');						/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();			/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true){
			//$this->load->model('model_class');											/* CALL MODEL */
			//$data['classData']=$this->model_class->getMyClasses($this->uri->segment(3));	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Show Projects';
			$this->template->load('templates/template_admin', 'myclasses/showMyClasses', $data);

		}
		else {
			$pageOptions['pageTitle']='NO ACCESS!!';
			$data = array('pageOptions' => $pageOptions);

			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function showMyClassesDetail(){

		//$this->output->cache(60);									/* ENABLE CACHE */

		$this->load->model('model_security');						/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();			/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true){
			$this->load->model('model_class');											/* CALL MODEL */
			$data['classData']=$this->model_class->getMyClassesDetail($this->uri->segment(3));	/* GET DATA FROM MODEL & PASS TO VIEW */
			$data['pageTitle']='Show MyClasses Detail';
			$this->template->load('templates/template_admin', 'myclasses/showMyClassesDetail', $data);

		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */