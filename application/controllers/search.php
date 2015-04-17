<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()	{

		//$this->output->cache(60);								/* ENABLE CACHE */

		//$this->load->model('model_xxxx');						/* CALL MODEL */
		//$data['someData']=$this->model_xxxx->someFunc();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_options');
		$data['optCategories']=$this->model_options->getCategories();

		$data['pageTitle']='Search';
		$this->template->load('templates/template_admin', 'forms/search/search',$data);	/* CALL VIEW TO SEE PAGE */
	}

	public function results(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		//$this->load->model('model_xxxx');						/* CALL MODEL */
		//$data['someData']=$this->model_xxxx->someFunc();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Search Results';
		$this->template->load('templates/template_admin', 'search/results',$data);	/* CALL VIEW TO SEE PAGE */

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */